<!-- Fungsi(fungtion) PHP
PHP memiliki lebih dari 1000 fungsi bawaan yang dapat dipanggil secara langsung, dari dalam skrip, untuk melakukan tugas tertentu. 


Fungsi Buatan Pengguna PHP
Selain fungsi PHP bawaan, Anda juga dapat membuat fungsi Anda sendiri.

Fungsi adalah sekumpulan pernyataan yang dapat digunakan berulang kali dalam suatu program.
Suatu fungsi tidak akan dijalankan secara otomatis saat halaman dimuat.
Suatu fungsi akan dieksekusi dengan panggilan ke fungsi tersebut.-->

        <!-- panggil Fungsi->
Deklarasi fungsi yang ditentukan pengguna dimulai dengan kata kunci function, diikuti dengan nama fungsi: 

    <-sourch code -> 
-->
<?php
function myMessage() {
  echo "Hello world!";
}

myMessage();
?> 

                <!-- Argumen Fungsi PHP ->
Informasi dapat diteruskan ke fungsi melalui argumen. Argumen sama seperti variabel.

Argumen ditentukan setelah nama fungsi, di dalam tanda kurung. Anda dapat menambahkan argumen sebanyak yang Anda inginkan, cukup pisahkan dengan koma.

Contoh berikut memiliki fungsi dengan satu argumen ($fname). Saat familyName()fungsi dipanggil, kita juga meneruskan sebuah nama, misalnya ("Jani"), dan nama tersebut digunakan di dalam fungsi, yang menghasilkan beberapa nama depan berbeda, namun nama belakang sama:
 
     <-sourch code->

function familyName($fname) {
  echo "$fname programer.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");



        <---Contoh berikut memiliki fungsi dengan dua argumen ($fname, $year):

     <-sourch code->
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");



        <--Nilai Argumen PHP
Contoh berikut menunjukkan cara menggunakan parameter default. Jika kita memanggil fungsi setHeight()tanpa argumen maka nilai default akan diambil sebagai argumen:

     <-sourch code->
function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);   
    
       

       <-- Mengembalikan nilai
Untuk membiarkan suatu fungsi mengembalikan nilai, gunakan returnpernyataan:
    

    <-sourch code->
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);


        <---Melewati Argumen dengan Referensi
Dalam PHP, argumen biasanya diteruskan berdasarkan nilai, artinya salinan nilai digunakan dalam fungsi dan variabel yang diteruskan ke fungsi tidak dapat diubah.

Ketika argumen fungsi diteruskan dengan referensi, perubahan pada argumen juga mengubah variabel yang diteruskan. Untuk mengubah argumen fungsi menjadi referensi, operator & digunakan:

        <-sourch code->
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

   
        <---Variabel Jumlah Argumen
Dengan menggunakan ...operator di depan parameter fungsi, fungsi tersebut menerima argumen dalam jumlah yang tidak diketahui. Ini juga disebut fungsi variadik.

Argumen fungsi variadik menjadi array.
    -->
<!-- 
       <-sourch code->
    function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a; -->