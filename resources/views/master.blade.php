<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="DataTemplate/css/Template.css">
     {{-- <link rel="stylesheet" href="DataTemplate/css/login.css">
     <link rel="stylesheet" href="DataTemplate/css/register.css"> --}}
     	{{-- <link rel="stylesheet" href="assets/demo.css"> --}}
	<link rel="stylesheet" href="assets/form-login.css">
    <title>Document</title>
</head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<body class="center">
<div class="opacity">
    <div class="header">
        <h1>ProBetTH</h1>
    </div>
            <ul>
                    <li><a href="/">หน้าหลัก</a></li>
                    <li><a href="#news">คาสิโน</a></li>
                    <li><a href="#contact">สล็อต</a></li>
                    <li><a href="#contact">เกมส์เทเบิ้ล</a></li>
                    <li><a href="#contact">เกมส์อื่นๆ</a></li>
                    <li><a href="/user/index">โปรโมชั่น</a></li>
                    <li style="float:right"><button id="myBtn">Login</button></li>
                    <li style="float:right"><a href="/register">สมัครสมาชิก</a></li>
                    {{-- <li style="float:right"><a href="/login">ล็อคอิน</a></li> --}}
                    {{-- <li style="float:right"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
                    <li style="float:right"><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button></li> --}}
                     @if(auth()->check())
                        <li style="float:right"><a href="/logout">ออกจากระบบ</a> </li>
                        <li style="float:right"> <a href="#">{{ auth()->user()->fullname}}</a></li>
                        @else
                            <li style="float:right"> <a href="/login">เข้าสู่ระบบ</a> </li>
                        @endif
                 {{-- <li>{{ auth()->user()->fullname}}</li> --}}
                    
                    
                   
                    
            </ul>


            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Modal Header</h2>
                    </div>
                    <div class="modal-body">

                                <div class="main-content">

                                    <!-- You only need this form and the form-login.css -->

                                    <form class="form-login" method="post" action="/login">
                                            {{ csrf_field() }}
                                        <div class="form-log-in-with-email">

                                            <div class="form-white-background">

                                                <div class="form-title-row">
                                                    <h1>Log in</h1>
                                                </div>

                                                <div class="form-row">
                                                    <label>
                                                        <span>Email</span>
                                                        <input type="email" name="email">
                                                    </label>
                                                </div>

                                                <div class="form-row">
                                                    <label>
                                                        <span>Password</span>
                                                        <input type="password" name="password">
                                                    </label>
                                                </div>

                                                <div class="form-row">
                                                    <button type="submit">Log in</button>
                                                </div>

                                            </div>

                                            <a href="#" class="form-forgotten-password">Forgotten password &middot;</a>
                                            <a href="#" class="form-create-an-account">Create an account &rarr;</a>

                                        </div>

                                        <div class="form-sign-in-with-social">

                                            <div class="form-row form-title-row">
                                                <span class="form-title">Sign in with</span>
                                            </div>

                                            <a href="#" class="form-google-button">Google</a>
                                            <a href="#" class="form-facebook-button">Facebook</a>
                                            <a href="#" class="form-twitter-button">Twitter</a>

                                        </div>

                                    </form>

                                </div>

                    </div>
                    <div class="modal-footer">
                    <h3>Modal Footer</h3>
                    </div>
                </div>

            </div>


            
            @yield('content')
            
</div> 

    <div class="footer">
            <h1>FOOTER</h1>
    </div>
</body>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</html>