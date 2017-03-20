<?php

foreach ($links as $name => $url) {
    echo "<a href='";
    echo $url;
    echo "'>";
    echo "$name";
    echo "</a>";
}