<?php
// лабаратория №3
$invited = ["Алексей", "Мария", "Иван", "Елена", "Дмитрий"];


$arrived = ["Мария", "Дмитрий"];

echo "<h3>Статус гостей:</h3>";
echo "<ul>";

foreach ($invited as $guest) {

    if (in_array($guest, $arrived)) {
        echo "<<b>$guest</b> пришел(а).</li>";
    } else {
        echo "<b>$guest</b> отсутствует.</li>";
    }
}

echo "</ul>";
?>