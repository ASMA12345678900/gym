<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Price;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $services= Service::all();

        return view('gym.index' ,compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('gym.servicecreate.service');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image=$request->image;
        $imagePath =time().'_'.$image->getClientOriginalName();
         $image->move(public_path('upload'), $imagePath);

         Service::create([

                "name" => $request->name,
                "description" => $request->description,
                "image" => $imagePath,
                'id_salle' => 1 , // Valeur par défaut de id_salle
            ]);

        return response('tout va bien ');
    }
    public function index2(equest $request){


        $prices= Price::all();
        return view('gym.index', compact('prices'));


    }
    public function create2()
    {
       return view('gym.price.createPrice');



    }

public function store2(Request $request)
 {
    $price = new Price();
    $price->planName = $request->planName ;
    $price->price = $request->price ;
    $price->duration = $request->duration ;
    $price->personnal_Trainer = $request->personnal_Trainer ;
    $price->Amount_of_people = $request->Amount_of_people ;
    $price->Number_of_visits = $request->Number_of_visits ;
    $price->id_sale = 1 ;
    $price->save() ;
      return response("avec succes");
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
