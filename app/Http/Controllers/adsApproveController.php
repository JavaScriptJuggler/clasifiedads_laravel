<?php

namespace App\Http\Controllers;

use App\Models\adsApprovalModel;
use App\Models\adsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class adsApproveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adsApprove()
    {
        view()->share([
            'page_name' => 'Approve Ads',
        ]);
        return view('admin.ads_approve.approve_ads');
    }

    public function getUnApprovedAds(Request $request)
    {
        if ($request->ajax()) {
            $data = adsApprovalModel::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <a class="edit btn btn-success btn-sm" href="' . route('ads-approve.approve-ads', ['recordid' => $row->id]) . '">View</a>
                    <a href="javascript:void(0)" onclick=deleteRecord("' . $row->id . '") class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function deleteApprovalRequest(Request $request)
    {
        if ($request->has('id') && $request->id != '') {
            $isSuccess = adsApprovalModel::find($request->id)->delete();
            return response()->json([
                'status' => $isSuccess,
                'message' => $isSuccess ? 'Approval request deleted successfully' : 'Something went wrong... please contact developer',
            ]);
        }
    }

    public function approveAds($recordid)
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

    public function approveThisAd(Request $request)
    {
        if ($request->has('id') && $request->id != '') {
            $getAd = adsApprovalModel::find($request->id);
            if (empty($getAd))
                return response()->json([
                    'status' => false,
                    'message' => 'Something went wrong... please contact developer'
                ]);
            $dataArray = [
                'product_name' => $getAd->product_name,
                'cover_image' => $getAd->cover_image,
                'product_image' => $getAd->product_image,
                'product_category' => $getAd->product_category,
                'product_sub_category' => $getAd->product_sub_category,
                'price' => $getAd->price,
                'product_condition' => $getAd->product_condition,
                'ad_category' => $getAd->ad_category,
                'ads_color' => $getAd->ads_color,
                'product_description' => $getAd->product_description,
                'product_category_id' => $getAd->product_category_id,
                'product_subcategory_id' => $getAd->product_subcategory_id,
                'ad_category_id' => $getAd->ad_category_id,
                'price_condition' => $getAd->price_condition,
                'price_condition_id' => $getAd->price_condition_id,
                'date' => date('Y-m-d'),
                'user_id' => $getAd->user_id,
                'user_type' => $getAd->user_type,
                'seller_type' => $getAd->seller_type,
                'location' => $getAd->location,
                'city_id' => $getAd->city_id,
                'city_name' => $getAd->city_name,
                'units' => $getAd->units,
                'payment_mode' => $getAd->payment_mode,
                'tags' => $getAd->tags,
                'service_area' => $getAd->service_area,
            ];
            if ($getAd->main_ad_id != null || $getAd->main_ad_id != '') {
                $getDataIsExist = adsModel::find($getAd->main_ad_id);
                if (!empty($getDataIsExist)) {
                    if (($getDataIsExist->cover_image != '' || $getDataIsExist->cover_image != null) && file_exists(public_path('/document_bucket/' . $getDataIsExist->cover_image))) {
                        if ($getDataIsExist->cover_image != $getAd->cover_image)
                            unlink(public_path('/document_bucket/' . $getDataIsExist->cover_image));
                    }
                    if ($getDataIsExist->product_image != '' && count(unserialize($getDataIsExist->product_image)) > 0) {
                        foreach (unserialize($getDataIsExist->product_image) as $key => $value) {
                            if (file_exists(public_path('/document_bucket/' . $getDataIsExist->value)) && !in_array($value, unserialize($getAd->product_image)))
                                unlink(public_path('/document_bucket/' . $value));
                        }
                    }
                }
                $isSuccess = adsModel::where('id', $getAd->main_ad_id)->update($dataArray);
                if ($isSuccess) {
                    $isSuccess = adsApprovalModel::find($request->id)->delete();
                    return response()->json([
                        'status' => $isSuccess,
                        'message' => $isSuccess ? 'Ad Request Approved' : 'Something went wrong... please contact developer',
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Something went wrong... please contact developer'
                    ]);
                }
            } else {
                $isSuccess = adsModel::create($dataArray)->save();
                if ($isSuccess) {
                    $isSuccess = adsApprovalModel::find($request->id)->delete();
                    return response()->json([
                        'status' => $isSuccess,
                        'message' => $isSuccess ? 'Ad Request Approved' : 'Something went wrong... please contact developer',
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Something went wrong... please contact developer'
                    ]);
                }
            }
        }
    }

    public function getAllUnApprovedAds()
    {
        return response()->json([
            'status' => true,
            'details' => adsApprovalModel::where('user_id', Auth::id())->paginate(10),
        ]);
    }
}
