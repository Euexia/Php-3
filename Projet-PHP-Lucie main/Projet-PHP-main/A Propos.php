<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Projet_Lucie-main/CSS/stylesaccueil.css">
    <title>A Propos</title>
</head>
<body>
  <header id="header">
    <nav class="navbar navbar-expand-lg shadow-lg mb-4 bg-light fixed-top">
      <div class="container-fluid">
        <a class="nav-link text-dark fw-bold fs-4" style="margin-right: 10px; margin-left: 10px" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="#about">A propos</a>
            <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="portfolio.php">Portfolio</a>
            <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="contact.php">Contact</a>
            <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="A Propos.php">CV</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
        <!--PhotoProfil-->
    <div class="Homepage ">
        <div class="row mx-2 my-2">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card  ">
              <div class="img ">
                <img class="m-auto  " src="/Image/mato.jpg" width="100%">
              </div>
        <!--Contact Info-->
              <h2 class="ml-4">Lucie Quintana</h2>
              <hr class="mt-n1">
              <div class="card-body mt-n3">
                <h6><i class='fas fa-briefcase  mr-3'></i>Etudiante</h6>
                <h6><i class='fas fa-home mt-1 mr-3'></i>France, Paris</h6>
                <h6><i class='fas fa-envelope mt-1 mr-3'></i>lucie.quintana04@gmail.com</h6>
                <h6><i class="fas fa-phone-alt mt-1 mr-3"></i>06 45 02 23 77</h6>
                <hr>
        <!--Compétences-->        
                <h3><i class="fas fa-cogs mr-3 mb-4"></i> Compétences</h3>
                <h6>Travail de groupe</h6>
                <div class="progress rounded-pill my-3" style="height: 20px;">
                  <div class="progress-bar" style=" height: 100%; width: 90%;">90%</div>
                </div>
                <h6>Python</h6>
                <div class="progress rounded-pill my-3" style="height: 20px;">
                  <div class="progress-bar" style=" height: 100%; width: 50%;">50%</div>
                </div>
                <h6>HTML/CSS</h6>
                <div class="progress rounded-pill my-3" style="height: 20px;">
                  <div class="progress-bar" style=" height: 100%; width: 60%;">60%</div>
                </div>
                <h6>Javascript</h6>
                <div class="progress rounded-pill my-3" style="height: 20px;">
                  <div class="progress-bar" style=" height: 100%; width: 20%;">20%</div>
                </div>
                <hr>
        <!--Langue-->        
                <h3><i class="fas fa-globe  mr-3 mt-3 mb-4"></i> Language</h3>
                <h6>Anglais</h6>
                <div class="progress rounded-pill my-3" style="height: 20px;">
                  <div class="progress-bar" style=" height: 100%; width: 80%;">B1</div>
                </div>
                <h6>Espagnol</h6>
                <div class="progress rounded-pill my-3" style="height: 20px;">
                  <div class="progress-bar" style=" height: 100%; width: 60%;">A2</div>
                </div>
                <h6>Japonais</h6>
                <div class="progress rounded-pill my-3" style="height: 20px;">
                  <div class="progress-bar" style=" height: 100%; width: 20%;">A1</div>
                </div>
              </div>
            </div>
          </div>
        <!--Parcours Pro-->  
          <div class="col-lg-8 col-md-8 col-12">
            <div class="card shadow-sm">
              <div class="card-body">
                <h2><i class="fas fa-suitcase mb-2 mr-2"></i> Parcours Professionnel</h2>
    
                <h5 class="mt-4">Stage Architecte et Design</h5>
                <h6><i class="fas fa-calendar mr-3 my-3  "></i>02/2019
                </h6>
                <pre>
                    <ul>
                    <li> Communication et suivi client</li>
                    <li> Esquisse du projet et modélisation sur logiciel 3D</li>
                    <li> Elaboration du planning d'exéccution et coordination des professinnels intervenants</li>
                    </ul>
                </pre>
            </div>

            <!--Formation-->  
            <div class="card mt-4">
              <div class="card-body">
                <h2 class=" mb-2"><i class="fas fa-certificate"></i> Formation</h2>
                <h5 class="mt-4">Ecole Gaming Campus</h5>
                <h6><i class="fas fa-calendar my-2 mr-2"></i> 2022-</h6>
                <p>Master Jeux vidéo.</p>
                <hr>
                <h5 class="mt-4">Lycée Jeanne-Hacchette</h5>
                <h6><i class="fas fa-calendar my-2 mr-2"></i> 2019 - 2022</h6>
                <p>Lycée publique avec options sciences de la vie et sciences économique, obtention du baccalauréat.</p>
                <hr>
                <h5 class="mt-4">College Notre-Dame</h5>
                <h6><i class="fas fa-calendar my-2 mr-2"></i> 2016 - 2019</h6>
                <p>College privé, obtention du brevet avec mention.</p>
              </div>
            </div>

           <!--Interets-->
                <div class="card-body">
                  <h2 class=" mb-2"><i class="fas fa-certificate" ></i> Centre d'interets </h2>
                  <pre>Jeux Vidéos     Dessin     Photographie     Voyages     Art visuel</pre>
                  
              </div>
          </div>
        </div>
      </div>
    
    
      <div class=" footer bg-dark mt-4 ">
      </div>
</body>
</html>