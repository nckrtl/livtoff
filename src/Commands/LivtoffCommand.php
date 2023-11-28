<?php

namespace Nckrtl\Livtoff\Commands;

use Illuminate\Console\Command;

class LivtoffCommand extends Command
{
    public $signature = 'livtoff';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
