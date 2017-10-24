$(document).ready(function(){
    $("#contactForm").click(function(){
        var data={
            email: $("#email").val(),
            nom: $("#nom").val(),
            message: $("#message").val(),
            tel: $("#phone").val()
        };
        console.log(data);
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