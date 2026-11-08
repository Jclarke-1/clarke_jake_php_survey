<?php


function prettyDump($something)
{
    echo '<pre><code>';
    var_dump($something);
    echo '</code></pre>';
}

function prettyDumpAndExit($something)
{
    prettyDump($something);
    exit;
} 

?>