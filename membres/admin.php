<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre; charset=utf8', 'root', 'root');

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
    if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
    {
        include ("viewmember/viewadmin.php");
    } else {
        header("Location: ../public/index.php");
    }
} else {
    header("Location: ../public/index.php");
}
?>
