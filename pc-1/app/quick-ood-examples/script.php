<?php
$user = new User;
$door = new WoodDoor;
$bottle = new Bottle;
$safe = new DepositSafe;
$user->takeSomethingToOpen($door);
$user->takeSomethingToOpen($bottle);
$user->takeSomethingToOpen($safe);
$user->takeSomethingToLock($door);
$user->takeSomethingToLock($safe);
$door->getColor();
$user->getColorOfTheDoor($door);