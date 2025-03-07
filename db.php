<?php
session_start();
$conn = new mysqli("localhost", "server", "00000000", "dataset");

$sql = "select * from deviation";
$res = mysqli_query($conn, $sql);
