<?php

function imageUploader($request)
{
    $image = $request->file('image');
    $input['imagename'] = time() . '.' . $image->getClientOriginalName();
    $destinationPath = public_path('/document_bucket');
    $image->move($destinationPath, $input['imagename']);
    $finalImageUrl = $input['imagename'];
    return $finalImageUrl;
}
