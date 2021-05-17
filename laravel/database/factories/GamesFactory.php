<?php

namespace Database\Factories;

use App\Models\Games;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class GamesFactory extends Factory
{

/** download image
import requests
import re
import os
import base64


r = requests.get('https://itch.io/')
p = re.compile('<a data-background_image="(.*?)" class="game_thumb"')
for url in p.findall(r.text):
    response = requests.get(url)
    name=base64.b32encode(os.urandom(30)).decode()
    
    with open("tmp/"+name, 'wb') as f:
        f.write(response.content)

**/
    

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Games::class;
    
    /**
     * l'array di immagine di prova tra cui scegliere
     * @var array
     */
    public $images;

    public function definition()
    {

        $this->images = Storage::files("public/games/");
        return [
            'titolo' => $this->faker->word(),
            'descrizione' => $this->faker->paragraph(),
            'logo' => explode("/",$this->faker->randomElement($this->images))[2],
            'prezzo'=>$this->faker->randomFloat(2,0,1)
        ];
    }
}
