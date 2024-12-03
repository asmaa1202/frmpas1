<?php

namespace App\Http\Controllers\Accueil;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\Models\Blog;
use App\Models\Document;
use Illuminate\Http\Request;

class SportController extends Controller
{
    const blog_status_active = 1 ; 
    const blog_status_principal = 2 ; 
    public function club()
    {
        return view('accueil.sport.club');
    }

    public function competition(Request $request)
    {
        $typeDocument = $request->input('type_document');
        $type = $request->input('type');
        $saison = $request->input('saison');
        $recentBlogs = Blog::limit(5)->latest()->get();
    
        $query = Document::query();
        if ($typeDocument || $type || $saison) {
            
            if ($typeDocument) {
                $query->where('type_document', $typeDocument);
            }
            if ($type) {
                $query->where('type', $type);
            }
            if ($saison) {
                $query->where('saison', $saison);
            }

            $documents = $query->latest()->paginate(10)->appends([
                                                                'type_document' => $typeDocument,
                                                                'type' => $type,
                                                                'saison' => $saison,
                                                            ]);;
        
            return view('accueil.sport.competition', compact('documents', 'recentBlogs'));
        }else {
            return view('accueil.sport.competition', compact('recentBlogs'));   
        }
        
    }
        
    public function downloadDocument($filename)
    {
        $path = public_path("assets/document_pdf/{$filename}");
    
        if (!file_exists($path)) {
            abort(404, 'Le fichier demandé est introuvable.');
        }
    
        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }
        


    
}
