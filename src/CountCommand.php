<?php

namespace OxidAcademy\ProductCounterConsole;

use OxidAcademy\ProductCounterService\Counter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CountCommand extends Command
{
    const MESSAGE = 'There are %s available products in the shop.';
    private Counter $counterService;

    public function __construct(Counter $counterService)
    {
        parent::__construct();

        $this->counterService = $counterService;
    }

    protected function configure()
    {
        $this->setName('oxac:product-counter:count')
             ->setDescription('Counts all available products in the shop.')
             ->setHelp('This command counts all available products in the shop and simply outputs it on the command line.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf($this::MESSAGE, $this->counterService->count()));
    }
}