<?php
include("html/connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Aceuil mobile</title>
</head>
<body id="body">
        <header id="header">
            <nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="image/téléchargement.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#"></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                          </li>
                      </ul>
                      
                    </div>
                  </div>
            </nav>
        </header>
        
        <div class="container ">
           <div id="font">
           <div  class="row m-3 p-5 " >
                <div class="col-12 col-lg-6 ">
                  <button  id="dark">Dark/Night</button><br>
                    <p id="nom">
                       JEAN-PAUL <br>Dev-Web
                    </p>
                    <p id="parole">
                        Ou <span id="style">professionalisme</span> s'allie avec <span id="style">passion</span>.
                        Depuis plus de 5ans maintenant, j'exerce mon metier avec la 
                        passion qui m'anime:capture l'essence de chaque 
                        instant.
                    </p>
                    <button id="button">
                        UN PROJET ? ECRIVEZ-MOI
                    </button>
                </div>
                <div class="col-12 col-lg-6">
                    <img id="image" src="image/imageperso/04.jpg" alt="">
                </div>
              </div>
           </div>
              
           
            <div class="row m-3 p-5">
                <div id="projets">Mon dernier projet</div>
            </div>
            <div class="row m-3 p-5">
                <div class="col-12 col-lg-4"><img id="image3" src="image/nature/projet_voiture.png" alt=""></div>
                <div class="col-12 col-lg-4"><img id="image3" src="image/nature/projet_ajouter.png" alt=""></div>
                <div class="col-12 col-lg-4"><img id="image3" src="image/nature/projet_entite.png" alt=""></div>
            </div>
            <div class="row m-3 p-5">
                <div class="col-12 col-lg-4"><img id="image3" src="image/nature/projet_heure.png" alt=""></div>
                <div class="col-12 col-lg-4"><img id="image3" src="image/nature/projet_laoding.png" alt=""></div>
                <div class="col-12 col-lg-4"><img id="image3" src="image/nature/projet_soleil.png" alt=""></div>
            </div>
            
        </div> 
        <div class="container">
            <div class="row m-3 p-5">
                <div id="aecrit">Parlons de votre projet</div>
            </div>
           <form action="/html/action.php" method="post">
           
            <div class="row m-3 p-5">
                <div id="formulaire">
                <?php 
                  $message = "";
                    if(isset($_GET['reussit'])){

                      $code =$_GET['reussit'];
                      if($code){
                        $message = " Envoie réussie";?>
                        <p id = "success"><?= $message?><span id="del">X</span> </p>
                        <?php 
                      }else{
                        $message = "envoie échoué";
                        ?>
                        <p id = "error" ><?= $message?><span id="del">X</span> </p>
                        <?php  }
                    }
                ?>
                    <div id="haut">
                        <div id="nom2">
                            <label  for="nom">Nom</label>
                            <input id="input" name="nom" placeholder="votrenom" type="text">
                        </div>
                        <div id="nom2">
                            <label  for="email">Email</label>
                            <input id="input" name="email" placeholder="votreEmail" type="email">
                        </div>
                    </div>
                    <div id="bas">
                        <label id="message" for="message">Message</label>
                        <textarea class="text" name="message" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
           </div>
           <div class="row m-3 p-5">
               <button id="button" type="submit" >
                   ENVOYER
               </button>
           </div>    
           </form>
            
        </div>
        
        <footer>
            <nav class="navbar navbar-expand-lg bg-body-tertiary px-5" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="/image/téléchargement.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img id="icone" src="image/icone/telegramme.png" alt=""></a>
                          
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img id="icone" src="image/icone/whatsap.png" ></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"><img id="icone" src="image/icone/facebook.png" ></a>
                          </li>
                          <li class="nav-item">
                          <a target="blank" class="nav-link"  href="https://www.youtube.com/channel/UCYNjtaPjZH0THoZJE7P3olQ"><img id="icone" src="image/icone/youtube.png"></a>
                        </li>
                      </ul>
                      
                    </div>
                  </div>
            </nav>
        </footer>   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="html/index.js"></script>
</body>
</html>