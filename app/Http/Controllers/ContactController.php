<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    function addContact(Request $request){
        $data = $request->all();


        $contact = new Contact;
        $contact->name = $data["name"];
        $contact->email = $data["email"];
        $contact->subject = $data["subject"];
        $contact->message = $data["message"];

        $contact->save();

        return response()->json(["success" => true]);
    }
}
