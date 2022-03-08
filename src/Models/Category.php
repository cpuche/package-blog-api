<?php

namespace Cpuche\Blog\Api\Models;

use Cpuche\Blog\Api\Database\factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $table = 'blog_categories';
    
	protected static function newFactory()
    {
    	return CategoryFactory::new();
    }
}
