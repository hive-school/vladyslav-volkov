<?php
include 'NewUser.php';
include 'Address.php';
$arguments = [
    'address' => 'Kiev',
    'street' => 'Skovorody',
];

$user1 = new NewUser($arguments);
//$user2 = new NewUser($arguments);

//echo (string)$user1->getStreet() . PHP_EOL;
$user1->setStreet('Skovorody');
//echo $user1->getStreet();

$user2 = clone $user1;


//echo $user2;
//
//
//$a = function($value) {echo $value;};
//$a(1);
//if (is_callable($user2)) {
//    $user2([1,2]);
//     $user2->__invoke();
//
//}

$string = serialize($user1);
echo $string . PHP_EOL;
method_exists($user1, '__sleep');




$user2 = clone $user1;
$user1 === serialize($user2);



$array = [
    'email' => 'vlvol@ciklum.com'
];

$user2->setEmail();



//var_dump(unserialize($string));

//echo $user->address;
//
//$user->firstName = 'Kiev';


