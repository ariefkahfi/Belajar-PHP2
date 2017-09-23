<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table border="2">
        <tr>
            <td>No</td>
            <td>Filter Name</td>
            <td>Filter Id</td>
        </tr>
        <?php
          foreach (filter_list() as $idx => $filter){
            echo "<tr>";
                echo "<td>" .($idx+1). "</td>";
                echo "<td>" . $filter . "</td>";
                echo "<td>".filter_id($filter)."</td>";
            echo "</tr>";
          }
        ?>
    </table>


</body>
</html>