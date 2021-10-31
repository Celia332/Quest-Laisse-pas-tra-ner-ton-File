

<form method="post" enctype="multipart/form-data">

    <label for="imageUpload">Upload an profile image</label>
    <input type="file" name="image" id="imageUpload" /><br>
    <label for="lastname"> Lastname</label>
    <input type="text" id="lastname" name="lastname" required><br>
    <label for="firstname"> Firstname</label>
    <input type="text" id="firstname" name="firstname" required>
    <label for="weight">Weight</label><br>
    <input type="text" id="weight" name="weight">
    <button name="send" type="submit">Send File</button>
</form>

<?php


if($_SERVER['REQUEST_METHOD'] === "POST"){

    //$data = array_map('trim', $_POST);
    //$errors = [];

    $uploadDir = 'public/uploads/';
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);

    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $extensions_ok = ['jpg', 'webp'];
    $maxFileSize = 100000;


    if (!in_array($extension, $extensions_ok)) {
        $errors[] = 'Sélectionner une image jpg, wepb, ou jpeg !';
    }

    if (file_exists($_FILES['image']['tmp_name']) && filesize($_FILES['image']['tmp_name']) > $maxFileSize) {
        $errors[] = "Le taille du fichier est inférieur à 1 M0 !";
    }

    var_dump($_FILES);
}














