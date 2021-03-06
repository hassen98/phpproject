<!DOCTYPE html>
<html>
<head>
  
  <title>sanes | ajout admin</title>
   <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


  <link rel="stylesheet" href="../../dist/css/ajout_admin.css">


</head>
<body>

	
<div class="container">
	<div class="header">
		<h2>Ajouter Admin</h2>
	</div>
	<form id="form" class="form" action="../../model/ajouter_admin.php" method="POST">
		<div class="form-control">
			<label for="username">Nom</label>
			<input type="text" placeholder="nom" id="nom" name="nom" />
            <i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Email</label>
			<input type="text" placeholder="ex:nom@gmail.com" id="email" name="email" />
            <i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
	
			<small>Error message</small>
		</div>
       
		<div class="form-control">
			<label for="username">Zone</label>
            
            <select class="form-control" name="zone" >
                
                <option value="djerba">Djerba</option>
                <option value="sousse">Sousse</option>
                
            </select>
	
			<small>Error message</small>
		</div>
		<button type="submit" id="submit">ajouter</button>
	</form>
</div>
</div>
<!-- script control form -->
<script src="../../dist/js/ajout_admin.js"></script>
</body>
</html>


