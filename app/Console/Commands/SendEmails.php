<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user{name}{email}{password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new User';

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
     * @return mixed
     */
    public function handle()
    {
        $user = User::create([
            'name'     => $this->argument('name'),
            'email'    => $this->argument('email'),
            'password' => $this->argument('password'),

        ]);

        $this->info('Added : '. $user->name);
      //  $this->error('Not correct input');
    }
}
