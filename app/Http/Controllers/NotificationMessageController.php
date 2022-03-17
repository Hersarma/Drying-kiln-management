<?php

namespace App\Http\Controllers;
use App\Models\NotificationMessage;
use Illuminate\Http\Request;

class NotificationMessageController extends Controller
{
    public function index(){
        $notifications = NotificationMessage::orderBy('created_at', 'desc')->simplePaginate(10);

        return view('notifications.index', compact('notifications'));
    }

    public function destroy(NotificationMessage $notification)
    {
        $notification->delete();

        return redirect(route('notifications_index'))->with('message', 'Notifikacija uspešno izbrisana');
    }

}
