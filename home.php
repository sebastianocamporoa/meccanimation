<?php
include("db.php");
if (!isset($_SESSION)) {
    session_start();
}
include('includes/header.php');
$result = $_SESSION["result"];
$resultRanking = $_SESSION["resultRanking"];


?>
<div class="container">
    <div class="d-flex align-items-center justify-content-center flex-column" style="height: 100vh">
        <h1 class="h1"><?php echo $result->Nombre ?></h1>
        <h2 class="h2"><?php echo $result->Ciudad ?></h2>
        <br><br>
        <h3>Ranking</h3>
        <table class="table table-striped pl-3 pr-3">
            <thead>
                <tr>
                    <th scope="col">Posición</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Puntos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultRanking as $index => $row) {
                    if (is_object($row)) {
                        echo '<tr>';
                        echo '<th scope="row">' . (intval($index) + 1) . '</th>';
                        echo '<td>' . $row->Nombre . '</td>';
                        echo '<td>' . $row->Ciudad . '</td>';
                        echo '<td>' . $row->Puntos . '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('includes/footer.php'); ?>