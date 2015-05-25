<?php

$handle = fopen('names.txt', 'w');
fwrite($handle, 'Billy' . "\n");
fwrite($handle, 'Sargent');
fclose($handle);

?>
