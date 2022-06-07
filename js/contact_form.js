// JavaScript Document
$(document).ready(function() {
    $("#phpcontactform").submit(function(e) {
        e.preventDefault();
        var name = $("#name");
        var email = $("#email");
        var mobile = $("#mobile");
        var msg = $("#message");
        var dataString = "name=" + name.val() + "&email=" + email.val() + "&mobile=" + mobile.val() + "&msg=" + msg.val();
        $(".loading").fadeIn("slow").html("Loading...");
        $.ajax({
            type: "POST",
            data: dataString,
            url: "./contact.php",
            cache: false,
            success: function (d) {
                $(".control-group").removeClass("success");
             if(d == 'success')
                $('.loading').fadeIn('slow').html('<font color="green">Sikeres üzenetküldés!</font>').delay(3000).fadeOut('slow');
                else
                $('.loading').fadeIn('slow').html('<font color="red">Sikertelen üzenetküldés!</font>').delay(3000).fadeOut('slow');
            }
        });
        document.getElementById("phpcontactform").reset();
        return false;
    });
})
