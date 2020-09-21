<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<title>Lista de produtos</title>

</head>



<body>

<a href="">Inserir</a>

<div class="table-responsive">
    <table class="table  table-bordered table-hover table-striped" style="width:50%">


        <thead>
            <tr class="thead-dark">
                <th>Código</th>
                <th>Produto</th>
                <th>Unidade de Medida</th>
            </tr>

        </thead>

        <tbody>

            <?php

            while ($p = $produtos->fetch()) {

                echo "<tr>";
                echo "<td>" . $p["id"] . "</td>\n";
                echo "<td>" . $p["nome"] . "</td>\n";
                echo "<td>" . $p["um"] . "</td>\n";
                echo "</tr>";
            }

            ?>

        </tbody>
        <tfoot></tfoot>
    </table>
</div>


</body>


</body>
</html>