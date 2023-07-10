<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\ImageResource;
use App\Http\Resources\ReviewResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this);
        return [
            'product_title'=>$this->title,
            'product_desc'=>$this->desc,
            'product_featured_img'=>$this->featured_image_url,
            'product_price'=>$this->price,
            'product_quantity'=>$this->quantity,
            'product_category'=>$this->category,
            'product_discount'=>$this->when($this->discount->active == true,[
                $this->discount
            ]),
            'product_ratings'=>ReviewResource::collection($this->reviews),
            'average_rating'=>round(ReviewResource::collection($this->reviews)->avg(function($review){
                return $review->review_count;
            }),2),
            'product_images'=>ImageResource::collection($this->images),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
