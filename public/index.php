<?php

require '../vendor/autoload.php';

use CowSay\Cow;

$moo = new Cow('Moo-Moo');
$moo->setTongue();
echo $moo;

?>