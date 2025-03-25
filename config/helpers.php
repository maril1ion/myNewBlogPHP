<?php

function debug($str)
{
    echo '<pre>';
    dump($str);
    echo '</pre>';
}
function debugD($str)
{
    echo '<pre>';
    dd($str);

    echo '</pre>';
}
