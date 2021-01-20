<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kotak1">
        <div class="header2">
            <ul>
                <li><a href="beranda.html">Beranda</a></li>
                <li><a href="dayatarik.html">Daya Tarik</a></li>
                <li><a href="atraksi.html">Atraksi</a></li>
                <li><a href="berita.html">Berita</a></li>
                <li><a href="login.html">Logout</a></li>
            </ul>
        </div>

        <div class="kotak2">
            <h2><center>Atraksi</center></h2>
            <h3>Air Terjun Batanta</h3>
            <div class="gbr">
                <img src="gambar/airterjunbatanta2.jpg" >
                <p>Untuk mengunjungi pulau ini Anda harus tiba terlebih 
                    dahulu di Sorong kemudian menuju ke pelabuhan untuk melanjutkan 
                    perjalanan menggunakan kapal. Dari dermaga Sorong, yang merupakan 
                    pintu gerbang ke kabupaten Raja Ampat, anda bisa menggunakan 
                    kapal wisata, kapal rakyat milik pemerintah setempat, ataupun 
                    menyewa speed boat ataupun long boat untuk bisa sampai ke Pulau Batanta.
                </p><br>
                <p>Untuk speed boat ataupun long boat, anda bisa menyewanya dengan biaya 
                    sewa sekitar Rp 5 juta / hari dan bisa mengantar anda langsung ke Pulau 
                    Batanta tanpa harus ke Waisai. Untuk kapal rakyat tarifnya kurang lebih 
                    sekitar Rp120.000 per orangnya, dan melayani rute Sorong-Waisai, ibu kota 
                    Raja Ampat.
                    Kapal ini berlayar setiap satu kali sehari pada pukul 14:00 WIT 
                    dengan waktu tempuh sekitar 2 hingga 3 jam. Kemudian, anda tinggal melanjutkan 
                    perjalanan anda menuju Pulau Batanta dengan speed boat atau perahu nelayan 
                    lokal dengan tarif sekitar Rp 100.000. Anda bisa memutuskan sendiri mau 
                    memilih yang mana, perjalanan ke Pulau Batanta tidak begitu jauh, kurang 
                    lebih hanya 30 menit saja.
                </p>
            </div>
        </div>

        <center>
            <head>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
                <link rel="stylesheet" type="text/css" href="style1.css">

                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0" nonce="kHn1RANU"></script>
            </head>
            <body>
                <div class="voting">
                    <button id="likebtn">
                        <i class="fa fa-thumbs-up"></i>
                    </button>
                    <input type="number" id="input1" value="0" name="">
                    
                    <button id="dislikebtn">
                        <i class="fa fa-thumbs-down"></i>
                    </button>
                    <input type="number" id="input2" value="0" name="">      
                </div> 
            
                <script type="text/javascript">
                    let likebtn = document.querySelector('#likebtn');
                    let dislikebtn = document.querySelector('#dislikebtn');
            
                    let input1 = document.querySelector('#input1');
                    let input2 = document.querySelector('#input2');
            
                    likebtn.addEventListener('click',()=>{
                        input1.value = parseInt(input1.value) + 1;
                        input1.style.color = "#0000ff";
                    });
            
                    dislikebtn.addEventListener('click',()=>{
                        input2.value = parseInt(input2.value) + 1;
                        input2.style.color = "#ff0000";
                    });
                </script>

                <?php
                $uri = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                ?>
                
                <div class="fb-comments" data-href="<?=$uri ?>" data-width="" data-numposts="5"></div> 
                
            </body>      
            </center>

        <div class="footer">
            <h4>Pesona Indonesia</h4>
            <p class="kaki">Tour & Trip<br>
                No : 085748824104
            </p>
            <p class="copy">Copyright © 2021 Vira Febrianti</p>
        </div>
    </div>
</body>
</html>