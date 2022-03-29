<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Kalender Maret</title>
</head>

<body>
    <p>Maret 2021</p>
    <table>
        <tr class="head">
            <td>Sun</td>
            <td>Mon</td>
            <td>Tue</td>
            <td>Wed</td>
            <td>Thu</td>
            <td>Fri</td>
            <td>Sat</td>
        </tr>
        <?php
        $b = 28;
        $c = 1;
        for ($i = 1; $i <= 5; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 7; $j++) {
                if ($b >= 29) {
                    echo "<td>" . $c . "</td>";
                    $c++;
                } else {
                    echo "<td id='warna'>" . $b . "</td>";
                    $b++;
                }
                if ($c == 32) {
                    break;
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>