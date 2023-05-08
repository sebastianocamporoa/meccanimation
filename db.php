<?php
if (!isset($_SESSION)) {
  session_start();
}

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'meccanimation'
) or die(mysqli_error($mysqli));
