<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Planning;

class PlanningCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'planning:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $planning = Planning::first();
        if(empty($planning)) {
            $planning = new Planning;
        }

        if($planning->status < 100)
            $planning->status += 20;
        else
            $planning->status = 0;

        $planning->save();

    }
}
