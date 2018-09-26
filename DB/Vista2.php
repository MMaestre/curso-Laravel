<?php
/**
 * @author MMaestre
 * @version 1.0.3
 * @internal
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devise-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conecta con DB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">
    Usuarios
</h1>
<hr>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <!-- <th scope="col">Edad</th> -->
        </tr>
    </thead>
    <tbody>
    <?php foreach($result as $r) {
        echo "<tr>";
        echo "<td>".$r['ID']."</td>";
        echo "<td>".$r['Nombre']."</td>";
        echo "<td>".$r['Apellidos']."</td>";
        // echo "<td>".$r['Edad']."</td>";
        echo "</tr>";
    } ?>
    </tbody>
</table>
</body>

</html>