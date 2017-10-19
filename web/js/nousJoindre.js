$(document).ready(function(){
    $("#contactForm").submit(function(){
        var data={
            emailVal : $("#email").val(),
            nomVal : $("#nom").val(),
            courrielVal : $("#courriel").val(),
            messageVal : $("#message").val(),
            tel : $("#phone").val()
        };
        $.ajax({
            type: "POST",
            url: "./PHP/contact_form.php",
            data: data,
            success: function(){
                $('.success').fadeIn(1000);
            }
        });
        
    }); 
}); 