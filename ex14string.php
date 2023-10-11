<?php

// Viết chương trình nhập vào một chuỗi từ bàn phím.
$str = readline("Nhập chuỗi: ");
//1. Đảo ngược chuỗi
$reverseStr = strrev($str);
echo "Chuỗi đảo ngược là: " . $reverseStr . "\n";

//2. Đếm xem chuỗi có bao nhiêu từ trong chuỗi
$wordCount = str_word_count($str);
echo "Số từ trong chuỗi: " . $wordCount . "\n" 

//3. Kiểm tra từ nào xuất hiện nhiều nhất trong chuỗi

?>