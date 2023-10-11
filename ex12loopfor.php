<?php
//1 Viết chương trình tính tổng các số từ 1 đến 100.
$tong = 0;

// Sử dụng vòng lặp for để tính tổng các số từ 1 đến 100
for ($i = 1; $i <= 100; $i++) {
    $tong += $i;
}

echo "Tổng các số từ 1 đến 100 là: " . $tong;

//2. Viết chương trình nhập vào một số tự nhiên n. Tính tổng các số chia hết cho 3 bé hơn n.
$n = (int) readline('Nhập vào một số tự nhiên n: ');

// Khởi tạo biến tổng ban đầu
$sum = 0;

// kiểm tra các số từ 1 đến n
for ($i = 1; $i < $n; $i++) {
  // Nếu số i chia hết cho 3, cộng vào tổng
  if ($i % 3 == 0) {
    $sum += $i;
  }
}

echo "Tổng các số chia hết cho 3 và nhỏ hơn $n là: $sum";
//3. Viết chương trình in ra 100 số Fibonacci đầu tiên.
$num1 = 0;
$num2 = 1;

// In ra 2 số đầu tiên
echo $num1 . ", " . $num2;

// Sử dụng vòng lặp for để in ra 98 số Fibonacci tiếp theo
for ($i = 3; $i <= 100; $i++) {
    // Tính số Fibonacci tiếp theo bằng cách cộng hai số trước đó
    $nextNum = $num1 + $num2;
    
    // In ra số Fibonacci tiếp theo
    echo ", " . $nextNum;
    
    // Cập nhật giá trị của $num1 và $num2 để chuẩn bị cho vòng lặp tiếp theo
    $num1 = $num2;
    $num2 = $nextNum;
}
//4. Viết chương trình kiểm tra một số nguyên n có phải là số polinom, n nhập vào từ bàn phím
$n = readline("Nhập số nguyên n: ");

// Khởi tạo biến isPolynomial và gán giá trị ban đầu là true
$isPolynomial = true;

// Chạy vòng lặp for từ 2 đến n-1 để kiểm tra n có phải là số polinom hay không
for ($i = 2; $i < $n; $i++) {
    // Nếu n chia hết cho i thì n không phải là số polinom
    if ($n % $i == 0) {
        $isPolynomial = false;
        break; // Kết thúc vòng lặp nếu n chia hết cho i
    }
}

// Kiểm tra giá trị của biến isPolynomial để in kết quả
if ($isPolynomial) {
    echo "$n là số polinom";
} else {
    echo "$n không là số polinom";
}
//5. Viết chương trình liệt kê các số từ 100 đến 999 có tổng các chữ số chia hết cho 3.
for ($i = 100; $i <= 999; $i++) {
    $sum = 0;
    $number = $i;

    // Tính tổng các chữ số của số $i
    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit;
        $number = (int)($number / 10);
    }

    // Kiểm tra nếu tổng chia hết cho 3, in số đó
    if ($sum % 3 == 0) {
        echo $i . " ";
    }
}
?>