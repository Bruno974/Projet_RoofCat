$(function () {

    $("#appbundle_annonce_description").keyup(function() {

        if(!$(this).val().match(/^[^0-9]{10,}$/i))
        {
            $(this).css('background-color', '#ff877b');
            $('#messDescription').show();
            $('.description ul li').hide();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#messDescription').hide();
            $('.description ul li').hide();
        }
    });

    $("#appbundle_annonce_identification").keyup(function() {

        if(!$(this).val().match(/^[0-9]{15,}$/i))
        {
            $(this).css('background-color', '#ff877b');
            $('#messIdentification').show();
            $('.identification ul li').hide();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#messIdentification').hide();
            $('.identification ul li').hide();
        }
    });


    $("#appbundle_annonce_signes").keyup(function() {

        if($(this).val().length < 10)//Minimum 10 caractère, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
            $('#messSignes').show();
            $('.signes ul li').hide();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#messSignes').hide();
            $('.signes ul li').hide();
        }
    });

    $("#appbundle_annonce_circonstances").keyup(function() {

        if($(this).val().length < 10)//Minimum 10 caractère, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
            $('#messCirconstances').show();
            $('.circonstances ul li').hide();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#messCirconstances').hide();
            $('.circonstances ul li').hide();
        }
    });


    $("#appbundle_annonce_mobile").keyup(function() {

        if(!$(this).val().match(/^0[6-7][0-9]{8}$/))
        {
            $(this).css('background-color', '#ff877b');
            $('#messMobile').show();
            $('.mobile ul li').hide();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#messMobile').hide();
            $('.mobile ul li').hide();
        }
    });

    $("#appbundle_annonce_mail").keyup(function() {

        if(!$(this).val().match(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/))
        {
            $(this).css('background-color', '#ff877b');
            $('#messMail').show();
            $('.email ul li').hide();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#messMail').hide();
            $('.email ul li').hide();
        }
    });

    $('.description ul li').css('color', 'red');
    $('.mobile ul li').css('color', 'red');
    $('.signes ul li').css('color', 'red');
    $('.circonstances ul li').css('color', 'red');
    $('.email ul li').css('color', 'red');
    $('.identification ul li').css('color', 'red');
    $('.tatouage ul li').css('color', 'red');


    $("#appbundle_annonce_tatouage").keyup(function() {

        if(!$(this).val().match(/[0-9]{3}[a-zA-Z]{3}|[a-zA-Z]{3}[0-9]{3}/))
        {
            $(this).css('background-color', '#ff877b');
            $('#messTatouage').show();
            $('.tatouage ul li').hide();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#messTatouage').hide();
            $('.tatouage ul li').hide();
        }
    });

});