<?php
// câu 1
function kiemTraSoChan($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number không là số chẵn.";
    }
}

kiemTraSoChan(6); // Gọi hàm và truyền số cần kiểm tra
// câu 2
function tinhTong($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    echo "Tổng các số từ 1 đến $n là: $sum";
}

tinhTong(10); // Gọi hàm và truyền giá trị n
// câu 3
function inBangCuuChuong() {
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương $i: ";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$result ";
        }
        echo "<br>";
    }
}

inBangCuuChuong(); // Gọi hàm in bảng cửu chương
// câu 4
function kiemTraChuoi($string, $word) {
    $position = strpos($string, $word);
    if ($position !== false) {
        echo "Chuỗi '$string' chứa từ '$word'.";
    } else {
        echo "Chuỗi '$string' không chứa từ '$word'.";
    }
}

kiemTraChuoi("Hello World", "World"); // Gọi hàm và truyền chuỗi và từ cần kiểm tra
// câu 5
function timGiaTriMaxMin($array) {
    $max = $array[0];
    $min = $array[0];

    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value;
        }
        if ($value < $min) {
            $min = $value;
        }
    }

    echo "Giá trị lớn nhất trong mảng là: $max<br>";
    echo "Giá trị nhỏ nhất trong mảng là: $min";
}

$numbers = [2, 5, 1, 8, 3];
timGiaTriMaxMin($numbers); // Gọi hàm và truyền mảng
// câu 6
function sapXepTangDan($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

$numbers = [5, 2, 8, 1, 3];
$sortedNumbers = sapXepTangDan($numbers);
echo "Mảng sau khi sắp xếp tăng dần: " . implode(", ", $sortedNumbers);
// câu 7
function tinhGiaiThua($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    echo "Giai thừa của $n là: $factorial";
}

tinhGiaiThua(5); // Gọi hàm và truyền số cần tính giai thừa
// câu 8
function timSoNguyenTo($start, $end) {
    $primeNumbers = [];

    for ($i = $start; $i <= $end; $i++) {
        $isPrime = true;

        if ($i == 1) {
            $isPrime = false;
        }

        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            $primeNumbers[] = $i;
        }
    }

    echo "Các số nguyên tố trong khoảng từ $start đến $end là: " . implode(", ", $primeNumbers);
}

timSoNguyenTo(1, 20); // Gọi hàm và truyền khoảng cần tìm số nguyên tố
// câu 9
function tinhTongMang($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    echo "Tổng các số trong mảng là: $sum";
}

$numbers = [2, 5, 1, 8, 3];
tinhTongMang($numbers); // Gọi hàm và truyền mảng
// câu 10
function inFibonacci($n) {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    echo "Các số Fibonacci trong khoảng $n là: " . implode(", ", $fibonacci);
}

inFibonacci(10); // Gọi hàm và truyền giá trị n
// câu 11
function kiemTraSoArmstrong($number) {
    $sum = 0;
    $temp = $number;

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += $digit ** 3;
        $temp = (int)($temp / 10);
    }

    if ($sum == $number) {
        echo "Số $number là số Armstrong.";
    } else {
        echo "Số $number không là số Armstrong.";
    }
}

kiemTraSoArmstrong(153); // Gọi hàm và truyền số cần kiểm tra
// câu 12
function chenPhanTu($array, $element, $position) {
    $length = count($array);

    // Kiểm tra vị trí hợp lệ
    if ($position < 0 || $position > $length) {
        echo "Vị trí chèn không hợp lệ.";
        return $array;
    }

    // Dịch chuyển các phần tử sang phải để tạo chỗ cho phần tử mới
    for ($i = $length - 1; $i >= $position; $i--) {
        $array[$i + 1] = $array[$i];
    }

    // Chèn phần tử mới vào mảng
    $array[$position] = $element;

    return $array;
}

$numbers = [2, 5, 1, 8, 3];
$newArray = chenPhanTu($numbers, 10, 2);
echo "Mảng sau khi chèn phần tử: " . implode(", ", $newArray);
// câu 13
function loaiBoTrungLap($array) {
    $result = array();

    foreach ($array as $value) {
        if (!in_array($value, $result)) {
            $result[] = $value;
        }
    }

    return $result;
}

