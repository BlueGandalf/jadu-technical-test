<?php

namespace App\Command;

use App\Service\CheckerService;
use Symfony\Component\Console\Command\Command;

abstract class AbstractCheckerCommand extends Command
{
    /** @var CheckerService */
    protected $checkerService;

    public function __construct(CheckerService $checkerService)
    {
        parent::__construct();

        $this->checkerService = $checkerService;
    }
}