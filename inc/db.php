<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'winer');
if(!$conn){ 
    echo 'Error: '. mysqli_connect_error(); 
 }