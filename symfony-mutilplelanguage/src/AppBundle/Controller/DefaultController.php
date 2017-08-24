<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use AppBundle\Entity\Module as Module;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        $repository = $this->getDoctrine()->getRepository(Module::class);
        $modules = $repository->findBy(['enabled' => true]);
        $locale = $request->getLocale();
        // replace this example code with whatever you need
        $response = $this->render(
            'default/index.html.twig', [
            'user_name' =>  $user->getUsername(),
            'modules'   =>  $modules,
            'locale'    => $locale
            ]
        );
        // Set cookie languages in 30 minutes
        $response->headers->setCookie(new Cookie('default-language', $locale, time() + 60*30, '/', null, false, false));
        return $response;
    }

    /**
     * @Route("/module/{name}", name="app_module")
     */
    public function moduleAction(Request $request, Module $module = null)
    {
        // Get User name
        $user = $this->getUser();
        $repository = $this->getDoctrine()->getRepository(Module::class);
        $modules = $repository->findBy(['enabled' => true]);
        if ($module == null) {
            return $this->forward('AppBundle:Default:index', array());
        }
        $locale = $request->getLocale();

        $header = ucfirst($this->get('translator')->trans($module->getLanguageKey()));
        // replace this example code with whatever you need
        return $this->render(
            'default/module.html.twig',
            [
                'user_name' =>  $user->getUsername(),
                'locale'    => $locale,
                'header'    => $header,
                'module'   =>  $module,
                'modules'   =>  $modules
            ]
        );
    }
}
