<?php

namespace App\Console\Commands;

use App\Participant;
use App\Question;
use Illuminate\Console\Command;

class PickWinner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pick:winner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kiest automatisch een winnaar voor de periode';

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
        $question = Question::where('active', 1)->first();

        $winner = Participant::where('answerd', $question->answerd)
            ->where('has_permission',true)
            ->orderByRaw("RAND()")
            ->take(1)
            ->get()
        ;
//        $this->info($question);
        $this->info($winner);

    }

}
