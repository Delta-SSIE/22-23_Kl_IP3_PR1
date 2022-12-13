<?php ini_set('error_reporting', E_ALL); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP file listing</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
        $path = filter_input(INPUT_GET, "path");
        if (!$path)
            $path = getcwd();

        if (!file_exists($path)) {
            echo urlError($path);
        } elseif (is_dir($path)) {
            echo listDir($path);
        } elseif (is_file($path)) {
            echo showFile($path);
        } else {
            echo urlError($path);
        }

        function urlError($path) {
            return "Requested path <em>" . htmlspecialchars($path) . "</em> does not exist or is not readable";
        }

        function listDir($dir) {
            $result = "";
            $result .= "<h1>Directory listing for <em>" . htmlspecialchars($dir) . "</em></h1>";
            $contents = scandir($dir);
            if ($contents) {
                $result .= "<ul>";
                foreach ($contents as $item) {
                    if ($item === ".")
                        continue;
                    $newPath = htmlspecialchars($dir . DIRECTORY_SEPARATOR . $item);
                    $realPath = htmlspecialchars(realpath($dir . DIRECTORY_SEPARATOR . $item));
                    $result .= "<li><a href='?path=$realPath'>$newPath</a></li>";
                }
                $result .= "</ul>";
            } else {
                $result .= "<p>Directory is empty</p>";
            }

            return $result;
        }

        function showFile($path) {
            $result = "<pre><code>";
            
            $fn = fopen($path, "r");
            while (!feof($fn)) {
                $line = fgets($fn);
                $result .= htmlspecialchars($line);
            }
            fclose($fn);

            $result .= "</code></pre>";

            return $result;
        }
        ?>
    </body>
</html>