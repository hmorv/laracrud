<?php

use Illuminate\Database\Seeder;
use App\Dado;
use Faker\Factory as Faker;

class DadosTableSeeder extends Seeder
{
	const MAX_DADOS = 50;
	private $colores = ['AZUL', 'MAGENTA', 'ROJO', 'NEGRO', 'FUEGO', 'GRIS'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

        for($i = 0; $i < self::MAX_DADOS; $i++) {
        	Dado::create([
        		'color' => $this->getRandomColor(
        			count($this->colores) - 1
        		),
        		'caras' => $faker->numberBetween(2, self::MAX_DADOS),
        		'carga' => rand(0,100)
        	]);
        }
    }

    public function getRandomColor(int $max) : string
    {	
    	$min = 0;
    	return $this->colores[rand($min, $max)];
    }
}
