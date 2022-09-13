<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $mID = Member::all()->pluck('id');
        return [
            "member_id"=>$this->faker->randomElement($mID),
            "amount"=>5000,
            "paid_at"=>$this->faker->dateTimeInInterval('-3 years','+3 years')
        ];
    }
}
