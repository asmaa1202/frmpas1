<?php

namespace App\Http\Controllers\Club;

use App\Http\Controllers\Controller;
use App\Models\Adhesion;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const statut_en_cours = 'en cours'; 
    const statut_accepter = 'accepter'; 
    const statut_refuser = 'refuser'; 
    public function index()
    {
        $clubId = Auth::user()->club->id;

        // // Vérifier si la licence est active pour l'année en cours
        // $active_licence = Licence::where('plongeur_id', $plongeurId)
        //     ->where('annee', date('Y'))
        //     ->first();

        // Calculer les jours restants jusqu'à la fin de l'année
        $remainingDays = Carbon::now()->diffInDays(Carbon::now()->endOfYear());


        $active_adhesion = Adhesion::where('club_id', $clubId)
                                    ->where('annee', date('Y'))
                                    // ->where('annee', 22)
                                    ->first();
        // dd(empty($active_adhesion));
        return view('clubDash.pages.home', compact('active_adhesion', 'remainingDays'));
    }


    public function attestationAffiliation($id)
    {
        $adhesion = Adhesion::where('club_id', $id)->where('annee', date('Y'))->where('statut', self::statut_accepter)->first();
        $club = Club::find($id);
        // dd($club);

        //$directoryPath = 'uploads/pdfs';
        $filename = 'attestation-affiliation.pdf';



        $data = [

            'title' => "ATTESTATION D'AFFILIATION",
            'clubPresident' => "Abdelaziz ALAZRAK",
            'clubName' => $club->nom,
            'saison' => $adhesion->annee."-".$adhesion->annee+1,
            'number' => "00".$club->id."/".$adhesion->annee+1,
            'today' =>  $adhesion->updated_at->format('d/m/Y'),

        ];



        $html = view()->make('clubDash.pages.pdf.attestation-affiliation', $data)->render();





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



        $pdf::SetTitle("ATTESTATION D'AFFILIATION");

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

        // if(!File::isDirectory($directoryPath)){
        //     //make the directory because it doesn't exist
        //     File::makeDirectory($directoryPath);
        // }

        $pdf::Output($filename);

        //$pdf::Output(public_path('uploads/pdfs') . '/' . $filename, 'F');
        //return response()->download(public_path('uploads/pdfs') . '/' . $filename);

    }


    public function autorisationPlonge(Request $request)
    {
        $directoryPath = 'uploads/pdfs';
        $filename = 'autorisation-plonge.pdf';



        $data = [

            'title' => "AUTORISATION DE PLONGÉE",
            'clubPresident' => "Abdelaziz ALAZRAK",
            'club' => "ASSOCIATION CLUB DE PLONGEE DE CASABLANCA",
            'address' => "au complexe sportif Mohamed 5 Casablanca",
            'clubType' => "Association Sportive",
            'name' => "M.ALAZRAK Abdelaziz",
            'cin' => "BE68997",
            'clubNumber' => "0001 / 2024",
            'saison' => " 2023 - 2024",
            'authorizedClub' => "A.C.P.C",
            'today' => date('d/m/Y'),

        ];



        $html = view()->make('autorisation-plonge', $data)->render();





        $pdf = new TCPDF;

        $pdf::setHeaderCallback(function($pdf) {
            $header = 'pdf_resources\frmas_header.jpg';
            $pdf->Image($header, 0, 0, 210, 45);
        });

        // Custom Footer
        $pdf::setFooterCallback(function($pdf) {
            $footer = 'pdf_resources\frmas_footer.jpg';
            $pdf->Image($footer, 5, 275, 200, 15);
            //$pdf->SetY(-15);
            // Set font
            //$pdf->SetFont('helvetica', 'I', 8);
            // Page number
            //$pdf->Cell(0, 15, $pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
        });



        $pdf::SetTitle('AUTORISATION DE PLONGÉE');

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

        if(!File::isDirectory($directoryPath)){
            //make the directory because it doesn't exist
            File::makeDirectory($directoryPath);
        }

        //$pdf::Output(public_path($directoryPath) . '/' . $filename);

        $pdf::Output(public_path('uploads/pdfs') . '/' . $filename, 'F');
        return response()->download(public_path('uploads/pdfs') . '/' . $filename);

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
