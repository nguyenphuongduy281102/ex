<?php
// viết chương trình Nhập mảng có 10 phần tử số nguyên. 
$numbers = [];
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $numbers[$i] = intval(readline());
}
//Tính tổng các phần tử của mảng. Kiểm tra tổng là chẵn hay lẻ . In kết quả ra màn hình.
 //Tính tổng các phần tử
$sum = array_sum($numbers);

//Kiểm tra tổng là chẵn hay lẻ
if ($sum % 2 == 0) {
    echo "Tổng các phần tử là số chẵn";
} else {
    echo "Tổng các phần tử là số lẻ";
}
echo "\n";
//Sắp xếp các phần tử mảng theo thứ tự tăng dần, giảm dần. In mảng ra màn hình.
//Kiểm tra phần tử nào xuất hiện nhiều nhất trong mảng.
//Kiểm tra xem phần tử hiện tại có xuất hiện nhiều hơn phần tử trước đó không.
 //Kiểm tra có bao nhiêu số nguyên tố xuất hiện trong mảng.

?>