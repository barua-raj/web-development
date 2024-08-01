<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Student Database Management</title>
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            $numberGirls = 10;
            $numberBoys  = 20;
            $totalStudents = $numberGirls + $numberBoys;
            echo '<h3>Total Girls = '.$numberGirls.'</h3>';
            echo "<br>";
            echo '<h3>Total Boys = '.$numberBoys.'</h3>';
            echo "<br>";
            echo '<h1>The number of total students are = '.$totalStudents.'</h1>';
        
        
            $x = 10;
            echo $x;
            echo "<br>";
            echo $x++;
            echo "<br>";
            echo ++$x;
        ?>
        
        <?php
            for ($count = 1; $count <= 3; $count++)
                {
                    echo
                    '<table>
                      <tr>
                        <th>Company</th>
                        <th>Contact</th>
                        <th>Country</th>
                      </tr>
                      <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                      </tr>
                      <tr>
                        <td>Centro comercial Moctezuma</td>
                        <td>Francisco Chang</td>
                        <td>Mexico</td>
                      </tr>
                      <tr>
                        <td>Ernst Handel</td>
                        <td>Roland Mendel</td>
                        <td>Austria</td>
                      </tr>
                    </table>';
                }
        ?>

    </body>
</html>
