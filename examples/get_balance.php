<?php
require_once '../lib/block_io.php';
require_once '../lib/cred.php';


$block_io = new BlockIo($apiKey, $pin, $version);



// let's sweep the coins from the From Address to the To Address

//$amount = 100000
//$amount = $amount/100000000;


//0.01


$getBalance = $block_io->get_balance(array('label' => "default" ));
$address1 = $block_io->get_my_addresses(array());
var_dump($getBalance);

var_dump($address1->data);


echo "address: ".$address1->data->network."<br>";


?>
