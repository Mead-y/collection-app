<?php
require '../functions.php';
use PHPUnit\Framework\Testcase;
class displayAnimalsTest extends Testcase {
    public function testSuccessDisplayAnimal(){
        $input = array(['name' => 'Polar Bear','status' => 'Vulnerable Species', 'weight_kg' => 600, 'threat' => 'Climate Change','diet' => 'Carnivore','distribution' => 'Arctic','image' =>'image']);

        $expected = "<div class='animals'><img src='image' alt = 'Polar Bear'><h2> Name: Polar Bear<h2> Status: Vulnerable Species<h2> Weight: 600 KG<h2> Threat: Climate Change<h2> Diet: Carnivore<h2> Arctic</div>";
        $case = displayAnimals($input);
        $this -> assertEquals($expected, $case);
    }
}

class displayAnimalsTest extends Testcase {
    public function testFailureDisplayAnimal(){
        $input = 'hello';

        $expected = "<div class='animals'><img src='image' alt = 'Polar Bear'><h2> Name: Polar Bear<h2> Status: Vulnerable Species<h2> Weight: 600 KG<h2> Threat: Climate Change<h2> Diet: Carnivore<h2> Arctic</div>";
        $case = displayAnimals($input);
        $this -> assertEquals($expected, $case);
    }
}

class displayAnimalsTest extends Testcase {
    public function testMaformedDisplayAnimal(){
        $input = 1;
        $this->expectException(typeError::class);
    }
}

