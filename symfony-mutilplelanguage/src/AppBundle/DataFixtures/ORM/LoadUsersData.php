<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Doctrine\UserManager;
use FOS\UserBundle\Util\UserManipulator;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Yaml\Yaml;



/**
 * Fixture execute by command: bin/console doctrine:fixtures:load
 */
class LoadUsersData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var UserManager reference
     */
    private $userManager;

    /**
     * @var UserManipulator reference
     */
    private $userManipulator;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em)
    {
        $this->em = $em;
        $this->userManager     = $this->container->get('fos_user.user_manager');
        $this->userManipulator = $this->container->get('fos_user.util.user_manipulator');
        $datasetPath = realpath(dirname(__FILE__));
        $dataset     = Yaml::parse(file_get_contents($datasetPath. '/users.yml'));

        $usersObject = $dataset["users"];
        $this->injectUsers($usersObject);
    }

    private function injectUsers($data)
    {
        //Create & Link Users
        foreach ($data as $userName => $userData) {
            $user = $this->userManager->findUserByUsername($userName);

            $key = 'password';
            $userPassword = isset($userData[$key]) ? $userData[$key] : $key;
            $enabled  = !isset($userData["enabled"]) || $userData["enabled"];
            $email    = isset($userData["email"])? $userData["email"] : "anemail@here.loc";

            if (!$user) {
                $user = $this->userManipulator->create($userName, $userPassword, $email, $enabled, false);
            } else {
                $user->setEnabled($enabled);
                $user->setEmail($email);
                $user->setPlainPassword($userPassword);
            }

            if (isset($userData["roles"])) {
                $user->setRoles($userData["roles"]);
            }

            $this->userManager->updateUser($user);
            $this->em->persist($user);
        }
        $this->em->flush();
    }
}
