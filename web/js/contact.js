$(function () {

    $("#appbundle_contact_lastName").keyup(function () {

        if (!$(this).val().match(/^[^0-9]{3,}$/i)) {
            $(this).css('background-color', '#ff877b');
            $('#messNom').show();
            $('.nom ul li').hide();
        }
        else {
            $(this).css('background-color', '#c9ffd2');
            $('#messNom').hide();
            $('.nom ul li').hide();
        }
    });

    $("#appbundle_contact_firstName").keyup(function () {

        if (!$(this).val().match(/^[^0-9]{3,}$/i)) {
            $(this).css('background-color', '#ff877b');
            $('#messPrenom').show();
            $('.prenom ul li').hide();
        }
        else {
            $(this).css('background-color', '#c9ffd2');
             $('#messPrenom').hide();
             $('.prenom ul li').hide();
        }
    });

    $("#appbundle_contact_mail").keyup(function() {

        if(!$(this).val().match(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/))
        {
            $(this).css('background-color', '#ff877b');
            $('#messMail').show();
            $('.mail ul li').show();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#messMail').hide();
            $('.mail ul li').hide();

        }
    });


    $("#appbundle_contact_numero").keyup(function() {

        if(!$(this).val().match(/^[0-9]{1,}$/i)) //Minimum 3 chiffres, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
            $('#messNum').show();
            $('.num ul li').hide();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#messNum').hide();
            $('.num ul li').hide();
        }
    });


    $("#appbundle_contact_message").keyup(function() {

        if($(this).val().length < 15)//Minimum 10 caractère, pas de caractères spéciaux.
        {
            $(this).css('background-color', '#ff877b');
            $('#messMessage').show();
            $('.message ul li').hide();
        }
        else
        {
            $(this).css('background-color', '#c9ffd2');
            $('#messMessage').hide();
            $('.message ul li').hide();
        }
    });

    $('.nom ul li').css('color', 'red');
    $('.prenom ul li').css('color', 'red');
    $('.mail ul li').css('color', 'red');
    $('.num ul li').css('color', 'red');
    $('.message ul li').css('color', 'red');
});