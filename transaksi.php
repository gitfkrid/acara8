<?php include ("model.php");?>

<?php 
    $minyak = new trx;
    $gula = new trx;
    $kembalian;
    $dibayar;
    $total;

    $minyak->set_jual(23000);
    $gula->set_jual(10000);
    
    $total = $minyak->get_jual() + $gula->get_jual();
    $dibayar = 50000;
    $kembalian = $dibayar - $total;

    echo "Total Belanja : " . $total;
    echo ", Dibayar : " . $dibayar;
    echo ", Kembalian : " . $kembalian;
?>