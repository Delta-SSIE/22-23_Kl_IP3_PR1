<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Upload souboru</title>
</head>
<body>
<?php
var_dump($_POST);
var_dump($_FILES);


if ($_FILES) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES['uploadedName']['name']);
    $fileType = strtolower( pathinfo( $targetFile, PATHINFO_EXTENSION ) );

    $uploadSuccess = true;

    if ($_FILES['uploadedName']['error'] != 0) {
        echo "CHyba serveru při uploadu";
        $uploadSuccess = false;

    }

    //kontrola existence
    elseif (file_exists($targetFile)) {
        echo "Soubor již existuje";
        $uploadSuccess = false;
    }

    //kontrola velikosti
    elseif ($_FILES['uploadedName']['size'] > 500000) {
        echo "Soubor je příliš velký";
        $uploadSuccess = false;
    }


    //kontrola typu
    elseif ($fileType !== "jpg" && $fileType !== "png") {
        echo "Soubor má špatný typ";
        $uploadSuccess = false;
    }


    if ( !$uploadSuccess) {
        echo "Došlo k chybě uploadu";
    } else {
        //vše je OK
        //přesun souboru
        if (move_uploaded_file($_FILES['uploadedName']['tmp_name'], $targetFile)) {
            echo "Soubor '". basename($_FILES['uploadedName']['name']) . "' byl uložen.";
        } else {
            echo "Došlo k chybě uploadu";
        }
    }

}

?>
<form method='post' action='' enctype='multipart/form-data'><div>
        Select image to upload:
        <input type="file" name="uploadedName" accept="image/*"/>
        <input type="submit" value="Nahrát" name="submit" />
    </div></form>
</body>
</html>