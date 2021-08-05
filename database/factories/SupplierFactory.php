<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nama_supplier = $this->faker->unique()->words($nb=4, $asText=true);
        return [
            'nama_supplier' => $nama_supplier,
            'alamat' => $this->faker->text(25)
        ];
    }
}
