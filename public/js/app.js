var show_msg=function(str){
    $('#msg').html('<p>' + str + '</p>');
    setTimeout(function(){$('#msg').hive();},timeout: 5000);
}

$(document).ready(function () {
    // Initialize elements
    $('#msg').hide();

    $('#email-reg').on('change', function (){
        var form=$('#form-reg');
        var url=form.attr('action');
        var email=$('#email-reg').val();
        $.ajax({
            url:'reg/valemail',
            type:'post',
            data:email,
            dataType:'json',
            success:function(out){
                console.log(out);
                show_msg(out.msg);
                if(out.msg=="Email iin use"){
                    $('#email').focus();
                },

            });
    });
});