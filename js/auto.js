$('document').ready(function(){
        $("#login-form").validate({
            rules:
            {
                password:{
                    required:true,
                },
                user_email:{
                    required:true,
                    email:true
                },
            },
            message:
            {
                password:{
                    required:"please enter your password"
                },
                user_email:"please enter your email address",
            },
            submitHandler:submitForm
        });


        function submitForm(){
            //var data=$("#login-form").serialize();
                var user_email=$('#user_email').val();
                var password=$('#password').val();
        
            $.ajax({
                type:'POST',
                url:'./auth.php',
                data:{
                    user_email:user_email,
                    password:password
                },
                success:function(response)
                {
                    if(response=="ok"){
                        
                        setTimeout(' window.location.href = "./dashboard.php"; ',1000);
                    }else{
                        $("#error").fadeIn(1000, function(){      
                            $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
                                   $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
                                 });
                    }
                }
            });
            return false;
        }
});