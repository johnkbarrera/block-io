<?php
require_once '../lib/block_io.php';



$block_io = new BlockIo($apiKey, $pin, $version);

$from_address = 'FROM ADDRESS';
$to_address = 'TO ADDRESS';
$private_key = 'PRIVATE KEY OF FROM_ADDRESS IN WALLET IMPORT FORMAT';

// let's sweep the coins from the From Address to the To Address


$newAddressInfo = $block_io->get_new_address(array('label' => 'shibe2'));
var_dump($newAddressInfo);




?>
