<?php

namespace App\Jobs;

use App\User;
use Berkayk\OneSignal\OneSignalFacade;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class SendNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user =  $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = $this->user;
        OneSignalFacade::sendNotificationToAll("Message Success User: {$user->id}", $url = null, $data = null, $buttons = null, $schedule = null);
        $u = User::find($user->id);
        $u->notify_note_one = true;
        $u->save();
    }
}
