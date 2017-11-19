$(function () { $("#Fecha").datepicker({ maxDate: '+0', changeYear: true, yearRange: "-70:+0", dateFormat: 'dd-mm-yy' }); });

$(document).ready(function () {
    // On Click SignIn Button Checks For Valid E-mail And All Field Should Be Filled
    $("#Log").click(function (e) {

        var email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
        if ($("#user").val() === '' || $("#pass").val() === '') {
            alert("no puedes dejar campos vacios");
            e.preventDefault();
        } else if (!($("#user").val()).match(email)) {
            alert("Ingresa un Correo Valido");
            e.preventDefault();
        } else {


            $("form")[0].reset();

        }
    });
    $("#Reg").click(function (e) {
        var email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
        if ($("#nombre").val() === '' || $("#apellido").val() === '' || $("#correo").val() === '' || $("#password").val() === '' || $("#Fecha").val() === '', $("#sex").val() === '') {
            alert("No puedes dejar campos vacios");
            e.preventDefault();
        } else if (!($("#correo").val()).match(email)) {
            alert("Ingresa un correo valido");
            e.preventDefault();
        } else {
            $("#form")[0].reset();
            $("#second").slideUp("slow", function () {
                $("#first").slideDown("slow");

            });
        }
    });
    // On Click SignUp It Will Hide Login Form and Display Registration Form
    $("#signup").click(function () {
        $("#first").slideUp("slow", function () {
            $("#second").slideDown("slow");
        });
    });
    // On Click SignIn It Will Hide Registration Form and Display Login Form
    $("#signin").click(function () {
        $("#second").slideUp("slow", function () {
            $("#first").slideDown("slow");
        });
    });
});