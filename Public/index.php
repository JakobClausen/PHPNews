<?php
require_once __DIR__.'/data.php';
require_once __DIR__.'/functions.php';
require_once __DIR__.'/header.php';

?>
					<!-- Article structure start -->

            <div class="articleContainer">

                <?php foreach($articleFeed as $articles): ?>

                    <div class='articleItem'>

                        <h1><?php echo $articles['title']?></h1>  <!-- Title -->

                        <img class="heartLogo hover" src="https://img.icons8.com/ios-glyphs/30/000000/filled-like.png">  <!-- Like heart -->

                        <p class="likes"><?php echo $articles['likes'] ?></p>  <!-- Like counter -->

                        <img class="articleImage lozad" src="<?php echo $articles['img']?>" alt="<?php echo $articles['imgAlt']?>"> <!-- image (class:"lozad" is for lazy loading.) -->

                        <p class="imageUnderText"><?php echo $articles['imageUnderText'] ?></p>  <!-- Image description -->

                        <p><?php echo getArticleContent($articles['content']); ?></p> <!-- Article content -->

                        <p class="authorName">By: <?php echo getAuthorName($articles['authorId']) ?></p> <!-- Article author -->

                        <p class="date"><?php echo getArticleDate($articles['publishDate']); ?></p> <!-- Publish date -->

                    </div>

                <?php endforeach; ?>

						</div>
					<!-- Article structure end -->
				</div>
			<script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script> <!-- Lazy loading images -->

    </body>
</html>
