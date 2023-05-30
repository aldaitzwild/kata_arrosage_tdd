<?php

require_once 'src/arrosage.php';

use PHPUnit\Framework\TestCase;

final class TestArrosage extends TestCase
{
    public function testArrosage() {

        //Arrange
        $plants = [
            ['name'=> 'Ficus', "waterLevel" => 54 ],
            ['name'=> 'Cactus', "waterLevel" => 18 ],
            ['name'=> 'Monstera', "waterLevel" => 37 ],
            ['name'=> 'Plante-paon', "waterLevel" => 23 ],
            ['name'=> 'Aglaonème', "waterLevel" => 68 ],
            ['name'=> 'Echeveria', "waterLevel" => 41 ],
            ['name'=> 'Hortensia', "waterLevel" => 7 ],
        ];

        $expectedPlants = [
            ['name'=> 'Ficus', "waterLevel" => 74 ],
            ['name'=> 'Cactus', "waterLevel" => 38 ],
            ['name'=> 'Monstera', "waterLevel" => 57 ],
            ['name'=> 'Plante-paon', "waterLevel" => 43 ],
            ['name'=> 'Aglaonème', "waterLevel" => 88 ],
            ['name'=> 'Echeveria', "waterLevel" => 61 ],
            ['name'=> 'Hortensia', "waterLevel" => 27 ],
        ];

        //Act
        $plants = arroser($plants);

        //Assert
        $this->assertSame($expectedPlants[0]['waterLevel'], $plants[0]['waterLevel']);
        $this->assertSame($expectedPlants[1]['waterLevel'], $plants[1]['waterLevel']);
        $this->assertSame($expectedPlants[2]['waterLevel'], $plants[2]['waterLevel']);
        $this->assertSame($expectedPlants[3]['waterLevel'], $plants[3]['waterLevel']);
        $this->assertSame($expectedPlants[4]['waterLevel'], $plants[4]['waterLevel']);
        $this->assertSame($expectedPlants[5]['waterLevel'], $plants[5]['waterLevel']);
        $this->assertSame($expectedPlants[6]['waterLevel'], $plants[6]['waterLevel']);
    }


    public function testArrosageWithMinimum() {

        //Arrange
        $plants = [
            ['name'=> 'Ficus', "waterLevel" => 54, 'minimum' => 86],
            ['name'=> 'Cactus', "waterLevel" => 18 ],
            ['name'=> 'Monstera', "waterLevel" => 37, 'minimum' => 50 ],
            ['name'=> 'Plante-paon', "waterLevel" => 23 ],
            ['name'=> 'Aglaonème', "waterLevel" => 68 ],
            ['name'=> 'Echeveria', "waterLevel" => 41 ],
            ['name'=> 'Hortensia', "waterLevel" => 7, 'minimum' => 43],
        ];

        $expectedPlants = [
            ['name'=> 'Ficus', "waterLevel" => 86 ],
            ['name'=> 'Cactus', "waterLevel" => 38 ],
            ['name'=> 'Monstera', "waterLevel" => 57 ],
            ['name'=> 'Plante-paon', "waterLevel" => 43 ],
            ['name'=> 'Aglaonème', "waterLevel" => 88 ],
            ['name'=> 'Echeveria', "waterLevel" => 61 ],
            ['name'=> 'Hortensia', "waterLevel" => 43 ],
        ];

        //Act
        $plants = arroser($plants);

        //Assert
        $this->assertSame($expectedPlants[0]['waterLevel'], $plants[0]['waterLevel']);
        $this->assertSame($expectedPlants[1]['waterLevel'], $plants[1]['waterLevel']);
        $this->assertSame($expectedPlants[2]['waterLevel'], $plants[2]['waterLevel']);
        $this->assertSame($expectedPlants[3]['waterLevel'], $plants[3]['waterLevel']);
        $this->assertSame($expectedPlants[4]['waterLevel'], $plants[4]['waterLevel']);
        $this->assertSame($expectedPlants[5]['waterLevel'], $plants[5]['waterLevel']);
        $this->assertSame($expectedPlants[6]['waterLevel'], $plants[6]['waterLevel']);
    }
}