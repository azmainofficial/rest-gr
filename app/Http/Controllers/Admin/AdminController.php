<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Month;
use App\Models\Project;
use App\Models\Report;
use App\Models\Unit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.layout.master');
    }
    public function Projects()
    {
        $projects = Project::all();
        return view('admin.pages.projects', compact('projects'));
    }
    public function projectsCreate()
    {
        return view('admin.pages.projects_create');
    }
    public function projectStore(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_type' => 'required|string|max:255',
            'project_location' => 'required|string|max:255',
            'project_address' => 'required|string|max:255',
            'image' => 'nullable|array',
            'image.*' => 'nullable|image|max:2048',
            'size' => 'required|string|max:255',
            'floor' => 'required|string|max:255'
        ]);
        $images = array();
        if ($files = $request->file('image')) {
            foreach ($files as  $image) {
                $imageName = rand(1, 1000) . '_' . $request->project_name . '.' . $image->getClientOriginalExtension();
                $image->move('images/uploads', $imageName);
                $images[] = $imageName;
            }
        }
        $project = new Project([
            'project_name' => $validated['project_name'],
            'project_type' => $validated['project_type'],
            'project_location' => $validated['project_location'],
            'project_address' => $validated['project_address'],
            'project_img' => implode('|', $images),
            'size' => $validated['size'],
            'floor' => $validated['floor'],
            'status' => '0'
        ]);
        if ($project->save()) {
            return redirect()->route('admin.projects')->with('success', 'Project created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create project. Please try again.');
        }
    }
    public function projectsUnitList($id)
    {
        $projects = Unit::where('project_id', $id)->get();
        $project_id = $id;
        return view('admin.pages.unit_list', compact('project_id', 'projects'));
    }
    public function Addproperty(Request $request, $id)
    {
        $project_id = $id;
        return view('admin.pages.add_property', compact('project_id'));
    }
    public function propertyStore(Request $request)
    {
        $validated = $request->validate([
            'project_id' => 'required|integer',
            'property_name' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'property_location' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'floor_number' => 'required|string|max:255',
            'block' => 'required|string|max:255',
            'property_rent' => 'required|string|max:255',
            'utility_cost' => 'required|string|max:255',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $images = array();
        if ($files = $request->file('image')) {
            foreach ($files as  $image) {
                $imageName = rand(1, 1000) . '_' . $request->property_name . '.' . $image->getClientOriginalExtension();
                $image->move('images/uploads', $imageName);
                $images[] = $imageName;
            }
        }

        $unit = new Unit([
            'property_name' => $validated['property_name'],
            'property_type' => $validated['property_type'],
            'property_location' => $validated['property_location'],
            'property_img' => implode('|', $images),
            'size' => $validated['size'],
            'floor_number' => $validated['floor_number'],
            'block' => $validated['block'],
            'property_rent' => $validated['property_rent'],
            'property_utility_cost' => $validated['utility_cost'],
            'project_id' => $validated['project_id'],
            'status' => '0'
        ]);
        if ($unit->save()) {
            return redirect()->route('admin.projects.unitList', ['id' => $validated['project_id']])
                ->with('success', 'Project created successfully.');
            // return redirect()->route('admin.projects.unitList')->with('success', 'Project created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create project. Please try again.');
        }
    }
    public function Notification()
    {
        $clients = Client::all()->map((function ($client) {
            $client->time_ago = Carbon::parse($client->created_at)->diffForHumans();
            return $client;
        }));
        return view('admin.pages.admin_notification', compact('clients'));
    }
    public function AddUser($id)
    {
        $client = Client::where('id', $id)->first();
        return view('admin.pages.admin_addUser', compact('client'));
    }
    public function userStore(Request $request)
    {

        $id = $request->unit_id;

        $validated = $request->validate([
            'unit_id' => 'required|numeric',
            'projectName' => 'required|string',
            'unitName' => 'required|string',
            'floor' => 'required|string',
            'block' => 'required|string',
            'fullName' => 'required|string',
            'confirmRent' => 'required|numeric',
            'utility' => 'required|numeric',
            'fullName2' => 'nullable|string|max:255',
            'user_name' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'fName' => 'required|string|max:255',
            'mName' => 'required|string|max:255',
            'formalPicture' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
            'formalPicture2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'image2' => 'nullable',
            'image2.*' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
            'dob' => 'required|date',
            'email' => 'required|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15',
            'permanentAddress' => 'required|string|max:255',
            'presentAddress' => 'required|string|max:255',
            'attach' => 'nullable',
            'attach.*' => 'file|mimes:pdf,jpeg,png,jpg,gif|max:5048',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postalCode' => 'required|string|max:10',
            'Country' => 'required|string|max:255',
            'Profession' => 'required|string|max:255',
            'Nationality' => 'required|string|max:255',
            'Religion' => 'required|string|max:255',
            'nName' => 'nullable|string|max:255',
            'nomineeFormalPicture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'image4' => 'nullable',
            'image4.*' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
            'nominnePhoneNumber' => 'nullable|string|max:15',
            'Relationship' => 'nullable|string|max:255',
            'Share' => 'nullable|numeric',
            'months' => 'required|integer|between:0,12',
        ]);
        $formalPicture = '';
        $formalPicture2 = '';
        $nomineeFormalPicture = '';
        if ($request->hasFile('formalPicture')) {
            $file = $request->file('formalPicture');
            $filename = rand(1, 1000) . '_' . $request->projectName . '-' . $request->file('formalPicture')->getClientOriginalName();
            $file->move('formalPicture', $filename);
            $formalPicture = $filename;
        }
        if ($request->hasFile('formalPicture2')) {
            $file = $request->file('formalPicture2');
            $filename = rand(1, 1000) . '_' . $request->projectName . '-' . $request->file('formalPicture2')->getClientOriginalName();
            $file->move('formalPicture', $filename);
            $formalPicture2 = $filename;
        }
        if ($request->hasFile('nomineeFormalPicture')) {
            $file = $request->file('nomineeFormalPicture');
            $filename = rand(1, 1000) . '_' . $request->projectName . '-' . $request->file('nomineeFormalPicture')->getClientOriginalName();
            $file->move('formalPicture', $filename);
            $nomineeFormalPicture = $filename;
        }
        $images = array();
        $image2 = array();
        $attach = array();
        $image4 = array();
        if ($files = $request->file('image')) {
            foreach ($files as  $image) {
                $imageName = rand(1, 1000) . '_' . $request->projectName . '.' . $image->getClientOriginalExtension();
                $image->move('nid/uploads', $imageName);
                $images[] = $imageName;
            }
        }

        if ($files = $request->file('image2')) {
            foreach ($files as  $image) {
                $imageName = rand(1, 1000) . '_' . $request->projectName . '.' . $image->getClientOriginalExtension();
                $image->move('nid/uploads', $imageName);
                $image2[] = $imageName;
            }
        }
        if ($files = $request->file('attach')) {
            foreach ($files as  $image) {
                $imageName = rand(1, 1000) . '_' . $request->projectName . '.' . $image->getClientOriginalExtension();
                $image->move('attached/uploads', $imageName);
                $attach[] = $imageName;
            }
        }
        if ($files = $request->file('image4')) {
            foreach ($files as  $image) {
                $imageName = rand(1, 1000) . '_' . $request->projectName . '.' . $image->getClientOriginalExtension();
                $image->move('nid/uploads', $imageName);
                $image4[] = $imageName;
            }
        }

        $user = new User();
        $user->project_name = $request->input('projectName');
        $user->unit_name = $request->input('unitName');
        $user->floor = $request->input('floor');
        $user->block = $request->input('block');
        $user->confirm_rent = $request->input('confirmRent');
        $user->utility_cost = $request->input('utility');
        $user->full_name = $request->input('fullName');
        $user->full_name2 = $request->input('fullName2');
        $user->user_name = $request->input('user_name');
        $user->password = bcrypt($request->input('password'));
        $user->fathers_name = $request->input('fName');
        $user->mothers_name = $request->input('mName');
        $user->dob = $request->input('dob');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->permanent_address = $request->input('permanentAddress');
        $user->present_address = $request->input('presentAddress');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->postal_code = $request->input('postalCode');
        $user->country = $request->input('Country');
        $user->profession = $request->input('Profession');
        $user->nationality = $request->input('Nationality');
        $user->religion = $request->input('Religion');
        $user->nominee_name = $request->input('nName');
        $user->nominee_phone_number = $request->input('nominnePhoneNumber');
        $user->relationship = $request->input('Relationship');
        $user->share = $request->input('Share');
        $user->status = '1';
        $user->unit_id = $request->input('unit_id');
        $user->formal_picture = $formalPicture;
        $user->formal_picture2 = $formalPicture2;
        $user->nid_picture = implode('|', $images);
        $user->nid_picture2 = implode('|', $image2);
        $user->aggrement_atch = implode('|', $attach);
        $user->nominee_picture = $nomineeFormalPicture;
        $user->nominee_nid = implode('|', $image4);

        $user->save();
        Client::where('unit_id', $id)->delete();

        $userId = $user->id;

        // Get the input for number of months
        $monthsToReset = (int) $request->input('months', 0);

        // Initialize a new Month instance
        $newMonth = new Month();
        $newMonth->user_id = $userId;

        // Set the specified month to 0 and others to NULL
        $monthNames = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
        foreach ($monthNames as $index => $monthName) {
            if ($index + 1 === $monthsToReset) {
                $newMonth->$monthName = 1;
            }
        }

        $newMonth->save();
        return redirect()->route('admin.leadlist')->with('success', 'User information saved successfully.');
    }

    public function leadList()
    {

        $users = User::all();
        return view('admin.pages.admin_leads_list', compact('users'));
    }
    public function Report()
    {
        $users = User::all();
        return view('admin.pages.admin_report', compact('users'));
    }
    public function generateReport($id)
    {
        $month = Month::where('user_id', $id)->first();
        $columns = Schema::getColumnListing('months');
        //$columns = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
        // $zeroValueColumn = null;
        // $foundZeroValue = false;

        // foreach ($columns as $column) {
        //     if ($foundZeroValue || $month->$column ==='1') {
        //         $foundZeroValue = true;
        //         $zeroValueColumn[] = $column;
        //     }
        // }
        $zeroValueColumn = null;
        $foundOneValue = false;

        foreach ($columns as $column) {
            if ($month->$column === '1' || $column === 'created_at' || $column === 'updated_at') {
                $foundOneValue = true;
                continue;
            }
            if ($foundOneValue) {
                $zeroValueColumn[] = $column;
            }
        }
        return view('admin.pages.admin_add_procurement', compact('month', 'zeroValueColumn'));
    }
    public function reportStore(Request $request)
    {
        // $validated = $request->validate([
        //     'lead_name' => 'required|string',
        //     'project_name' => 'required|string',
        //     'floor_number' => 'required|string',
        //     'unit_name' => 'required|string',
        //     'months' => 'required|array',
        //     'months.*' => 'string',
        //     'payed_amount' => 'required|numeric',
        //     'month_id' => 'required|integer',
        //     'user_id' => 'required|integer',
        //     'attachment_picture' => 'required|image'
        // ]);


        $img = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = rand(1, 1000) . '_' . $request->project_name . '-' . $request->file('image')->getClientOriginalName();
            $file->move('Report', $filename);
            $img = $filename;
        }
        $report = Report::create([
            'lead_name' => $request->input('lead_name'),
            'project_name' => $request->input('project_name'),
            'floor_name' => $request->input('floor_number'),
            'unit_name' => $request->input('unit_name'),
            'payed_amount' => $request->input('payed_amount'),
            'attachment_picture' => $img,
            'month_id' => $request->input('month_id'),
            'user_id' => $request->input('user_id'),
            'assigned_months' => json_encode($request->input('months')) // Assuming assigned_months is an array
        ]);

        $monthValue = $request->input('months');
        $id = $request->input('user_id');
        $month = Month::where('user_id', $id)->first();
        $columns = Schema::getColumnListing('months');

        foreach ($columns as $column) {
            if (in_array($column, $monthValue)) {
                $month->$column = '1';
            }
        }
        $month->save();

        return redirect()->back();
    }
}
