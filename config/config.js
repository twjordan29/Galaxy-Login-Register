$(function() {
    //////////////////////////////////////
    // THIS IS THE LOGIN CONFIGURATION! //
    //////////////////////////////////////
    
    // This is the amount of time in milliseconds before the *login box* appears after your heading has finished typing.
    var loginBox = "3000"; 

    // This is the amount of time in milliseconds before the *email input box* appears after your login box text has finished typing.
    var emailInput = "9500";

    // Don't edit anything below this line unless you know what you are doing!
    setTimeout(function() {
        $('#lb1').fadeIn();
    }, loginBox);
    setTimeout(function() {
        $('#emq1').fadeIn();
    }, emailInput);
    $('#contem1').click(function() {
        $('#emq1').fadeOut();
        $('#naq1').delay(500).fadeIn();
    })

    /////////////////////////////////////////
    // THIS IS THE REGISTER CONFIGURATION! //
    /////////////////////////////////////////

    // This is the amount of time in milliseconds before the *register box* appears after your heading has finished typing.
    var registerBox = "4000"; 

    // This is the amount of time in milliseconds before the *email input box* appears after your login box text has finished typing.
    var emailInputRegi = "7500";

    // Don't edit anything below this line unless you know what you are doing!
    setTimeout(function() {
        $('#rb1').fadeIn();
    }, registerBox);
    setTimeout(function() {
        $('#remq1').fadeIn();
    }, emailInputRegi);

    // Name form delays
    $('#contem1').click(function() {
        $('#remq1').fadeOut();
        $('#naq1').delay(500).fadeIn();
    })
    // Pass form delays
    $('#contem2').click(function() {
        $('#naq1').fadeOut();
        $('#paq1').delay(500).fadeIn();
    })
    // Pass form delays
    $('#contem3').click(function() {
        $('#paq1').fadeOut();
        $('#refe1').delay(500).fadeIn();
    })
    // Pass form delays
    $('#contem4').click(function() {
        // $('#lgyr').text('Does this information look correct?'); - coming in future updates.
        $('#refe1').fadeOut();
        $('#veri1').delay(500).fadeIn();
        var emailUser = $('#uEmail').val();
        $('#email').text(emailUser);
        var nameUser = $('#uName').val();
        $('#name').text(nameUser);
        var referUser = $('#referral').val();
        $('#referredby').text(referUser);
    })
})