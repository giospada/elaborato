<?php

namespace Database\Factories;

use App\Models\Games;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class GamesFactory extends Factory
{

    

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
            'prezzo'=>$this->faker->randomFloat(2,0,10)
        ];
    }
}

/** download image
import requests
import re
import os
import base64

firstdir="tmp"
r = requests.get('https://itch.io/')
link = re.compile('class="title" href="(.*?)"')
imglink = re.compile('<a data-background_image="(.*?)" class="game_thumb"')
allimg=re.compile('src="(https://img.*?)"')


links=link.findall(r.text)
imglinks=imglink.findall(r.text)

for i in range(0,len(links)):
    print(links[i])
    print(imglinks[i])
    response = requests.get(imglinks[i])
    name=links[i].split("/")[-1];
    os.mkdir(firstdir+"/"+str(name)) 
    os.mkdir(firstdir+"/"+str(name)+"/imgs") 
    with open(firstdir+"/"+str(name)+"/logo", 'wb') as f:
        f.write(response.content)
    
    response = requests.get(links[i])
    for j in allimg.findall(response.text):
        nname=base64.b32encode(os.urandom(30)).decode()
        
        res = requests.get(j)
        with open(firstdir+"/"+str(name)+"/imgs/"+nname, 'wb') as f:
            f.write(res.content)



    i+=1

    metdo per aggiungere tutti 

    public function createnew()
    {
        $games = Storage::directories("public/tmp/");
        $users=User::all();
        $gen=Factory::create();
        $count=20;
        foreach ($games as $game) {
            $count--;
            if($count==0)break;
            $name = explode("/", $game)[2];
            $hashedname = base64_encode($name);
            Storage::copy($game . '/logo', 'public/games/' . $hashedname);
            $user=$users[rand(0,count($users)-1)];
            $gameobj = Games::create([
                'user_id' => $user->id,
                'titolo' => str_replace("-"," ",$name),
                'descrizione' => $gen->paragraph(),
                'prezzo' => $gen->randomFloat(2,0,10),
                'logo' => $hashedname,
            ]);
            $imgs = Storage::files("public/tmp/".$name."/imgs/");
            foreach ($imgs as $img) {
                $iname = last(explode("/", $img));
                Storage::copy($img, 'public/gamesimgs/' .$iname);    
                GameImages::create([
                    'game_id' => $gameobj->id,
                    'path' => $iname
                ]);
            }
        }
        return redirect('/games');
    }

**/