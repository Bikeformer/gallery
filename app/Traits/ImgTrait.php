<?php

namespace App\Traits;

use Image;

trait ImgTrait
{

    /**
     * Save img
     *
     * @param $img
     * @return string $imgName
     */
    private function img($img)
    {
        $imgName = $this->generateImgName() . '.' . $img->getClientOriginalExtension();

        $this->saveImg($imgName, $img);
        $this->saveImg($imgName, $img, true);

        return $imgName;
    }

    private function saveImg($imgName, $img, $reSize = false)
    {
        $img = Image::make($img);

        $patch = public_path() . env('GALLERY_IMG_PATCH');

        if($reSize) {
            $img->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
            });

            $patch .= 'lite/';
        } else {
            $patch .= 'full/';
        }

        $img->save($patch . $imgName);
    }

    private function generateImgName()
    {
        return str_random(20);
    }

}