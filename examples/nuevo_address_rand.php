<?php
require_once '../lib/block_io.php';



$block_io = new BlockIo($apiKey, $pin, $version);



$newAddressInfo = $block_io->get_new_address();
echo "address: ".$newAddressInfo->data->address."<br>";
echo "label: ".$newAddressInfo->data->label."<br>";




?>
