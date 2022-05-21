<x-app-layout>

</x-app-layout>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Page Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* fill: rgb(249, 194, 38); */
.main{
    position: relative;
    height: 100vh;
}

.main svg{
    position: absolute;
    width: 100%;
}

.navigation{
    height: 50px;
    padding: 30px 100px;
    position: relative;
    display: flex;
    justify-content: space-between;
    z-index: 99;
}

.brand h1{
    color: #fff;
    font-weight: 700;
}

.toggle, .close{
    display: none;
}

.nav-menu li{
    display: inline-block;
    margin: 0 5px;
    font-size: 20px;
    color: #fff;
}

.nav-menu li a{
    text-decoration: none;
    color: #fff;
}

.container{
    height: 75vh;
    width: 80vw;
    color: #fff0;
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    justify-content: space-between;
    padding: 70px 0 30px 0;
}

.text-sm {
    font-size: 20px !important;
    color: blue;
}

.photo{
    position: relative;
    width: 58%;
    height: 110%;
    padding: 0 20px;
}

.photo img{
    position: relative;
    width: 100%;
    height: 100%;
}

.form-cont{
    background-color: #30a4bafa;
    width: 63%;
    /* height: 113%; */
    height: 97%;
    border-radius: 20px;
}

.inner-form{
    width: 60%;
    height: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
}

.inner-form img{
    width: 100px;
    height: 100px;
    position: relative;
    display: block;
    margin: 0 auto;
}
.social-login{
    position: relative;
    margin: 10px 0;
    text-align: center;
    padding-bottom:24px;
}

.social-login span{
    text-shadow: -1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    color: white;

    padding: 5px 0;
    font-size: 29px;
    font-weight: 700;
}
h1{
    color:#fff;
}
h3{
    color:#fff;
}
p{
    color: #fff;
    font-size: 18px;
    font-family: auto
}
.bg-2{
    margin-top: 23px;
}
.social-login ul li{
    display: inline;
    color: #fff;
    font-size: 30px;
    padding: 5px;
    margin: 5px 0;
}

.social-login ul>li>a{
    color: #fff;
    text-decoration: none;
}

.inner-form .imput-area{
    margin: 10px 0;
}

.input-area i{
    position: absolute;
    margin: 10px 0px;
    color: #fff;
}

.input-area input{
    position: relative;
    background: transparent;
    width: 100%;
    border: none;
    border-bottom: 2px solid #fff;
    margin: 5px 0;
    padding: 5px 18px;
    color: white;
    font-weight: 700;
    font-size: 15px;
    box-sizing: border-box;
}

::placeholder{
    color: #fff;
    opacity: 0.7;
}

.btn{
    position: relative;
    display: block;
    margin: 10px auto;
    font-size: 20px;
    background: transparent;
    box-shadow: none;
    border:  2px solid #fff;
    color: #fff;
    padding: 5px 15px;
    border-radius: 10px;
}

.btn:hover{
    border: 2px solid #F9C226;
    background-color: #fff;
    cursor: pointer;
    color: #F9C226;
}

.input-area span{
    color: #fff;
    margin: 0 5px;
}

.input-area a{
    color: #fff;
    font-weight: 700;
    margin: 0 5px;
    text-decoration: none;
}

