<?php
	include_once "conf/command.php";
  	if ($_GET['act']=="login"){
            if(($_GET['usere']=="admin")&&($_GET['passwordte']=="akusayangsamakamu")) {
                session_start();
                $_SESSION['ses_admin']="admin";
                $url = "index.php?act=Detail2NonHapus&action=TAMBAH&no_rawat=".$_GET['no_rawat']."";			
            }else{
                    session_start();
                    session_destroy();
                    if (cekSessiAdmin()){
                        session_unregister("ses_admin");
                    }
                    $url = "index.php?act=HomeAdmin";
            }
	    header("Location:".$url);
	}
?>
