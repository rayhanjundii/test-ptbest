<?php

namespace Database\Factories;

use App\Models\datadiri;
use Illuminate\Database\Eloquent\Factories\Factory;

class datadiriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = datadiri::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->word,
        'tempat_tgl_lahir' => $this->faker->word,
        'alamat' => $this->faker->word,
        'no_telp' => $this->faker->randomDigitNotNull,
        'jenis_kelamin' => $this->faker->word,
        'agama' => $this->faker->word,
        'hobi' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
