$(document).ready(function(){
    $("#sentMessage").submit(function(){
        $(".error").hide();
        var hasError = false;
        var emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
        var emailVal = $("#email").val();
        if(emailVal == '') {
            $("#email").after('<span class="error">You forgot to enter the email address to send to.</span>');
            hasError = true;
        } else if(!emailReg.test(emailVal)) {
            $("#email").after('<span class="error">Enter a valid email address to send to.</span>');
            hasError = true;
        }
        var nomVal = $("#nom").val();
        if(nomVal == '') {
            $("#nom").after('<span class="error">You forgot to enter the email address to send from.</span>');
            hasError = true;
        } else if(!emailReg.test(nomVal)) {
            $("#emailFrom").after('<span class="error">Veuillez entrer un email address to send from.</span>');
            hasError = true;
        }
        var courrielVal = $("#courriel").val();
        if(courrielVal == '') {
            $("#courriel").after('<span class="error">Vous avez oublié d\'entrer votre courriel.</span>');
            hasError = true;
        }
        var messageVal = $("#message").val();
        if(messageVal == '') {
        $("#message").after('<span class="error">You forgot to enter the message.</span>');
        hasError = true;
        }
        return false;
    });
    var emailToVal="n.oularabi@gmail.com";
    var subjectVal="contact de " + nomVal;
    $.post("/PHP/contact_form.php",
    { emailTo: emailToVal, name:nomVal,emailFrom: emailVal, subject: subjectVal, message: messageVal },
        function(data){
            $("#sendEmail").slideUp("normal", function() {
            
                $("#sendEmail").before('<h1 style="color: green;">Success</h1><p>Your email was sent.</p>');
            });
        }
    ); 
}); 