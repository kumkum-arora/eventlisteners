<?php

namespace App\Http\Controllers;

use App\Events\sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class Icontroller extends Controller
{
    public function subscribe()
    {
        // Event::dispatch(new sendmail(1));
        event(new sendmail(1));
        dd('user subscribed');
    }
}
