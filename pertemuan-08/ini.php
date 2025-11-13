<?php
session_start();
  $sesnim = $_POST["txtNim"];
  $sesnama = $_POST["txtNama"];
  $sestmptlhr = $_POST["txtTmptlhr"];
  $sestgllhr = $_POST["txtTgllahir"];
  $seshobi = $_POST["txtHobi"];
  $sespasangan = $_POST["txtPasangan"];
  $sespekerjaan = $_POST["txtPekerjaan"];
  $sesortu = $_POST["txtOrtu"];
  $seskakak = $_POST["txtKakak"];
  $sesadik = $_POST["txtAdik"];
$SESSION["sesnim"] = $sesnim;
$SESSION["sesnama"] = $sesnama;
$SESSION["sestmptlhr"] = $sestmptlhr;
$SESSION["sestgllhr"] = $sestgllhr;
$SESSION["seshobi"] = $seshobi;
$SESSION["sespasangan"] = $sespasangan;
$SESSION["sespekerjaan"] = $sespekerjaan;
$SESSION["sesortu"] = $sesortu;
$SESSION["seskakak"] = $seskakak;
$SESSION["sesadik"] = $sesadik;
?>