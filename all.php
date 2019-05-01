<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="css/style.css" />
      <title>HELLO WORLD</title>
   </head>
   <body>
      <?php   $servername = "localhost";
         $username = "root";
         $password = "";
         $conn = new mysqli($servername, $username, $password,'news'); ?>
      <div id="bloc_page">
         <?php require "html/header.html" ?>
         <h2 style="border-bottom: 1px solid maroon;display: inline-block;">Tous les articles : </h2>
         <article>
            <?php 
               $limit=5;
               $page=$_GET["page"];
               $deb=($_GET["page"]-1)*$limit;         
               $sql = "SELECT id_article,contenu,da,label FROM article order by id_article desc limit 5 OFFSET ". $deb; 
                                  $result = $conn->query($sql);
                                  while ($row = mysqli_fetch_assoc($result)) {
                                     echo  '<a href="post.php?id='.$row["id_article"].'"><div class="art">
                                  <h4>'.$row['label'].'</h4>
                                  <p>'.$row['contenu'].'</p>
                                  </a></div>';
                                  }
                                  $resultFoundRows = $conn->query('SELECT found_rows() AS num');
                                  $nombredElementsTotal = mysqli_fetch_assoc($resultFoundRows);
                                  $nombreDePages = ceil($nombredElementsTotal["num"] / $limit);
                                  if ($page > 1){
                  ?>
                  <a href="?page=<?php echo $page - 1; ?>">Page précédente</a> — <?php
               }
               					for ($i = 1; $i <= $nombreDePages; $i++){
                   ?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
               }
               		if ($page==$nombreDePages){
                   ?>— <a href="?page=<?php echo $page + 1;?>">Page suivante</a><?php
               }
               ?>
        
         </article>
         <?php require "html/footer.html" ?>
      </div>
   </body>
</html>