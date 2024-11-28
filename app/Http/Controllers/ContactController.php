<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.frontend.contact');
    }
    public function indexAdmin()
    {
        $type_menu = 'contacts';
        $contacts = Contact::all();
        return view('pages.admin.contacts.index', compact('contacts', 'type_menu'));
    }

    public function store(Request $request)
    {
        // Validasi input termasuk honeypot dan captcha
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'company' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|regex:/^[\d+\-]+$/',
                'subject' => 'nullable|string|max:255',
                'message' => 'required|string',
                'captcha' => 'required|captcha',
                'position' => 'nullable|size:0', // Honeypot validation
            ],

            [
                'phone.regex' => 'Invalid phone number format.', // Custom error message
                'captcha.captcha' => 'Captcha input not match', // Custom error message
            ]
        );

        // return $request;
        // Simpan data ke database
        Contact::create([
            'name' => $request->name,
            'company' => $request->company,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Kirim respon sukses
        return redirect()->route('thank-you')->with('success', 'Your message has been sent successfully!');
    }

    public function show($id)
    {
        $type_menu = 'contacts';
        $contact = Contact::findOrFail($id);
        return view('pages.admin.contacts.show', compact('contact', 'type_menu'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
