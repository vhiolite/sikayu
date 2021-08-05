<?php

namespace Database\Factories;

use App\Models\Kayu;
use Illuminate\Database\Eloquent\Factories\Factory;

class KayuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kayu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name_barang = $this->faker->unique()->words($nb=4, $asText=true);
        return [
            'nama_barang' => $name_barang,
            'jumlah' => $this->faker->unique()->numberBetween(1, 25),
            'harga' => $this->faker->unique()->numberBetween(100000, 900000)
        ];
    }
}
