<?php

$title = 'exo formulaire serveur';

if (isset($_POST['save'])) {
    if (!empty($_POST['company'])) {
        $company=htmlspecialchars($_POST['company']);
    }
    if (!empty($_POST['contactPerson'])) {
        $contctatPerson = htmlspecialchars($_POST['contactPerson']);
    }
    if(!empty($_POST['businessAddress'])){
        $businessAddress= htmlspecialchars($_POST['businessAddress']);
    }
    if(!empty($_POST['zipCode'])){
        $zipCode= htmlspecialchars($_POST['zipCode']);
    }
     if(!empty($_POST['city'])){
        $city= htmlspecialchars($_POST['city']);
    }
     if(!empty($_POST['email'])){
        $email= htmlspecialchars($_POST['email']);
    }
     if(!empty($_POST['phoneNumber'])){
        $phoneNumber= htmlspecialchars($_POST['phoneNumber']);
    }
     if(!empty($_POST['technicalEnvironment'])){
        $technicalEnvironment= htmlspecialchars($_POST['technicalEnvironment']);
    }
}
