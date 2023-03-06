<?php

namespace App\Http\Controllers;

use App\Models\adsModel;
use App\Models\socialMediaModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class profileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        view()->share([
            'page_name' => 'User Profile',
            'user_details' => Auth::user(),
            'social_media' => socialMediaModel::where('user_id', Auth::id())->first(),
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
        $user->address = $request->address;
        if ($request->has('image'))
            $user->avatar = $imageLink;
        $isSuccess = $user->save();
        return response()->json([
            'status' => $isSuccess,
            'message' => $isSuccess ? 'User profile updated successfully' : 'Something went wrong.. Please contact developer',
        ]);
    }

    public function deactivateProfile(Request $request)
    {
        adsModel::where('user_id', Auth::id())->delete();
        $isSuccess = User::find(Auth::id())->delete();

        return response()->json([
            'status' => $isSuccess,
            'message' => 'User Deactivated Successfully.. ',
        ]);
    }

    public function saveSocialLinks(Request $request)
    {
        $findData = socialMediaModel::where('user_id', Auth::id())->first();
        if (!empty($findData)) {
            foreach ($request->all() as $key => $value) {
                $findData->$key = $value;
            }
            $flag = $findData->save();
            return response()->json([
                'status' => $flag,
                'message' => $flag ? 'Links Updated Successfully' : 'Something went wrong.. Please contact developer',
            ]);
        } else {
            $input = $request->all();
            $input['user_id'] = Auth::id();
            $flag = socialMediaModel::create($input)->save();
            return response()->json([
                'status' => $flag,
                'message' => $flag ? 'Links Created Successfully' : 'Something went wrong.. Please contact developer',
            ]);
        }
    }

    public function changePassword(Request $request)
    {
        if (!empty($request)) {
            if (Hash::check($request->current_password, Auth::user()->password)) {
                $validator = Validator::make($request->all(), [
                    'new_password' => 'required|min:8',
                    'confirm_password' => 'required|same:new_password'
                ]);
                if ($validator->fails()) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Some Error Occoured',
                        'error' => $validator->messages(),
                    ]);
                } else {
                    $getUser = User::whereId(Auth::id())->update([
                        'password' => Hash::make($request->new_password),
                    ]);
                    if ($getUser) {
                        return response()->json([
                            'status' => true,
                            'message' => 'Password Changed Successfully',
                        ]);
                    } else {
                        return response()->json([
                            'status' => false,
                            'message' => 'Something went wrong...'
                        ]);
                    }
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => "Current password dosen't match",
                    'error' => [
                        'current_password' => ['Current password dosenot match'],
                    ],
                ]);
            }
        }
    }
}
