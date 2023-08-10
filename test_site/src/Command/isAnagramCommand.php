<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'check:is-anagram')]
class isAnagramCommand extends AbstractCheckerCommand
{
    protected function configure(): void
    {
        $this->addArgument("test-word", InputArgument::REQUIRED);
        $this->addArgument("comparison-word", InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $testWord = $input->getArgument("test-word");
        $comparisonWord = $input->getArgument("comparison-word");
        $logger = new ConsoleLogger($output);

        $isAnagramString = $this->checkerService->isAnagram($testWord, $comparisonWord) ? "true" : "false";
        $logger->info("'{$testWord}' and '{$comparisonWord}' isAnagram:");
        $logger->notice($isAnagramString);

        return Command::SUCCESS;
    }
}