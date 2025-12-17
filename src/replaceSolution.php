<?php

function replaceSolution(string $directory): array
{
    $readmes = [];

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $filename = strtolower($file->getFilename());
            if ($filename === 'solution.php') {
                $designationFile = str_replace('solution.php', 'Solution.php', $file->getPathname());
                rename($file->getPathname(), $designationFile);
            }
        }
    }

    return $readmes;
}

// Usage:
$destinationPaths = replaceSolution('/Users/asfertamimi/Sites/problem-solving-websites-php/src/Leetcode', false);
