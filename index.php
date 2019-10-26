<?php
require_once __DIR__.'/data.php';
require_once __DIR__.'/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="master.css"> 
        <title></title>
    </head>
    <body>
   <div class="container">

        <nav>
        <h1>Jakob News</h1>
                <ul>
                <li><img src="https://img.icons8.com/material-sharp/24/000000/home.png"></li>
                <li><img src="https://img.icons8.com/metro/26/000000/news.png"></li>
                <li><img src="https://img.icons8.com/ios-glyphs/26/000000/contact-card.png"></li>
                <li><img src="https://img.icons8.com/material/24/000000/about.png"></li>
            </ul>
            <ul>
                <li><p>Home</p></li>
                <li><p>News</p></li>
                <li><p>Contact</p></li>
                <li><p>About</p></li>
            </ul>
        </nav>
    <div class="articleContainer">

        <?php foreach($articleFeed as $articles): ?>

            <div class='articleItem'>
                <h1><?php echo $articles['title']?></h1>
                <p class="likes"><?php echo $articles['likes'] ?></p>
                <img class="likesHeart" src="https://img.icons8.com/ios-glyphs/30/000000/filled-like.png">
                <img class="articleImage" src="<?php echo $articles['img']?>" alt="as">
                <p class="authorName"><?php echo getAuthorName($articles['authorId']) ?></p>
                <p class="date"><?php echo getArticleDate($articles['publishDate']); ?></p>

               


            </div>
        
        <?php endforeach; ?>

    </div>
        

  
    
    
 
    </div>
    </body>
</html>
