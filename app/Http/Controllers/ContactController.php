<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contacts::all();
        return view('contacts', compact('contacts'));
    }

    public function view(int $id)
    {
        $contact = Contacts::find($id);
        return view('contact', compact('contact'));
    }
}
