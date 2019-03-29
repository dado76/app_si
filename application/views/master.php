<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>App DCR Informatique et télécommunication</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">


	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
  p {
    color: #444;
    background-color: transparent;
    border-bottom: 1px solid #D0D0D0;
    font-size: 12px;
    font-weight: normal;
    margin: 0 0 14px 0;
    padding: 14px 15px 10px 15px;
  }

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100px;
    height: 100px;
  }
	</style>
</head>


<div id="container">
	<h1><center>Direction Collecte et Recyclage | Service Informatique et Télécommunication</center></h1>
<header><img src="logo.png" alt="logo" class="center"></img></header>
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">

      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profil</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Equipements
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Géolocalisation</a>
          <a class="dropdown-item" href="#">Radio</a>
              <a class="dropdown-item" href="#">Video Surveillance</a>
            <a class="dropdown-item" href="#">Tripratik</a>
              <a class="dropdown-item" href="#">Suivis</a>


        </div>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          inventaire
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Bilan des équipements</a>
            <a class="dropdown-item" href="#">Gestion du stock</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Configuration des notifications</a>
          </div>
      </li>

</nav>
	<div id="body">




	</div>

	<p class="footer"></p>
</div>

</body>


<div id="container">
  <h1> Liste des véhicules géolocaliser</h1>
  <p>   Rechercher : <input> </input></p>
  <br>

	<div id="body">

    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Codification</th>
          <th scope="col">Numéro de téléphone</th>
          <th scope="col">Immatriculation</th>
          <th scope="col">Statut</th>
          <th scope="col">LC</th>
          <th scope="col">Pesée Embarquée</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>






        <tr>
          <th scope="row">1</th>
          <td>N283</td>
          <td>06 68 69 65 69</td>
          <td>65-EF-GW</td>
          <td>EN SERVICE</td>
          <td>TERBERG</td>
          <td>OUI</td>
          <td><button type="button" class="btn btn-success btn-sm">Voir</button>
          <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
          <button type="button" class="btn btn-warning btn-sm">Modifier</button></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>N283</td>
          <td>06 68 69 65 69</td>
          <td>65-EF-GW</td>
          <td>EN SERVICE</td>
          <td>TERBERG</td>
          <td>OUI</td>
          <td><button type="button" class="btn btn-success btn-sm">Voir</button>
          <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
          <button type="button" class="btn btn-warning btn-sm">Modifier</button></td>
        </tr>

      </tbody>
    </table>
	</div>

	<p class="footer">Rendu de la pages en <strong>{elapsed_time}</strong> secondes. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
