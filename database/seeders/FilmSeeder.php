<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
        	[
	        	'title' => 'The Godfather',
	        	'adult' => false,
	        	'backdrop_path' => '/rSPw7tgCH9c6NqICZef4kZjFOQ5.jpg',
	        	'overview' => 'Spanning the years 1945 to 1955, a chronicle of the fictional Italian-American.',
	        	'video' => '/3bhkrj58Vtu7enYsRolD1fZdja1.jpg',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
	        	'title' => 'The Shawshank Redemption',
	        	'adult' => false,
	        	'backdrop_path' => "/rSPw7tgCH9c6NqICZef4kZjFOQ5.jpg",
	        	'overview' => 'Framed in the 1940s for the double murder of his wife and her lover, upstanding banker Andy Dufresne.',
	        	'video' => "/3bhkrj58Vtu7enYsRolD1fZdja1.jpg",
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
	        	'title' => 'The Godfather Part II',
	        	'adult' => false,
	        	'backdrop_path' => "/rSPw7tgCH9c6NqICZef4kZjFOQ5.jpg",
	        	'overview' => 'In the continuing saga of the Corleone crime family, a young Vito Corleone grows up in Sicily and in 1910s New York.',
	        	'video' => "/3bhkrj58Vtu7enYsRolD1fZdja1.jpg",
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'title' => 'Dilwale Dulhania Le Jayenge',
	        	'adult' => true,
	        	'backdrop_path' => "/rSPw7tgCH9c6NqICZef4kZjFOQ5.jpg",
	        	'overview' => 'Raj is a rich, carefree, happy-go-lucky second generation NRI.',
	        	'video' => "/3bhkrj58Vtu7enYsRolD1fZdja1.jpg",
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'title' => 'The Godfather',
	        	'adult' => true,
	        	'backdrop_path' => "/rSPw7tgCH9c6NqICZef4kZjFOQ5.jpg",
	        	'overview' => 'Spanning the years 1945 to 1955, a chronicle of the fictional Italian-American Corleone crime family.',
	        	'video' => "/3bhkrj58Vtu7enYsRolD1fZdja1.jpg",
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'title' => 'Schindlers List',
	        	'adult' => false,
	        	'backdrop_path' => "/rSPw7tgCH9c6NqICZef4kZjFOQ5.jpg",
	        	'overview' => 'The true story of how businessman Oskar Schindler saved over a thousand Jewish lives from the Nazis.',
	        	'video' => "/3bhkrj58Vtu7enYsRolD1fZdja1.jpg",
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'title' => 'Cosas imposibles',
	        	'adult' => false,
	        	'backdrop_path' => "/rSPw7tgCH9c6NqICZef4kZjFOQ5.jpg",
	        	'overview' => 'Matilde is a woman who, after the death of her husband - a man who constantly abused her',
	        	'video' => "/3bhkrj58Vtu7enYsRolD1fZdja1.jpg",
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}
