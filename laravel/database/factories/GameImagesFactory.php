<?php

namespace Database\Factories;

use App\Models\GameImages;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class GameImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GameImages::class;
    /**
     * l'array di immagine di prova tra cui scegliere
     * @var array
     */
    public $images;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {        
        $this->images = Storage::files("public/gamesimgs/");
        return [
            'path' => explode("/",$this->faker->randomElement($this->images))[2],
        ];
    }
}
