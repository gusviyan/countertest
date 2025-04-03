<?php

include "koneksi.php";

$act = $_GET['act'];
$id = $_GET['id'];
$loket = $_GET['loket'];

if ($act == "clear") {
    if ($loket == 1) {
        mysql_query("UPDATE tbl_umum SET status=1, panggil=1, loket=1 WHERE id=$id");
    } elseif ($loket == 2) {
        mysql_query("UPDATE tbl_umum SET status=1, panggil=1, loket=2 WHERE id=$id");
    } elseif ($loket == 3) {
        mysql_query("UPDATE tbl_bpjs SET status=1, panggil=1, loket=3 WHERE id=$id");
    } elseif ($loket == 4) {
        mysql_query("UPDATE tbl_bpjs SET status=1, panggil=1, loket=4 WHERE id=$id");
    } elseif ($loket == 5) {
        mysql_query("UPDATE tbl_cs SET status=1, panggil=1, loket=5 WHERE id=$id");
    }
} elseif ($act == "clearer") {
    if ($loket == 1) {
        mysql_query("UPDATE tbl_umum SET status=1, panggil=0, loket=1 WHERE id=$id");
    } elseif ($loket == 2) {
        mysql_query("UPDATE tbl_umum SET status=1, panggil=0, loket=2 WHERE id=$id");
    } elseif ($loket == 3) {
        mysql_query("UPDATE tbl_bpjs SET status=1, panggil=0, loket=3 WHERE id=$id");
    } elseif ($loket == 4) {
        mysql_query("UPDATE tbl_bpjs SET status=1, panggil=0, loket=4 WHERE id=$id");
    } elseif ($loket == 5) {
        mysql_query("UPDATE tbl_cs SET status=1, panggil=0, loket=5 WHERE id=$id");
    }
} elseif ($act == "hold") {
    if ($loket == 1 || $loket == 2) {
        mysql_query("UPDATE tbl_umum SET status=2, panggil=0, loket=0 WHERE id=$id");
        mysql_query("UPDATE tbl_umum SET panggil=0, loket=0 WHERE status=0 AND loket=$loket");
    } elseif ($loket == 3 || $loket == 4) {
        mysql_query("UPDATE tbl_bpjs SET status=2, panggil=0, loket=0 WHERE id=$id");
        mysql_query("UPDATE tbl_bpjs SET panggil=0, loket=0 WHERE status=0 AND loket=$loket");
    } elseif ($loket == 5) {
        mysql_query("UPDATE tbl_cs SET status=2, panggil=0, loket=0 WHERE id=$id");
        mysql_query("UPDATE tbl_cs SET panggil=0, loket=0 WHERE status=0 AND loket=5");
    }
}

if ($loket == 1) {
    header('location:counterumumloket1.php?act=default');
} elseif ($loket == 2) {
    header('location:counterumumloket2.php?act=default');
} elseif ($loket == 3) {
    header('location:counterumumloket3.php?act=default');
} elseif ($loket == 4) {
    header('location:counterumumloket4.php?act=default');
} elseif ($loket == 5) {
    header('location:counterumumloket5.php?act=default');
}

?>
