<?php
require_once __DIR__.'/data.php';
require_once __DIR__.'/functions.php';
require_once __DIR__.'/header.php';

?>
<!-- Article structure -->

            <div class="articleContainer">

                <?php foreach($articleFeed as $articles): ?>

                    <div class='articleItem'>

                        <h1><?php echo $articles['title']?></h1>

                        <img class="heartLogo hover" src="https://img.icons8.com/ios-glyphs/30/000000/filled-like.png">

                        <p class="likes"><?php echo $articles['likes'] ?></p>

                        <img class="articleImage" src="<?php echo $articles['img']?>" alt="<?php echo $articles['imgAlt']?>">

                        <p class="imageUnderText"><?php echo $articles['imageUnderText'] ?></p>

                        <p><?php echo getArticleContent($articles['content']); ?></p>

                        <p class="authorName">By: <?php echo getAuthorName($articles['authorId']) ?></p>

                        <p class="date"><?php echo getArticleDate($articles['publishDate']); ?></p>

                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </body>
</html>
