<?php

namespace Droplister\EduCore\App\Console\Commands;

use Illuminate\Console\Command;

class CoreInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'core:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Job Core';

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
        $this->call('core:refresh');
        $this->call('db:seed', ['--class' => 'Droplister\\EduCore\\Database\\Seeds\\DatabaseSeeder']);
        $this->call('core:publish');
    }
}
