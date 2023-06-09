<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\trainerModel;
use Illuminate\Http\Request;

class trainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $trainer=trainerModel::all();
        return view('showAllTrainer')->with('trainer',$trainer);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $image = $request->file('Trainer_Image'); // Fix the typo here

        $imagePath = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('upload'), $imagePath);

        $trainer = new trainerModel();
        $trainer->Trainer_Name = $request->Trainer_Name;
        $trainer->Trainer_Email = $request->Trainer_Email;

        $trainer-> Trainer_Speciality = $request-> Trainer_Speciality;
        $trainer->Trainer_Description = $request->Trainer_Description;
        $trainer->Trainer_Image = $imagePath;

        $trainer->save();

        return redirect()->back()->with('success', 'Trainer added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // $trainer=trainerModel::findorfail($id);
        //  return view('edit',compact('trainer'));
    // }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {



            $trainer = trainerModel::findOrFail($id);
            $trainer->Trainer_Name = $request->Trainer_Name;
            $trainer->Trainer_Email = $request->Trainer_Email;
            $trainer-> Trainer_Speciality = $request-> Trainer_Speciality;
            $trainer->Trainer_Description = $request->Trainer_Description;

            if ($request->hasFile('Trainer_Image')) {

                $image = $request->file('Image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $trainer->Trainer_Image = $imageName;
            }

            $trainer->save();

            return redirect('trainer');

        }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        trainerModel::findorfail($id)->delete();
        return redirect('trainer');
    }
}
