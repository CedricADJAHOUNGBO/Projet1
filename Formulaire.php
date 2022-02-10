<! Doctype html>
<html>
<head>
<title> Ma page web </title>
	<link rel="stylesheet" href= "style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->


	<meta charset="utf-8"/>
</head>
<body>
	<form  method="post" action="enregistrement.php">
		
      <div class rows="12">
           <div class="form-row">
          <label class="col-md-3" for="nom">Nom</label> 
          <div class="col-md-3">
              <input id="nom" type="text" class="form-control" name="" placeholder="Entrer votre nom">
          </div>
        </div>
      </div>
            </br>
      <div class="form-group">
        <div class="form-row">
          <label class="col-md-3" for="prenom">Prénom</label> 
          <div class="col-md-3">
               <input id="prenom" type="text" class="form-control" name="" placeholder="Entrer votre prénom">
          </div>
        </div>
      </div>
       <div class="form-group">
        <div class="form-row">
          <label class="col-md-3" for="prenom">Age</label> 
          <div class="col-md-3">
               <input id="age" type="text" class="form-control" name="" placeholder="Entrer votre age">
          </div>
        </div>
      </div>
             <div class="form-group">
        <div class="form-row">
          <label class="col-md-3" for="prenom">Email</label> 
          <div class="col-md-3">
               <input id="email" type="mailto" class="form-control" name="" placeholder="Entrer votre adresse mail">
          </div>
        </div>
      </div>
             <div class="form-group">
        <div class="form-row">
          <label class="col-md-3" for="prenom">Profession</label> 
          <div class="col-md-3">
               <input id="prenom" type="text" class="form-control" name="" placeholder="Entrer votre métier">
          </div>
        </div>
      </div>
             <div class="form-group">
        <div class="form-row">
          <label class="col-md-3" for="prenom">Téléphone</label> 
          <div class="col-md-3">
               <input id="prenom" type="text" class="form-control" name="" placeholder="Entrer votre numéro de téléphone">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-3 offset-md-11">
                 <button class="btn btn-warning">Envoyer</button>
            </div>
        </div>
      </div>
    </form>
			<label for="pass">Email</label>
			<input type="mailto" name="pass" id="mail" required />
	</div>
                </br>
		
		</br>
		<div><input type="submit" name="enregistrer" value="Enregistrer"></div>
                
                <div><input type="reset" name="Annuler" value="Annuler"></div>