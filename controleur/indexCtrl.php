<?php

$title = 'cv Gaëtan Jonard';
$regexName = '/^[a-zA-ZÃ€-Ã–Ã˜-Ã¶Ã¸-Ã¿ \-\']+$/';
$regexPhoneNumber = '/^[0][1-79]([0-9]){8}$/';
$regexCity = '/^[a-zA-ZÃ€-Ã–Ã˜-Ã¶Ã¸-Ã¿ \-\'\/]+$/';
$formError = array();
if (isset($_POST['save'])) {
    if (!empty($_POST['firstname'])) {
        if (!preg_match($regexName, $_POST['firstname'])) {
            $formError['firstname'] = 'Veuillez remplir votre nom avec des caracteres alphabétique !!!';
        } else {
            $firstname = htmlspecialchars($_POST['firstname']);
        }
    } else {
        $formError['firstname'] = 'Veuillez remplir votre nom';
    }
    if (!empty($_POST['lastname'])) {
        if (!preg_match($regexName, $_POST['lastname'])) {
            $formError['lastname'] = 'Veuillez remplir votre Prénom avec des caracteres alphabétique !!!';
        } else {
            $lastname = htmlspecialchars($_POST['lastname']);
        }
    } else {
        $formError['lastname'] = 'Veuillez remplir votre prénom';
    }
    if (!empty($_POST['email'])) {
        $mail = htmlspecialchars($_POST['email']);
    } else {
        $formError['email'] = 'Veuillez remplir votre email';
    }
    if (!empty($_POST['phoneNumber'])) {
        if (!preg_match($regexPhoneNumber, $_POST['phoneNumber'])) {
            $formError['phoneNumber'] = 'Veuillez remplir le numéro de téléphone comme l\'exemple->0322585956 ou 0655785400 merci';
        } else {
            $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
        }
    } else {
        $formError['phoneNumber'] = 'Veuillez remplir le numéro de téléphone';
    }

    if (!empty($_POST['topic'])) {
        if (!preg_match($regexName, $_POST['topic'])) {
            $formError['topic'] = 'Veuillez remplir le sujet avec des caracteres alphabétique';
        } else {
            $topic = htmlspecialchars($_POST['topic']);
        }
    } else {
        $formError['topic'] = 'Veuillez remplir le sujet';
    }
    if (!empty($_POST['text'])) {
        $text = htmlspecialchars($_POST['text']);
    } else {
        $formError['text'] = 'veuillez remplir le contenue de votre message.';
    }


    if (count($formError) == 0) {
        $messageMail = $firstname . ' ' . $lastname . ' vous a laiss& un message dont le sujet est :' . $topic . 'le message est : ' . $text . 'Pour lui repondre ' . $mail . 'et sont num&ro de t&l&phone : ' . $phoneNumber . 'Merci!';
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=UTF-8';
        $headers[] = 'Reply-To:' . $mail;
        $headers[] = 'From: ' . $lastname . '<' . $mail . '>';
        if (mail('gaetan.jonard@outlook.fr', $topic, $messageMail)) {
            $mailMessage = 'Votre message a bien été envoyé à la Gaëtan Jonard';
        }
    }
}
//tableau des lanquages
$language = array();
array_push($language, array('titre' => 'HTML', 'valeur' => 50));
array_push($language, array('titre' => 'CSS', 'valeur' => 75));
array_push($language, array('titre' => 'JavaScript', 'valeur' => 75));
array_push($language, array('titre' => 'PHP', 'valeur' => 89));
array_push($language, array('titre' => 'C#', 'valeur' => 75));
array_push($language, array('titre' => 'SQL', 'valeur' => 75));
//tableau des frameworks
$frameworks =array();
array_push($frameworks, array('titre'=>'Bootstrap', 'valeur' =>85));
array_push($frameworks, array('titre'=>'.net', 'valeur' =>55));
array_push($frameworks, array('titre'=>'Jquery', 'valeur' =>90));
array_push($frameworks, array('titre'=>'Symfony', 'valeur' =>58));
//tableau des outils
$outils = array();
array_push($outils, array('titre'=>'Atom', 'valeur' =>95));
array_push($outils, array('titre'=>'Git-LAb', 'valeur' =>85));
array_push($outils, array('titre'=>'Git Hub', 'valeur' =>95));
array_push($outils, array('titre'=>'Umbrello', 'valeur' =>85));
array_push($outils, array('titre'=>'NetBeans', 'valeur' =>90));
array_push($outils, array('titre'=>'Visual Studio ', 'valeur' =>80));
array_push($outils, array('titre'=>'Draw.io ', 'valeur' =>90));
array_push($outils, array('titre'=>'Looping', 'valeur' =>90));
// tableau des extentions
$extension=array();
array_push($extension, array('titre'=>'PDO', 'valeur' =>96));
array_push($extension, array('titre'=>'P0O', 'valeur' =>96));
//tableau des CMS
$CMS=array();
array_push($CMS, array('titre'=>'WordPress', 'valeur' =>56));
//tableau autre compétances
$othrerAbilities= array();
array_push($othrerAbilities, array('titre'=>'Gestion d\'une équipe', 'valeur' =>99));
array_push($othrerAbilities, array('titre'=>'Management d\'une équipe', 'valeur' =>95));
array_push($othrerAbilities, array('titre'=>'Gestion d\'une association (président)', 'valeur' =>89));
array_push($othrerAbilities, array('titre'=>'Organisation d\'évènements Moto', 'valeur' =>94));
//gestion des bases de donnée
$databaseManagement=array();
array_push($databaseManagement, array('titre'=>'MySql', 'valeur' =>95));
array_push($databaseManagement, array('titre'=>'PHPmyAdmin', 'valeur' =>94));

