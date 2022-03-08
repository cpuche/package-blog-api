<?php

namespace Cpuche\Blog\Api\Database\factories;

use Cpuche\Blog\Api\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
	protected $model = Post::class;
	
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
