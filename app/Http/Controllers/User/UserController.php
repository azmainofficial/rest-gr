<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Project;
use App\Models\Report;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('user.layout.master');
    }
    public function projectList()
    {
        $projects = Project::all();
        return view('user.pages.user_projectList', compact('projects'));
    }
    public function singleProject($id)
    {
        $projects = Unit::where('project_id', $id)->get();
        return view('user.pages.single_project', compact('projects'));
    }
    public function projectRequest($id)
    {
        //$project_id=$id;
        $value = Unit::where('id', $id)->first();
        return view('user.pages.user_request', compact('value'));
    }
    public function RequestStore(Request $request)
    {
        $img = '';
        if ($request->hasFile('formalImage')) {
            $file = $request->file('formalImage');
            $filename = rand(1, 1000) . '_' . $request->project_name . '-' . $request->file('formalImage')->getClientOriginalName();
            $file->move('images/uploads', $filename);
            $img = $filename;
        }
        $images = array();
        if ($files = $request->file('image')) {
            foreach ($files as  $image) {
                $imageName = rand(1, 1000) . '_' . $request->project_name . '.' . $image->getClientOriginalExtension();
                $image->move('images/uploads', $imageName);
                $images[] = $imageName;
            }
        }
        $client = new Client([
            'project_name' => $request['project_name'],
            'unit_name' => $request['unit_name'],
            'floor' => $request['floor_number'],
            'block' => $request['block'],
            'nid_picture' => implode('|', $images),
            'full_name' => $request['full_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'present_address' => $request['present_address'],
            'gender' => $request['gender'],
            'occupation' => $request['occupation'],
            'formal_picture' => $img,
            'short_details' => $request['sort_details'],
            'unit_id' => $request['unit_id'],
            'status' => '0'
        ]);
        $client->save();
    }
    public function Signin(Request $request)
    {
        return view('user.pages.user_signin');
    }
    public function userDashbord()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }

        $unit_id = $data->unit_id;
        $property = User::where('id', '=', $unit_id)->count();
        return view('user.pages.user_dashbord', compact('data', 'property'));
    }
    public function Signinstore(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $student = User::where('email', $validatedData['email'])->first();
        if ($student && Hash::check($validatedData['password'], $student->password)) {
            $request->session()->put('loginId', $student->id);
            return redirect()->route('user.dashbord'); // Change 'dashboard' to your actual dashboard route name
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
        }
    }
    public function userInvoice()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        $unit_id = $data->unit_id;
        $property = User::where('id', '=', $unit_id)->count();

        $user_id=$data->id;
        $report=Report::where('user_id',$user_id)->first();
       

        return view('user.pages.user_invoice',compact('data','property','report'));
    }
    public function ProjectSearch(Request $request){
        $r=$request->rangevalue;
        $d=Unit::where('property_rent','=',$r)->get();
        dd($d);
    }
}
