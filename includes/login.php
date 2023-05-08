<?php
include("db.php");

if (isset($_POST["cedula"])) {
  $user = $_POST["cedula"];
  $query = "SELECT * FROM usuarios WHERE Cedula = '$user'";
  $result = mysqli_query($conn, $query);
  if ($data = $result->fetch_object()) {
    $queryRanking = "SELECT @pos := @pos + 1 AS posicion,Nombre, Ciudad, Puntos 
                      FROM usuarios, (SELECT @pos := 0) r 
                      WHERE Ciudad = '$data->Ciudad' ORDER BY Puntos DESC";
    $resultRanking = mysqli_query($conn, $queryRanking);
    $rankingArray = array();
    while ($row = $resultRanking->fetch_object()) {
      $rankingArray[] = $row;
    }
    session_start();
    $_SESSION["result"] = $data;
    $_SESSION["resultRanking"] = $rankingArray;
    header("location: home.php");
  }
}
