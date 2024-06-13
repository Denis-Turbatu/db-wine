<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Wine;
class WineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $response = Http::get('http://api.sampleapis.com/wines/reds');
        $data = $response->json();
        foreach($data as $wine) { 
            $newWine = new Wine();
            $newWine->winery = $wine['winery'];
            $newWine->wine = $wine['wine'];
            $newWine->rating = $wine['rating']['average'];
            $newWine->location = $wine['location'];
            $newWine->image = $wine['image']; 
            $newWine->save();
        };
    }
}