$numbers = [2, 5, 1, 8, 3, 5, 2, 8];
$uniqueArray = loaiBoTrungLap($numbers);
echo "Mảng sau khi loại bỏ trùng lặp: " . implode(", ", $uniqueArray);
// câu 14
function timViTriPhanTu($array, $element) {
    $positions = array();

    foreach ($array as $key => $value) {
        if ($value == $element) {
            $positions[] = $key;
        }
    }

    if (empty($positions)) {
        echo "Phần tử '$element' không có trong mảng.";
    } else {
        echo "Vị trí của phần tử '$element' trong mảng: " . implode(", ", $positions);
    }
}

$numbers = [2, 5, 1, 8, 3, 5, 2, 8];
timViTriPhanTu($numbers, 5);
// câu 15
function daoChuoi($string) {
    $reverseString = '';
    $length = strlen($string);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reverseString .= $string[$i];
    }

    echo "Chuỗi đảo ngược: $reverseString";
}

daoChuoi("Hello World"); // Gọi hàm và truyền chuỗi cần đảo
// câu 16
function demPhanTu($array) {
    $count = count($array);
    echo "Số lượng phần tử trong mảng: $count";
}

$numbers = [2, 5, 1, 8, 3];
demPhanTu($numbers); // Gọi hàm và truyền mảng
// câu 17
function kiemTraChuoiPalindrome($string) {
    $reverseString = strrev($string);

    if ($string == $reverseString) {
        echo "Chuỗi '$string' là chuỗi Palindrome.";
    } else {
        echo "Chuỗi '$string' không là chuỗi Palindrome.";
    }
}

kiemTraChuoiPalindrome("madam"); // Gọi hàm và truyền chuỗi cần kiểm tra
// câu 18
function demLanXuatHien($array, $element) {
    $count = 0;

    foreach ($array as $value) {
        if ($value == $element) {
            $count++;
        }
    }

    echo "Số lần xuất hiện của phần tử '$element': $count";
}

$numbers = [2, 5, 1, 8, 3, 5, 2, 8];
demLanXuatHien($numbers, 5);
// câu 19
function sapXepGiamDan($array) {
    rsort($array);
    return $array;
}

$numbers = [5, 2, 8, 1, 3];
$sortedNumbers = sapXepGiamDan($numbers);
echo "Mảng sau khi sắp xếp giảm dần: " . implode(", ", $sortedNumbers);
// câu 20
function themPhanTu($array, $element, $position) {
    if ($position == "start") {
        array_unshift($array, $element);
    } elseif ($position == "end") {
        $array[] = $element;
    }

    return $array;
}

$numbers = [2, 5, 1, 8, 3];
$newArray = themPhanTu($numbers, 10, "start");
echo "Mảng sau khi thêm phần tử vào đầu: " . implode(", ", $newArray);

$newArray = themPhanTu($numbers, 10, "end");
echo "Mảng sau khi thêm phần tử vào cuối: " . implode(", ", $newArray);
// câu 21
function timSoLonThuHai($array) {
    $max = PHP_INT_MIN;
    $secondMax = PHP_INT_MIN;

    foreach ($array as $value) {
        if ($value > $max) {
            $secondMax = $max;
            $max = $value;
        } elseif ($value > $secondMax && $value < $max) {
            $secondMax = $value;
        }
    }

    if ($secondMax == PHP_INT_MIN) {
        echo "Không có số lớn thứ hai trong mảng.";
    } else {
        echo "Số lớn thứ hai trong mảng: $secondMax";
    }
}

$numbers = [2, 5, 1, 8, 3];
timSoLonThuHai($numbers); // Gọi hàm và truyền mảng
// câu 22
function timUocSoChungLonNhat($a, $b) {
    $min = min($a, $b);

    for ($i = $min; $i >= 1; $i--) {
        if ($a % $i == 0 && $b % $i == 0) {
            return $i;
        }
    }

    return 1; // Trường hợp không có ước số chung
}

