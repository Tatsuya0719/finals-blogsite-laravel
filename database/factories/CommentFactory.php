<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        // Get all existing post IDs and user IDs
        $postIds = Post::pluck('id')->all();
        $userIds = User::pluck('id')->all();
        
        // Use an existing post_id and user_id to avoid integrity constraint violations
        return [
            'post_id' => $this->faker->randomElement($postIds),
            'user_id' => $this->faker->randomElement($userIds),
            'comment_content' => $this->faker->paragraph(2),
            'created_at' => $this->faker->dateTimeThisYear(),
            'updated_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}