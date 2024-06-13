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
        $newWine = new Wine();
        $newWine->winery = $newWine['winery']; 
        $newWine->wine = $newWine['wine'];
        $newWine->rating = $newWine['rating'];
        $newWine->location = $newWine['location'];
        $newWine->image = $newWine['image'];
        $newWine->save();
        // dd($newWine);
    }
}
