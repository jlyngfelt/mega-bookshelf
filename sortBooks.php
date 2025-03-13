<?php

declare(strict_types=1);

require __DIR__ . '/CookBooks.php';

function sortBooks(array $cookbooks, string $sortKey, string $order = 'asc')
{
    usort($cookbooks, function ($a, $b) use ($sortKey, $order) {
        return $order === "asc" ? strcmp($a[$sortKey], $b[$sortKey]) : strcmp($b[$sortKey], $a[$sortKey]);
    });

    return $cookbooks;
}

$sortedByTitleAsc = sortBooks($cookbooks, "title", "asc");
$sortedByTitleDesc = sortBooks($cookbooks, "title", "desc");
$sortedByAuthorAsc = sortBooks($cookbooks, "author", "asc");
$sortedByAuthorDesc = sortBooks($cookbooks, "author", "desc");
