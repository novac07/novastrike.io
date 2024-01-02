<?php
if(isset($_FILES["fileToUpload"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Fișierul ". basename( $_FILES["fileToUpload"]["name"]). " a fost încărcat cu succes.";
    } else {
        echo "A apărut o eroare la încărcarea fișierului.";
    }
}
?>
