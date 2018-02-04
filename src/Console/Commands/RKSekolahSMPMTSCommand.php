<?php namespace Bantenprov\RKSJePenDas\Console\Commands;

use Illuminate\Console\Command;

/**
 * The RKSJePenDasCommand class.
 *
 * @package Bantenprov\RKSJePenDas
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSJePenDasCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:rks-jen-pen-das';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\RKSJePenDas package';

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
        $this->info('Welcome to command for Bantenprov\RKSJePenDas package');
    }
}
