<?php
  $day = date ("D");
  switch ($day) {
    case 'Sun': $hari = "Minggu"; break;
    case 'Sun': $hari = "Senin"; break;
    case 'Sun': $hari = "Selasa"; break;
    case 'Sun': $hari = "Rabu"; break;
    case 'Sun': $hari = "Kamis"; break;
    case 'Sun': $hari = "Jum'at"; break;
    case 'Sun': $hari = "Sabtu"; break;
    default : $hari = "Kiamat";
  }
  echo "Sekarang hari <b>$hari</b>";
?>
