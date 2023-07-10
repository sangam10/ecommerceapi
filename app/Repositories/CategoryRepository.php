<?php
namespace App\Repositories;

use App\Interfaces\ICategory;
use App\Models\Category;

class CategoryRepository extends BaseRepository implements ICategory{
    public function __construct(Category $category)
    {
        parent::__construct($category);
    }
}