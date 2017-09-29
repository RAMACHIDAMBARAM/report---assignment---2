<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: http://localhost/phase-3ReportBee/");
   }
?>