<?php header('Content-Type: image/jpeg');$json=json_decode(file_get_contents('../../data/nekonime.json'),true);$jumlah=count($json);$pilih=$json[rand(0,$jumlah-1)];echo file_get_contents($pilih);