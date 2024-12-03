<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\NewMemberNotify;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = contact::orderBy('created_at', 'DESC')->paginate(100);
        return view("dashboard.pages.contact.index")->with("contacts", $contacts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'subject'=>'required|string',
            'message'=>'required|string',
            'email'=>'required|email'
        ],["name.required"=>"Nom est obligatoire",
            "subject.required"=>"Sujet est obligatoire",
            "message.required"=>"Message est obligatoire",
            "email.required"=>"email est obligatoire"]);



        try{

            $contact = new Contact();

            $contact->name =$request->name;
            $contact->subject=$request->subject;
            $contact->message=$request->message;
            $contact->email=$request->email;

            $contact->save();

            Mail::to('hainoussi.ihssane@gmail.com')->send(new NewMemberNotify());
            return response()->json(array('message' => "Contact est ajouter avec succés"), 200);

        }catch(\Exception $err){
            return response()->json(array('message' => "Erreur sevenu"), 500);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $deletedContact = contact::where("id", $id)->delete();
            if ($deletedContact <> 0) {
                return response()->json(array('message' => "Contact est supprimé avec succés"), 200);
            } else {
                return response()->json(array('message' => "Erreur servenu"), 500);
            }
        } catch (\Exception $err) {
            return response()->json(array('message' => "Erreur servenu"), 500);
        }
    }
}
