<?php

namespace App\Http\Controllers;

use App\Jobs\SendNotificationJob;
use Berkayk\OneSignal\OneSignalFacade;

class IndexController extends Controller
{
    public function index()
    {
//        SendNotificationJob::dispatch();
        OneSignalFacade::sendNotificationToAll("Message Success", $url = null, $data = null, $buttons = null, $schedule = null);
    }
}
