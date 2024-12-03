<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Level;
use Illuminate\Http\Request;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;
use Illuminate\Http\UploadedFile;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cours = Cours::with('niveau')->with("createur")->get();
        return view("dashboard.pages.cours.index")->with("cours", $cours);
    }

    /**
     * Display a listing of the resource.
     */
    public function coursParPlongeur()
    {
        $cours = Cours::with('niveau')->with("createur")->where("id_niveau", "<=", auth()->user()->id_niveau)->orderBy('id_niveau', 'DESC')->orderBy('order', 'ASC')->get();
        $niveaux = Level::all();
        foreach ($cours as $item) {
            $icon = explode('.', $item->lien)[count(explode('.', $item->lien)) - 1];
            switch ($icon) {
                case 'pdf':
                    $item->icon = asset('dashboard/uploads/images/icons/pdf.png');
                    break;
                case 'mp4':
                    $item->icon =  asset('dashboard/uploads/images/icons/video.png');
                    break;
                default:
                    $item->icon =  asset('dashboard/uploads/images/icons/png.png');
                    break;
            }
        }
        return view("plongeurDash.pages.cours.index")->with("cours", $cours)->with("niveaux", $niveaux);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels = Level::all();
        return view("dashboard.pages.cours.ajouter", ["levels" => $levels]);
    }

    public function upload(Request $request)
    {
        $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));
        if ($receiver->isUploaded() === false) {
            return 'Ne télécharge pas';
        }
        $save = $receiver->receive();
        if ($save->isFinished()) {
            dd($request);
            $cours = new Cours();
            $cours->nom = $_POST["nom"];
            $cours->id_niveau = $_POST["niveau"];
            $cours->cree_par = auth()->user()->id;

            // Build the file path
            $fileName = $this->createFilename($save->getFile());

            $cours->lien = 'https://diver.cdma-solution.ma' . '/admin/uploads/cours/' . $fileName;
            $cours->save();
            return $this->saveFile($save->getFile());
        }
        $handler = $save->handler();
        return response()->json([
            "done" => $handler->getPercentageDone(),
            'status' => true
        ]);
    }

    protected function saveFile(UploadedFile $file)
    {
        $fileName = $this->createFilename($file);

        $file->move(public_path('admin/uploads/cours/'), $fileName);
        return response()->json([
            'path' => 'http://127.0.0.1:8000' . '/admin/uploads/cours/' . $fileName,
            'name' => $fileName,
        ]);
    }

    protected function createFilename(UploadedFile $file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = str_replace("." . $extension, "", $file->getClientOriginalName()); // Filename without extension
        $filename .= "_" . md5(time()) . "." . $extension;
        return $filename;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $cours = new Cours();
            $cours->nom = $request->nom;
            $cours->id_niveau = $request->niveau;
            $cours->cree_par = auth()->user()->id;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $nomImage = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/uploads/cours/'), $nomImage);
                $cours->lien = 'https://diver.cdma-solution.ma' . '/admin/uploads/cours/' . $nomImage;
            }

            $cours->save();

            return response()->json(array('message' => "Cours est ajouté avec succés"), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $request->hasFile('image')), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cours = cours::find($id);
        return view("dashboard.pages.cours.modifier", ["cours" =>  $cours]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cours = Cours::find($id);
        return view("dashboard.pages.cours.modifier", ["cours" => $cours]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $cours = Cours::find($id);
            $cours->nom = $request->nom;
            $cours->id_level = $request->niveau;
            $cours->id_user = auth()->user()->id;

            $cours->save();

            return response()->json(array('message' => "cours est modifié avec succés"), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $err), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $deletedCours = Cours::where("id", $id)->delete();
            if ($deletedCours <> 0) {
                return response()->json(array('message' => "cours est supprimé avec succés"), 200);
            } else {
                return response()->json(array('message' => "Erreur servenu"), 500);
            }
        } catch (\Exception $err) {
            return response()->json(array('message' => "Erreur servenu"), 500);
        }
    }

}
