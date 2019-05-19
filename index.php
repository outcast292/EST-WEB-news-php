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
            echo "<div id='banniere_image' style='background-image: url(images/post/".$row["id_article"].".jpg);'>
                <div id='banniere_description'>";
              echo "l'article en vedette :     " .$row['label']."<a href='post?id=".$row["id_article"]."' class='bouton_rouge'>See the article <img src='images/flecheblanchedroite.png' alt='' /></a>"?>
                            
                </div>
            </div>
            
            <section>
                <article>
                    <h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Recent Posts</h1>
                    <?php $sql = "SELECT id_article,contenu,da,label FROM article order by id_article desc limit 3 "; 
                    $result = $conn->query($sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                         //echo  '<a href="post.php?id='.$row["id_article"].'"><div class="art">

                        echo  '<a href="post.php?id='.$row["id_article"].'"><div class="art" style="background-image: url(images/post/'.$row["id_article"].'.jpg);">
                      
                    <h4>'.$row['label'].'</h4>
                    <p>'.$row['contenu'].'</p>
                    </a></div>';
                    }
                    ?>


                </article>
                <aside>
                    <h1>À propos de l'auteur</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_zozor"><img src="images/zozor_classe.png" alt="Photo de Zozor" /></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <p>
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                </aside>
            </section>
            
          <?php require 'html/footer.html';  ?>
        </div>
    </body>
</html>
