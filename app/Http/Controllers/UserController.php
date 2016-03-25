<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        //Check that user is logged
        $this->middleware('auth');

    }

    public function tutorialDone(Request $request){

        if (!$request->user()->isNew()) {
            return redirect('/');
        }

        $this->validate($request, [
            'id'          => 'required',
        ]);

        $user = User::find($request->id);
        if ($user->progress==0) {
            $user->progress++;
            $user->save();
        }

        return redirect('/');
    }

    public function progressUp (Request $request, $id) {

        $user = $request->user();

        $this->validate($request, [
            'id'       => 'required',
            'success'   => 'required'
        ]);

        if ($request->id == $user->progress && $request->success="sucess") {
            $user->progress++;
            $user->save();
        }

        return view('welldone',['id'=>$id]);
    }
}
