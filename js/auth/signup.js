$(document).ready(function() {
    limit_date('birthday_date', 1);
    
    $('#sumbit_button').click(()=> {
        
        var formData = {
            username:$('#username').val(),
            password:$('#password').val(),
            first_name:$('#first_name').val(),
            last_name:$('#last_name').val(),
            birthday_date:$('#birthday_date').val(),
            gender:$('input[name="gender"]:checked').val()
        };

        $.ajax({
            type: 'POST',
            url: '../auth/signup.php',
            data: formData,
            dataType: 'json',

            success: (data)=> {
                console.log(data);
                let success_alert=$('<div class="alert alert-success" role="alert"></div>').text('Account added successfully. Click the link above to login!');
                $('#alert_row').append(success_alert);
                //window.location.replace('login.html');
            },
            error: (data)=> {
                console.log(data);
                let error_alert=$('<div class="alert alert-danger" role="alert"></div>').text('Registration request failed. Try again!');
                $('#alert_row').append(error_alert);
            }
        });
    });
});