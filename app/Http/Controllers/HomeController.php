<?php
//{{Auth::user()->type}}
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;
use App\User;
use Validator;
use Illuminate\Support\Facades\DB;

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
        $computer = Computer::orderBy('id')->paginate(5);

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
        //validaciq?
        $valid = $request->validate([
            'name' => 'required|max:50',
            'desc' => 'required|max:150',
            'picture' => 'required|mimes:png,jpg,jpeg',

        ]);
        $computer = new Computer;

        $computer->name=$request->name;
        $computer->description=$request->desc;


        

        $file = $request->file('picture');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        $file_dir = public_path('photos');
        $file->move($file_dir, $file_name);

        $computer->photo = $file_name;
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
            'name'=> 'required|max:10',
            'desc'=>'required|max:150',
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

    public function search(Request $request)
    {
        $search = $request->get('search');
        $computers = DB::table('computers')->where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('Computers/ComputerList', ['computers' =>$computers]);
    }

}
