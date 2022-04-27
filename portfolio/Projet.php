<!DOCTYPE html>
<html>
  <head>
    <title>Portfolio</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="CSS/Projet.css">
  
    <script>

    </script>
  </head>
  <body>
    <?php
    include("header.php");
    ?>
    <section>
        <div class="projetsDiv">
            <h1>Projet n°1</h1>
            <div>
              <h2>CityGame</h2>
              <div>
                <img class="preview" src="CSS/images/imgPPE1.png" alt="">
              </div>
              <div>
                <h3>Description</h3>
                <p class="description">Ce projet a été monter en première année il s'agit d'un site marchand de jeux vidéo.</br>
                Nous nous somme inspiré du site Instant Gaming pour le design et les fonctionnalités.</br>
                Ce site est codé en PHP, HTML, CSS et SQL. Il y a un système de droits d'utilisateur
                   et une base de donnée SQL.</br>
                Ainsi les utilisteurs lambda n'ont pas les mêmes droit qu'un administrateur.</br>
                Nous pouvons nous connecter à un compte utilisateur afin d'ajouter des produits dans 
                  notre panier,nous pouvons valider la commande et obtenir une confirmation d'achat.</br>
                Enfin nous pouvons accéder à notre compte pour voir notre historique de commande et
                  télécharger les factures.</p>
                <p>___________________</p>
                <a href="" target="_blank"><h3>Accéder au site</h3></a>
                <p>___________________</p>
                <a href="https://github.com/lulu960/PPE1_Citygame" target="_blank"><h3>Voir le code source</h3></a>
                <p>___________________</p>
                <a class="blanc" href="CSS/CHALUMEAU_Nicolas-CityGame E5.pdf" target="_blank"><h3>Consulter la fiche E5 de ce projet</h3></a>
              </div>
              <div>

              </div>
            </div>
        </div>
        <div class="projetsDiv">
            <h1>Projet n°2</h1>
            <h2>Salle de Marché</h2>
              <div>
                <img class="preview" src="CSS/images/imgSDM.png" alt="">
              </div>
              <div>
                <h3>Description</h3>
                <p class="description">Ce projet nous a été donner lors de notre deuxième année.</br>
                    Il s’agit d’une application lourde de salle de marché programmée
                     en C# et en SQL pour les accès à la base de données.</br>
                    Nous avons utilisé un projet Windows Forms avec le framework .NET pour pouvoir utiliser
                    une base de données.</br>
                    Nous devions créer une application avec plusieurs rôles qui ont des droits différents,
                     un système de connexion à un compte.</br>
                    Ainsi qu’un système d’achat et de vente d’actions avec un portefeuille qui désigne
                     la limite d’argent.</br>
                    </p>
                <p>___________________</p>
                <a href="https://github.com/lulu960/PPE_Return" target="_blank"><h3>Voir le code source</h3></a>
                <p>___________________</p>
                <a class="blanc" href="CSS/CHALUMEAU_Nicolas-Salledemarche E5
                .pdf" target="_blank"><h3>Consulter la fiche E5 de ce projet</h3></a>

              </div>
        </div>
        <div class="projetsDiv">
            <h1>Projet n°3</h1>
            <h2>Appli vitrine</h2>
              <div>
                <img class="preview" src="CSS/images/imgAPPVI" alt="">
              </div>
              <div>
                <h3>Description</h3>
                <p class="description">J’ai créé une application mobile vitrine dans le but d’animer une conférence au
                   près d’étudiants dans le cadre d’un événement organiser par l’école dans laquelle
                    je suis alternant.</br>
                  Cette application mobile a été entièrement conçues avec un CMS et elle reste très
                   simple car elle devait servir de support à ma conférence.</br>
                  En effet, SAP AppGyver est un CMS accessible en ligne permettant de créer une
                   application entière sans code puis en téléchargeant l’application SAP AppGyver
                    Preview nous pouvons scanner le QR code et ainsi avoir l’appli sur son mobile.</br> 
                  Ce qui était fort intéressant pour les étudiant qui devait créer une start-up et la
                   présenter devant un jury. Cela leur permettait d’avoir une application mobile en 
                   guise de support numérique lors de leur présentation.</br>
                  </p>
                <p>___________________</p>
                <div class="accès">
                  <button class="clicker" tabindex="1">Voir le QR Code</button>
                  <img class="hiddendiv" class="preview" src="CSS/images/QRCodeApp.jpg" alt="">
                </div>
              </div>
        </div>
        <div class="projetsDiv">
            <h1>Projet n°4</h1>
            <h2>Portfolio</h2>
              <div>
                <img src="CSS/images/imgPortfolio.png" alt="" class="preview">
              </div>
              <div>
                <h3>Description</h3>
                <p class="description">J’ai développé ce site dans le cadre d’une épreuve du BTS</br>
                   où il est nécessaire de posséder un Portfolio accessible en ligne.</br></br>
                  Ce site est codé en HTML, CSS, PHP pour le header et du JavaScript pour la page de garde.</br>
                  Mon portfolio se compose de 4 pages distinctes :</br>
                  <ul class="listeprojet">
                    <li>La page de garde.</li>
                    <li>La page CV, où toutes les informations importantes de mon CV y sont regroupées.</li>
                    <li>La page Projets, qui permet d’afficher mes projets effectués au cours de mes 2 années de BTS.</li>
                    <li>La page Veilles, qui permet de montrer les veilles que j’ai pu effectuer.</li>
                  </ul>
                  Ces quatre pages montrent ce que j’ai pu accomplir durant mes 2 années de BTS SIO option SLAM.</p>
</p>
                <p>___________________</p>
                <a href="https://github.com/Niko7895/Portfolio" target="_blank"><h3>Voir le code source</h3></a>
              </div>
        </div>
    </section>
  </body>
</html>
