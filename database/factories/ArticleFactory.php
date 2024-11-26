<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Article;
use Alirezasedghi\LaravelImageFaker\ImageFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Alirezasedghi\LaravelImageFaker\Services\Picsum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Le model correspondant à cette factory
     * @var 
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageFaker = new ImageFaker(new Picsum());

        return [
            'title' => fake()->sentence(15),
            'body' => fake()->paragraph(50),
            'user_id' => function (){
                return User::inRandomOrder()->first()->id;
            },
            'image' => $imageFaker->image(public_path('images')),
        ];
    }
}
