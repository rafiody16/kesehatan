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
            <td><h4></h4></td>
          </tr>
         	<tr>
         		<td><h5 class="card-title">1. Apakah Anda mengalami salah satu dari yang berikut:</h5></td>
         	</tr>
         	<tr>
         		<td>
         			<ul class="card-text">
         				<li>Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata)</li>
         				<li>Nyeri pada dada</li>
         				<li>Sulit untuk bangun</li>
         				<li>Merasa kebingungan</li>
         				<li>Penurunan kesadaran</li>
         			</ul>
         		</td>
         	</tr>
         	<tr>
         		<td>
         			<button type="button" class="btn btn-danger"><a href="awas.php" class="btn btn-danger">YA</a></button>
         			<button type="button" class="btn btn-primary"><a href="kedua.php" class="btn btn-primary">TIDAK</a></button>
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