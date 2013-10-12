<?php

namespace ClassCentral\SiteBundle\Command\Network;

use Symfony\Component\Console\Output\OutputInterface;
use ClassCentral\SiteBundle\Entity\Offering;
use Symfony\Component\Routing\Router;

abstract class NetworkAbstractInterface
{
    /**
     * @var OutputInterface
     */
    protected $output;

    protected $router;

    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function setRouter(Router $router) {
        $this->router = $router;
    }

    abstract public function outInitiative($initiative, $offeringCount);

    abstract public function beforeOffering();
    abstract public function outOffering(Offering $offering);

}
