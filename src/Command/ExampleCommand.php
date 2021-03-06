<?php declare(strict_types = 1);

namespace Swag\PluginCommands\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleCommand extends Command
{
    protected function configure(): void
    {
        $this->setName('plugin-commands:example');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Do something...');
    }
}