<?php

$con = new mysqli('localhost', 'root', '', 'blog');

if (!$con) {
  die(mysqli_error($con));
}
