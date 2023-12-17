<!DOCTYPE html>
<html>
<head>
    <style>
        table,
        th,
        tr,
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
    $gbp=1.00;
    $cgbp= (float)$gbp;
    $myr = $gbp*5.62;
    $cMyr = (float)$myr;
    ?>
    <table>
        <tr>
            <th style="background-color:#3B8AEC " colspan="2">CURRENCY EXCHANGE</th>
        </tr>
        <th>GBP
        </th>
        <th>MYR</th>
        <tr>
            <td><?php echo "$gbp"?></td>
            <td><?php echo "$cMyr"?></td>
        </tr>
    </table>
</body>
</html>
