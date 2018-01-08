<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\InboxMessage;
use App\Http\Requests\ContactFormRequest;
use App\Admin;

class ContactController extends Controller
{

    public function mailToAdmin(ContactFormRequest $message, Admin $admin)
  {
    // use the notify method to send notification email to admin
  $admin->notify(new InboxMessage($message));
  return redirect()->back()->with('message', 'You have successful submitted your message!');
  }

}
