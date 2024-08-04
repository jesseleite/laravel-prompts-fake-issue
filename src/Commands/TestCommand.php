<?php

namespace Statamic\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'statamic:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Statamic test command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Test command successful!');
    }
}
