<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
    <style>
        body{
                margin: 0;
                padding: 0;
                width: 70%;
                height: 90vh;
                font-family: sans-serif;
                background-image: url();
                background-size: cover;
                background-position: center;
               
            }
            .loginbox{
                width: 320px;
                height: 300px;
                background: #000;
                color: #fff;
                top: 50%;
                left: 50%;
                position: absolute;
                transform: translate(-50%,-50%);
                box-sizing: border-box;
                padding:70px 30px;
            }
            .logo{
                width: 100px;
                height: 100px;
                border-radius: 50%;
                position: absolute;
                top: -50px;
                left: calc(50% - 50px);
            }
            h1{
                margin: 0;
                padding: 0 0 20px;
                text-align: center;
                font-size: 22px;
            }
            .loginbox p{
                margin: 0;
                padding: 0;
                font-weight: bold;
            }
             .loginbox input{
                width: 90%;
                margin-bottom: 30px;
            
             }
             .loginbox input[type="text"], input[type="password"]
             {
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 40px;
                color: #fff;
                font-size: 16px;
             }
             .loginbox input[type="submit"]
             {
                border: none;
                outline: none;
                height: 40px;
                background: #fb2525;
                color: #fff;
                font-size: 18px;
                border-radius: 20px;
             }
             .loginbox input[type="submit"]:hover
             {
                cursor: pointer;
                background: #2596be;
                color: #000;
             }
             .loginbox a{
                text-decoration: none;
                font-size: 12px;
                line-height: 20px;
                color: darkgrey;
             }
             .loginbox p{
               font-size: 12px;
               line-height: 20px;
             }
             .loginbox a:hover
             {
                color: #ffff00;
             }
        </style>
        
        
        
        <center>
        <div class="loginbox">
        <h1>Reset Password</h1>
            
            <form action="{{url('/')}}/login" method="post">
            @if(Session::has('success'))
                <div>{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div>{{Session::get('fail')}}</div>
                @endif
                
             @csrf 
                <p for="id">ENTER YOUR EMAIL..</p>
                <input type="text" id="id" name="email" placeholder="enter your email...">
                <span class="text-danger">
                    @error('email')
                     {{$message}}
                    @enderror
        </span>
                
                
                <button>SEND PASSWORD RESET LINK</button>
                
    </form>
    
    </div>
        </center>
    </body>
    </html>
                
        

</head>
<body>
    
</body>
</html>