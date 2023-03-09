<?php

namespace App\Http\Controllers;

use App\Models\adsApprovalModel;
use App\Models\adsModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

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

    public function getApprovedAds(Request $request)
    {
        if ($request->ajax()) {
            $data = adsModel::where('user_id', $request->userid)->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <a class="edit btn btn-success btn-sm" href="' . route('users.show-approve-ad', ['recordid' => $row->id, 'action' => 'view', 'userid' => $row->user_id]) . '">View</a>
                    <a href="javascript:void(0)" onclick=deleteApproveAd("' . $row->id . '") class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function viewAd($recordid = '', $action = '')
    {
        view()->share([
            'page_name' => 'View Ads',
        ]);
        return view('admin.ads.view_ads');
    }

    public function getUnApprovedAds(Request $request)
    {
        $data = adsApprovalModel::where('user_id', $request->userid)->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '
                <a class="edit btn btn-success btn-sm" href="' . route('users.show-unapproved-ads', ['recordid' => $row->id, 'userid' => $row->user_id]) . '">View</a>
                <a href="javascript:void(0)" onclick=deleteUnApproveAd("' . $row->id . '") class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function showUnapprovedAds($recordid = '', $userid = '')
    {
        $data = '';
        if ($recordid != '') {
            $data = adsApprovalModel::find($recordid);
        }
        if (empty($data))
            return view('errors.404');
        view()->share([
            'page_name' => 'Approve Ads',
            'ads_approval_data' => $data,
        ]);
        return view('admin.ads_approve.view_ads');
    }
}
