<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Project;
use App\Models\Task;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

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

    // public function home()
    // {
    //     // dd(Auth::user());
    //     if (Auth::user()->role_id == 1) {
    //         return redirect('/admin/dashboard');
    //     } elseif (Auth::user()->role_id == 2) {
    //         return redirect('/leader/dashboard');
    //     } else {
    //         return redirect('/member/dashboard');
    //     }
    // }
    public function index()
    {
        return view('home');
    }

    
    

    // public function index()
    // {
    //     return view('index');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        // dd(Hash::make('12345678'));
        $projects = Project::with(['teams' => function ($q) {
            $q->with('users', function ($q) {
                $q->where('role_id', 2)
                    ->where('is_leader', true);
            });
        }])->get();
        $leaders = User::isLeader()->count();
        $members = User::isMember()->count();

        $teams = Team::count();
        $tasks = Task::get();
        // dd($projects);
        $new = $tasks->where('type', 'NEW')->count();

        $revamp = $tasks->where('type', 'REVAMP')->count();

        $redesign = $tasks->where('type', 'REDESIGN')->count();

        $innerPages = $tasks->where('type', 'INNER_PAGES')->count();

        $revision = $tasks->where('type', 'REVISION')->count();
        // dd($new);
        return view('admin.dashboard', get_defined_vars());
    }

    public function projectDetail($id)
    {
        $project = Project::with(['tasks', 'teams' => function ($q) {
            $q->with('users');
        }])->find($id);
        // dd($project);
        // $project = Project::;
        return view('admin.project-detail', get_defined_vars());
    }

    public function leader()
    {
        // dd('hello');
        $leaders = User::whereHas('team')->where('role_id', 2)->where('is_leader', true)->get();
        // dd($leaders);
        return view('admin.leader.index', get_defined_vars());
    }

    // public function leaderSearch(Request $request)
    // {

    //     if ((string)$request->keyword == 'all_data' ) {
    //         $leaders = User::with('team')->where('role_id', 2)->where('is_leader', true)->get();
    //     }else{
    //         $leaders = User::with('team')->where('name', 'LIKE', '%' . $request->keyword . '%')->where('is_leader', true)->get();
    //     }

    //     return response()->json([
    //         'leaders' => $leaders,
    //     ]);
    // }

    public function leaderCreate()
    {
        return view('admin.leader.create');
    }

    public function leaderShow($id)
    {
        $leaderDetail = User::with(['team', 'role'])->find($id);
        // dd($leaderDetail);
        return view('admin.leader.detail', get_defined_vars());
    }

    public function leaderEdit($id)
    {
        $leaderEdit = User::with('team')->find($id);
        // dd($leaderEdit);
        return view('admin.leader.edit', get_defined_vars());
    }

    public function leaderDelete($id)
    {

        $leaderDelete = User::find($id);
        $leaderDelete->delete();
        Alert::warning('Congrats', "You've Successfully delete Leader");
        // $leaders = User::whereHas('team')->where('role_id', 2)->where('is_leader', true)->get();
        return redirect('/admin/leader');
    }

    public function leaderUpdate(Request $request, $id)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'required|string|min:8',
            'phone' => 'required|numeric',
            'address' => 'required',
        ]);

        if (!$request->is_active) {

            $isActive = $request->is_active;
        } else {
            $isActive = $request->is_active;
        }
        // dd($request->all());
        $leaderUpdate = User::find($id);
        $leaderUpdate->name = $request->name;
        $leaderUpdate->role_id = 2;
        $leaderUpdate->team_id = $request->team_id;
        $leaderUpdate->email = $request->email;
        $leaderUpdate->password = Hash::make($request->password);
        $leaderUpdate->phone = $request->phone;
        $leaderUpdate->gender = $request->gender;
        $leaderUpdate->dob = $request->dob;
        $leaderUpdate->address = $request->address;
        $leaderUpdate->is_active = $isActive ? 1 : 0;
        $leaderUpdate->is_leader = 1;
        $leaderUpdate->updated_at = now();
        // $leaderUpdate->save();
        if ($leaderUpdate->save()) {
            Alert::info('Congrats', "You've Successfully update Leader");
            return redirect('admin/leader');
        }
    }

    public function leaderStore(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'phone' => 'required|numeric',
            'address' => 'required',
        ]);

        if (!$request->is_active) {

            $isActive = $request->is_active;
        } else {
            $isActive = $request->is_active;
        }
        // dd($request->all());
        $leader = new User();
        $leader->name = $request->name;
        $leader->role_id = 2;
        $leader->team_id = $request->team_id;
        $leader->email = $request->email;
        $leader->password = Hash::make($request->password);
        $leader->phone = $request->phone;
        $leader->gender = $request->gender;
        $leader->dob = $request->dob;
        $leader->address = $request->address;
        $leader->is_active = $isActive ? 1 : 0;
        $leader->is_leader = 1;
        $leader->created_at = now();
        // $leader->save();
        if ($leader->save()) {
            Alert::success('Congrats', "You've Successfully create Leader");
            return redirect('admin/leader');
        }
    }
}
