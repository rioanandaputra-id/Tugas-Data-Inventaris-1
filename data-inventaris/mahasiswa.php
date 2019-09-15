<?php
header('Content-Type: application/xml; charset=utf-8');
header('Access-Control-Allow-Origin:*');

$data = array(
    "npm"=>"1707051127",
    "nama"=>"Rio Annada Putra",
    "program_studi"=>"D3 Manajemen Infotmatika",
    "fakultas"=>"MIPA"
);
echo "<mahasiswa>";
foreach ($data as $key=>$value){
    echo "<$key>$value</$key>";
}
echo "</mahasiswa>";