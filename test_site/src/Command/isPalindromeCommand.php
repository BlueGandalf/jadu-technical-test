<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'check:is-palindrome')]
class isPalindromeCommand extends AbstractCheckerCommand
{
    protected function configure(): void
    {
        $this->addArgument("test-word", InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $testWord = $input->getArgument("test-word");
        $logger = new ConsoleLogger($output);

        $isPalindromeString = $this->checkerService->isPalindrome($testWord) ? "true" : "false";
        $logger->info("'{$testWord}' isPalindrome:");
        $logger->notice($isPalindromeString);

        return Command::SUCCESS;
    }
}