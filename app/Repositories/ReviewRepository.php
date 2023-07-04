<?php
namespace App\Repositories;

use App\Interfaces\IReview;
use App\Models\Review;

class ReviewRepository extends BaseRepository implements IReview{
    public function __construct(Review $review)
    {
        parent::__construct($review);
    }
}