<html>
    <head>
        <title> Sign Up</title>
        <style>
            *{
                margin:0px;
                padding:0px;
            }
            div{
                margin-bottom:10px;
                width:100%;
                
            }
            #sign_up{
                font-size:40px;
                color:white;
                text-align:center;
                background:#23297a;
                height:10%;
                
            }
            label{
                width:fixed;
            }

            .register{
                text-align:center;
                background:grey;
                font-size:20px;
            }
            </style>
    </head>

<body>
   <div id="sign_up">Registration Form </div>

   <div class="register">
            
            <form action="register_process.php" method="POST">
                <div>
                <label>Full Name:</label>
                <input type="text"name="full_name"/>
                </div>
                <div>
                <label>Email:</label>
                <input type="text"name="email"/>
                </div>
                <div>
                <label>UserName:</label>
                <input type="text"name="username"/>
                </div>
                <div>
                <label>Password:</label>
                    <input type="password"name="password"/>
                </div>
                <div>
                <input type="submit" value="Register"/>
                </div>
            </form>
        </div>

</body>
</html>
