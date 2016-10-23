<?php
namespace SDD\UtilsBundle;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class CORSHeaderListener
{
    public function onKernelResponse(FilterResponseEvent $event)
    {
        $event->getResponse()->headers->set('Access-Control-Allow-Origin', '*');
    }
}

