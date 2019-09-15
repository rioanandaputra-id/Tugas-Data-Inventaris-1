<?php
$xml =  new DOMDocument('1.0','UTF-8');
$rootElement = $xml->createElement('DataMahasiswa');
$mhsAtribut = $xml->createAttribute('jurusan');
$mhsAtribut->value='Ilmu Komputer';
$rootElement->appendChild($mhsAtribut);
$dataMhs=$xml->appendChild($rootElement);

$mhsElement = $xml->createElement('Mahasiswa');
$elNPM = $xml->createElement('NPM','1707051001');
$elNama = $xml->createElement('Nama','Rudiyanto');
$rootElement->appendChild($mhsElement);
$mhsElement->appendChild($elNPM);
$mhsElement->appendChild($elNama);   

echo $xml->saveXML();