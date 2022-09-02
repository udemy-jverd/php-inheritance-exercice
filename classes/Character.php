<?php

abstract class Character {
    protected string $name;
    protected int $hp;
    protected int $def;
    protected int $att;

    public function __construct(string $name, int $hp, int $def, int $att) {
        $this->name = $name;
        $this->hp = $hp;
        $this->def = $def;
        $this->att = $att;
    }

    abstract function attack(Character $character, int $distance): void;

    public function takeDammage(int $att): void {
        $this->hp = $att > $this->hp ? 0 : $this->hp - $att;
    }

    public function getHp(): int {
        return $this->hp;
    }

}

?>
