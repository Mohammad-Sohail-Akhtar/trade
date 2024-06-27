<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <section class="container">
            <div class="login">
                
                <h1>Login as user</h1>
                <h2>Login to proceed to the site.</h2>
                @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                
                @endif
        
                <form action="{{route('register.index')}}" method="POST">
                    @csrf
                    
                    <div class="icon1"><i class="bi bi-envelope-open-fill"></i>Email</div>
                    <input type="email" name="email" id="a" placeholder="Enter Your Mail" />
                    <div class="icon2"><i class="bi bi-person-lock"></i></i>Password</div>
                    <input type="password" name="password" id="b"
                      placeholder="Enter Your Password" />
                    <!-- <div class="cir"></div> -->
                    <div class="circle"><input type="radio" name="cir" id="c">  Remember Me</div>
                    <button class="log">Register</button>
                
                </form>
                
             
                
                <!-- <div class="log">Login</div> -->
                
                <h3>Already have an Account</h3>
                <!-- <div class="res">Register</div> -->
                <a href="{{url('login')}}"><button class="res">Login</button></a>
            </div>
    </section>
</body>
</html>



