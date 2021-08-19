<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class PositionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Position::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_jabatan' => $this->faker->randomElement(['Staf IT', 'Staf Finance']),
            'gaji_pokok' => $this->faker->randomElement([5000000, 45000000]),
            'tunjangan_jabatan' => $this->faker->randomElement([300000, 250000]),
            'tunjangan_makan_perhari' => $this->faker->randomElement([30000, 25000]),
            'tunjangan_transport_perhari' => $this->faker->randomElement([25000, 20000]),
        ];
    }
}
