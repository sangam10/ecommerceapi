<?php
namespace App\Repositories;

use App\Interfaces\IBase;
use App\Models\Image;

class ImageRepository extends BaseRepository implements IBase{
    public function __construct(Image $image)
    {
        parent::__construct($image);
    }
}