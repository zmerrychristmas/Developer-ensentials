<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Module;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Yaml\Yaml;

/**
 * Fixture execute by command: bin/console doctrine:fixtures:load
 */
class LoadModuleData implements FixtureInterface, ContainerAwareInterface
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
        $datasetPath = realpath(dirname(__FILE__));
        $dataset     = Yaml::parse(file_get_contents($datasetPath. '/modules.yml'));

        $mooduleDatas = $dataset["modules"];
        $this->injectMoodules($mooduleDatas);
    }

    private function injectMoodules($data)
    {
        $moduleRepository = $this->em->getRepository(Module::class);
        foreach ($data as $moduleName => $moduleData) {
            $module = $moduleRepository->findOneBy(['name' => $moduleName]);
            if (empty($module)) {
                $module = new Module();
            }
            $module->setName($moduleName);
            $module->setLanguageKey($moduleData['languageKey']);
            $module->setIcon($moduleData['icon']);
            $module->setUrl($moduleData['url']);
            $module->setEnabled($moduleData['enabled']);
            $module->setOpenIn($moduleData['open_in']);
            $this->em->persist($module);
        }
        $this->em->flush();
    }
}
