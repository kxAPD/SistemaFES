<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login</title>

    <link rel="stylesheet" href="/FES/login.css">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

    <div id="login">
        
        <form action="javascript:void(0);" method="get">
            
            <fieldset class="clearfix">
                
                <p><span class="fontawesome-user"></span><input type="text" placeholder="Correo institucional" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password"  placeholder="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><input type="submit" value="Ingresar"></p>

            </fieldset>

        </form>
        
        <p><a href="#">¿Olvido su contraseña?</a><span class="fontawesome-arrow-right"></span></p>

    </div> <!-- end login -->

</body>
</html>