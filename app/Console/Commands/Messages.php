<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Messages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mes:mesa';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send message';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo "masuk\n";
    }
}
