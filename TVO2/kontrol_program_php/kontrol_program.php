<!-- Apa itu Struktur Kontrol?
Secara sederhana, struktur kontrol mengizinkan Anda untuk mengontrol aliran eksekusi kode di aplikasi Anda. Secara umum, program dijalankan secara berurutan, baris demi baris, dan struktur kontrol mengizinkan Anda untuk mengubah aliran itu, biasanya tergantung pada kondisi tertentu.

Struktur kontrol adalah fitur inti dari bahasa PHP yang mengizinkan skrip Anda merespons secara berbeda terhadap input atau situasi yang berbeda. Ini dapat mengizinkan skrip Anda memberikan respons berbeda berdasarkan input pengguna, file konten, atau beberapa data lainnya.
 

        PHP mendukung sejumlah struktur kontrol yang berbeda:

                if
                else
                elseif
                switch
                while
                do-while
                for
                foreach
                dan masih banyak lagi
            
            
            
            
        Jika
Susunan dari <If>  mengizinkan Anda untuk menghapus sebagian kode jika ekspresi yang diberikan bersama dengan itu bernilai true.
    
        <code program>
        // $umur = 50;
        // if ($umur < 30)
        // {
        //   echo "usia anda kurang dari 50";
        // }
        ?> 
<?php
if (is_array($user))
{
  $user_id = isset($user['12233']) ? $user['222213'] : '';
  $username = isset($user['rivaldi']) ? $user['berto'] : '';
  // and more statements... 
}
?>

        jika
 pernyataan <else> dalam hubungan dengan pernyataan if . Pada dasarnya, Anda dapat mendefinisikannya seperti yang ditunjukkan pada pseudocode berikut.

        <code program>
 $age = 50;
if ($age < 30)
{
  echo "umur anda kurang dari 30!";
}
else
{
  echo "usia anda lebih dari atau samadengan 30!";
}
//   Jadi, ketika Anda memiliki dua pilihan, dan salah satunya harus dieksekusi, Anda dapat menggunakan if-else construct.

       < Else If>
Kita bisa menganggap pernyataan elseif sebagai perpanjangan dari if-else construct. Jika Anda memiliki lebih dari dua pilihan untuk dipilih, Anda dapat menggunakan pernyataan elseif.

if (expression1)
{
  // code is executed if the expression1 evaluates to TRUE 
}
elseif (expression2)
{
  // code is executed if the expression2 evaluates to TRUE 
}
elseif (expression3)
{
  // code is executed if the expression3 evaluates to TRUE 
}
else
{
  // code is executed if the expression1, expression2 and expression3 evaluates to FALSE, a default choice 
}

        <code program>
 $age = 50;
if ($age < 30)
{
  echo "Your age is less than 30!";
}
elseif ($age > 30 && $age < 40)
{
  echo "Your age is between 30 and 40!";
}
elseif ($age > 40 && $age < 50)
{
  echo "Your age is between 40 and 50!";
}
else
{
  echo "Your age is greater than 50!";
}
pernyataan elseif. Jika dalam semua kondisi yang bernilai false, maka eksekusi pada kode yang disediakan di pernyataan else terakhir.

Switch
Pernyataan switch agak mirip dengan pernyataan elseif yang mana kita baru saja membahas di bagian sebelumnya. Satu-satunya perbedaan adalah ekspresi yang sedang diperiksa.

        <switch>
Dalam hal pernyataan elseif Anda memiliki serangkaian kondisi yang berbeda, dan tindakan yang sesuai akan dijalankan berdasarkan suatu kondisi. Di sisi lain, jika Anda ingin membandingkan variabel dengan nilai yang berbeda, Anda dapat menggunakan pernyataan switch.

<code program>
        $favourite_site = 'Code';
switch ($favourite_site) {
  case 'Business':
    echo "My favourite site is business.tutsplus.com!";
    break;
  case 'Code':
    echo "My favourite site is code.tutsplus.com!";
    break;
  case 'Web Design':
    echo "My favourite site is webdesign.tutsplus.com!";
    break;
  case 'Music':
    echo "My favourite site is music.tutsplus.com!";
    break;
  case 'Photography':
    echo "My favourite site is photography.tutsplus.com!";
    break;
  default:
    echo "I like everything at tutsplus.com!";
}