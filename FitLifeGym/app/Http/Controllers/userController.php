<?php

namespace App\Http\Controllers;
use App\Models\userModel;
use App\Models\trainerModel;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $user=userModel::all();
        $trainer=trainerModel::all();
        return view('showAllUser')->with('user',$user)->with('trainer',$trainer);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


        $user = new userModel();
        $user-> user_Name = $request->user_Name;
        $user->user_Email = $request->user_Email;
        $user->Trainer_id = $request->Trainer_id;


        $user->save();

        return redirect('user');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //





        $user = userModel::findOrFail($id);
        $user-> user_Name = $request->user_Name;
        $user->user_Email = $request->user_Email;
        $user->Trainer_id = $request->Trainer_id;


        $user->save();

            return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        userModel::findorfail($id)->delete();
        return redirect('user');
    }
}
