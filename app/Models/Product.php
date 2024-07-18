<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;

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
}


