<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConvertRequest;
use App\Services\ImageConvertService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Imagick;

class ImageConvertController extends Controller
{
    public function __construct()
    {
        $this->middleware('conv.img');
    }


    /**
     * @param ConvertRequest $request
     * @param ImageConvertService $service
     * @return JsonResponse
     * @throws \ImagickException
     */
    public function convertFile(ConvertRequest $request, ImageConvertService $service): JsonResponse
    {
        $imagick = $service->convert($request);

        $filename = md5(Str::random(5) . time()) . '.png';
        $tempDir = sys_get_temp_dir();
        $fileTmpPath = $tempDir . '/' . $filename;
        $imagick->writeImage($fileTmpPath);

        return response()->json([
            'file' => $fileTmpPath
        ], 200);
    }


    /**
     * @param ConvertRequest $request
     * @param ImageConvertService $service
     * @return Imagick
     * @throws \ImagickException
     */
    public function convertBlob(ConvertRequest $request, ImageConvertService $service): Imagick
    {
        return  $service->convert($request);
    }

}
