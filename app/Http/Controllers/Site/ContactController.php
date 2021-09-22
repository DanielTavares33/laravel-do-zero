<?php

namespace App\Http\Controllers\Site;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Notifications\NewContact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.contact.index');
    }

    public function form(Request $request) {
        $contact = Contact::create($request->all());

        Notification::route('mail', config('mail.from.address'))->notify(new NewContact($contact));
    }
}
