$(document).ready(function () {
//quand un champs est selectionner dans mes options je l'affiche dans le texaera
    $('#technicalEnvironment').change(function () {
        var option = $('#technicalEnvironment option:selected').text();
        $('#technicalEnvironment1').text(option);
    });
//    function test() {
//  

    $("#formVerif").submit(function (e) {

        //j'initialise mes variables 
        var envoi = true,
                // je mets mes regex dans des variables
                regeexCity = /^[a-zÃƒÂ©ÃƒÂ¨ÃƒÂªÃƒÂ«ÃƒÂ ÃƒÂ¢ÃƒÂ®ÃƒÂ¯ÃƒÂ´ÃƒÂ¶ÃƒÂ»ÃƒÂ¼-]+$/,
                regexTexte = /^[0-9A-Za-z]+$/,
                regexMail = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/,
                regexZipeCode = /^[0-9]{5}$/,
                regexPhoneNumber = /^0[1-9]([-. ]?[0-9]{2}){4}$/,
                regexAddress = /^[\w \d\-àâéèêôùûçÀÂÉÈÔÙÛÇ]+$/,
                // je rÃƒÂ©cuperÃƒÂ©s les valeurs de mes inputs
                societe = $('#society').val(),
                contact = $('#contactPerson').val(),
                businessAddress = $('#businessAddress').val(),
                zipCode = $('#zipCode').val(),
                city = $('#city').val(),
                phoneNumber = $('#phoneNumber').val(),
                technicalEnvironment = $('#technicalEnvironment1').val(),
                email = $('#email').val(),
                // je dÃƒÂ©finit mes messages d'erreur.
                society1 = 'Veuillez remplir le noms de la société',
                society2 = 'Veuillez remplir le noms de la société avec des caractéres alphabétiques !!!',
                conctaPers1 = 'veuillez renplir le nom de la personne à contacter',
                conctaPers2 = 'Veuillez remplir le nom de la personne avec des caractéres alphabétiques !!!',
                address1 = 'Veuillez remplir le champ adresse!',
                address2 = 'veuillez remplir le champs adresse uniquement avec des caractéres alphabétiques!!!',
                zipCode1 = 'Veuillez remplir le champ code postal',
                zipCode4 = 'Merci de mettre un code postal avec 5 chiffres , ne mettre comme dans l\'exemple : 02320!!!!',
                city1 = 'Veuillez remplir le champ Ville',
                city2 = 'veuillez remplir le champs ville uniquement avec des caractéres alphabétiques!!!',
                email1 = 'Veuillez remplir le champ Email',
                phoneNumber1 = 'Veuillez remplir le numéro de téléphone',
                phoneNumber2 = 'Veuillez remplir le numéro de téléphone uniquement avec des chiffres ',
                email2 = 'Merci de mettre un mail au format nom.prenom@site.domaine',
                technicalEnvironment1 = 'Merci de remplir votre projet technique',
                succesForm1 = 'Votre formulaire a été envouyé avec succées!!!!!!',
                messageRest = '';

// je vérifie si mon inupt sociéter n'est pas vide
        if (societe == '') {
            $('#society1').text(society1);
//        si l'input sociÃƒÂ©tÃƒÂ© est vide alors je bloque l'envoi du formulaire
            envoi = false;
        } else if (!regexTexte.test(societe)) {
            $('#society1').text(society2);
            envoi = false;

        } else {
            $('#society1').text(messageRest);
        }
//    regex de texte du nom de la sociÃƒÂ©tÃƒÂ©

//    teste si le champ contact est vide
        if (contact == '') {
            envoi = false;
            $('#contactPerson1').text(conctaPers1);
        } else if (!regexTexte.test(contact)) {
            //    regex de texte sur le champ contact
            $('#contactPerson1').text(conctaPers2);
            envoi = false;
        } else {
            $('#contactPerson1').text(messageRest);
        }
        if (businessAddress == '') {
            envoi = false;
            $('#businessAddress1').text(address1);
        } else if (!regexAddress.test(businessAddress)) {
            envoi = false;
            $('#businessAddress1').text(address2);
        } else {
            $('#businessAddress1').text(messageRest);
        }
        if (zipCode === '') {
            envoi = false;
            $('#zipCode1').text(zipCode1);
        } else if (!regexZipeCode.test(zipCode)) {
            envoi = false;
            $('#zipCode1').text(zipCode4);
        } else {
            $('#zipCode1').text(messageRest);
        }
        if (city == '') {
            envoi = false;
            $('#city1').text(city1);
        } else if (!regeexCity.test(city)) {
            envoi = false;
            $('#city1').text(city2);
        } else {
            $('#city1').text(messageRest);
        }
        if (email == '') {
            envoi = false;
            $('#email1').text(email1);
        } else if (!regexMail.test(email)) {
            envoi = false;
            $('#email1').text(email2);
        } else {
            $('#email1').text(messageRest);
        }
//    teste si le champ tÃƒÂ©lÃƒÂ©phone n'est pas vide'
        if (phoneNumber == '') {
            envoi = false;
            $('#phoneNumber1').text(phoneNumber1);
            //regex de tÃƒÂ©lÃƒÂ©phone franÃƒÂ§ais
        } else if (!regexPhoneNumber.test(phoneNumber)) {
            $('#phoneNumber1').text(phoneNumber2);
            envoi = false
            e.preventDefault();
        } else {
            $('#phoneNumber1').text(messageRest);
        }
        if (technicalEnvironment == '') {
            envoi = false;
            $('#technicalEnvironment2').text(technicalEnvironment1);
        } else {
            $('#technicalEnvironment2').text(messageRest);
        }

//    Si aucune erreur d'input est prÃƒÂ©sente alors j'affiche un message de succÃƒÂ¨s et une alert sinon je bloque l'envoi du formulaire'.
        if (envoi == true)
        {
            $('#succesForm').text(succesForm1);
            document.forms[0].submit();
            alert('Votre formulaire a bien été envoyer au service client de l\'entreprise');
        } else {
            alert('erreur dans un champs merci de vous reporter à  la ligne en rouge!:!');
            e.preventDefault();
        }
//
    });
});