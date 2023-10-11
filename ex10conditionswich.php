<?php
//1. Viết chương trình nhập vào một số nguyên. Kiểm tra số đó nguyên dương hay nguyên âm. In ra màn hình kết quả.
$a = readline("Nhập vào một số nguyên: ");
 switch($a) {
    case $a > 0:
        echo ("Số: " . $a . " là số nguyên dương");
        break;
    case $a == 0:
        echo ("Số: " . $a . " không phải là số nguyên dương va cũng không phải là số nguyên âm");
        break;   
    case $a < 0:
        echo ("Số: " . $a . " là số nguyên âm");
        break;
    default:
        echo ("Vui lòng nhập số");
 }
 echo '<br>';

//2. Viết chương trình nhập vào một số nguyên n. Kiểm tra n chia hết cho 3 hay 5. In kết quả ra màn hình.

$n = readline("Nhập vào một số nguyên: ");
switch($n) {
    case $n % 3 == 0:
        echo ("Số $n: chia hết cho 3");
        break;
    case $n % 5 == 0:
        echo ("Số $n: chia hết cho 5");
        break;
    default:
        echo ("Vui lòng nhập số");
}
echo '<br>';

//3. Viết chương trình nhập vào tháng trong năm. In ra số ngày của tháng đó.
$thang = readline("Nhập tháng (1-12): ");

// Kiểm tra và in ra số ngày của tháng
switch ($thang) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "Tháng $thang có 31 ngày";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "Tháng $thang có 30 ngày";
        break;
    case 2:
        echo "Tháng $thang có 28 hoặc 29 ngày";
        break;
    default:
        echo "Tháng không hợp lệ";
        break;
}
//4. Viết chương trình giải phương trình bậc 2.
// Nhập các hệ số a, b, c
$a = readline("Nhập hệ số a: ");
$b = readline("Nhập hệ số b: ");
$c = readline("Nhập hệ số c: ");

// Tính delta và kiểm tra các trường hợp
$delta = $b * $b - 4 * $a * $c;
switch (true) {
    case ($delta > 0):
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình có hai nghiệm phân biệt:\n";
        echo "x1 = ".$x1."\n";
        echo "x2 = ".$x2."\n";
        break;
    case ($delta == 0):
        $x = -$b / (2 * $a);
        echo "Phương trình có một nghiệm kép:\n";
        echo "x = ".$x."\n";
        break;
    default:
        echo "Phương trình không có nghiệm thực!\n";
        break;
}

//5. Viết chương trình nhập vào 3 số a, b, c. Kiểm tra có phải là 3 cạnh của một tam giác không?
$a = readline("Nhập số a: ");
$b = readline("Nhập số b: ");
$c = readline("Nhập số c: ");

// Kiểm tra xem 3 số có phải là cạnh của một tam giác hay không
switch(true) {
    case ($a <= 0 || $b <= 0 || $c <= 0):
        echo "Không phải cạnh của tam giác";
        break;
    case (($a + $b) <= $c || ($a + $c) <= $b || ($b + $c) <= $a):
        echo "Không phải cạnh của tam giác";
        break;
    default:
        echo "Là cạnh của tam giác";
        break;
}
?>