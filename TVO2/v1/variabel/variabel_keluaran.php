<!-- Variabel PHP
Variabel adalah “wadah” untuk menyimpan informasi.

ContohDapatkan Server PHP Anda sendiri
$x = 5;
$y = "John"

Pada contoh di atas, variabel $xakan menyimpan nilai 5, dan variabel $yakan menyimpan nilai "John". -->
<?php
$x = 5;      // $x is an integer
$nama = "RIVALDI AKBAR"; // $y is a string

// VARIABEL

$txt = "SOFTWARE ENGINEERING";
// VARIABEL
$x = "FRUIT";  $y = "JAMBU";
$m="NAGA";

?>
<!DOCTYPE html>
<html>
<style>
    
    body{
    
    background-color:#B3E5FC;
    border-radius: 10px;

}


.card{
  width: 400px;
  border: none;
  border-radius: 10px;
   
  background-color: #fff;
}



.stats{

      background: #f2f5f8 !important;

    color: #000 !important;
}
.articles{
  font-size:10px;
  color: #a1aab9;
}
.number1{
  font-weight:500;
}
.followers{
    font-size:10px;
  color: #a1aab9;

}
.number2{
  font-weight:500;
}
.rating{
    font-size:10px;
  color: #a1aab9;
}
.number3{
  font-weight:500;
}

</style>
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
                
               <h4 class="mb-0 mt-0"><?= $nama; ?></h4>
               <span><?= $txt; ?></span>

               <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">

                <div class="d-flex flex-column">

                    <span class="articles">belajar php dasar</span>
                    <span class="number1">variabel</span>
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
    <div class="container mt-5 d-flex justify-content-center">

        <div class="card p-3">
            <div class="ml-3 w-100">
                
               <h4 class="mb-0 mt-0"><?= $nama; ?></h4>
               <span><?= $txt; ?></span>
               <div class="row">
                <div class="col-4">
                    <p><?= $x; ?></p>
                </div>
                <div class="col-4">
                    <p><?= $y; ?></p>
                </div>
                <div class="col-4">
                    <p><?= $m; ?></p>
                </div>
               </div>


            </div>

                
            </div>
            
        </div>
         
     </div>

</body>
</html>

