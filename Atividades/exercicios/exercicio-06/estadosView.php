<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Lista de estados</title>
</head>

<body>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">


            <thead>        <tr class="thead-dark" >
                <th>Estados
                </th>
                
            </tr>
</thead>
            <tbody>
                
                    <?php

                    while ($e = $estados->fetch()) {
                        
                        echo "<tr>";
                        echo "<td>" . $e["nome"] . "</td>\n";
                        echo "</tr>";
                    }

                    ?>
                
            </tbody>
            <tfoot></tfoot>
        </table>
    </div>


</body>

</html>