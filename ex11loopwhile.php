<?php
//1. Viết chương trình tính tổng các số từ 1 đến 100
$sum = 0;
$num = 1;
while ($num <= 100) {
    $sum += $num;
    $num++;
}

echo "Tổng các số từ 1 đến 100 là: " . $sum;
//2. Viết chương trình nhập vào một số tự nhiên n. Tính tổng các số chia hết cho 3 bé hơn.
$n = readline("Nhập số tự nhiên n: ");
$sum = 0;

// Sử dụng vòng lặp while để tìm các số chia hết cho 3 và bé hơn n
$i = 1;
while ($i < $n) {
    if ($i % 3 == 0) { // Kiểm tra số có chia hết cho 3 hay không
        $sum += $i; // Cộng số vào tổng
    }
    $i++; // Tăng giá trị của $i lên 1
}

// In ra tổng các số chia hết cho 3 và bé hơn n
echo "Tổng các số chia hết cho 3 và bé hơn n là: " . $sum;
//3. Viết chương trình in ra 100 số Fibonacci đầu tiên.
$num1 = 0;
$num2 = 1;
$count = 0;

// In hai số đầu tiên
echo $num1 . " " . $num2 . " ";

// Dùng vòng lặp while để in ra 100 số Fibonacci tiếp theo
while ($count < 100) {
    $num3 = $num1 + $num2;
    echo $num3 . " ";
    $num1 = $num2;
    $num2 = $num3;
    $count++;
}
//4. Viết chương trình kiểm tra một số nguyên n có phải là số polinom, n nhập vào từ bàn phím
$n = (int) readline("Nhập số nguyên n: ");

// Lưu lại giá trị của n
$originalNumber = $n;

// Khởi tạo biến để lưu số đảo ngược của n
$reversedNumber = 0;

// Tạo số đảo ngược của n bằng cách lấy dư và phần nguyên
while ($n > 0) {
    $remainder = $n % 10;
    $reversedNumber = ($reversedNumber * 10) + $remainder;
    $n = (int) ($n / 10);
}

// Kiểm tra xem số ban đầu và số đảo ngược có bằng nhau hay không
if ($originalNumber == $reversedNumber) {
    echo "Số $originalNumber là số palindrom.";
} else {
    echo "Số $originalNumber không là số palindrom.";
}
//5. Viết chương trình liệt kê các số từ 100 đến 999 có tổng các chữ số chia hết cho 3.
$num = 100;

// Vòng lặp while từ 100 đến 999
while ($num <= 999) {
    // Tính tổng các chữ số
    $digit1 = floor($num / 100); // Chữ số hàng trăm
    $digit2 = floor(($num % 100) / 10); // Chữ số hàng chục
    $digit3 = $num % 10; // Chữ số hàng đơn vị
    $sum = $digit1 + $digit2 + $digit3;

    // Kiểm tra tổng các chữ số có chia hết cho 3 hay không
    if ($sum % 3 == 0) {
        echo $num . "<br>";
    }

    // Tăng giá trị số lên 1
    $num++;
}
?>