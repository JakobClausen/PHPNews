<?php
declare(strict_types=1);
require_once __DIR__.'/data.php';

// Sorts the article feed by date (publishDate)
foreach ($articleFeed as $key => $row) {
    $new_published[$key] = $row['publishDate'];
		 }
	array_multisort($new_published, SORT_DESC,$articleFeed);



/**
 * @param int $authorId
 * @return string Returns the author name based on the authorId
 */

	function getAuthorName(int $authorId): string{
			global $authors;

					foreach($authors as $author) {
							if ($author['id'] === $authorId) {
							return $author['fullName'];

							}
					}
	}

/**
 * Makes date structured
 * @param string $articles
 * @return string
 */

	function getArticleDate(string $articles): string{

					$date = new DateTime($articles);
					return $date->format('Y-F-d');

	}

/**
 * Gets .txt from directory through array
 * @param string $article
 * @return string Returns the author name based on the authorId
 */

	function getArticleContent(string $article): string{

			return file_get_contents($article);

	}

