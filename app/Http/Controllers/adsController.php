<?php

namespace App\Http\Controllers;

use App\Models\adsCategoryModel;
use App\Models\adsModel;
use App\Models\priceConditionModel;
use App\Models\productCategoryModel;
use App\Models\productSubCategoryModel;
use Illuminate\Http\Request;

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
        $adsDetails = adsModel::all();
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
        $data = $ads->get();

        return response()->json([
            "status" => true,
            "message" => "filtered Successfully",
            "details" => $data,
        ]);
    }
}
