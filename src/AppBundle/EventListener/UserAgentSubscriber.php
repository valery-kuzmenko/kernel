<?php
namespace AppBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class UserAgentSubscriber implements EventSubscriberInterface
{
    public function onKernelRequest(){
        die('ddddddddd');
    }

    public static function getSubscribedEvents()
    {
        return array(
            'kernel.request' => 'onKernelRequest'
        );
    }

}