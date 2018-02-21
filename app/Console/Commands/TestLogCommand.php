<?php

namespace App\Console\Commands;

use App\Jobs\SendNotificationJob;
use App\Note;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class TestLogCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:onenote';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify new notes of students';

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
        $iteration = 1;
        $users = User::where('notify_note_one', '=', false)->get();
        foreach ($users as $user) {
            $notify = Note::where('user_id', $user->id)
                ->where('nota', '!=', 0.0)
                ->where('periodo', '=', '20181')
                ->where('corte', '=', 1)
                ->first();
            if (!is_null($notify))
            {
                $delaySeconds = $iteration +=5;
                // Jobs
                SendNotificationJob::dispatch($user)
                    ->delay(Carbon::now()->addSeconds($delaySeconds));
            }
        }
    }
}
