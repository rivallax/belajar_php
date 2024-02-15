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



<body>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="index.css">
    
    <div class="container mt-5 d-flex justify-content-center">

        <div class="card p-3">

            <div class="d-flex align-items-center">

                <div class="image">
            <img src="waa.jpg" class="rounded" width="150" >
            </div>

            <div class="ml-3 w-100">
                
               <h4 class="mb-0 mt-0">RIVALDI AKBAR</h4>
               <span>SOFTWARE ENGINEERING</span>


               <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                <div class="d-flex flex-column">

                    <span class="articles">belajar php dasar</span>
                    <span class="number1">array</span>
                </div>
               </div>


               <div class="button mt-2 d-flex flex-row align-items-center">

                <button class="btn btn-sm btn-outline-primary w-100">Chat</button>
                <button class="btn btn-sm btn-primary w-100 ml-2">Follow</button>

                   
               </div>


           
            </div>
        
    </div>
            
        </div>
         
     </div>
</div>
<pre>

<?php
$cars = array("Volvo", "BMW", "Toyota","ferari","lambrogini"); 

var_dump($cars);
?>

</pre>
</body>
</html>

<!-- - <<Fungsi Array>> -
Kekuatan sebenarnya dari array PHP adalah fungsi array bawaan, seperti fungsi count() untuk menghitung item array: 

    <code program>
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars); --