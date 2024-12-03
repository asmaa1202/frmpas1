<?php

namespace App\Http\Controllers\Accueil;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Sleep;
use Illuminate\Validation\ValidationException;
use App\Models\ContactUs;

class AccueilController extends Controller
{
    // const evenement_status_principal = 2 ; 
    // const blog_status_active = 1 ; 
    // const blog_status_principal = 2 ; 
    public function welcome()
    {
        $evenements = Evenement::latest()->take(3)->get();
        // dd($evenements);
        return view('welcome', compact('evenements'));
    }
    public function about()
    {
        $evenements = Evenement::latest()->take(3)->get();
        // dd($evenements);
        return view('accueil.frmpas_family.frmpas', compact('evenements'));
    }
    public function mot_president()
    {
        $recentBlogs = Blog::limit(5)->latest()->get();
        return view('accueil.frmpas_family.mot_president', compact('recentBlogs'));
    }

    public function frmpas_family()
    {
        $recentBlogs = Blog::limit(5)->latest()->get();
        return view('accueil.frmpas_family.frmpas_family', compact('recentBlogs'));
    }

    public function commissions()
    {
        $recentBlogs = Blog::limit(5)->latest()->get();
        return view('accueil.frmpas_family.commissions', compact('recentBlogs'));
    }

    public function activites_subaquatiques()
    {
        return view('accueil.frmpas_family.activites_subaquatiques');
    }

    public function index()
    {
        return view('acceuil');
    }

    // public function about()
    // {
    //     // return view('acceuil');
    //     // return redirect()->route('accueil.about');

    // }

    public function formations_certifications()
    {
        return view('acceuil');
    }

    public function clubs_affilies_adhésion()
    {
        return view('acceuil');
    }

    public function Espace_membre()
    {
        return view('acceuil');
    }


    public function contact()
    {
        return view('contact');
    }

    public function storeContactUs(Request $request)
    {
        try{
            // dd($request);
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:9',
                'subject' => 'required',
                'message' => 'nullable',
            ]);
            $contact = new ContactUs();
            $contact->name              = $request->input('name');
            $contact->phone             = $request->input('phone');
            $contact->mail              = $request->input('email');
            $contact->contact_subject   = $request->input('subject');
            $contact->contact_body      = $request->input('message');

            $contact->save();

            Sleep::for(1)->seconds();

            session::flash('updateStatus', 'Demande Envoyé');
            session::flash('alertType', 'success');

            return redirect()->back()->with('success', 'Merci pour votre message. Il a été envoyé.')->withFragment('contact_us');

        }catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput()->with('error', 'Une erreur s\'est produite lors de l\'envoi de ce message: ' . $e->getMessage());
        }

    }


}
