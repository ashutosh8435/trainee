<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class user extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'user trainee';

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
        $this->info("user trainee information");
        return 0;
    }
}
