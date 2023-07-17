<?php

namespace Database\Factories;

use App\models\Post;
use App\models\Category;
use App\models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>$this->faker->title(20),
            'content'=>$this->faker->text,
            'image'=>$this->faker->imageURL(),
            'likes'=>random_int(1, 2000),
            'is_published'=>1,
            'category_id'=> Category::get()->random()->id
        ];
    }
}
