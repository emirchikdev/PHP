<?php 
// Лабаратория #2

$students = [
    ['name' => 'Эмир Ысак', 'age' => 20],
    ['name' => 'Фархат Кадырбеков', 'age' => 21],
    ['name' => 'Рафаэль Чынгызов', 'age' => 20],
    ['name' => 'Эльмир', 'age' => 20],
    ['name' => 'Канимет Кыдырбеков', 'age' => 20],
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список студентов</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Ф.И.О.</th>
            <th>Возраст</th>
        </tr>
        <tr>
            <td><?php echo $students[0]['name']; ?></td>
            <td><?php echo $students[0]['age']; ?></td>
        </tr>
        <tr>
            <td><?php echo $students[1]['name']; ?></td>
            <td><?php echo $students[1]['age']; ?></td>
        </tr>
        <tr>
            <td><?php echo $students[2]['name']; ?></td>
            <td><?php echo $students[2]['age']; ?></td>
        </tr>
        <tr>
            <td><?php echo $students[3]['name']; ?></td>
            <td><?php echo $students[3]['age']; ?></td>
        </tr>
        <tr>
            <td><?php echo $students[4]['name']; ?></td>
            <td><?php echo $students[4]['age']; ?></td>
        </tr>
    </table>
</body>
</html>