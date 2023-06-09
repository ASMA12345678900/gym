<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

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
                'id_salle' => 1, // Valeur par défaut de id_salle
            ]);

        return response('tout va bien ');
    }
    public function index2(){

        $prices= Price::all();
        return view('gym.index', compact('prices'));


    }
    public function create2()
    {
       return view('gym.price.createPrice');



    }

public function store2(Request $request)
 {
  Price::create($request->all());
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
