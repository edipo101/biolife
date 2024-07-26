<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
	use HasFactory;

	public function category(): belongsTo
	{
		return $this->belongsTo(Category::class);
	}

	public function scopeName($query, $name){
		if($name)
			return $query->where('name', 'LIKE', "%$name%");
	}

	public function scopeCategory($query, $cat)
	{
		if($cat != 'all')
		{
			$category = Category::where('slug', $cat)->firstOrFail();
			return $query->where('category_id', $category->id);
		}
	}

	public function rating(): Attribute
	{
		$sum_stars = $this->star1 + $this->star2*2 + $this->star3*3 + $this->star4*4 + $this->star5*5;
		$sum_users = $this->star1 + $this->star2 + $this->star3 + $this->star4 + $this->star5;
		return Attribute::make(
				get: fn() => number_format($sum_stars/$sum_users, 1),
		);
	}

	public function sum_rating()
	{
		return $this->star1 + $this->star2 + $this->star3 + $this->star4 + $this->star5;
	}
}


