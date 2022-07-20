<?php

namespace Database\Factories;

use App\Models\Reply;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reply_id'=>function(){
                return Reply::all()->random();
            },
            'user_id'=>function(){
                return User::all()->random();
            }
        ];
    }
}
