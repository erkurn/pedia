<?php

namespace Erkurn\Pedia\Commands;

use Illuminate\Console\Command;

class PediaCommand extends Command
{
    public $signature = 'pedia';

    public $description = 'Pedia Command Initialize';

    public function handle()
    {
        $this->comment('All done');
    }
}
