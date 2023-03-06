<?php

namespace App\Services;

use InterventionImage;
use Illuminate\Support\Facades\Storage;


class SampleService
{
    public static function upload($imageFile, $folderName)
    {

        $fileName = uniqid(rand() . '_'); //ユニークIDとランダムな数字を_で繋げてファイル名を作る

        $extension = $imageFile->extension();
        $fileNameToStore = $fileName . ' . ' . $extension; //ユニーク＆ランダムと拡張子を足す
        $resizedImage = InterventionImage::make($imageFile)->resize(1920, 1080)->encode(); //リサイズ 画像のサイズを1920x1080に統一する
        Storage::put('public/' . $folderName . '/' . $fileNameToStore, $resizedImage); //Storage/public/指定のフォルダに上で作成したファイル名で格納する

        return $fileNameToStore;
    }
    public static function eecho()
    {
        $mes = "eechoメゾット発動";
        dd($mes);
    }
}
