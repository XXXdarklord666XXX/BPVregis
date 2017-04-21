<?php
if (isset($_SESSION["userrole"])) {
      switch ($_SESSION["userrole"]) {
            case "student":
                  echo "<li><a href='./index.php?content=bpv_record'>BPV bedrijf toevoegen</a></li>";
                  echo "<li><a href='./index.php?content=bpv_show_companies'>Ingevoerde BPV bedrijfen</a></li>";
                  break;
            case "bpvco";
                  echo "<li><a href='./index.php?content=bpv_st_view'>bpv studenten overzicht</a></li>";
                  echo "<li><a href='./index.php?content=bpv_all_companies'>bpv bedrijfen overzicht</a></li>";
                  break;
            case "docent";
                  echo "<li><a href='./index.php?content=bpv_st_view'>bpv studenten overzicht</a></li>";
                  echo "<li><a href='./index.php?content=bpv_all_companies'>bpv bedrijfen overzicht</a></li>";
            case "admin";
                  echo "<li><a href='./index.php?content=userroles'>gebruikersrollen</a></li>";
            }
      ;
      echo "<li><a href='./index.php?content=logout'>Uitloggen</a></li>";
}
?>