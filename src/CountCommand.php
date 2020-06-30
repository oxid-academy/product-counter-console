<?php

namespace OxidAcademy\ProductCounterConsole;

use OxidAcademy\ProductCounterService\Counter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CountCommand extends Command
{
    const MESSAGE = 'There are %s active products in the eShop.';
    private Counter $counterService;

    public function __construct(Counter $counterService)
    {
        parent::__construct();

        $this->counterService = $counterService;
    }

    protected function configure()
    {
        $this->setName('oxac:product-counter:count')
             ->setDescription('Counts all active products in the eShop.')
             ->setHelp('This command counts all active products in the eShop and simply outputs it in the console.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf($this::MESSAGE, $this->counterService->count()));
    }
}