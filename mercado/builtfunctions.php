<?php
include 'includes/header.php';
include 'includes/footer.php';

$name = "Fiona Mercado";
$school = "Holy Angel University";
$sentence = "<3 I love you <3";
$sentence2 = "How much wood would a woodchuck chuck if a woodchuck could chuck wood?";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in Functions</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Changing the Case of Characters</h2>
    <table>
        <thead>
            <tr>
            <th>Functions</th>
            <th>Output</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lowercase</td>
                <td><?= strtolower($school)?></td>
            </tr>
            <tr>
                <td>Uppercase</td>
                <td><?= strtoupper($school)?></td>
            </tr>
            <tr>
                <td>Capitalize</td>
                <td><?= ucwords($school)?></td>
            </tr>
        </tbody>
    </table>


    <h2>Counting Characters and Words</h2>
    <table>
        <thead>
            <tr>
            <th>Functions</th>
            <th>Output</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Number of Characters</td>
                <td><?= strlen($name)?></td>
            </tr>
            <tr>
                <td>Number of Words</td>
                <td><?= str_word_count($name)?></td>
            </tr>
        </tbody>
    </table>


    <h2>Removing and Replacing Characters</h2>
    <table>
        <thead>
            <tr>
            <th>Functions</th>
            <th>Output</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Remove whitespaces from left</td>
                <td><?= ltrim($sentence, "<3")?></td>
            </tr>
            <tr>
                <td>Remove whitespaces from right</td>
                <td><?= rtrim($sentence, "<3")?></td>
            </tr>
            <tr>
                <td>Remove whitespace from left and right</td>
                <td><?= trim($sentence, "<3")?></td>
            </tr>
            <tr>
                <td>String replace</td>
                <td><?= str_replace("you", "candy", $sentence)?></td>
            </tr>
            <tr>
                <td>String ireplace</td>
                <td><?= str_ireplace("I", "we", $sentence)?></td>
            </tr>
            <tr>
                <td>String Repeat</td>
                <td><?= str_repeat($sentence, 3)?></td>
            </tr>
        </tbody>
    </table>


    <h2>Other Built-in Functions</h2>
    <table>
        <thead>
            <tr>
            <th>Functions</th>
            <th>Output</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>substr</td>
                <td><?= substr($sentence2, 0, 12)?></td>
            </tr>
            <tr>
                <td>strrpos</td>
                <td><?= strrpos($sentence2, "wood")?></td>
            </tr>
            <tr>
                <td>stripos</td>
                <td><?= stripos($sentence2, "wood")?></td>
            </tr>
            <tr>
                <td>strstr</td>
                <td><?= strstr($sentence2, "wood")?></td>
            </tr>
            <tr>
                <td>stristr</td>
                <td><?= stristr($sentence2, "chuck")?></td>
            </tr>
            <tr>
                <td>str_contains</td>
                <td><?= str_contains($sentence2, "wood")?></td>
            </tr>
            <tr>
                <td>str_ends_with</td>
                <td><?= str_ends_with($sentence2, "wood?")?></td>
            </tr>
            <tr>
                <td>strripos</td>
                <td><?= strripos($sentence2, "chuck")?></td>
            </tr>
            <tr>
                <td>str_starts_with</td>
                <td><?= str_starts_with($sentence2, "How")?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
