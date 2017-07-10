$(function () {

    $("#appbundle_annonce_description").keyup(function() {

        if(!$(this).val().match(/^[^0-9]{10,}$/i))
        {
            $(this).css('background-color', '#ff877b');
            $('#description').show();
            $('.description ul li').show();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#description').hide();
            $('.description ul li').hide();
        }
    });

    $("#appbundle_annonce_identification").keyup(function() {

        if(!$(this).val().match(/^[0-9]{15,}$/i)) //Minimum 3 chiffres, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
            $('#identification').show();
            $('.identification ul li').show();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#identification').hide();
            $('.identification ul li').hide();
        }
    });

    $("#appbundle_annonce_tatouage").keyup(function() {

        if(!$(this).val().match(/^[a-z0-9]{5,}$/i)) //Minimum 3 chiffres, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
            $('#tatouage').show();
            $('.tatouage ul li').show();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#tatouage').hide();
            $('.tatouage ul li').hide();
        }
    });

    $("#appbundle_annonce_signes").keyup(function() {

        if($(this).val().length < 10)//Minimum 10 caractère, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
            $('#signes').show();
            $('.signes ul li').show();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#signes').hide();
            $('.signes ul li').hide();
        }
    });

    $("#appbundle_annonce_circonstances").keyup(function() {

        if($(this).val().length < 10)//Minimum 10 caractère, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
            $('#circonstances').show();
            $('.circonstances ul li').show();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#circonstances').hide();
            $('.circonstances ul li').hide();
        }
    });


    $("#appbundle_annonce_mobile").keyup(function() {

        if(!$(this).val().match(/^0[1-78][0-9]{8}$/))
        {
            $(this).css('background-color', '#ff877b');
            $('#mobile').show();
            $('.mobile ul li').show();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#mobile').hide();
            $('.mobile ul li').hide();
        }
    });

    $("#appbundle_annonce_mail").keyup(function() {

        if(!$(this).val().match(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/))
        {
            $(this).css('background-color', '#ff877b');
            $('#email').show();
            $('.email ul li').show();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('.email ul li').hide();
            $('#email').hide();
        }
    });

    $('.description ul li').css('color', 'red');
    $('.mobile ul li').css('color', 'red');
    $('.signes ul li').css('color', 'red');
    $('.circonstances ul li').css('color', 'red');
    $('.email ul li').css('color', 'red');
    $('.identification ul li').css('color', 'red');
    $('.tatouage ul li').css('color', 'red');

});