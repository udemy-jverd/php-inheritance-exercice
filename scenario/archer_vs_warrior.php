<?php

$archer = new Archer('Robin', 100, 50, 50);
$warrior = new Warrior('Vlad', 200, 100, 50);
$distance = 3;

$i = 1;
while ($archer->getHp() > 0 && $warrior->getHp() > 0) {
    echo 'ROUND ' . $i . "\n";
    $archer->attack($warrior, $distance);
    $warrior->attack($archer, $distance);
    $i++;
    if ($distance > 1) {
        $distance--;
    };
    echo 'Warrior HP : ' . $warrior->getHp() . "\n";
    echo 'Archer HP : ' . $archer->getHp() . "\n";
    echo "\n";
}
if ($archer->getHp() > $warrior->getHp()) {
    echo 'WINNER : ARCHER' . "\n";
} else {
    echo 'WINNER : WARRIOR' . "\n";
}

?>
