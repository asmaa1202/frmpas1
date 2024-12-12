<?php

namespace App\Http\Controllers\Plongeur;

use App\Http\Controllers\Controller;
use App\Models\Adhesion;
use App\Models\Licence;
use App\Models\Plongeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Elibyy\TCPDF\Facades\TCPDF;

class HomePlongeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     const statut_en_cours = 'en cours'; 
     const statut_en_cours_validation = 'en_cours_validation'; 
     const statut_accepter = 'accepter'; 
     const statut_refuser = 'refuser'; 
    // public function index()
    // {
    //     $active_licence = Licence::where('plongeur_id', Auth::guard('plongeurs')->user()->id)->where('annee', date('Y'))->first();
    //     // dd(Auth::guard('plongeurs')->user()->id);
    //     return view('plongeurDash.pages.home', compact('active_licence'));
    // }

    public function index()
    {
        $plongeurId = Auth::guard('plongeurs')->user()->id;

        // Vérifier si la licence est active pour l'année en cours
        $active_licence = Licence::where('plongeur_id', $plongeurId)
            ->where('annee', date('Y'))
            // ->where('annee', 22)
            ->whereNot('statut', self::statut_refuser)
            ->first();

        // Calculer les jours restants jusqu'à la fin de l'année
        $remainingDays = Carbon::now()->diffInDays(Carbon::now()->endOfYear());

        // Passer les variables à la vue
        return view('plongeurDash.pages.home', compact('active_licence', 'remainingDays'));
    }

    public function attestationLicence($id)
    {
        $filename = 'attestation-licence.pdf';

        // dd($id);
        $plongeur = Plongeur::find($id);
        $licence = Licence::where('plongeur_id', $id)->where('annee', date('Y'))->where('statut', self::statut_accepter)->first();
        // dd($licence);
        $data = [

            'title' => "ATTESTATION DE LICENCE",
            'clubPresident' => "Abdelaziz ALAZRAK",
            'diver' => $plongeur->nom." ".$plongeur->prenom,
            'saison' => $licence->annee." - ".$licence->annee+1,
            'number' => $licence->custom_id ,
            'today' => $licence->updated_at->format('d/m/Y'),

        ];



        $html = view()->make('plongeurDash.pages.pdf.attestation-licence', $data)->render();





        $pdf = new TCPDF;

        $pdf::setHeaderCallback(function($pdf) {
            $header = 'assets\images\pdf_resources\frmas_header.jpg';
            $pdf->Image($header, 0, 0, 210, 45);
        });

        // Custom Footer
        $pdf::setFooterCallback(function($pdf) {
            $footer = 'assets\images\pdf_resources\frmas_footer.jpg';
            $pdf->Image($footer, 5, 275, 200, 15);
            //$pdf->SetY(-15);
            // Set font
            //$pdf->SetFont('helvetica', 'I', 8);
            // Page number
            //$pdf->Cell(0, 15, $pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
        });



        $pdf::SetTitle($data['title']);

        $pdf::AddPage();
        $pdf::SetY(40);


        $pdf::SetLineStyle( array( 'width' => 0.5, 'color' => array(41,120,202)));

        $pdf::Line(4,4,$pdf::getPageWidth() - 4,4);
        $pdf::Line($pdf::getPageWidth() -4, 4, $pdf::getPageWidth() - 4, $pdf::getPageHeight() - 4);
        $pdf::Line(4,$pdf::getPageHeight() -4, $pdf::getPageWidth() -4, $pdf::getPageHeight() -4);
        $pdf::Line(4,4,4,$pdf::getPageHeight() -4);

        $pdf::SetLineStyle( array( 'width' => 0.5, 'color' => array(0,0,0)));
        $pdf::Line(20,$pdf::getPageHeight() - 25, $pdf::getPageWidth() - 20, $pdf::getPageHeight() - 25);

        $pdf::writeHTML($html, true, false, true, false, '');

        $pdf::Output($filename);

        //$pdf::Output(public_path('uploads/pdfs') . '/' . $filename, 'F');
        //return response()->download(public_path('uploads/pdfs') . '/' . $filename);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(adhesion $adhesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(adhesion $adhesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, adhesion $adhesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      
    }
}
