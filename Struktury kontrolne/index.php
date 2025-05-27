<?php
// Lekcja 1: Instrukcja warunkowa if

// Przykład 1
$wallet = 15.50;
$purchaseCost = 4.99;
if ($wallet >= $purchaseCost) {
    echo 'You can purchase!';
}
// result: You can purchase!

// Przykład 2
$temperature = 25;
if ($temperature > 30) {
    echo 'It\'s hot outside!';
}
// result: (brak wyniku, bo warunek jest fałszywy)

// Przykład 3
$age = 20;
if ($age >= 18) {
    echo 'You are an adult.';
}
// result: You are an adult.

// Przykład 4
$balance = 100;
$withdrawal = 120;
if ($balance >= $withdrawal) {
    echo 'Transaction approved.';
}
// result: (brak wyniku, bo warunek jest fałszywy)

// Przykład 5
$score = 85;
if ($score >= 90) {
    echo 'Grade: A';
}
// result: (brak wyniku, bo warunek jest fałszywy)


// Lekcja 2: Instrukcja else i elseif

// Przykład 1
$age = 20;
if ($age < 18) {
    echo 'You are a minor.';
} elseif ($age < 65) {
    echo 'You are an adult.';
} else {
    echo 'You are a senior.';
}
// result: You are an adult.

// Przykład 2
$time = 15;
if ($time < 12) {
    echo 'Good morning!';
} elseif ($time < 18) {
    echo 'Good afternoon!';
} else {
    echo 'Good evening!';
}
// result: Good afternoon!

// Przykład 3
$day = 3;
if ($day == 1) {
    echo 'Monday';
} elseif ($day == 2) {
    echo 'Tuesday';
} elseif ($day == 3) {
    echo 'Wednesday';
} elseif ($day == 4) {
    echo 'Thursday';
} elseif ($day == 5) {
    echo 'Friday';
} elseif ($day == 6) {
    echo 'Saturday';
} else {
    echo 'Sunday';
}
// result: Wednesday

// Przykład 4
$score = 75;
if ($score >= 90) {
    echo 'Grade: A';
} elseif ($score >= 80) {
    echo 'Grade: B';
} elseif ($score >= 70) {
    echo 'Grade: C';
} elseif ($score >= 60) {
    echo 'Grade: D';
} else {
    echo 'Grade: F';
}
// result: Grade: C

// Przykład 5
$number = 15;
if ($number % 2 == 0) {
    echo 'Even number';
} else {
    echo 'Odd number';
}
// result: Odd number


// Lekcja 3: Instrukcja switch

// Przykład 1
$day = 3;
switch ($day) {
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    case 3:
        echo 'Wednesday';
        break;
    case 4:
        echo 'Thursday';
        break;
    case 5:
        echo 'Friday';
        break;
    case 6:
        echo 'Saturday';
        break;
    case 7:
        echo 'Sunday';
        break;
    default:
        echo 'Invalid day';
}
// result: Wednesday

// Przykład 2
$color = 'red';
switch ($color) {
    case 'blue':
        echo 'Color is blue';
        break;
    case 'green':
        echo 'Color is green';
        break;
    case 'red':
        echo 'Color is red';
        break;
    default:
        echo 'Color is unknown';
}
// result: Color is red

// Przykład 3
$fruit = 'banana';
switch ($fruit) {
    case 'apple':
        echo 'Apple';
        break;
    case 'banana':
        echo 'Banana';
        break;
    case 'cherry':
        echo 'Cherry';
        break;
    default:
        echo 'Unknown fruit';
}
// result: Banana

// Przykład 4
$number = 5;
switch ($number) {
    case 1:
        echo 'One';
        break;
    case 2:
        echo 'Two';
        break;
    case 3:
        echo 'Three';
        break;
    case 4:
        echo 'Four';
        break;
    case 5:
        echo 'Five';
        break;
    default:
        echo 'Number is out of range';
}
// result: Five

// Przykład 5
$grade = 'B';
switch ($grade) {
    case 'A':
        echo 'Excellent';
        break;
    case 'B':
        echo 'Good';
        break;
    case 'C':
        echo 'Average';
        break;
    case 'D':
        echo 'Below Average';
        break;
    case 'F':
        echo 'Fail';
        break;
    default:
        echo 'Invalid grade';
}
// result: Good


// Lekcja 4: Pętla for

// Przykład 1
for ($i = 1; $i <= 5; $i++) {
    echo $i . ' ';
}
// result: 1 2 3 4 5

// Przykład 2
for ($i = 10; $i >= 1; $i--) {
    echo $i . ' ';
}
// result: 10 9 8 7 6 5 4 3 2 1

// Przykład 3
for ($i = 0; $i < 5; $i++) {
    echo 'Hello ';
}
// result: Hello Hello Hello Hello Hello

// Przykład 4
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . ' ';
    }
}
// result: 2 4 6 8 10

