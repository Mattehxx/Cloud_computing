$(document).ready(function() {
    $('#form').submit(()=> {

        var formData = {
            'username':$('#username').val(),
            'password':$('#password').val(),
            'first_name':$('#first_name').val(),
            'last_name':$('#last_name').val(),
            'birthday_date':$('#bitrhday_date').val(),
            'gender':$('input[name="gender"]:checked').val()
        };

        $.ajax({
            type        : 'POST',
            url         : '../auth/signup.php',
            data        : formData,
            dataType    : 'json',
            success: (data)=> {
                console.log(data); 
            },
            error: ()=> {
                console.log('ERROR');
            }
        })
    });
});