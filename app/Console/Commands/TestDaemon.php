<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestDaemon extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-daemon';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $i = 1000;

        for ($idx = 0, $idx < $i; $idx++;) {
            echo 'Número: ' . $idx . ' ' . PHP_EOL;
        }
    }
}
