<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    
    public function definition(): array
    {
        return [
          'user_id' => rand(1,10),
          'title' => $this -> faker-> sentence,
          'slug' => $this -> faker-> slug,
          'content' => $this -> faker-> text('1600'),
        ];
    }
}
