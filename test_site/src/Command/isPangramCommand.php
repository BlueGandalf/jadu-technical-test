<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'check:is-pangram')]
class isPangramCommand extends AbstractCheckerCommand
{
    protected function configure(): void
    {
        $this->addArgument("test-phrase", InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $testPhrase = $input->getArgument("test-phrase");
        $logger = new ConsoleLogger($output);

        $isPangramString = $this->checkerService->isPangram($testPhrase) ? "true" : "false";
        $logger->info("'{$testPhrase}' isPangram:");
        $logger->notice($isPangramString);

        return Command::SUCCESS;
    }
}