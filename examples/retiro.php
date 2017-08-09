

<?php
require_once '../lib/block_io.php';
require_once '../lib/credencia_retiro.php';

/* Replace the $apiKey with the API Key from your Block.io Wallet. A different API key exists for Dogecoin, Dogecoin Testnet, Litecoin, Litecoin Testnet, etc. */
$block_io = new BlockIo($apiKey, $pin, $version);


$monto = 0.001;

try {
    /*
      $block_io->withdraw_from_addresses(array('amounts' => 'AMOUNT1,AMOUNT2,...', 'from_addresses' => 'ADDRESS1,ADDRESS2,...', 'to_addresses' => 'ADDRESS1,ADDRESS2,...'));
    */
    $response = $block_io->withdraw_from_addresses(array('amounts' => $monto, 'from_addresses' => $dir1, 'to_addresses' => $dir3));
    echo "*** Deposit Proof (Tx ID): " . $response->data->txid . "\n";
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}


?>
