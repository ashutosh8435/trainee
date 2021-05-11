<?php

namespace App\Console\Commands;
use App\Models\Blog;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
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
    
     $this->info("enter your details");
   
      $name=$this->ask("what is your user blog");
   
     $lastname=$this->ask("what is your email blog");
   
     $address=$this->ask("what is your address");
     if ($this->confirm('Is this information correct?'))
      {
                $blog=new Blog();
                $blog->user_b=$name;
                $blog->email_b=$lastname;
                $blog->blog_name=$address;
                $blog->save();
     }
     if ($this->confirm('Is this information show?')) {

        $headers = [ 'id', 'user_b', 'email_b','blog_name' ];
        $blogs = Blog::all( [ 'id', 'user_b', 'email_b','blog_name' ])->toArray();
        $this->table($headers, $blogs);

    }
    return 0;
}
}
