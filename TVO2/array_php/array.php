<!-- Sebuah array menyimpan banyak nilai dalam satu variabel: 

     Apa itu Array?
Array adalah variabel khusus yang dapat menampung banyak nilai dalam satu nama, dan Anda dapat mengakses nilai tersebut dengan mengacu pada nomor atau nama indeks.

    Jenis Array PHP
Di PHP, ada tiga jenis array:
    Array terindeks - Array dengan indeks numerik
    Array asosiatif - Array dengan kunci bernama
    Array multidimensi - Array yang berisi satu atau lebih array 

   - <<Item Array>> -
Item array dapat berupa tipe data apa pun.

Yang paling umum adalah string dan angka (int, float), tetapi item array juga bisa berupa objek, fungsi, atau bahkan array.

Anda dapat memiliki tipe data berbeda dalam array yang sama. 

    <!DOCTYPE html>
<html>
<body>

    <code program>
// contoh fungsi:
function myFunction() {
  echo "teks ini berasal dari pemanggilan myfun";
}

// membuat array:
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);

// memanggil suatu aitem
$myArr[3]();


</body>
</html>  -->


<!-- Sebuah array menyimpan banyak nilai dalam satu variabel: -->
<html>
<body>
<pre>

<?php
$cars = array("Volvo", "BMW", "Toyota"); 

var_dump($cars);
?>

</pre>
</body>
</html>

<!-- - <<Fungsi Array>> -
Kekuatan sebenarnya dari array PHP adalah fungsi array bawaan, seperti fungsi count() untuk menghitung item array: 

    <code program>
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars); -->