<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.3/login_two_columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2020 09:51:38 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url( 'font-awesome/css/font-awesome.css')?>" >

    <link rel="stylesheet" href="<?php echo base_url('css/animate.css')?>" >
    <link rel="stylesheet" href="<?php echo base_url('css/style.css')?>" >

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to IN+</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" id="myForm">
                        <div class="form-group">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
                    </form>
                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>© 2014-2015</small>
            </div>
        </div>
    </div>

</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.3/login_two_columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2020 09:51:38 GMT -->
</html>


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    $(document).ready(function(){
        // Function for validations....

        // Function onclick submit button...
        $('#myForm').submit(function(event) {
            event.preventDefault();
            // Retrieve the data from the form
            var firstname = $('#first_name').val();
            var lastname = $('#last_name').val();
            var email = $('#email').val();
            var password = $('#user_password').val();

            // Send the data to the controller using Ajax
            $.ajax({
                url  : "<?php echo base_url().'User/create_user';?>",
                method: 'POST',
                data: {
                    firstname: firstname,
                    lastname: lastname,
                    email:email,
                    passwd:password
                },
                success: function(response) {
                    // alert(response);
                    // $('.result').html(response)
                }
            });
        });
     });
</script>
