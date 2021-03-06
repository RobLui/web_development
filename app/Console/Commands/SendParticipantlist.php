<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendParticipantlist extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:participantlist';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verstuurd lijst met deelnemers naar managers';

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
        return app('App\Http\Controllers\ParticipantController')->SendAutoMail();
    }
}
