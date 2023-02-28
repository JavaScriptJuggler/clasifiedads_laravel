<?php

function imageUploader($request, $dataname = '')
{
    if ($dataname == '')
        $image = $request->file('image');
    else
        $image = $request->file($dataname);
    $input['imagename'] = time() . '.' . $image->getClientOriginalName();
    $destinationPath = public_path('/document_bucket');
    $image->move($destinationPath, $input['imagename']);
    $finalImageUrl = $input['imagename'];
    return $finalImageUrl;
}

function multiImageUploader($request, $dataName)
{
    $asset_url = [];
    $images = $request->file($dataName);
    if (count($images) > 0) {
        foreach ($images as $key => $image) {
            $input['imagename'] = time() . '.' . $image->getClientOriginalName();
            $destinationPath = public_path('/document_bucket');
            $image->move($destinationPath, $input['imagename']);
            $finalImageUrl = $input['imagename'];
            array_push($asset_url, $finalImageUrl);
        }
    }
    return $asset_url;
}
