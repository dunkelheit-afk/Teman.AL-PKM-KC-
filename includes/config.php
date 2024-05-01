<?php

$conn = mysqli_connect("localhost", "root", "", "teman.al");

if (!$conn) {
    echo "Connection Failed";
}