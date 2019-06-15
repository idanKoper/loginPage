<html>
<head>
    
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title>Login Form </title>
</head>

<body class="container box" background="background.png">
        <form action="login.php" method="POST" class= "login-form mx-auto my-5" style="width: 400px;">

            <div class="form-group">
                <label>User Name</label>
                <input name="username" type="text" class="form-control" onkeyup="checkCookie(this.value);" autocomplete= "off" id="name" placeholder="Enter username">
            </div>
    
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" id="password" autocomplete= "off" placeholder="Password">
            </div>
    
            <div class="form-check">
                <input name="remember" type="checkbox" class="form-check-input" id="rememberBox">
                <label class="check-label">Remeber Me</label>
            </div>

            <input id="submit" type="submit" name="login" value="Login!" class="btn btn-primary" ></input>
    
        </form>

        <script>
            function checkCookie(val)
            {
                if (val.length>1) {
                    return;
                }
                if (cookieUser.startsWith(val))
                {
                    document.getElementById('name').value = cookieUser;
                    document.getElementById('password').value = cookiePass;
                    document.getElementById('rememberBox').checked = true;
                }
                    
            }
            <?php
            echo "var cookieUser = \"$_COOKIE[username]\";";
            echo "var cookiePass = \"$_COOKIE[password]\";";
            ?>
        </script> 

    </body>
    
</html>