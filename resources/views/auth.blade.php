<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="/static/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="/static/assets/plugins/pace/pace.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <!-- Theme Styles -->
    <link href="/static/assets/css/main.min.css" rel="stylesheet">
    <link href="/static/assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="/static/assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/static/assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        @yield('content')
    </div>
    
    <!-- Javascripts -->
    <script src="/static/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="/static/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/static/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="/static/assets/plugins/pace/pace.min.js"></script>
    <script src="/static/assets/js/main.min.js"></script>
    <script src="/static/assets/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript">
        $("#registerBtn").on("click", function(){
            var name = $("#name").val();
            var email = $("#email").val();
            var password = $("#password").val();

            axios.post("/auth/register/control", {name:name, email:email, password:password})
            .then(response => {
                toastr[response.data.type](response.data.message);
                if(response.data.status){
                    setInterval(() => {
                        window.location.assign("/auth/login");
                    }, 1000);
                }
            })
        });


        $("#loginBtn").on("click", function(){
            var formData = $("#loginForm").serialize();

            axios.post("/auth/login/control", formData).then(response => {
                toastr[response.data.type](response.data.message);
                if(response.data.status){
                    setInterval(() => {
                        window.location.assign('/');
                    }, 1000);
                }
            })
        })
    </script>


</body>
</html>