<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function usersList()
    {
        view()->share([
            'page_name' => 'Users List',
        ]);
        return view('admin.users.user_list');
    }

    public function getAllusers(Request $request)
    {
        $data = '';
        if ($request->has('data') || $request->data != '') {
            $input = json_decode($request->data);
            if ($input->condition == 'all') {
                $data = User::where('id', '!=', Auth::id())->paginate(10);
            }
        }
        return response()->json([
            'status' => true,
            'data' => $data,
        ]);
    }

    public function showUserDetails($userid = '')
    {
        view()->share([
            'page_name' => 'User Details',
            'user_details' => User::find($userid),
        ]);
        return view('admin.users.user_details');
    }
}
