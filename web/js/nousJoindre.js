$(document).ready(function(){
    $("#contactForm").submit(function(){
        var data={
            email: $("#email").val(),
            nom: $("#nom").val(),
            courriel: $("#courriel").val(),
            message: $("#message").val(),
            tel: $("#phone").val()
        };
        $.ajax({
            type: "POST",
            url: "../PHP/contact_form.php",
            data: data,
            success: function(d){
                console.log(d);
                $('#sendEmail').html(d);
            },
            Error: function(d){
                console.log(d);
            }
        });
        
    }); 
}); 