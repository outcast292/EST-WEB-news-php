<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <title>HELLO WORLD</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php require "html/header.html"; 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = new mysqli($servername, $username, $password,'news');
            $sql = "SELECT id_article,contenu,da,label FROM article order by views desc limit 1";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            echo "<div id='banniere_image' style='background-image: url(images/post/".$row["id_article"].".jpg);background-size: cover;'>
                <div id='banniere_description'>";
              echo "l'article en vedette :     " .$row['label']."<a href='post?id=".$row["id_article"]."' class='bouton_rouge'>en savoir plus <img src='images/flecheblanchedroite.png' alt='' /></a>"?>
                            
                </div>
            </div>
            
            <section>
                <article>
                    <h1><img src="images/ico_epingle.png" alt="posts recents" class="ico_categorie" />Derniers articles:</h1>
                    <?php $sql = "SELECT id_article,contenu,da,label FROM article order by id_article desc limit 3 "; 
                    $result = $conn->query($sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                         //echo  '<a href="post.php?id='.$row["id_article"].'"><div class="art">

                        echo  '<a href="post.php?id='.$row["id_article"].'"><div class="art" style="background-image: url(images/post/'.$row["id_article"].'.jpg);background-size: cover; color:white;">
                      
                    <h4 style="color:white;padding:5px;background-color:black;">'.$row['label'].'</h4>
                    <p style="color:white;padding:3px;">'.$row['contenu'].'</p>
                    </a></div>';
                    }
                    ?>


                </article>
                <aside>
                    <h1>À propos de l'auteur</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="author_img"><img src="images/Redstone.png" alt="photo de l'auteur" style="background-color: white;" /></p>
                    <p>Redstone news est une plate-forme de partage des flash d'actualités,la plate-forme est aussi doté d'un système de commentaire et partage</p>
                    <p>
                        Redstone groupe est un groupe de 2  étudiants (Othmane Mdarhri et Youssef Jebbouri),ce groupe est dédié pour le développement et la maintenance des projets open et closed sources
                    </p>
                    
                </aside>
            </section>
            
          <?php require 'html/footer.html';  ?>
        </div>
    </body>
</html>
