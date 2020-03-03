//---------------------------------------------inscription connexion
$('#registration').show();
$('#connexion').hide();
$('.btnRegistration').hide();
$('.btnExistCompt').show();

//$('.btnExistCompt').hide();
//$('#registration').hide();
$('.btnRegistration').click(function () {
    $('#registration').show();
    $('#connexion').hide();
    $('.btnRegistration').hide();
    $('.btnExistCompt').show();
});

$('.btnExistCompt').click(function () {
    $('#registration').hide();
    $('#connexion').show();
    $('.btnRegistration').show();
    $('.btnExistCompt').hide();
});
//-------------------------------------------gestion du formulaire ajout d'un utilisateur 
$("#addUser").submit(function (e) {
    var envoi = true,
            //définition des regexs
            regexTitle = /^[A-Za-z \d\-àâéèêôùûçÀÂÉÈÔÙÛÇ]+$/,
            regexMail = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/,
            //recupération des valeurs des inputs
            surname = $('#surname').val(),
            firstname = $('#firstname').val(),
            email = $('#email').val(),
            password = $('#password').val(),
            password2 = $('#password2').val(),
            // definition des variables d'erreurs
            firstname1 = 'veuillers rentré votre Prénom!!',
            firstname2 = 'merci de ne rentré que des caratéres Alphabétiques!!!!',
            surname1 = 'Merci de remplir le votre Nom de famille!!',
            surname2 = 'merci de ne rentré que des caratéres Alphabétiques!!!!',
            email1 = 'Merci de remplir votre email',
            email2 = 'Merci de remplir avec une adresse mail correct de type: nom.prenom@domaine.fr !!!!',
            password1 = 'Merci de remplir votre mot de passe!',
            password3 = 'Merci de remplir la confirmation de votre mots de passe',
            password4 = 'attention les mots de passes ne sont pas identiques!!! ',
            messageRest = '';

    console.log(password + " " + password2);

    //vérification du formulaire 
    if (surname == '') {
        envoi = false;
        $('#surnameError').text(surname1);
    } else if (!regexTitle.test(surname)) {
        envoi = false;
        $('#surnameError').text(surname2);
    } else {
        $('#surnameError').text(messageRest);
    }
    if (firstname == '') {
        envoi = false;
        $('#firstnameError').text(firstname1);
    } else if (!regexTitle.test(firstname)) {
        envoi = false;
        $('#firstnameError').text(firstname2);
    } else {
        $('#firstnameError').text(messageRest);
    }
    if (email == '') {
        envoi = false;
        $('#mailError').text(email1);
    } else if (!regexMail.test(email)) {
        envoi = false;
        $('#mailError').text(email2);
    } else {
        $('#mailError').text(messageRest);
    }


    console.log(password + " " + password2);

    if (password == '') {
        envoi = false;
        $('#passwordError').text(password1);
    } else if (password2 == '') {
        envoi = false;
        $('#passwordError2').text(password3);
    } else if (password != password2) {
        $('#passwordError').text(password4);
        $('#passwordError2').text(password4);
        envoi = false;
    } else {
        $('#passwordError').text(messageRest);
        $('#passwordError2').text(messageRest);
    }

    if (envoi == true) {
        alert('Votre formulaire a bien été envoyer au service client de l\'entreprise');
    } else {
        alert('erreur dans un champs merci de vous reporter à  la ligne en rouge!:!');
        return false;
        e.preventDefault();
    }
});