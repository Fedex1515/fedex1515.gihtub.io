<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Jekyll v4.0.1">

    <title>NetManager</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../carousel.css" rel="stylesheet">
  </head>
  <body>
  <?php
          readfile("../menu_sub.html");
        ?>

<main role="main">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <!--<div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>-->  


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-5">
        <h2 class="featurette-heading">NetManager<br><span class="text-muted">Windows 7/8/10</span></h2>
        <br>

        <!-- Versioni software-->
        <h4>v1.1</h4>
        <!--<button class="btn btn-outline-success my-2 my-sm-0" onclick="window.open('download/NetManager_v1.3.zip');">Download - Software</button>-->
        <button class="btn btn-outline-success my-2 my-sm-0" onclick="window.open('download/Guida_NetManager.pdf');">Download - Manuale pdf</button>
      
        <p class="lead"></p>
      </div>

      <div class="col-md-7">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="550" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><image href="images/netmanager.png" style="width: 100%; height: 100%"></image></svg>
      </div>
    </div>

    <hr class="featurette-divider">
    
    <!--<h2>Funzioni supportate</h2>

    <p>Si riporta a seguire la lista dei comandi supportati dal client:</p>
    <p></p>    

    <div class="row featurette">
      <div class="col-md-6 order-md-2">
        <h4 class="">FC01<br><span class="text-muted">Read Coil Status</span></h4>
        <p class="lead">Lettura uscite digitali</p>
      </div>

      <div class="col-md-6 order-md-2">
        <h4 class="">FC02<br><span class="text-muted">Read Input Status</span></h4>
        <p class="lead">Lettura ingressi digitali</p>
      </div>
    </div>

    <br>

    <div class="row featurette">
      <div class="col-md-6 order-md-2">
        <h4 class="">FC03<br><span class="text-muted">Read Holding Register</span></h4>
        <p class="lead">Lettura registri I/O</p>
      </div>

      <div class="col-md-6 order-md-2">
        <h4 class="">FC04<br><span class="text-muted">Read Input Register</span></h4>
        <p class="lead">Lettura registri input</p>
      </div>
    </div>

    <br>

    <div class="row featurette">
      <div class="col-md-6 order-md-2">
        <h4 class="">FC05<br><span class="text-muted">Force Single Coil</span></h4>
        <p class="lead">Forzatura singola uscita digitale</p>
      </div>

      <div class="col-md-6 order-md-2">
        <h4 class="">FC06<br><span class="text-muted">Preset Single Register</span></h4>
        <p class="lead">Scrittura registri I/O</p>
      </div>
    </div>

    <hr class="featurette-divider">

    <h2>Altre funzioni di diagnostica</h2>

    <p>Tramite il client è possibile inoltre eseguire comandi di diagnostica verso il dispostivo interrogato:</p>
    <p></p>

    <div class="row featurette">
      <div class="col-md-6 order-md-2">
        <h4 class="">FC08<br><span class="text-muted">Force Single Coil</span></h4>
        <p class="lead">Comandi di diagnostica dello slave ModBus</p>

        <h6></h6>
      </div>

      <div class="col-md-6 order-md-2">
      </div>
    </div>-->

  </div><!-- /.container -->


  <!-- FOOTER -->
<footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2022-2023 Turco Federico &middot; <a href="../privacy.html">Privacy</a> &middot; <a href="../terms.html">Terms</a></p>
  </footer>

</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../js/bootstrap.bundle.js"></script></body>
</html>
