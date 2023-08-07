<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Category;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $pictures = Picture::all();

        return view('pictures.index', [

            'pictures' => $pictures

        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('pictures.create', [

            'categories' => $categories

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Aggiungi record nel database

        $picture = new Picture;

        $picture->title = $request->titolo;
        $picture->description = $request->descrizione;
        $picture->price = $request->prezzo;

        if ($request->file('immagine')) {

            //Crea il nome dell'immagine

            $imageId = uniqid();

            $imageName = 'immagine-quadro-' . $imageId . '.' . $request->file('immagine')->extension();

            $image = $request->file('immagine')->storeAs('public', $imageName);

            $picture->image = $imageName;
            $picture->image_id = $imageId;

        } else {

            $picture->image = '';
            $picture->image_id = '';

        }

        $picture->user_id = auth()->user()->id;

        $picture->save();

        //Prendo tutte le categorie selezionate dall'utente

        $categories = $request->categorie;

        $currentPicture = Picture::find($picture->id);

        foreach ($categories as $category) {

            //Aggiungo record in tabella category_picture

            $currentPicture->categories()->attach($category);

        }

        return redirect()->route('pictures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $picture = Picture::find($id);

        return view('pictures.show', [

            'picture' => $picture

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $picture = Picture::find($id);

        $categories = Category::all();

        if (auth()->user()->id == $picture->user_id) {

            return view('pictures.edit', [

                'picture' => $picture,
                'categories' => $categories

            ]);

        } else {

            return redirect()->route('index');

        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $picture = Picture::find($id);

        if (auth()->user()->id == $picture->user_id) {

            $picture->title = $request->titolo;
            $picture->description = $request->descrizione;
            $picture->price = $request->prezzo;

            if ($request->file('immagine')) {

                $imageId = $picture->image_id;

                $imageName = 'immagine-quadro-' . $imageId . '.' . $request->file('immagine')->extension();

                $image = $request->file('immagine')->storeAs('public', $imageName);

            }

            $picture->save();

            $currentPicture = Picture::find($picture->id);

            //Elimino tutte le relazioni relative alle categorie

            $allCategories = Category::all();

            foreach ($allCategories as $singleCategory) {

                //Aggiungo record in tabella category_picture

                $currentPicture->categories()->detach($singleCategory->id);

            }

            //Prendo tutte le categorie selezionate dall'utente

            $categories = $request->categorie;

            foreach ($categories as $category) {

                //Aggiungo record in tabella category_picture

                $currentPicture->categories()->attach($category);

            }

            return redirect()->route('pictures.index');

        } else {

            return redirect()->route('index');

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $picture = Picture::find($id);

        $picture->delete();

        foreach ($picture->categories as $singleCategory) {

            //Aggiungo record in tabella category_picture

            $currentPicture->categories()->detach($singleCategory->id);

        }

        return redirect()->route('pictures.index');
    }

    //Mostra vista checkout
    public function checkout ($id) {

        $picture = Picture::find($id);

        return view('checkout.form', [

            'picture' => $picture

        ]);

    }

    //Esegui il checkout
    public function performCheckout (Request $request, $id) {

        $add_customer = (new CustomerController)->store($request);

        $add_order = (new OrderController)->store($request, $add_customer);

        return $add_order;

    }
}