function timBoiSoChungNhoNhat($a, $b) {
    $max = max($a, $b);

    for ($i = $max; ; $i += $max) {
        if ($i % $a == 0 && $i % $b == 0) {
            return $i;
        }
    }
}

$a = 12;
$b = 18;

$uocSoChungLonNhat = timUocSoChungLonNhat($a, $b);
$boiSoChungNhoNhat = timBoiSoChungNhoNhat($a, $b);

echo "Ước số chung lớn nhất của $a và $b: $uocSoChungLonNhat";
echo "Bội số chung nhỏ nhất của $a và $b: $boiSoChungNhoNhat";
// câu 23
function kiemTraSoHoanHao($number) {
    $sum = 0;

    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }

    if ($sum == $number) {
        echo "Số $number là số hoàn hảo.";
    } else {
        echo "Số $number không là số hoàn hảo.";
    }
}

kiemTraSoHoanHao(28); // Gọi hàm và truyền số cần kiểm tra
// câu 24
function timSoLeLonNhat($array) {
    $maxOdd = PHP_INT_MIN;

    foreach ($array as $value) {
        if ($value % 2 != 0 && $value > $maxOdd) {
            $maxOdd = $value;
        }
    }

    if ($maxOdd == PHP_INT_MIN) {
        echo "Không có số lẻ trong mảng.";
    } else {
        echo "Số lẻ lớn nhất trong mảng: $maxOdd";
    }
}

$numbers = [2, 5, 1, 8, 3];
timSoLeLonNhat($numbers); // Gọi hàm và truyền mảng
// câu 25
function kiemTraSoNguyenTo($number) {
    if ($number < 2) {
        echo "Số $number không phải là số nguyên tố.";
        return;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            echo "Số $number không phải là số nguyên tố.";
            return;
        }
    }

    echo "Số $number là số nguyên tố.";
}

kiemTraSoNguyenTo(17); // Gọi hàm và truyền số cần kiểm tra
// câu 26
function timSoDuongLonNhat($array) {
    $maxPositive = PHP_INT_MIN;

    foreach ($array as $value) {
        if ($value > 0 && $value > $maxPositive) {
            $maxPositive = $value;
        }
    }

    if ($maxPositive == PHP_INT_MIN) {
        echo "Không có số dương trong mảng.";
    } else {
        echo "Số dương lớn nhất trong mảng: $maxPositive";
    }
}

$numbers = [2, -5, 1, -8, 3];
timSoDuongLonNhat($numbers); // Gọi hàm và truyền mảng
// câu 27
function timSoAmLonNhat($array) {
    $maxNegative = PHP_INT_MIN;

    foreach ($array as $value) {
        if ($value < 0 && $value > $maxNegative) {
            $maxNegative = $value;
        }
    }

    if ($maxNegative == PHP_INT_MIN) {
        echo "Không có số âm trong mảng.";
    } else {
        echo "Số âm lớn nhất trong mảng: $maxNegative";
    }
}

$numbers = [2, -5, 1, -8, 3];
timSoAmLonNhat($numbers); // Gọi hàm và truyền mảng
// câu 28
function tinhTongSoLe($n) {
    $sum = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }

    echo "Tổng các số lẻ từ 1 đến $n: $sum";
}

tinhTongSoLe(10); // Gọi hàm và truyền n
// câu 29
function tinhTongSoChan($n) {
    $sum = 0;

    for ($i = 2; $i <= $n; $i += 2) {
        $sum += $i;
    }

    echo "Tổng các số chẵn từ 1 đến $n: $sum";
}

tinhTongSoChan(10); // Gọi hàm và truyền n
// câu 30
function kiemTraChuoiCon($string, $subString) {
    $length = strlen($subString);
    $stringLength = strlen($string);

    for ($i = 0; $i <= $stringLength - $length; $i++) {
        if (substr($string, $i, $length) === $subString) {
            echo "Chuỗi '$subString' là chuỗi con của chuỗi '$string'";
            return;
        }
    }

    echo "Chuỗi '$subString' không là chuỗi con của chuỗi '$string'";
}

$string = "Hello, world!";
$subString = "world";
kiemTraChuoiCon($string, $subString); // Gọi hàm và truyền chuỗi và chuỗi con cần kiểm tra
?>

