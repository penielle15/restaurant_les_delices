<?php
// $request = $db-> prepare('INSERT INTO plat(nom,prix,description,temps,image,categorie)VALUES (:nom,:prix,:description,:temp,:image,:categorie)');
// $request -> execute(array('nom'=>$_POST['nom'],'prix'=>$_POST['prix'],'description'=>$_POST['description'],'temps'=>$_POST['temps'],'image'=>$_POST['image'],'categorie'=>$_POST['categorie']));


print_r($_POST);
print_r($_FILES);



if (isset($_FILES['image']) AND $_FILES['image']['error']
== 0)
{
// Testons si le fichier n'est pas trop gros
if ($_FILES['image']['size'] <= 1000000)
{
// Testons si l'extension est autorisée
$infosfichier =
pathinfo($_FILES['image']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif',
'png');
if (in_array($extension_upload,
$extensions_autorisees))
{
}
}
}