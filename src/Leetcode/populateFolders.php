<?php

namespace Leetcode;

$folders = [
    '0001_1000' => ['start' => 1, 'end' => 1000],
    '1001_2000' => ['start' => 1001, 'end' => 2000],
    '2001_3000' => ['start' => 2001, 'end' => 3000],
    '3001_4000' => ['start' => 3001, 'end' => 4000],
    '4001_5000' => ['start' => 4001, 'end' => 5000],
];

// The source of the file is from: https://leetcode.com/api/problems/all/
$file = file_get_contents('./json.json');
$fileJson = json_decode($file, true);
$questionsJson = $fileJson['stat_status_pairs'];
$questions = [];
foreach ($questionsJson as $question) {
    $questions[$question['stat']['question_id']] = [
        'question_id' => $question['stat']['question_id'],
        'title' => $question['stat']['question__title'],
        'difficulty' => getDifficulty($question['difficulty']['level']),
        'question_slug' => $question['stat']['question__title_slug'],
    ];
}

foreach ($folders as $folder => $range) {
    for ($i = $range['start']; $i <= $range['end']; $i++) {
        // Check if it is in the question array
        if (!isset($questions[$i])) {
            continue;
        }

        $subFolderId = $i;

        // Correct 4-digit folder
        if ($i < 1000) {
            $subFolderId = str_pad($i, 4, '0', STR_PAD_LEFT);
        }

        $subFolder = './' . $folder . '/' . $subFolderId . '_' . $questions[$i]['question_slug'];

        if (!file_exists($subFolder)) {
            // Create the subfolder
            if (!mkdir($subFolder) && !is_dir($subFolder)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $subFolder));
            }

            // Add the Stub files
            copy('./Stubs/problem.md', $subFolder . '/problem.md');
            copy('./Stubs/solution.php', $subFolder . '/solution.php');

            // Modify the default files
            modifyFile(
                $subFolder . '/problem.md',
                [
                    '{Number}',
                    '{Title}',
                ],
                $questions[$i]
            );
            modifyFile(
                $subFolder . '/solution.php',
                [
                    '{Number}',
                    '{Title}',
                    '{Difficulty}',
                ],
                $questions[$i]
            );
        }
    }
}

function getDifficulty($difficulty): string
{
    return match ($difficulty) {
        1 => 'easy',
        2 => 'medium',
        3 => 'hard',
        null => 'unknown',
    };
}

function modifyFile(string $file, array $replace, array $content): void
{
    $fileContents = file_get_contents($file);
    $newFileContents = str_replace($replace, $content, $fileContents);
    file_put_contents($file, $newFileContents);
}