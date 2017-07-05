$(function () {

    $("#appbundle_annonce_description").keyup(function() {

        if(!$(this).val().match(/^[a-z]{3,}$/i)) //Minimum 3 caractère, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
            $('#description').show();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#description').hide();
        }
    });

    $("#appbundle_annonce_identification").keyup(function() {

        if(!$(this).val().match(/^[0-9]{15,}$/i)) //Minimum 3 chiffres, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
            $('#identification').show();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#identification').hide();
        }
    });

    $("#appbundle_annonce_tatouage").keyup(function() {

        if(!$(this).val().match(/^[a-z0-9]{5,}$/i)) //Minimum 3 chiffres, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
        }
    });

    $("#appbundle_annonce_signes").keyup(function() {

        if(!$(this).val().match(/^[a-z0-9]{10}/i))//Minimum 10 caractère, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
        }
    });

    $("#appbundle_annonce_circonstances").keyup(function() {

        if(!$(this).val().match(/^[a-z0-9]{10}/i))//Minimum 10 caractère, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
        }
    });

    $("#appbundle_annonce_mobile").keyup(function() {

        if(!$(this).val().match(/^[0-9]{10,}$/i)) //Minimum 3 chiffres, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
        }
    });

});