<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/form.css" rel="stylesheet">
    <link href="../css/accordion.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <title>G9Bwebpage</title>
</head>
<body>
<!--La contenu de la FAQ-->
<div class="faq">
    <?php
    if (isset($_SESSION['usertype']) AND isset($userinfo) AND $userinfo['usertype'] == 'admin'){
        ?>
        <a  class="accueil" href="<?php echo "../membres/admin.php?id=" .$_SESSION['id'];?>">
            <ion-icon name="home" style="color:white; width:50px; height:50px;"></ion-icon>
            <!-- <img src="../images/Infinite measure détouré intérieur blanc.png" alt="logoClient" width="50px" height="50px"> -->
        </a>
        <?php
    }
    else if (isset($_SESSION['id']) AND isset($userinfo) AND $userinfo['id'] == 'id')
    {
        ?>
        <a  class="accueil" href="<?php echo "../membres/utilisateur/menu.php?id=" .$_SESSION['id'];?>">
            <ion-icon name="home" style="color:white; width:50px; height:50px;"></ion-icon>
            <!-- <img src="../images/Infinite measure détouré intérieur blanc.png" alt="logoClient" width="50px" height="50px"> -->
        </a>
        <?php
    } else { ?>
        <a  class="accueil" href="index.php">
            <ion-icon name="home" style="color:white; width:50px; height:50px;"></ion-icon>
            <!-- <img src="../images/Infinite measure détouré intérieur blanc.png" alt="logoClient" width="50px" height="50px"> -->
        </a>
        <?php
    }
    ?>

    <h1 align="center" style="color: white;">Mention légales</h1>
    <hr style="height:1px;border:none;color:black;background-color:black;"/>

    <div class="accordion-content">
        <div style="border-radius: .25rem;">
            <button class="accordion">Article 1-Collecte de données à caractère personnel </button>
            <div class="panel">
                <p>
                    Witsmed, dans ses relations avec les Utilisateurs, va être amené à collecter et traiter des données à caractère personnel des Utilisateurs, lesquelles données lui auront été communiquées par ces derniers lors de leur inscription ou ultérieurement via son compte personnel sur le Site.
                    La récolte et l’analyse de ces informations sont nécessaires pour permettre aux Utilisateurs d’accéder aux services proposés par Infinite Measures.
                    Sauf sur demande ou avec l’accord exprès de l’Utilisateur et dans le strict respect de ses directives, Witsmed ne procèdera à aucun autre traitement de données à caractère personnel autre que ceux décrits au sein des présentes mentions légales.
                </p>
            </div>

            <button class="accordion">Article 2-Finalités du traitement</button>
            <div class="panel">
                <p>
                    Les données à caractère personnel collectées par Infinite Measures sont traitées pour les finalités suivantes :
                    permettre l’utilisation des services qu’elle propose ;
                    et toute autre utilisation qui permet d’améliorer le fonctionnement du Site.
                </p>
            </div>
            <button class="accordion">Article 3-Divulgation des données</button>
            <div class="panel">
                <p>
                    ISEP s’engage à garantir le respect de la vie privée des internautes qui visitent ce site web et à veiller dans les limites de l’état de l’art à la confidentialité des informations personnelles qui lui sont transmises.
                    Les destinataires des données sont  ISEP et ses collaborateurs uniquement.
                </p>
            </div>
            <button class="accordion">Article 4-Droit d'accès, de modification et de suppression des données</button>
            <div class ="panel">
                <p>
                    Conformément à la loi «informatique et libertés» du 6 janvier 1978, vous bénéficiez d’un droit d’accès et de rectification aux informations qui vous concernent. Si vous souhaitez exercer ce droit et obtenir communication des informations vous concernant, veuillez adresser un courrier à M. Dieudonné Abboud,  ISEP ,  28 rue Notre Dame des Champs, 75006 Paris, en joignant une photocopie de votre carte d’identité.
                    Afin de répondre à votre demande, merci de nous fournir quelques indications (date et contexte de votre dernier contact avec ISEP.  Merci également d’indiquer un numéro de téléphone pour vous joindre si nous avons besoin de précision pour traiter avec célérité votre demande.
                    Vous pouvez également, pour des motifs légitimes, vous opposer au traitement des données vous concernant.
                </p>
            </div>
        </div>
    </div>
    <!-- pied de page -->
    <?php include("publicview/footer.php") ?>

    <script src="../js/accordion.js"></script>
</body>
</html>


