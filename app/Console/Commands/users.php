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
   
      $title=$this->ask("enter user blog title");
   
     $content=$this->ask("enate blog content");
   
    
     if ($this->confirm('Is this information correct?'))
      {
                $blog=new Blog();
                $blog->title=$title;
                $blog->content=$content;
               
                $blog->save();
     }
     if ($this->confirm('Is this information show?')) {

        $headers = [ 'id', 'title', 'content',];
        $blogs = Blog::all( [ 'id', 'title', 'content' ])->toArray();
        $this->table($headers, $blogs);

    }
    return 0;
}
}
