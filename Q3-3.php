<?php
$myfile = fopen("Prasad.txt", "w") or die("Unable to open file!");
$txt = "Hi, I am Prasad, Roll no. A046 from batch Batch_3 & currently pursuing MCA from MPSTME.\n";
fwrite($myfile, $txt);
fclose($myfile);
?>