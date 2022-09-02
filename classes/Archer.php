<?php

class Archer extends Character {

    public function __construct(string $name, int $hp, int $def, int $att) {
        parent::__construct($name, $hp, $def, $att);
    }

    public function attack(Character $character, int $distance): void {
        $dammage = round($this->att * (1 + $distance/10 ));
        $character->takeDammage($dammage);
    }
}

?>
