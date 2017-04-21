<?php
    if (isset($_GET["content"])) {
        if ($_GET["content"] == "register") {
            echo "<script src='js/register.js'></script>";
        } else if ($_GET["content"] == "login") {
            echo "<script src='js/login.js'></script>";
        } else if ($_GET["content"] == "loops") {
            echo "<script src='js/loops.js'></script>";
        } else if ($_GET["content"] == "bpv_record") {
            echo "<script src='js/bpv_record.js'></script>";
        } else if ($_GET["content"] == "carousel") {
            echo "<script src='js/carousel.js'></script>";
        } else if ($_GET["content"] == "bpv_st_view") {
            echo "<script src='js/bpv_st_view.js'></script>";
        } else if ($_GET["content"] == "bpv_show_companies") {
            echo "<script src='js/bpv_show_companies.js'></script>";
        } else if ($_GET["content"] == "bpv_all_companies") {
            echo "<script src='js/bpv_all_companies.js'></script>";
        } else if ($_GET["content"] == "userroles") {
            echo "<script src='js/userroles.js'></script>";
        }
    }
?>