// Przykład 5
for ($i = 1; $i <= 5; $i++) {
    echo 'Iteration ' . $i . '<br>';
}
// result: Iteration 1
//         Iteration 2
//         Iteration 3
//         Iteration 4
//         Iteration 5


// Lekcja 5: Pętla while

// Przykład 1
$i = 1;
while ($i <= 5) {
    echo $i . ' ';
    $i++;
}
// result: 1 2 3 4 5

// Przykład 2
$i = 10;
while ($i >= 1) {
    echo $i . ' ';
    $i--;
}
// result: 10 9 8 7 6 5 4 3 2 1



// Lekcja 5: Pętla while

// Przykład 1
$i = 1;
while ($i <= 5) {
    echo $i . ' ';
    $i++;
}
// result: 1 2 3 4 5

// Przykład 2
$i = 10;
while ($i >= 1) {
    echo $i . ' ';
    $i--;
}
// result: 10 9 8 7 6 5 4 3 2 1

// Przykład 3
$i = 0;
while ($i < 3) {
    echo 'Hello ';
    $i++;
}
// result: Hello Hello Hello

// Przykład 4
$i = 1;
while ($i <= 5) {
    if ($i == 3) {
        break;
    }
    echo $i . ' ';
    $i++;
}
// result: 1 2

// Przykład 5
$i = 1;
while ($i <= 5) {
    if ($i == 3) {
        $i++;
        continue;
    }
    echo $i . ' ';
    $i++;
}
// result: 1 2 4 5


// Lekcja 6: Pętla do-while

// Przykład 1
$i = 1;
do {
    echo $i . ' ';
    $i++;
} while ($i <= 5);
// result: 1 2 3 4 5

// Przykład 2
$i = 10;
do {
    echo $i . ' ';
    $i--;
} while ($i >= 1);
// result: 10 9 8 7 6 5 4 3 2 1

// Przykład 3
$i = 0;
do {
    echo 'Hello ';
    $i++;
} while ($i < 3);
// result: Hello Hello Hello

// Przykład 4
$i = 1;
do {
    if ($i == 3) {
        break;
    }
    echo $i . ' ';
    $i++;
} while ($i <= 5);
// result: 1 2

// Przykład 5
$i = 1;
do {
    if ($i == 3) {
        $i++;
        continue;
    }
    echo $i . ' ';
    $i++;
} while ($i <= 5);
// result: 1 2 4 5


// Lekcja 7: Instrukcje break i continue

// Przykład 1: break w pętli for
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        break;
    }
    echo $i . ' ';
}
// result: 1 2

// Przykład 2: continue w pętli for
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i . ' ';
}
// result: 1 2 4 5

// Przykład 3: break w pętli while
$i = 1;
while ($i <= 5) {
    if ($i == 3) {
        break;
    }
    echo $i . ' ';
    $i++;
}
// result: 1 2

// Przykład 4: continue w pętli while
$i = 1;
while ($i <= 5) {
    if ($i == 3) {
        $i++;
        continue;
    }
    echo $i . ' ';
    $i++;
}
// result: 1 2 4 5

// Przykład 5: break w pętli do-while
$i = 1;
do {
    if ($i == 3) {
        break;
    }
    echo $i . ' ';
    $i++;
} while ($i <= 5);
// result: 1 2


// Lekcja 8: Ćwiczenia praktyczne

// Przykład 1: Wypisz liczby od 1 do 10
for ($i = 1; $i <= 10; $i++) {
    echo $i . ' ';
}
// result: 1 2 3 4 5 6 7 8 9 10

// Przykład 2: Sprawdź, czy liczba jest podzielna przez 11
$number = 22;
if ($number % 11 == 0) {
    echo "Liczba $number jest podzielna przez 11";
} else {
    echo "Liczba $number nie jest podzielna przez 11";
}
// result: Liczba 22 jest podzielna przez 11

// Przykład 3: Sprawdź, czy liczba jest parzysta
$number = 8;
if ($number % 2 == 0) {
    echo "Liczba $number jest parzysta";
} else {
    echo "Liczba $number jest nieparzysta";
}
// result: Liczba 8 jest parzysta

// Przykład 4: Sprawdź, czy liczba jest dodatnia, ujemna czy zerem
$number = 0;
if ($number > 0) {
    echo "Liczba jest dodatnia";
} elseif ($number < 0) {
    echo "Liczba jest ujemna";
} else {
    echo "Liczba jest zerem";
}
// result: Liczba jest zerem

// Przykład 5: Oblicz sumę parzystych liczb od 1 do 150
$sum = 0;
for ($i = 1; $i <= 150; $i++) {
    if ($i % 2 == 0) {
        $sum += $i;
    }
}
echo "Suma parzystych liczb od 1 do 150 wynosi: $sum";
// result: Suma parzystych liczb od 1 do 150 wynosi: 5676
?>
