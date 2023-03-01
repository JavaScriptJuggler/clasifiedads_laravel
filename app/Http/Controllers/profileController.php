<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function index()
    {
        view()->share([
            'page_name' => 'User Profile',
            'user_details' => Auth::user(),
        ]);
        return view('admin.profile.profile');
    }

    /* save profile */
    public function saveProfile(Request $request)
    {
        $imageLink = '';
        if ($request->has('image') && $request->image != '') {
            $imageLink = imageUploader($request, 'image');
        }
        $user = User::find(Auth::id());
        $user->name = $request->firstName . ' ' . $request->lastName;
        $user->email = $request->email;
        $user->business_name = $request->organization;
        $user->number = $request->phoneNumber;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->zip = $request->zipCode;
        if ($request->has('image'))
            $user->avatar = $imageLink;
        $isSuccess = $user->save();
        return response()->json([
            'status' => $isSuccess,
            'message' => $isSuccess ? 'User profile updated successfully' : 'Something went wrong.. Please contact developer',
        ]);
    }
}
