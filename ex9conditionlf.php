 <?php
//1.Viết chương trình nhập vào một số nguyên. Kiểm tra số đó nguyên dương hay nguyên âm. In ra màn hình kết quả.
// nhập vào một số nguyên bằng hàm `readline()`
$number = readline("Nhập vào một số nguyên: ");

// Kiểm tra số nguyên dương hay nguyên âm
if ($number > 0) {
    echo "Số $number là nguyên dương";
} elseif ($number < 0) {
    echo "Số $number là nguyên âm";
} else {
    echo "Số $number không phải nguyên dương và cũng không phải nguyên âm";
}

//2.Viết chương trình nhập vào một số nguyên n. Kiểm tra n chia hết cho 3 hay 5. In kết quả ra màn hình.
// Nhập số nguyên n dùng hàm `intval()` để chuyển đổi giá trị nhập vào thành số nguyên
$n = intval(readline("Nhập vào một số nguyên: "));
    
// Kiểm tra n chia hết cho cả 3 và 5
if ($n % 3 == 0 && $n % 5 == 0) {
    echo "$n chia hết cho cả 3 và 5";
}
// Kiểm tra n chia hết cho 3
elseif ($n % 3 == 0) {
    echo "$n chia hết cho 3";
}
// Kiểm tra n chia hết cho 5
elseif ($n % 5 == 0) {
    echo "$n chia hết cho 5";
}
// Nếu không chia hết cho cả 3 và 5
else {
    echo "$n không chia hết cho 3 hoặc 5";
}
echo "\n";
//3.Viết chương trình nhập vào tháng trong năm. In ra số ngày của tháng đó.
// Nhập vào tháng từ bàn phím
$thang = readline("Nhập vào tháng (1-12): ");

// Kiểm tra tháng và in ra số ngày tương ứng
if ($thang == 1 || $thang == 3 || $thang == 5 || $thang == 7 || $thang == 8 || $thang == 10 || $thang == 12) {
    echo "Tháng $thang có 31 ngày.";
} elseif ($thang == 4 || $thang == 6 || $thang == 9 || $thang == 11) {
    echo "Tháng $thang có 30 ngày.";
}
elseif ($thang == 2) {
    echo "Tháng $thang có 28 hoặc 29 ngày.";
} else {
    echo "Tháng không hợp lệ.";
}

//4.Viết chương trình giải phương trình bậc 2.
// Nhập các giá trị của a, b, c từ bàn phím
$a = floatval(readline("Nhập giá trị của a: "));
$b = floatval(readline("Nhập giá trị của b: "));
$c = floatval(readline("Nhập giá trị của c: "));

// Tính delta
$delta = $b * $b - 4 * $a * $c;

// Kiểm tra giá trị của delta
if ($delta < 0) {
    echo "Phương trình vô nghiệm";
} elseif ($delta == 0) {
    $x = -$b / (2 * $a);
    echo "Phương trình có nghiệm kép x = " . $x;
} else {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "Phương trình có hai nghiệm x1 = " . $x1 . " và x2 = " . $x2;
}
//5.Viết chương trình nhập vào 3 số a, b, c. Kiểm tra có phải là 3 cạnh của một tam giác không?
$a = readline("Nhập số a: ");
$b = readline("Nhập số b: ");
$c = readline("Nhập số c: ");

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "Ba số a, b, c là độ dài của ba cạnh của một tam giác.";
} else {
    echo "Ba số a, b, c không phải là độ dài của ba cạnh của một tam giác.";
}
?>
?>