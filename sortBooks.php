<?php

declare(strict_types=1);

require __DIR__ . '/CookBooks.php';

$sortOption = $_GET['sort'] ?? 'title_asc';

function SortBooks(array $cookbooks, string $sortOption): array
{
    usort($cookbooks, function ($a, $b) use ($sortOption) {
        switch ($sortOption) {
            case 'title_asc':
                return strcmp($a['title'], $b['title']);
            case 'title_desc':
                strcmp($b['title'], $a['title']);
            case 'author_asc':
                return strcmp($a['author'], $b['author']);
            case 'author_desc':
                strcmp($b['author'], $a['author']);
            default:
                return 0;
        }
    });
    return $cookbooks;
}

$cookbooks = SortBooks($cookbooks, $sortOption);
