<?php

namespace App\Services;

use Imagick;
use Illuminate\Http\Request;

class ImageConvertService
{
    private Imagick $imagick;

    public function __construct()
    {
        $this->imagick = new Imagick();
    }

    /**
     * @param Request $request
     * @return Imagick
     * @throws \ImagickException
     */
     public function convert(Request $request): Imagick
     {
         $file       = $request->file;
         $resolution = $request->resolution;
         $extension  = $request->extension;

         $this->imagick->setResolution($resolution[0], $resolution[1]);
         $this->imagick->readImage($file);
         $this->imagick->setImageFormat($extension);
         $this->imagick->mergeImageLayers(14); //static

         return $this->imagick;
     }
}
