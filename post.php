<!DOCTYPE html>
<html>
<head>
    <title>HELLLO WORLD</title>
    <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
</head>
<body>
     <div id="bloc_page">
        <?php require "html/header.html";
        if(!(isset($_GET["id"]))){
            header("location: index.php"); 
        }
         $servername = "localhost";
         $username = "root";
         $password = "";
         $conn = new mysqli($servername, $username, $password,'news');
         if(isset($_POST["nick"])){
            $sql = "INSERT INTO comment(id_article,nickname,comment) VALUES('".$_GET["id"]."','".$_POST["nick"]."','".$_POST["comment"]."')";
            $result = mysqli_query($conn, $sql);
            header("location: post.php?id=".$_POST['id']."#for");
            
         }
         if($_GET["id"]!=NULL){
             $sql = "SELECT id_article,label,da,contenu,name FROM article a join admin ad on a.id_admin=ad.id_ad where id_article=".$_GET["id"];
         } 
        else{
             $sql = "SELECT id_article,label,da,contenu,name FROM article a join admin ad on a.id_admin=ad.id_ad order by rand() limit 1";
        }
         $result = mysqli_query($conn, $sql);
         $data=mysqli_fetch_assoc($result);


         ?>
         <section>
         <article>
            <br><br>
            <div class="date"><?php echo "Le " . $data["da"] . " par " . $data["name"];?></div>
            <br><br>
            <?php echo "<div id='banniere_image' style='background-image: url(images/post/".$data["id_article"].".jpg);'></div>";  ?>
            <h1 id="tit" style="border-bottom: 1px solid maroon;"><?php echo $data["label"];?></h1>
            <div ><?php echo $data["contenu"];?></div>
         </article>
         </section>
         <br><br>
         <form method="post" class="feild" id="for">
        <fieldset>
         <legend style="color: maroon">add comment:</legend>
            <input type="text" hidden="hidden" name="id" value="<?php echo $data['id_article'] ?>">
            Name:<br><input style="width: 100%; box-sizing: border-box;" type="text" name="nick"><br>
            comment:<br><textarea style="width: 100%;box-sizing: border-box;resize: none;" name="comment"></textarea>
            <br><br>
            <input type="submit" name="" value="send" style="float: right;margin-right: 7%; width:8%; color: blue;">
          </fieldset>
        </form>
         <article>
            <?php  
                $sql = "UPDATE article SET views=views+1 where id_article=".$data["id_article"];
                $result = mysqli_query($conn, $sql);

            $sql = "SELECT * FROM comment where id_article=".$data['id_article']." ORDER BY date_cmt DESC";
                    $es = mysqli_query($conn, $sql);
                    if (!$es) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
                    while ($data=mysqli_fetch_array($es)) { ?>
                    <div id="comment">
                        <h4><?php echo  $data["nickname"]?></h4>
                        <p><?php echo $data["comment"]?></p>
                        <h5><?php echo $data["date_cmt"]?></h4>
                        <br>
                        <br>
                        <br>
                    </div>
                    <?php };
              ?>
            
         </article>
         <br>
         <br>
         <br>
        <?php require "html/footer.html"; ?>
    </div>
</body>
</html>