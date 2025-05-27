<?php
// Lekcja 2: Własna funkcja

// Przykład 1
function myFunction() {
    echo "To jest moja pierwsza funkcja!";
}
myFunction();
// result: To jest moja pierwsza funkcja!

echo "\n\n";

// Przykład 2
function operationAddition() {
    echo 8 + 4;
}
operationAddition();
// result: 12

echo "\n\n";

// Przykład 3
function operationSubtraction() {
    echo 8 - 4;
}
operationSubtraction();
// result: 4

echo "\n\n";

// Przykład 4
function operationMultiplication() {
    echo 8 * 4;
}
operationMultiplication();
// result: 32

echo "\n\n";

// Przykład 5
function operationDivision() {
    echo 8 / 4;
}
operationDivision();
// result: 2

echo "\n\n";

// Lekcja 3: Argumenty funkcji

// Przykład 1
function greet($name) {
    echo "Cześć, $name!";
}
greet("Ania");
// result: Cześć, Ania!

echo "\n\n";

// Przykład 2
function sum($a, $b) {
    echo $a + $b;
}
sum(5, 3);
// result: 8

echo "\n\n";

// Przykład 3
function area($width, $height) {
    echo $width * $height;
}
area(4, 5);
// result: 20

echo "\n\n";

// Przykład 4
function info($name, $age) {
    echo "$name ma $age lat.";
}
info("Kuba", 25);
// result: Kuba ma 25 lat.

echo "\n\n";

// Przykład 5
function average($x, $y, $z) {
    echo ($x + $y + $z) / 3;
}
average(10, 20, 30);
// result: 20

echo "\n\n";

// Lekcja 4: Zwracanie danych

// Przykład 1
function square($number) {
    return $number * $number;
}
echo square(5);
// result: 25

echo "\n\n";

// Przykład 2
function upperText($text) {
    return strtoupper($text);
}
echo upperText("php");
// result: PHP

echo "\n\n";

// Przykład 3
function calculateDiscount($price) {
    return $price * 0.8;
}
echo calculateDiscount(100);
// result: 80

echo "\n\n";

// Przykład 4
function getInitials($firstName, $lastName) {
    return $firstName[0] . $lastName[0];
}
echo getInitials("Jan", "Kowalski");
// result: JK

echo "\n\n";

// Przykład 5
function isAdult($age) {
    return $age >= 18;
}
echo isAdult(20) ? "Dorosły" : "Niepełnoletni";
// result: Dorosły

echo "\n\n";

// Lekcja 5: Funkcje anonimowe

// Przykład 1
$greet = function($name) {
    return "Cześć, $name!";
};
echo $greet("Ola");
// result: Cześć, Ola!

echo "\n\n";

// Przykład 2
$multiply = function($a, $b) {
    return $a * $b;
};
echo $multiply(3, 4);
// result: 12

echo "\n\n";

// Przykład 3
$double = function($n) {
    return $n * 2;
};
echo $double(5);
// result: 10

echo "\n\n";

// Przykład 4
$students = ["Ania", "Bartek", "Celina"];
array_map(function($student) {
    echo "Student: $student\n";
}, $students);
// result:
// Student: Ania
// Student: Bartek
// Student: Celina

echo "\n\n";

// Przykład 5
$square = fn($x) => $x * $x;
echo $square(6);
// result: 36

echo "\n\n";

// Lekcja 6: Funkcje wbudowane (i dokumentacja)

// Przykład 1
echo strlen("PHPDev");
// result: 6

echo "\n\n";

// Przykład 2
echo str_replace("PHP", "JavaScript", "PHP to super język!");
// result: JavaScript to super język!

echo "\n\n";

// Przykład 3
echo strtolower("DUŻE LITERY");
// result: duże litery

echo "\n\n";

// Przykład 4
echo date("Y-m-d");
// result: (dzisiejsza data, np. 2025-05-27)

echo "\n\n";

// Przykład 5
$numbers = [5, 10, 15];
echo array_sum($numbers);
// result: 30

?>
