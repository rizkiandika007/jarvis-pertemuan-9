<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'deadline' => $this->faker->date(),
            'status' => 'Belum Selesai',
            'description' => $this->faker->paragraph(),
        ];
    }
}