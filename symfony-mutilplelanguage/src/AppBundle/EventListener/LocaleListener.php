<?php

namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Locale Listener
 * Apply global locale from header
 *
 */
class LocaleListener implements EventSubscriberInterface
{
    /**
     * @var string
     */
    private $defaultLocale;

    /**
     * __construct
     *
     * @param string $defaultLocale
     */
    public function __construct($defaultLocale = 'en')
    {
        $this->defaultLocale = $defaultLocale;
    }

    /**
     * onKernelRequest
     *
     * @param  GetResponseEvent $event
     * @return void
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();
        if ($request->cookies->get('default-language') == null) {
            $langs = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
            $lang = substr($langs, 0, 2) ? substr($langs, 0, 2) : $defaultLocale;
            if ($request->get('_locale') == 'en') {

                if (! in_array($lang, ['en', 'vi', 'fr'])) {
                    $lang = 'en';
                }
            } else {
                $lang = $request->get('_locale');
            }
        } else {
            $lang = $request->get('_locale');
        }
        $default = $request->get('_locale') != 'en' ? $request->get('_locale') : $lang;
        $locale = $request->query->get('lang', $default);
        $locale = $locale ? $locale : $this->defaultLocale;
        $request->setLocale($locale);
    }

    /**
     * Get Subscribed Events
     *
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return array(
            // must be registered after the default Locale listener
            KernelEvents::REQUEST => array(array('onKernelRequest', 15)),
        );
    }
}
