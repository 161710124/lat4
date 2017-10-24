<?php

require_once 'lat4.php';

$oi = new makanan('ciki','2018','500');
echo "makananya...".$oi->get_nama().'<br>';
echo "kadaluwarsanya ...".$oi->get_kadaluwarsa().'<br>';
echo "harganya ...".$oi->get_harga().'<br>';

?>