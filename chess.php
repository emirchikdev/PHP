<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Шахматная доска с координатами</title>
    <style>
        body { font-family: sans-serif; display: flex; flex-direction: column; align-items: center; background-color: #f4f4f4; }
        
        .chess-board { 
            border: 2px solid #8B4513; 
            border-collapse: collapse; 
            background-color: white;
        }

        .chess-board td { 
            width: 50px; 
            height: 50px; 
            text-align: center;
            vertical-align: middle;
            font-weight: bold;
        }

        .coords { 
            background-color: #EEE8AA; 
            color: #000000ff; 
            width: 30px !important; 
            height: 30px !important;
        }

        .white { background-color: #f3f3f3ff; }
        .black { background-color: #000000ff; }
        
        form { margin: 20px; padding: 15px; background: white; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

    <form method="POST">
        <label>Размер доски: </label>
        <input type="number" name="size" min="1" max="25" required value="<?php echo $_POST['size'] ?? 5; ?>">
        <button type="submit">Создать</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = intval($_POST['size']);

        if ($size > 0) {
            echo "<table class='chess-board'>";

            echo "<tr>";
            echo "<td class='coords'></td>";
            for ($col = 1; $col <= $size; $col++) {
                echo "<td class='coords'>$col</td>";
            }
            echo "</tr>";

            for ($row = 1; $row <= $size; $row++) {
                echo "<tr>";
                
                echo "<td class='coords'>$row</td>";

                for ($col = 1; $col <= $size; $col++) {
                    $class = ($row + $col) % 2 == 0 ? 'white' : 'black';
                    echo "<td class='$class'></td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        }
    }
    ?>

</body>
</html>