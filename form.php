<!DOCTYPE html>
<html>
    <head>
        <title> Form</title>
    <style>
        #hello{
            background:black;!important
        }
    
        .form{
            background:#629fbf;
            color:Black;
            width:48%;
            height:50%;
            float:left;
            margin-left:10px;
            margin-top:100px;
            text-align:center;
            font-size:20px;
            text-decoration:underline;
        }
        .form1{
            background:#537863;
            color:Black;
            width:48%;
            height:50%;
            float:right;
            margin-right:10px;
            margin-top:100px;
            text-align:center;
            font-size:20px;
            text-decoration:underline;
        }
        

        
    </style>   
    </head>

    <body>
     <div id="hello">
        <div class="form">
            <h1>FORM</h1>
            <form action="process.php" method="post">
                <p> <label>User Name</label>
                <input type="text"name="username"/>
                </p>
                <p><label>Password</label>
                    <input type="password"name="password"/>
                </p>
                <p>
                <input type="submit" value="Login"/>
                </p>
             </form>
             <span style= "color:red;">
            <?php
            if(isset($_GET["Error"]))
            echo $_GET["Error"];
            ?>
            </span>
        </div>

      <div class="form1">
        <h1>FORM</h1>
        <form action="process.php" method="post">
            <p> <label>User Name</label>
                <input type="text"name="username"/>
            </p>
            <p><label>Password</label>
                <input type="password"name="password"/>
            </p>
            <p>
                <input type="submit" value="Login"/>
            </p>
        </form>
        <span style= "color:red;">
            <?php
            if(isset($_GET["Error"]))
            echo $_GET["Error"];
            ?>
        </span>
     </div>
    </div>
    
    </body>
    </html>