<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    	<style type="text/css">
		p.solid {border-style: solid;}
	</style>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>sleepy's albums</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/purple_style.css">
  </head>

  <body>
<img src="img/header.png" alt="sleepy header Image">
	<?php include 'navigation.php'; ?>
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


         <?php include 'footer.php'; ?>
  </body>
</html>
