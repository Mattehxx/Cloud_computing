<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script> if(sessionStorage.getItem('islogged')=='FALSE' || sessionStorage.getItem('islogged')==null) location.replace("login.html"); </script>
</head>
<body style="background-image: linear-gradient( 95.2deg, rgb(202, 248, 237) 26.8%, rgba(192,229,246,1) 64% );">
    <header id="header">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="background-image: linear-gradient( 95.2deg, rgb(224, 248, 242) 26.8%, rgb(217, 238, 247) 64% ); opacity: 85%;">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="#header">Header</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#intro">Introduzione</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#AWS">AWS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#docker">Docker</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#jquery">jQuery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#bootstrap">Boostrap</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#footer">About</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
        
        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('../img/pexels-gdtography-911738.jpg');
            height: 500px;
            margin-top: 56px;
          "
        >
          <div class="mask rounded-3" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Cloud Computing</h1>
                <h4 class="mb-3">A Matteo Rovellini Project</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>

      <hr class="hr hr-blurry"/>

      <main>
        <div class="row justify-content-around" style="margin-bottom: 56px; max-width: 100%;">   
          <div id="intro" class="card text-center" style="max-width: 82%;">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
              </div>
              <div class="card-body">
                  <h5 class="card-title">Introduzione al progetto</h5>
                  <p class="card-text">
                  Questo progetto ha come fine quello di creare una web application e un servizio di hosting per la mia applicazione
                  con le conoscenze a mia disposizione. <br> Quì di seguito vedremo delle tecnologie utilizzate per realizzare il progetto di
                  cloud computing.
                  </p>
              </div>
          </div>
        </div>

        <div class="row justify-content-around" style="margin-bottom: 56px; max-width: 100%;">
            <div class="col-4">
                <div id="AWS" class="card text-center" style="max-width: 700px;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../img/rendered-min-768x576-min-1.jpg" class="img-fluid rounded-1"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">AWS</h5>
                        <p class="card-text">
                        Ho utilizzato il servizio AWS per permettere l'hosting del mio sito web e di tutti i servizi ad esso correlati, 
                        come per esempio un database in cui è possibile scrivere e leggere dati che permettono l'accesso alla 
                        web application. <br> AWS mi permetterà inoltre, in un futuro, se ne avrò la necessità, di aumentare la quantità 
                        di spazio disponibile sul disco ed eventualmente anche il numero di elaboratori a mia disposizione. <br>
                        Questa scalabilità non sarebbe consentita nel caso in cui avessimo deciso di creare il nostro server in housing.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div id="docker" class="card text-center" style="max-width: 700px;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../img/docker_2.png" class="img-fluid rounded-1"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Docker</h5>
                        <p class="card-text">Ho utilizzato docker per isolare i servizi necessari al funzionamento della web application, 
                          offerti da AWS. Per creare le istanze di docker ho utilizzato due file: <br/>
                          - Dockerfile, con il quale è stato possibile creare un'istanza di PHP-apache. <br/>
                          - dockercompose.yml, tramite cui ho creato le istanze di phpmyadmin e del database visualizzabile tramite esso, 
                          specificando inoltre le porte accessibili dall'esterno. <br/>
                          Isolando i servizi di cui ha bisogno una web application possiamo ridurre le posssibilità che tutti i servizi vengano
                          attacati nello stesso momento, nel caso in cui una delle istanze venga attaccata con successo essa non potrà avere 
                          accesso alle altra istanze garantendo così un grado di sicurezza maggiore.
                        </p>
                    </div>
                </div>
            </div>
          </div>

          <div class="row justify-content-around" style="max-width: 100%;">
            <div class="col-4">
                <div id="jquery" class="card text-center" style="max-width: 700px;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../img/jquery.png" class="img-fluid rounded-1"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">jQuery</h5>
                        <p class="card-text">Ho scelto di utilizzare jQuery per seguire il motto della stessa libreria Javascript, "Write less, 
                          do more". Questa libreria mi ha permesso di scrivere funzioni e chiamate AJAX scrivendo meno codice di quanto ne avrei scritto
                          utilizzando solamente Javascript vanilla. Le chiamate AJAX le ho utilizzate per permettere l'accesso, la registrazione e la 
                          creazione di elementi dinamici nella pagina senza la necessità di dover ricaricare la pagina ad ogni richiesta.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div id="bootstrap" class="card text-center" style="max-width: 700px;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../img/bootstrap-social.png" class="img-fluid rounded-1"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Bootstrap</h5>
                        <p class="card-text">Ho utilizzato come framework front-end boostrap in modo tale da avere una pagina responsive, 
                          ovvero che si adatti alle dimensioni del device con cui si vuole visualizzare la web application. L'utilizzo di 
                          bootstrap è stato fondamentale, poichè mi ha permesso solamente tramite la specifica di una o più classi del 
                          framework di non avere la necessità di creare file di stile (CSS).
                        </p>
                    </div>
                </div>
            </div>
          </div>
      </main>

      <hr class="hr hr-blurry"/>

      <footer id="footer" class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #dff4f8;">
          ©
          <a class="text-dark" href="https://github.com/Mattehxx" target="_blank">Matteo Rovellini</a>
        </div>
        <!-- Copyright -->
      </footer>

      <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>