<?php

namespace App\Http\Controllers;

use App\Jobs\SendNotificationJob;
use App\Note;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    public function index()
    {
        SendNotificationJob::dispatch();
    }
}
