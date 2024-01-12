<?php

namespace Database\Factories;

use App\Models\PackingList;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class PackingListFactory extends Factory
{
    protected $model = PackingList::class;

    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "startDate" => fake()->dateTimeInInterval('+2 weeks', '+2 weeks')->format('Y-m-d'),
            "endDate" => fake()->dateTimeInInterval('+4 weeks', '+2 weeks')->format('Y-m-d'),
            "description" => fake()->text(100),
            "notes" =>fake()->text(100),
        ];
    }
}
