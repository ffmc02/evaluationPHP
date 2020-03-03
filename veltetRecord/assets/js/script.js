//formulaire d'ajout
$('#formAddDisc').submit(function (e) {
    var envoi = true,
            // je mets mes regex dans des variables
            regexTitle = /^[A-Za-z \d\-àâéèêôùûçÀÂÉÈÔÙÛÇ]+$/,
            regexYears = /^(\d{4})$/,
            regexPrice = /^(\d{1,6})[.,](\d{0,2})$/,
            regexId = /^\d+$/,
            //je recupéres les valeurs des id 
            title = $('#title').val(),
            artist = $('#Artist').val(),
            year = $('#year').val(),
            genre = $('#genre').val(),
            label = $('#label').val(),
            price = $('#price').val(),
            picture = $('#picture').val(),
            // définition des valriables d'erreur.
            title1 = 'Merci de rentre un titre',
            title2 = 'Merci de ne mettre que des caractéres alphabétique!!!!',
            artist1 = 'Merci de sélectionner un artiste dans la liste!',
            year1 = 'merci de remplir le champs Year',
            year2 = 'Merci de ne mettre que des chiffres ',
            year3 = 'Merci de mettre une date situé entre 1960 et 2020',
            genre1 = 'Merci de remplir le champs Genre',
            genre2 = 'Merci de ne mettre que des caractéres alphabétique!!!',
            label1 = 'Merci de remplir le champs Label!!',
            label2 = 'Merci de ne mettre que des caractéres alphabétique!!!',
            price1 = 'Merci de remplire le champs price',
            price2 = 'Merci de metre des nombres comme suit : 1.2 2.22 22222.2 22 etc ',
            picture1 = 'Merci de télécharcger une fichier photo',
            SuccessForm = 'test',
            messageRest = '';
    if (title == '') {
        envoi = false;
        $('#titre').text(title1);
    } else if (!regexTitle.test(title)) {
        envoi = false;
        $('#titre').text(title2);
    } else {
        $('#titre').text(messageRest);
    }
    if (artist == '0') {
        envoi = false;
        $('#artist').text(artist1);
    } else if (!regexId.test(artist)) {
        envoi = false;
        $('#artist').text(artist1);
    } else {
        $('#artist').text(messageRest);
    }
    if (year == '') {
        envoi = false;
        $('#Year').text(year1);
    } else if (!regexYears.test(year)) {
        envoi = false;
        $('#Year').text(year2)
    } else if (year <= 1960 && year >= 2020) {
        envoi = false;
        $('#Year').text(year3);
    } else {
        $('#Year').text(messageRest);
    }
    if (genre == '') {
        envoi = false;
        $('#Genre').text(genre1);
    } else if (!regexTitle.test(genre)) {
        envoi = false;
        $('#Genre').text(genre2);
    } else {
        $('#Genre').text(messageRest);
    }
    if (label == '') {
        envoi = false;
        $('#Label').text(label1)
    } else if (!regexTitle.test(label)) {
        envoi = false;
        $('#Label').text(label2);
    } else {
        $('#Label').text(messageRest);
    }
    if (price == '') {
        envoi = false;
        $('#Price').text(price1)
    } else if (!regexPrice.test(price)) {
        envoi = false;
        $('#Price').text(price2);
    } else {
        $('#Price').text(messageRest);
    }
    ;
//    Si aucune erreur d'input est prÃƒÂ©sente alors j'affiche un message de succÃƒÂ¨s et une alert sinon je bloque l'envoi du formulaire'.
    if (envoi == true) {
        $('#succesForm').text(SuccessForm);
//        alert('Votre formulaire a bien été envoyer au service client de l\'entreprise');
    } else {
        alert('erreur dans un champs merci de vous reporter à  la ligne en rouge!:!');
        return false;
        e.preventDefault();
    }
});
//formulaire de modification
$('#formModifyDisc').submit(function (e) {
    var envoi = true,
            // je mets mes regex dans des variables
            regexTitle = /^[A-Za-z \d\-àâéèêôùûçÀÂÉÈÔÙÛÇ]+$/,
            regexYears = /^(\d{4})$/,
            regexPrice = /^(\d{1,6})[.,](\d{0,2})$/,
            regexId = /^\d+$/,
            //je recupéres les valeurs des id 
            title = $('#title').val(),
            artist = $('#Artist').val(),
            year = $('#year').val(),
            genre = $('#genre').val(),
            label = $('#label').val(),
            price = $('#price').val(),
            picture = $('#picture').val(),
            // définition des valriables d'erreur.
            title1 = 'Merci de rentre un titre',
            title2 = 'Merci de ne mettre que des caractéres alphabétique!!!!',
            artist1 = 'Merci de sélectionner un artiste dans la liste!',
            year1 = 'merci de remplir le champs Year',
            year2 = 'Merci de ne mettre que des chiffres ',
            year3 = 'Merci de mettre une date situé entre 1960 et 2020',
            genre1 = 'Merci de remplir le champs Genre',
            genre2 = 'Merci de ne mettre que des caractéres alphabétique!!!',
            label1 = 'Merci de remplir le champs Label!!',
            label2 = 'Merci de ne mettre que des caractéres alphabétique!!!',
            price1 = 'Merci de remplire le champs price',
            price2 = 'Merci de metre des nombres comme suit : 1.2 2.22 22222.2 22 etc ',
            picture1 = 'Merci de télécharcger une fichier photo',
            SuccessForm = 'test',
            messageRest = '';
    if (title == '') {
        envoi = false;
        $('#titre').text(title1);
    } else if (!regexTitle.test(title)) {
        envoi = false;
        $('#titre').text(title2);
    } else {
        $('#titre').text(messageRest);
    }
    if (artist == '0') {
        envoi = false;
        $('#artist').text(artist1);
    } else if (!regexId.test(artist)) {
        envoi = false;
        $('#artist').text(artist1);
    } else {
        $('#artist').text(messageRest);
    }
    if (year == '') {
        envoi = false;
        $('#Year').text(year1);
    } else if (!regexYears.test(year)) {
        envoi = false;
        $('#Year').text(year2)
    } else if (year <= 1960 && year >= 2020) {
        envoi = false;
        $('#Year').text(year3);
    } else {
        $('#Year').text(messageRest);
    }
    if (genre == '') {
        envoi = false;
        $('#Genre').text(genre1);
    } else if (!regexTitle.test(genre)) {
        envoi = false;
        $('#Genre').text(genre2);
    } else {
        $('#Genre').text(messageRest);
    }
    if (label == '') {
        envoi = false;
        $('#Label').text(label1)
    } else if (!regexTitle.test(label)) {
        envoi = false;
        $('#Label').text(label2);
    } else {
        $('#Label').text(messageRest);
    }
    if (price == '') {
        envoi = false;
        $('#Price').text(price1)
    } else if (!regexPrice.test(price)) {
        envoi = false;
        $('#Price').text(price2);
    } else {
        $('#Price').text(messageRest);
    }
    ;
//    Si aucune erreur d'input est prÃƒÂ©sente alors j'affiche un message de succÃƒÂ¨s et une alert sinon je bloque l'envoi du formulaire'.
    if (envoi == true) {
        $('#succesForm').text(SuccessForm);
//        alert('Votre formulaire a bien été envoyer au service client de l\'entreprise');
    } else {
        alert('erreur dans un champs merci de vous reporter à  la ligne en rouge!:!');
        return false;
        e.preventDefault();
    }
});