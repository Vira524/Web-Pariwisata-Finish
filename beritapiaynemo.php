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
            <h2><center>Berita</center></h2>
            <h3>Piaynemo</h3>
            <div class="gbr">
                <img src="gambar/piaynemo5.jpg">
                <p>
                    Gugusan pulau karst yang ada di Pianemo menghadirkan pemandangan 
                    yang memesona. Gundukan kecil pulau-pulau karst dengan warna laut 
                    yang biru bisa dilihat dari Bukit Pianemo. Sebelumnya, wisatawan 
                    harus mendaki sekitar 320 anak tangga sebelum tiba di puncak Bukit.
                </p><br>
                <p>
                    Untuk dapat sampai ke pulau dengan julukan Little Wayag ini, wisatawan 
                    dapat menggunakan transportasi laut berupa speed boat atau kapal Ferry 
                    dari kota Sorong atau dari ibu kota Raja Ampat, Waisai yang terletak di 
                    Waigeo Selatan. Lama perjalanannya dua sampai tiga jam (tergantung dengan 
                    ombak dan kecepatan speed boat).
                </p>
            </div>
        </div>

        <center>
            <head>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
                <link rel="stylesheet" type="text/css" href="style1.css">

                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0" nonce="BH6BktzW"></script>
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