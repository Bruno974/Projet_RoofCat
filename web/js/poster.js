$(function () {

    $("#appbundle_annonce_description").keyup(function() {

        if(!$(this).val().match(/^[^0-9]{3,}$/i))
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

        if(!$(this).val().match(/^[^0-9]{10,}$/i))//Minimum 10 caractère, pas de caractères spéciaux.
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

        if(!$(this).val().match(/^0[1-78][0-9]{8}$/))
        {
            $(this).css('background-color', '#ff877b');
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
        }
    });

    $("#appbundle_annonce_mail").keyup(function() {

        if(!$(this).val().match(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/))
        {
            $(this).css('background-color', '#ff877b');
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
        }
    });

});