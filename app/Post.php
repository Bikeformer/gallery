<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Traits\ImgTrait;

    protected $fillable = ['img', 'description'];

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 12;

    public function setImgAttribute($value)
    {
        if($value !== null){
            $imgName = $this->img($value);
            $this->attributes['img'] = $imgName;
        }
    }

    public function patchLiteImg()
    {
        return env('GALLERY_IMG_PATCH') . 'lite/' . $this->img;
    }

    public function patchFullImg()
    {
        return env('GALLERY_IMG_PATCH') . 'full/' . $this->img;
    }

}
