<?php

namespace Rajentrivedi\ExceptionsX\Commands;

use Illuminate\Console\Command;

class ExceptionsXCommand extends Command
{
    public $signature = 'exceptions-x';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
