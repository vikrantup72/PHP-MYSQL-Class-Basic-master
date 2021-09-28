<?php
/* example 1 */

$i = 1;
while ($i <= 10) {
    echo "&nbsp".$i++;
}
    /* example 2 - Alternative syntax*/

$i = 1;
while ($i <= 10):
        echo "<pre>".$i*2;
    $i++;
endwhile;
?> 

