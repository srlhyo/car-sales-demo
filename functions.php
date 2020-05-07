<?php
// this is a die and dump function for debugging purporses
function dd($data) {
    echo "<pre>";
    var_dump($data);
    die;
}