$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function checkLogin(){
    console.log('udpate');
$('#loginModal').modal('show');
}
function signupmodalshow(){
    $('#signup').modal('show');
}
$("#login_form").on("submit", function (e) {
    // analytics('Login attempt',null);
    $(".loading").removeClass('d-none');
    $(".class-login-button").attr("disabled", "disabled").button('refresh');

    e.preventDefault();
    let dataString = $(this).serialize();
    console.log(dataString);
    let url = $(this).attr("action");
    let redirect = $("#redirect").val();
// alert(redirect);
// console.log(redirect);
    $.ajax({
        url     : `${url}`,
        type    : 'POST',
        async: true,
        data    : dataString,
        dataType: 'json',
        headers: {
            'guestAuth': '0dRL8q0K8apqRoa0cLTpm8XgtsOzhNRE3_KV8WLxz98uzHraFPG8FUJB1D3fW6Xw'
        },
        success: function (json) {
            // var json = JSON.parse(data); // string to json
            console.log(json);
            console.log(json.status_code);
            // $("#content_load").html(json.html);
            if(json.status_code == 200){
                // analytics('Login Success',null);
                let err='<p class="alert alert-success">Login successfull!</p>';
                $("#feedback").html(err);
                if(redirect == 'NONE'){
                    location.reload();
                }else{
                    location.reload();
                }

            }else{
                // analytics('Login attempt failed' ,null);
                let err='<p class="alert alert-danger">Error coccured, Please check your credentials</p>';
                $("#feedback").html(err);
            }
            $(".loading").addClass('d-none');
            $(".class-login-button").removeAttr("disabled").button('refresh');
            return true;
        },
        error: function(json) {
            // analytics('Login attempt failed',null);
            $(".loading").removeClass('d-none');
            $(".class-login-button").removeAttr("disabled").button('refresh');
            return false;
        }
    });
});
    $("#signup_form").on("submit", function (e) {
        // analytics('Signup attempt ',null);
        $(".loading").removeClass('d-none');
        $(".class-login-button").attr("disabled", "disabled").button('refresh');

        e.preventDefault();
        let dataString = $(this).serialize();
        console.log(dataString);
        let url = $(this).attr("action");
        let redirect = $("#redirect").val();
    // alert(redirect);
    // console.log(redirect);
        $.ajax({
            url     : `${url}`,
            type    : 'POST',
            async: true,
            data    : dataString,
            dataType: 'json',
            headers: {
                'guestAuth': '0dRL8q0K8apqRoa0cLTpm8XgtsOzhNRE3_KV8WLxz98uzHraFPG8FUJB1D3fW6Xw'
            },
            success: function (json) {
                // var json = JSON.parse(data); // string to json
                console.log(json);
                console.log(json.status_code);
                // $("#content_load").html(json.html);
                if(json.status_code == 200){
                    // analytics('Signup Success',null);
                    let err='<p class="alert alert-success">Signup successfull!</p>';
                    $(".feedback").html(err);
                        // location.reload();
                    $(".loading").addClass('d-none');
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Signup successfull!',
                            showConfirmButton: false,
                            timer: 4000
                        });
                        location.reload();
                }else{
                    // analytics('Signup attempt failed',null);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Signup failed!',
                        showConfirmButton: false,
                        timer: 4000
                    });
                    let err='<p class="alert alert-danger">'+json.message+'</p>';
                    $(".feedback").html(err);
                    $(".class-login-button").removeAttr("disabled").button('refresh');
                }
                $(".loading").addClass('d-none');
                return true;
            },
            error: function(json) {
                $(".loading").removeClass('d-none');
                $(".class-login-button").removeAttr("disabled").button('refresh');
                return false;
            }
        });
    });

    $(document).on('click', '.signup_modal_show', function(e) {
        // analytics('Sign up Screen',null);
        $('#loginModal').modal('hide');
        $('#signup').modal('show');
    });
    $(document).on('click', '.login_modal_show', function(e) {
        // analytics('Login Screen',null);
        console.log('udpate');

        $('#signup').modal('hide');
        $('#loginModal').modal('show');
    });
    $(document ).ready(function() {
    $('#usertxtPassword').tooltip({'trigger':'focus', 'title': 'Password minimum 5'});
    });
    $( document ).on( 'focus', ':input', function(){
        $( this ).attr( 'autocomplete', 'off' );
    });


    
     function submitAjaxForm(form,actionType){
        let dataString = $(form).serialize();
        let url = $(form).attr("action");
        $.ajax({
            url     : `${url}`,
            type    : actionType,
            data    : dataString,
            success: function (json) {
                return json;
            },
            beforeSend: function(){
                $('#cover-spin').show();
            },
            error: function(json) {
                $('#cover-spin').hide();
                return json;
            }
        });
    }

