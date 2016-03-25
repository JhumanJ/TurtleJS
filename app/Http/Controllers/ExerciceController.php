<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Exercice;

class ExerciceController extends Controller
{

    public function __construct()
    {
        //Check that user is logged
        $this->middleware('auth');

    }

    //create an exercice
    public function create(Request $request) {
        //Check that admin middleware is activatedin route

        //If exercice has already been submitted
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'title'       => 'required',
                'videoLink'   => 'required',
                'text'        => 'required',
                'hint'        => 'required',
                'script'      => 'required',
            ]);

            Exercice::create([
                'title'       => $request->title,
                'videoLink'   => $request->videoLink,
                'text'        => $request->text,
                'hint'        => $request->hint,
                'script'      => $request->script,
            ]);

            //Return exercice list
            return redirect('/exercice/list');

        } else {
            return view('admin.exercice.create');
        }
    }

    //Admin view table for exercices
    public function index(Request $request) {
        $exercices = Exercice::all();

        return view('admin.exercice.list', ['exercices' => $exercices]);
    }

    //Handle the first conenction and the main menu (choosing exercice)
    public function indexUser(Request $request) {

        if ($request->user()->isAdmin()) {
            // If user is admin
            $exercices = Exercice::all();

            return view('home', ['exercices' => $exercices,'progress'=>$request->user()->progress,'infos'=>['You are an admin. This is the user\'s view.']]);

        } else {
            // If user is regular
            if ($request->user()->isNew()) {
                //First login
                return view('welcome', ['user' => $request->user()]);
            } else {
                //Not first loginq
                $exercices = Exercice::all();
                return view('home',['exercices' => $exercices,'progress'=>$request->user()->progress]);
            }
        }

    }

    //Update an exercice
    public function update(Request $request) {

        $this->validate($request, [
            'id'          => 'required',
            'title'       => 'required',
            'videoLink'   => 'required',
            'text'        => 'required',
            'hint'        => 'required',
            'script'      => 'required',
        ]);

        $exercice = Exercice::find($request->id);

        $exercice->title = $request->title;
        $exercice->videoLink = $request->videoLink;
        $exercice->text = $request->text;
        $exercice->hint = $request->hint;
        $exercice->script = $request->script;

        $exercice->save();

        //Return exercice list
        return redirect('/exercice/list');
    }

    //Delete an exercice
    public function delete(Request $request) {

        $this->validate($request, [
            'id'          => 'required',
        ]);

        $exercice = Exercice::find($request->id);
        $exercice->delete();

        //Return exercice list
        return redirect('/exercice/list');

    }

    public function display(Request $request, $id) {

        $id = (int)$id;
        $infos = [];

        try {
            $exercice = Exercice::findOrFail($id);
        } catch(ModelNotFoundException $e) {
            return response()->view('errors.404', [], 404);
        }

        $user_progress = $request->user()->progress;

        if ($id>$user_progress) {
            return view('notAvailableExercice',['exercice'=>$exercice]);
        }

        if ($user_progress>$id) {
            $infos = ['You have already completed this exercice, but you can do it again.'];
        }

        return view('exercice',['exercice'=>$exercice,'infos'=>$infos]);



    }

    public function extras(Request $request){
        return view('extras');
    }
}
