<?php


class Zipper
{
    static function zip($output_absolute_path, ...$fileNames)
    {
        $zip = new ZipArchive();
        if ($zip->open($output_absolute_path, ZipArchive::CREATE|ZIPARCHIVE::OVERWRITE) !== TRUE) {
            return false;
        }
        for ($i = 0; $i < count($fileNames); $i++) {
            if (!array_key_exists($fileNames[$i], $_FILES)) {
                return false;
            }
            $file = $_FILES[$fileNames[$i]];
            $zip->addFile($file['tmp_name'], ($i+1) . '-' . $file['name']);
        }
        $zip->close();
        return true;
    }
}
