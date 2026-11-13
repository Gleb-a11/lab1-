<?php
// Радиус круга — можно изменить на любое положительное число.
$radius = 5;

// Площадь круга: S = πr².
$area = M_PI * pow($radius, 2);

echo "<!DOCTYPE html>";
echo "<html lang='ru'>";
echo "<head>";
echo "    <meta charset='UTF-8'>";
echo "    <title>Площадь круга</title>";
echo "</head>";
echo "<body>";
echo "    <h1>Вычисление площади круга</h1>";
echo "    <p>Радиус круга: " . $radius . "</p>";
echo "    <p>Площадь круга: " . round($area, 2) . "</p>";
echo "</body>";
echo "</html>";
?>