<?php

namespace App\Handlers;

use App\Exceptions\ImageNotFound;

class ImageHandler
{
    /**
     * @throws ImageNotFound
     *
     * @return string
     */
    public function findImage(): string
    {
        $filePath = 'images/image.jpg';

        $file = fopen($filePath, "rb");

        if ($file) {
            $image = fread($file, filesize($filePath));
            fclose($file);

            return $image;
        }

        throw new ImageNotFound($filePath);
    }
}
