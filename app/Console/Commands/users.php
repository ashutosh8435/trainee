<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class users extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'user check the name and adress';

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
       $name=$this->ask("what is your name");
       $this->info($name);
       $lname=$this->ask("what is your last name");
       $this->info($lname);
       $address=$this->ask("what is your address");
       $this->info($address);
    }
}
