<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="shortcut icon" href="images/favico.png" type="image/x-icon">
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
                                     echo  '<a href="post.php?id='.$row["id_article"].'"><div class="art" style="background-image: url(images/post/'.$row["id_article"].'.jpg);background-size: cover;">
                                  <h4 style="color:white;padding:5px;background-color:black;">'.$row['label'].'</h4>
                                  <p style="color:white;padding:3px;text-shadow: 1px 1px #000;">'.$row['contenu'].'</p>
                                  </a></div>';
                                  }
                                  $res = $conn->query('SELECT found_rows() AS num');
                                  $limit_num = mysqli_fetch_assoc($res);
                                  $nbr_pages = ceil($limit_num["num"] / $limit);
                                  if ($page > 1){
                  ?>
                  <a href="?page=<?php echo $page - 1; ?>">Page précédente</a> — <?php
                    }	for ($i = 1; $i <= $nbr_pages; $i++){
                   ?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
                    } 		if ($page==$nbr_pages){
                   ?>— <a href="?page=<?php echo $page + 1;?>">Page suivante</a><?php
               }
               ?>
        
         </article>
         <?php require "html/footer.html" ?>
      </div>
   </body>
</html>