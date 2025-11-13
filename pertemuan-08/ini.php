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
$_SESSION["sesnim"] = $sesnim;
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sestmptlhr"] = $sestmptlhr;
$_SESSION["sestgllhr"] = $sestgllhr;
$_SESSION["seshobi"] = $seshobi;
$_SESSION["sespasangan"] = $sespasangan;
$_SESSION["sespekerjaan"] = $sespekerjaan;
$_SESSION["sesortu"] = $sesortu;
$_SESSION["seskakak"] = $seskakak;
$_SESSION["sesadik"] = $sesadik;
?>