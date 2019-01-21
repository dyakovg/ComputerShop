<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;
use App\User;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ComputerList()
    {
        $computer = Computer::all();

        $data = array (
            'computers' => $computer,
        );
        return view('Computers/ComputerList',$data);
    }

    public function AddComputer(){
        return view('Computers/AddComputer');
    }

    public function SaveComputer(Request $request)
    {
        $computer = new Computer;

        $computer->name=$request->name;
        $computer->description=$request->desc;

        $computer->save();

        return redirect()->route('ComputerList');
    }

    public function EditComputer($id)
    {
        $computer = Computer::find($id);

        $data = array(
            'computer' => $computer,
        );
        return view('Computers/EditComputer',$data);
    }

    function UpdateComputer($id, Request $request)
    {
        $messsages = array(
        'desc.required'=>'You cant leave Description field empty',
        'name.required'=>'You cant leave Name field empty',
        'name.max'=>'The field has to be :max chars long',
        );

        $rules = array(
            'name'=> 'required|max:50',
            'desc'=>'required|max:2',
        );

        $validator = Validator::make($request->all(), $rules,$messsages);

         if ($validator->fails()) {
             return redirect()
                         ->back()
                         ->withErrors($validator)
                         ->withInput();
         }

        $computer = Computer::find($id);

        $computer->name=$request->name;
        $computer->description=$request->desc;

        $computer->save();

        return redirect()->route('ComputerList');
    }

    function DeleteComputer($id)
    {
        $computer = Computer::find($id);

        $computer->delete();

        return redirect()->route('ComputerList');
    }

}
