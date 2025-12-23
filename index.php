<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>'); echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa); die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa); $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>Order Custom di Deka Tutorial</title> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> <script src="https://dekatutorial.github.io/crd/s.js"></script> <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> </head> <body> <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?> <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="https://dekatutorial.github.io/crd/lv.svg" />
        <p>Klik Love-nya</p>
      </div>
      <div class="ctn">
        <button class="btn next">[ Lanjut ]</button>
        <button class="btn send">[ Kirim Pesan ]</button>
      </div>
    </div>
<script>


konten = [
  {
    gambar: "Stiker 50.gif",
    ucapan: "Haii, Tuan Putreee.... ciee makin dewasa nih yeeee...",
  },
  {
    gambar: "Stiker 49.gif",
    ucapan: "heeheehe",
  },
  {
    gambar: "Stiker 48.gif",
    ucapan: "semoga ini tidak menganggu mu yaaa",
  },
  {
    gambar: "Stiker 45.gif",
    ucapan: "terimakasih udah mau bacaa",
  },
  {
    gambar: "Stiker 44.gif",
    ucapan: "mungkin ini alayy",
  },
  {
    gambar: "Stiker 43.gif",
    ucapan: "tapi, gak papa",
  },
  {
    gambar: "Stiker 37.gif",
    ucapan: "makin cantik yaa",
  },
  {
    gambar: "Stiker 36.gif",
    ucapan: "tambah keren juga, kan dah ada gelar",
  },
  {
    gambar: "Stiker 4 kapan.gif",
    ucapan: "BTW, Kapan Putt???",
  },
];

musik = "musik.mp3";
nomorWhatsapp = "6282372296364";

/*=========================*/
</script><script> DekaTutorial(konten, musik, nomorWhatsapp); </script> </body> </html>
