<?php

namespace App\Http\Controllers\Club;

use App\Http\Controllers\Controller;
use App\Models\Adhesion;
use App\Models\Club;
use App\Models\Plongeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\File;
use App\Constants\ClubStatutConstants;

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
                                    ->where('statut', self::statut_accepter)
                                    ->first();

        $remainingDays = Carbon::now()->diffInDays(Carbon::now()->endOfYear());

        $currentYear = date('Y');

        // Plongeurs
        $nombrePlongeursActifs = Plongeur::where('club_id', $clubId)
            ->whereIn('id', function ($query) use ($currentYear) {
            $query->select('plongeur_id')
                    ->from('licences')
                    ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                    ->where('annee', $currentYear);
                    
        })->where('type_plongeur_id', 2)->count();
        // dd($nombrePlongeursActifs);

        // dd($nombrePlongeursActifs);
        $nombrePlongeursInactifs = Plongeur::where('club_id', $clubId)
            ->where(function ($query) use ($currentYear) {
            $query->whereNotIn('id', function ($subQuery) {
                $subQuery->select('plongeur_id')->from('licences');
            })
            ->orWhereIn('id', function ($subQuery) use ($currentYear) {
                $subQuery->select('plongeur_id')
                        ->from('licences')
                    ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                    ->whereYear('annee', '!=', $currentYear);
            });
        })
        ->where('type_plongeur_id', 2)
        ->count();
                        
        // Athlètes
        $nombreAthletesActifs = Plongeur::where('club_id', $clubId)
            ->whereIn('id', function ($query) use ($currentYear) {
            $query->select('plongeur_id')
                    ->from('licences')
                    ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                    ->where('annee', $currentYear);
                    
        })->where('type_plongeur_id', 1)->count();
        // dd($nombreAthletesActifs);

        // dd($nombreAthletesActifs);
        $nombreAthletesInactifs = Plongeur::where('club_id', $clubId)
            ->where(function ($query) use ($currentYear) {
            $query->whereNotIn('id', function ($subQuery) {
                $subQuery->select('plongeur_id')->from('licences');
            })
            ->orWhereIn('id', function ($subQuery) use ($currentYear) {
                $subQuery->select('plongeur_id')
                        ->from('licences')
                    ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                    ->whereYear('annee', '!=', $currentYear);
            });
        })
        ->where('type_plongeur_id', 1)
        ->count();

        // Moniteurs
        $nombreMoniteursActifs = Plongeur::where('club_id', $clubId)
            ->whereIn('id', function ($query) use ($currentYear) {
            $query->select('plongeur_id')
                    ->from('licences')
                    ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                    ->where('annee', $currentYear);
                    
            })->where('type_plongeur_id', 3)->count();
        // dd($nombreMoniteursActifs);

        // dd($nombreMoniteursActifs);
        $nombreMoniteursInactifs = Plongeur::where('club_id', $clubId)
            ->where(function ($query) use ($currentYear) {
            $query->whereNotIn('id', function ($subQuery) {
                $subQuery->select('plongeur_id')->from('licences');
            })
            ->orWhereIn('id', function ($subQuery) use ($currentYear) {
                $subQuery->select('plongeur_id')
                        ->from('licences')
                    ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                    ->whereYear('annee', '!=', $currentYear);
            });
        })
        ->where('type_plongeur_id', 3)
        ->count();
    
        return view('clubDash.pages.home', compact( 'active_adhesion', 
                                                        'remainingDays', 
                                                        'nombrePlongeursActifs', 
                                                        'nombrePlongeursInactifs' ,
                                                        'nombreAthletesActifs',
                                                        'nombreAthletesInactifs', 
                                                        'nombreMoniteursActifs',
                                                        'nombreMoniteursInactifs'
                                                    ));
    
        // return view('clubDash.pages.home', compact('clubsActifs', 'clubsInactifs', 'remainingDays', 'nombrePlongeurs', 'nombreAthletes'));
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
            'saison' => $adhesion->annee." - ".$adhesion->annee+1,
            'number' => "ATT".$club->abreviation.$adhesion->annee,
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


    public function autorisationPlonge($id)
    {
        $adhesion = Adhesion::where('club_id', $id)->where('annee', date('Y'))->where('statut', self::statut_accepter)->first();
        $club = Club::find($id);

        // $directoryPath = 'uploads/pdfs';
        $filename = 'autorisation-plonge.pdf';

        $clubType = '';
        if (is_array($club->types)) {
            if (in_array('Sportif', $club->types) && in_array('Diving', $club->types)) {
                $clubType = 'Sportive et de Plongée';
            } elseif (in_array('Sportif', $club->types)) {
                $clubType = 'Sportive';
            } elseif (in_array('Diving', $club->types)) {
                $clubType = 'de Plongée';
            }
        }

        $data = [

            'title' => "AUTORISATION DE PLONGÉE",
            'frmpasPresident' => "Abdelaziz ALAZRAK",

            'clubPresident' => $club->president,
            'club' => $club->nom,
            'address' => $club->adresse,
            'legalStructure' => $club->legal_structure,
            // 'clubType' => $club->types,
            'clubType' => $clubType,
            'name' =>$club->president,
            'cin' => $club->cin,
            'clubNumber' =>  "00".$club->id."/".$adhesion->annee+1,
            'saison' => $adhesion->annee." - ".$adhesion->annee+1,
            'authorizedClub' => "A.C.P.C",
            'today' => $adhesion->updated_at->format('d/m/Y'),

        ];



        $html = view()->make('clubDash.pages.pdf.autorisation-plonge', $data)->render();





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

        // if(!File::isDirectory($directoryPath)){
        //     //make the directory because it doesn't exist
        //     File::makeDirectory($directoryPath);
        // }

        $pdf::Output($filename);

        // $pdf::Output(public_path('uploads/pdfs') . '/' . $filename, 'F');
        // return response()->download(public_path('uploads/pdfs') . '/' . $filename);

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
