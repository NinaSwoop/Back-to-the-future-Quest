<?php


$presentTime = (new DateTime)->setDate(2015, 10, 8)->setTime(04, 06, 00);
$destinationTime = (new DateTime)->setDate(2022, 4, 16)->setTime(04, 29, 00);

$differenceBetween = $presentTime->diff($destinationTime);

$minutes = $differenceBetween->days * 24 * 60;
$minutes += $differenceBetween->h * 60;
$minutes += $differenceBetween->i;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Back to the future</title>
</head>

<body>

    <body>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Present time</th>
                    <th>Destination time</th>
                    <th>Gap</th>
                    <th>Fuel needed</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $presentTime->format('M d Y A h i'); ?></td>
                    <td><?php echo $destinationTime->format('M d Y A h i'); ?></td>
                    <td><?php echo $differenceBetween->format('%y years %m months %d days %h hours %m minutes %s seconds'); ?></td>
                    <td><?php echo round($minutes / 10000, 2) . ' Litres'; ?></td>
                </tr>
            </tbody>
        </table>
    </body>

</body>

</html>