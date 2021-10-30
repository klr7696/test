<?php


namespace App\Events;


use ApiPlatform\Core\EventListener\EventPriorities;
use App\Entity\TestTable;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class TestEvent implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return[KernelEvents::VIEW=>['test', EventPriorities::PRE_WRITE]];
    }
    public function test(ViewEvent $event){

        $result= $event->getControllerResult();
        $method= $event->getRequest()->getMethod();

        if($result instanceof TestTable && $method ==="POST")

        {
            $salut =$result->getEntier();
            $salut1=$result->getReel();
              $result->setEntier((int)$salut);
              $result->setReel((float)$salut1);


        }
    }
}