<?php

function fixNamespaces(string $rootDir, string $rootNamespace)
{
    $rootDir = rtrim(realpath($rootDir), DIRECTORY_SEPARATOR);

    $rii = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($rootDir, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($rii as $file) {
        if (!$file->isFile() || $file->getExtension() !== 'php') {
            continue;
        }

        $filePath = $file->getRealPath();

        // Compute namespace from folder structure
        $relative = str_replace($rootDir, '', dirname($filePath));
        $relative = trim($relative, DIRECTORY_SEPARATOR);

        $namespaceParts = $relative ? explode(DIRECTORY_SEPARATOR, $relative) : [];
        $correctNamespace = $rootNamespace . ($namespaceParts ? "\\" . implode("\\", $namespaceParts) : "");

        // Read content
        $content = file_get_contents($filePath);

        // Replace or insert namespace
        if (preg_match('/^namespace\s+[^;]+;/m', $content)) {
            // Replace old namespace
            $content = preg_replace(
                '/^namespace\s+[^;]+;/m',
                "namespace $correctNamespace;",
                $content,
                1
            );
        } else {
            // Insert namespace after <?php
            $content = preg_replace(
                '/<\?php\s*/',
                "<?php\n\nnamespace $correctNamespace;\n\n",
                $content,
                1
            );
        }

        // Write updated file
        file_put_contents($filePath, $content);

        echo "Updated: $filePath → $correctNamespace\n";
    }
}

fixNamespaces(__DIR__ . '/../src/Leetcode', 'Leetcode');