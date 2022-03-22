
   
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            form {border: 3px solid #f1f1f1;}
            
            input[type=text], input[type=password]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            
            button{
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            
            button:hover{
                opacity: 0.8;
            }
            
            .cancelbtn{
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }
            
            .container{
                padding: 16px;
            }
            
            span.reg{
                float: right;
                padding-top: 16px;
            }
            
            span.psw{
                float: right;
                padding-top: 16px;
            }
            
            @media screen and (max-width: 300px){
                span.reg{
                    display: block;
                    float: none;
                }
                
                span.psw{
                    display: block;
                    float: none;
                }
                
                .cancelbtn{
                    width: 100%;
                }
            } 
        </style>
    </head>
    
    <?php include('./parts/header.php') ?>
    <main class="container">
        <h2>Login</h2>
        
        <form action="action_page.php" method="post">
            <div class="container">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                
                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember">Remember me
                </label>
            </div>
            
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="reg">Do not have an account? <a href="index1.php">Register</a>.</span>
            </div>
                
        </form>
        </main>
<?php include('./parts/footer.php') ?>
