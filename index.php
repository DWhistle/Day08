<?php
require_once ('class/FactoryObj.class.php');
require_once ('class/Ship.class.php');
require_once ('class/Player.class.php');
include ('views/template/header.php');
if ($_POST['game'] = 'new') {
    $map = new FactoryObj(0, 0, 150, 100);
    $ship1 = new Ship('ship1', ['x' => 0, 'y' => 0], ['x' => 2, 'y' => 1], ['speed' => 1]);
    $ship2 = new Ship('ship2', ['x' => 10, 'y' => 10], ['x' => 13, 'y' => 15], ['speed' => 1]);
    $player1 = new Player(array('state' => 'true', 'name' => 'player1', 'icon' => '/images/Players/p1.png'));
    $map->addObj($ship1);
    $map->addObj($ship2);
    $_SESSION['map'] = $map;
    $_SESSION['player'] = $player1;
}
else
{
    $map = $_SESSION['map'];
    $player1 = $_SESSION['player'];
}
$player1->draw();
$map->drawAll();
include ('views/template/footer.php');