@media(max-width: 990px){
    .navigation{
        padding: 10px 100px;
    }
    .toggle{
        display: flex;
        color:#fff;
        cursor: pointer;
    }

    .close{
        display: block;
        position: absolute;
        color: #fff;
        right: 0;
        font-size: 30px;
        cursor: pointer;
        margin: 50px;
    }

    .nav-menu{
        display: none;
        position: absolute;
        width: 100%;
        height: 100vh;
        background-color: #F9C226;
        left: 0;
        top: 0;
        transition: all 3s ease;
    }

    .nav-menu ul{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .nav-menu ul li{
        display: block;
        font-size: 30px;
        margin: 20px 0;
        text-align: center;

    }
    .nav-menu ul>li>a:hover{
        color: #fff;
        padding-bottom: 5px;
        border-bottom: 2px solid #fff;
    }
    .container{
        height: 75vh;
        top: 50%;
        margin: 10px;
    }

    .photo{
        display: none;
    }

    .form-cont{
        width: 100%;
        max-height: 100%;
    }
}

    </style>
</head>
<body>
    <section class="main">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0fabca" fill-opacity="1" d="M0,192L18.5,213.3C36.9,235,74,277,111,256C147.7,235,185,149,222,133.3C258.5,117,295,171,332,197.3C369.2,224,406,224,443,192C480,160,500,96,554,101.3C590.8,107,628,181,665,197.3C701.5,213,738,171,775,176C812.3,181,849,235,886,229.3C923.1,224,960,160,997,133.3C1033.8,107,1071,117,1108,106.7C1144.6,96,1182,64,1218,69.3C1255.4,75,1292,117,1329,165.3C1366.2,213,1403,267,1422,293.3L1440,320L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z"></path></svg>

        <div class="navigation">
            <div class="brand">
                <h1  style="font-size: 45px;">Welcome {{ Auth::user()->name }}</h1>
            </div>
            <div class="toggle">
                <i class="fas fa-bars"></i>
            </div>
            <div class="nav-menu">
                <div class="close">
                    <i class="fas fa-window-close"></i>
                </div>

                <ul>

                    <li><a href="#">Home</a></li>
                    <li><a href="{{route('hospital_details.create')}}">Add Information</a></li>
                    <li><a href="#process">Update Information</a></li>
                    <li><a href="#about">Add Doctor</a></li>
                    <li><a href="#about">Update Doctor</a></li>
                    <li><a href="#about">Add Facilities</a></li>
                    <li><a href="#about">Update Facilities</a></li>

                    <!-- <li><a href="#">Contact</a></li> -->
                </ul>
            </div>
        </div>


        <div class="container">
            <div class="photo">
                <img src="{{asset('admin/images/hos.jpeg')}}">
            </div>

            <div class="form-cont">
                <div class="inner-form">
                    <!-- <img src="" alt="avatar" srcset=""> -->

                    <div class="social-login">
                        <span class="head">Instruction</span>
                        <ul>
                            <!-- <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li> -->
                        </ul>
                    </div>

                    <div class="input-area">
                        <form action="" method="post">
                            <div>
                                <!-- <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Email">
                            </div>
                            <div>
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Password">
                            </div>
                            <div>
                                <span>Forget Passwoard? <a href="#">Click Here</a></span>
                            </div>
                            -->
                            <div id="process" class="bg-1">
                            <!-- <h1><u>Instruction</u></h1>    -->
                            <!-- <p class="text"><em>  The Hospital Information Management System
                               Pharmacy Integration module takes care of stock management, inbuilt tax calculations,
                               auto expiry alerts, barcodes, and more. The pharmacy management module in HMS helps to
                               control different pharmacies. </em></p> -->
                               <p class="text"><em>
                                An efficient, cost-effective, and reliable system is needed, and they are
                                considered to be any healthcare or hospital's backbone.
                                 One of them on the list is the hospital information system software.
                               </em></p>
                               <p>●  Higher revenue management</p>
                               <p>●  Billing and Insurance </p>
                               <p>● APPROPRIATENESS FOR DISCHARGE</p>
                               <p>● Specialty based modules</p>
                               <p>● Integrated interface and distinct user roles</p>
                               <p>● Add Doctor details</p>
                               <p>● Add Update details</p>
                               <p>● Add facilities</p>

                            </div>
                            <!-- <div id="about" class="bg-2">
                               <h1><u>About</u></h1>
                               <p class="text"><em>  Hospital's experience serving
                                patients that makes you happy, giving service that makes you smile,
                                in passionate pursuit of our mission, showing love and caring in all our actions,
                                 to enrich as many lives as we possibly can.
                                 You can get update from here . For getting appointment at first you need to update at this site . If required,then you can
       update here so you can get information about updation of hospital requirement
                                </em></p>
                                  </div>
                             <button class="btn">Update</button>
                            <span>Don't have account? <a href="#">Register Here</a></span> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let toggler = document.querySelector('.toggle');
        let menu = document.querySelector('.nav-menu');
        let close = document.querySelector('.close');


        toggler.addEventListener('click', () =>{
            menu.style.display ='block';
            console.log('clicked')
        });

        close.addEventListener('click', () =>{
            menu.style.display = '';
            cons
        });
    </script>
</body>
</html>