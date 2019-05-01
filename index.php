<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Zozor - Carnets de voyage</title>
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
             
            
            echo "<div id='banniere_image' style='background: url('images/post/'".$row['id_article'].".jpg) no-repeat;'>
                <div id='banniere_description'>";
              echo "l'article en vedette :     " .$row['label']; ?>
                            
                    <a href="#" class="bouton_rouge">See the article <img src="images/flecheblanchedroite.png" alt="" /></a>
                </div>
            </div>
            
            <section>
                <article>
                    <h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Recent Posts</h1>
                    <?php $sql = "SELECT id_article,contenu,da,label FROM article order by id_article desc limit 3 "; 
                    $result = $conn->query($sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                       echo  '<div class="art">
                    <h4>'.$row['label'].'</h4>
                    <p>'.$row['contenu'].'</p>
                    </div>';
                    }
                    ?>

                </article>
                <aside>
                    <h1>À propos de l'auteur</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_zozor"><img src="images/zozor_classe.png" alt="Photo de Zozor" /></p>
                    <p>Laisse-moi le temps de me présenter&nbsp;: je m'appelle Zozor, je suis né un 23 novembre 2005.</p>
                    <p>Bien maigre, n'est-ce pas ? C'est pourquoi, aujourd'hui, j'ai décidé d'écrire ma biographie afin que vous sachiez qui je suis réellement.</p>
                    
                </aside>
            </section>
            
            <footer>
                <div id="add">
                    <h1>my address</h1>
                    <p>zaezaekljzaelj zalzakl</p>
                    <p>zaedzad zad zad za</p>
                </div>
               
                <div id="mes_amis">
                    <h1>social media </h1>
					<p><img src="images/facebook.png" alt="Facebook" /><img src="images/twitter.png" alt="Twitter" /><img src="images/vimeo.png" alt="Vimeo" /><img src="images/flickr.png" alt="Flickr" /><img src="images/rss.png" alt="RSS" /></p>
                   
                </div>
				 <div id="mes_amis">
                   <p> <h1>email</h1> blabla@bal.bla</p>
                    <p> <h1>tel</h1> 00 00 00 00 00</p>
                </div>
            </footer>
        </div>
    </body>
</html>
