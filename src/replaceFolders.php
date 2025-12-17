<?php

function renameFolders(string $path)
{
    // Normalize path
    $path = rtrim($path, "/");

    // Scan contents
    $items = scandir($path);

    foreach ($items as $item) {

        if ($item === '.' || $item === '..') {
            continue;
        }

        $fullPath = $path . '/' . $item;

        // Process directories only
        if (is_dir($fullPath)) {

            // Recursively handle deeper folders first
            renameFolders($fullPath);

            $itemId = substr($item, 0, 4);
            if (is_numeric($itemId)) {
                $newItem = 'Solution' . $item;
                $newPath = $path . '/' . $newItem;
                rename($fullPath, $newPath);
                $fullPath = $newPath;
            }
        }
    }
}

renameFolders('/Users/asfertamimi/Sites/problem-solving-websites-php/src/Leetcode');