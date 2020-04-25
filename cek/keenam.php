<?php 

include "../aset/header.php";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <title>cek covid</title>
 </head>
 <body>
  <div class="container">
  <div class="row mt-3">
    <div class="col-md">
      <div class="card">
          <div class="card-header">
            <h2>CEK COVID 19</h2>
          </div>
         </div>
         <table>
          <tr>
            <td><h4>6. Apakah Anda memiliki kontak dekat dengan seseorang yang bepergian ke luar Negeri dalam 14 hari terakhir yang menjadi sakit (batuk, demam, bersin, atau sakit tenggorokan)?</h4></td>
          </tr>
          <tr>
            <td>
              <ul>
            <!--    <li>Batuk</li>
                <li>Bersin</li>
                <li>Demam</li>
                <li>Sakit Tenggorokan</li>
                <li>Sulit Bernafas</li> -->
              </ul>
            </td>
          </tr>
          <tr>
            <td>
              <button type="button" class="btn btn-danger"><a href="waspada.php" class="btn btn-danger">YA</a></button>
              <button type="button" class="btn btn-primary"><a href="aman.php" class="btn btn-primary">TIDAK</a></button>
            </td>
          </tr>
         </table>
        </div>
       </div>
      </div>
  </center>
 </body>
 </html>

 <?php 

include "../aset/footer.php";

  ?>