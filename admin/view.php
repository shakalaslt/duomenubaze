<!DOCTYPE html>
<html>
     <head>
	      <title>Produktai</title>
	      <meta charset="utf-8">
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
     </head>
     <body>
     	<div class="container">
     		<h1>Prekės Admin</h1>
     		<div class="row">
     			<div class="col">
     				<table class="table">
     					<thead>
     						<tr>
     							<th>Id</th>
     							<th>Pavadinimas</th>
     							<th>Kaina</th>
     							<th>Aprašymas</th>
     							<th>Svoris</th>
     							<th>Kiekis</th>
     						</tr>
     					</thead>
     					<tbody>
     						<?php
     						    foreach($products as $product) {
     						    	echo "<tr>
     						    	<td>". $product['id'] ."</td>
     						    	<td>". $product['pavadinimas'] . "</td>
     						    	<td class='price'>". $product['kaina'] . "</td>
     						    	<td>" . $product['aprašymas']."</td>
     						    	<td>" . $product['svoris'] ."</td>
     						    	<td>" . $product['kiekis']."</td>
     						    	<td><a class='btn btn-sm btn-danger' href='?delete=".$product['id'] ."'>
     						    	Delete</a></td>
     						    	</tr>";
     						    }
     						?>
     					</tbody>

     					
     				</table>
     			</div>
     			<div class="col">
     				<h2>Pridėti patiekalą</h2>
     				<form action="POST">
     					<div class="form-group">
     						<label>Pavadinimas</label>
     					    <input class="form-control" type="text" name="pavadinimas">
     					</div>
     					<div class="row">
     					    <div class="form-group">
     					        <label>Kaina</label>
     					        <input class="form-control" type="text" name="kaina">
     					    </div>    
     					    <div class="form-group">
     					        <label>Kiekis</label>    
     					        <input class="form-control" type="text" name="kiekis">
     					    </div>
     					    <div>
     					        <label>Svoris</label>   
     					        <input class="form-control" type="text" name="svoris">
     					    </div>
     					    <div>
     						    <label>Aprašymas</label>
     					        <input class="form-control" type="text" name="aprašymas">
     					    </div>
     					</div>    
     					<button type="submit" name="submit">Įtraukti</button>
     					
     				</form>
     			</div>
     		</div>
     		
     	</div>

     </body>

</html>