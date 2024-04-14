<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\FerryRequest;
use Illuminate\View\View;
use App\Models\{Equipement, Ferry};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FerryController extends Controller
{
    public function creerPDF()
    {
        $ferries = Ferry::all();
        $data = [
            'titre' => 'Liste des ferries',
            'date' => date('d/m/y'),
            'ferries' => $ferries
        ];
        $pdf = Pdf::loadView('pdf', $data);
        return $pdf->download('ferry_pdf.pdf');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Ferry $ferry)
    {
        $ferries = Ferry::all();
        $ferry->with("equipements")->get();
        return view("ferry", compact("ferries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipements = Equipement::all();
        return view('create', compact('equipements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FerryRequest $ferryRequest): RedirectResponse
    {
        $ferry = Ferry::create($ferryRequest->all());

        if ($ferryRequest->hasFile('photo')) {
            $photoFile = $ferryRequest->file('photo');
            $imageName = time() . '.' . $photoFile->extension();

            // Supprimer le préfixe 'photos/' s'il est déjà présent
            $imageName = str_replace('photos/', '', $imageName);

            $photoFile->move(public_path('photos'), $imageName);
            $ferry->photo = $imageName;
        }

        $ferry->save();
        $ferry->equipements()->attach($ferryRequest->equipement_id);

        return redirect()->route('ferry.index')->with('info', 'Le ferry a bien été créé');
    }




    /**
     * Display the specified resource.
     */
    public function show(Ferry $ferry): View
    {
        return view('show', compact('ferry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ferry $ferry): RedirectResponse
    {
        $ferry->delete();
        return back()->with('info', 'le ferry a bien ete supprimé');
    }
}
