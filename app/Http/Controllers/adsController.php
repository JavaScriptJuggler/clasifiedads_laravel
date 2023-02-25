<?php

namespace App\Http\Controllers;

use App\Models\adsCategoryModel;
use App\Models\adsModel;
use App\Models\CitiesModel;
use App\Models\priceConditionModel;
use App\Models\productCategoryModel;
use App\Models\productSubCategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function adsList()
    {
        view()->share([
            'page_name' => 'List',
            'product_category' => productCategoryModel::all(),
            'product_sub_category' => productSubCategoryModel::all(),
            'price_conditions' => priceConditionModel::all(),
            'ads_category' => adsCategoryModel::all(),
            'cities' => CitiesModel::all(),
        ]);
        return view('admin.ads.ad_list');
    }

    /* save ads */
    public function saveAds(Request $request)
    {
        // return $request->all();
        $category_id = 0;
        $sub_category_id = 0;
        $priceConditionId = 0;
        $adsCategoryId = 0;
        $adsColor = '';
        if ($request->has('productCategory') && $request->productCategory != '') {
            $isCategoryExist = productCategoryModel::where('category_name', $request->productCategory)->first();
            if (empty($isCategoryExist)) {
                $savedData = productCategoryModel::create([
                    "category_name" => $request->productCategory,
                ]);
                $category_id = $savedData->id;
            } else {
                $category_id = $isCategoryExist->id;
            }
        }

        if ($request->has('productSubCategory') && $request->productSubCategory != '') {
            $getSubCategory = productSubCategoryModel::where(['sub_category_name' => $request->productSubCategory, 'categegory_id' => $category_id])->first();
            if (empty($getSubCategory)) {
                $createSubCategory = productSubCategoryModel::create([
                    'sub_category_name' => $request->productSubCategory,
                    'category_name' => $request->productCategory,
                    'categegory_id' => $category_id,
                ]);
                $sub_category_id = $createSubCategory->id;
            } else {
                $sub_category_id =  $getSubCategory->id;
            }
        }
        if ($request->has('priceCondition') && $request->priceCondition != '') {
            $getPriceConditions = priceConditionModel::where(['condition_name' => $request->priceCondition])->first();
            if (empty($getPriceConditions)) {
                $createPriceConditions = priceConditionModel::create([
                    'condition_name' => $request->priceCondition,
                ]);
                $priceConditionId = $createPriceConditions->id;
            } else {
                $priceConditionId =  $getPriceConditions->id;
            }
        }
        if ($request->has('adsCategory') && $request->adsCategory != '') {
            $getAdsCategory = adsCategoryModel::where(['ad_category_name' => $request->adsCategory])->first();
            if (empty($getAdsCategory)) {
                $createAdsCategory = adsCategoryModel::create([
                    'ad_category_name' => $request->adsCategory,
                    'ad_category_color' => $request->adsCategoryColor != '' ? $request->adsCategoryColor : "",
                ]);
                $adsCategoryId = $createAdsCategory->id;
                $adsColor = $createAdsCategory->ad_category_color;
            } else {
                $adsCategoryId =  $getAdsCategory->id;
                $adsColor = $getAdsCategory->ad_category_color;
            }
        }
        $dataArray = [
            'product_name' => $request->productName,
            'product_image' => $request->image != '' ? imageUploader($request) : '',
            'product_category' => $request->productCategory,
            'product_sub_category' => $request->productSubCategory,
            'price' => $request->price,
            'product_condition' => $request->productCondition,
            'ad_category' => $request->adsCategory,
            'ads_color' => $adsColor,
            'product_description' => $request->description,
            'product_category_id' => $category_id,
            'product_subcategory_id' => $sub_category_id,
            'ad_category_id' => $adsCategoryId,
            'price_condition' => $request->priceCondition,
            'price_condition_id' => $priceConditionId,
            'date' => date('Y-m-d'),
            'user_id' => Auth::id(),
            'user_type' => Auth::user()->user_type,
            'seller_type' => $request->seller_type,
            'location' => $request->location,
            'city_id' => $request->city,
            'city_name' => CitiesModel::find($request->city)->city_name,
        ];

        $isSaved =  adsModel::create($dataArray)->save();
        return response()->json([
            "status" => $isSaved,
            'message' => 'New Ads Created.'
        ]);
    }

    /* get all ads */
    public function getAds()
    {
        $adsDetails = adsModel::orderBy('id', 'desc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data Fetched Successfully',
            'details' => $adsDetails,
            'product_category' => productCategoryModel::all(),
            'product_sub_category' => productSubCategoryModel::all(),
            'price_conditions' => priceConditionModel::all(),
            'ads_category' => adsCategoryModel::all(),
        ]);
    }

    /* get search results */
    public function getSearchResult(Request $request)
    {
        $ads = adsModel::select("*");
        if ($request->product_name != null && $request->product_name != '')
            $ads->where('product_name', 'LIKE', '%' . $request->product_name . '%');
        if ($request->product_condition != null && $request->product_condition != '')
            $ads->where('product_condition', 'LIKE', '%' . $request->product_condition . '%');
        if ($request->product_category != null && $request->product_category != '')
            $ads->where('product_category', 'LIKE', '%' . $request->product_category . '%');
        if ($request->price != null && $request->price != '')
            $ads->where('price', 'LIKE', '%' . $request->price . '%');
        if ($request->date != null && $request->date != '')
            $ads->where('date', 'LIKE', '%' . $request->date . '%');
        if ($request->ad_category != null && $request->ad_category != '')
            $ads->where('ad_category', 'LIKE', '%' . $request->ad_category . '%');
        $data = $ads->orderBy('id', 'desc')->get();

        return response()->json([
            "status" => true,
            "message" => "filtered Successfully",
            "details" => $data,
        ]);
    }

    /* update product category or ad category */
    public function updateProductCategory(Request $request)
    {
        if ($request->has('recordId') && $request->recordId != '') {
            $flag = true;
            $getCategoy = productCategoryModel::find($request->recordId);
            $getCategoy->category_name = $request->category_name;
            $isSuccess = $getCategoy->save();
            if ($isSuccess) {
                $updateInAds = adsModel::where('product_category_id', $request->recordId)->update([
                    'product_category' => $request->category_name,
                ]);
                if ($updateInAds) {
                    $updateInSubCategory = productSubCategoryModel::where('categegory_id', $request->recordId)->update([
                        'category_name' => $request->category_name,
                    ]);
                    if (!$updateInSubCategory) {
                        $flag = false;
                        return response()->json([
                            "status" => $flag,
                            "message" => 'Something Went Wrong.. Please Contact With Developer',
                        ]);
                    }
                } else {
                    $flag = false;
                    return response()->json([
                        "status" => $flag,
                        "message" => 'Something Went Wrong.. Please Contact With Developer',
                    ]);
                }
            } else {
                $flag = false;
                return response()->json([
                    "status" => $flag,
                    "message" => 'Something Went Wrong.. Please Contact With Developer',
                ]);
            }

            return response()->json([
                "status" => $flag,
                "message" => $flag ? 'Category Updated Successfully' : 'Something Went Wrong.. Please Contact With Developer',
            ]);
        } else {
            $find = productCategoryModel::where('category_name', $request->category_name)->first();
            if (empty($find)) {
                $issuccess = productCategoryModel::create([
                    'category_name' => $request->category_name,
                ])->save();
                return response()->json([
                    "status" => $issuccess,
                    "message" => $issuccess ? 'Category Created Successfully' : 'Something Went Wrong.. Please Contact With Developer',
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "message" => 'Category Already Exists',
                ]);
            }
        }
    }

    /* delete product category */

    public function deleteProductCategory(Request $request)
    {
        if ($request->has('recordId') && $request->recordId != '') {
            $is_success = productCategoryModel::find($request->recordId)->delete();
            return response()->json([
                "status" => $is_success,
                "message" => $is_success ? 'Category Deleted Successfully' : 'Something Went Wrong.. Please Contact With Developer',
            ]);
        }
    }

    /* update product category */
    public function updateProductSubCategory(Request $request)
    {
        $isRecordExist = productSubCategoryModel::find($request->subCatId);
        if (empty($isRecordExist)) {
            $findIfExist = productSubCategoryModel::where([
                'sub_category_name' => $request->subCatName,
                'category_name' => $request->catName,
                'categegory_id' => productCategoryModel::where('category_name', $request->catName)->first()->id,
            ])->first();
            if (empty($findIfExist)) {
                $is_success = productSubCategoryModel::create([
                    'sub_category_name' => $request->subCatName,
                    'category_name' => $request->catName,
                    'categegory_id' => productCategoryModel::where('category_name', $request->catName)->first()->id,
                ])->save();
                return response()->json([
                    "status" => $is_success,
                    "message" => $is_success ? 'Sub Category Created Successfully' : 'Something Went Wrong.. Please Contact With Developer',
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "message" => 'Same Sub-Category Already Exists For this Category',
                ]);
            }
        } else {
            $isRecordExist->sub_category_name = $request->subCatName;
            $isSuccess = $isRecordExist->save();
            if ($isSuccess) {
                $adsEntry = adsModel::where('product_category_id', $request->catId)->where('product_subcategory_id', $request->subCatId)->update([
                    'product_sub_category' => $request->subCatName,
                ]);
                return response()->json([
                    "status" => $adsEntry ? true : false,
                    "message" => $adsEntry ? 'Sub Category Updated Successfully' : 'Something Went Wrong.. Please Contact With Developer',
                ]);
            }
        }
    }

    /* delete sub category */
    public function deleteProductSubCategory(Request $request)
    {
        productSubCategoryModel::find($request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => 'SubCategory Deleted Successfully',
        ]);
    }

    /* add edit city */
    public function updateCity(Request $request)
    {
        if ($request->cityid == '') {
            $isSuccess = CitiesModel::create([
                'city_name' => $request->cityname,
            ])->save();
            return response()->json([
                'status' => $isSuccess,
                'message' => $isSuccess ? 'City Created Successfully' : 'Something Went Wrong.. Please Contact With Developer',
            ]);
        } else {
            $getCity = CitiesModel::find($request->cityid);
            if (!empty($getCity)) {
                $getCity->city_name = $request->cityname;
                if ($getCity->save()) {
                    $isSuccess =  adsModel::where('city_id', $request->cityid)->update([
                        'city_name' => $request->cityname,
                    ]);
                    if ($isSuccess) {
                        return response()->json([
                            'status' => true,
                            'message' => 'City Updated Successfully',
                        ]);
                    } else
                        return response()->json([
                            'status' => false,
                            'message' => 'Something Went Wrong.. Please Contact With Developer',
                        ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Something Went Wrong.. Please Contact With Developer',
                    ]);
                }
            }
        }
    }
}
