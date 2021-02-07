<?php

namespace Binomedev\ShowcaseServices\Commands;

use Illuminate\Console\Command;

class ShowcaseServicesCommand extends Command
{
    public $signature = 'showcase-services';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
