<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    	<style type="text/css">
		p.solid {border-style: solid;}
	</style>

    <title>sleepy's albums</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/purple_style.css">
  </head>

  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Lil Sleepy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>

        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href='index.php'>Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href='lil_sleepy_about.php'>About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href='lil_sleepy_albums.php'>Music</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href='lil_sleepy_contact_us.php'>Contact</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href='lil_sleepy_merch.php'>Merch</a>
          </li>
         </ul>
        </nav>
<img src="img/header.png" alt="sleepy header Image">
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">This is a collection of all of lil sleepy's albums that he has currently dropped.</p>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main role="main">
      <div class="album py-5 bg-light"></div>
        <div class="container"></div>

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src='img/album1_coverart.png' alt='No Class, All Sleep Album Cover'/>
                <div class="card-body">
                  <p class="card-text">No Class, All Sleep: This is Lil sleepy's first album ever he 
                  created this album in his basement and with the money he won from his national sleep competitions.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">12 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src='img/album2_coverart.png' alt='Dreamin about Sleepin Album Cover'/>
                <div class="card-body">
                  <p class="card-text">Dreamin about Sleepin: this album was the sophomore album that put sleepy on the map. although it is his shortest
                  of his albums critics say that he poured his soul into this one.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src='img/album3_coverart.png' alt='ZZZ Album Cover'/>
                  <p class="card-text">this album was not a fan favorite causing backlash throughout the community but praise among the critics.
                   although his most popular song world's best napper is on the album it wasn't enough to get this album off the ground</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">14 mins</small>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src='img/bed_calling.png' alt='Bed is Calling For Me Album Cover'/>
                <div class="card-body">
                  <p class="card-text">Bed's Calling for me: in this album sleepy rapped about
                   how his sleep has taken over his life and how much he loves it. this is his final album</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">18 mins</small>
                  </div>
                </div>
              </div>
            </div>
    </main>
		<?php include 'navigation.php'; ?>
         <?php include 'footer.php'; ?>
  </body>
</html>
