<?php
ob_start();
            include("connection.php");

              if(isset($_POST["login"])){

                $name=$_POST['m1'];
                $pass=$_POST['m2'];


                $result="select * from adminlogin where user_name='$name' and password='$pass'";

                    $query1=mysqli_query($con,$result);

                    $result1=mysqli_num_rows($query1);

                    if($result1==1)
                    {

                    	header("location:indexpage.php");
                    }
                    else
                    {
                        echo "not";

                    }
                

              }      
            
 ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <style>

.container{

justify-content:center;
align-items:center;
display:flex;
height:100vh;
width:100%;
background-color:#4e6983;

}
.sub_container{

    
    height:80vh;
    width:33%;
    background-color:#f9f9f9;
    border-radius:28px;
    
    
}
h1{

padding-left:32%;
margin-top:60px;
text-decoration:underline;

}
form{




}
.text_box1{

font-size: 28px;
margin-top: 70px;
padding-left:50px;

}
.text_box2{

font-size: 28px;
margin-top:60px;
padding-left:50px;

}
input[type="text"],input[type="password"]{

height:35px;
width:85%;
border-radius: 10px;
font-size:18px;
padding-top
}

.btn{

    display:flex;
    align-items:center;
    justify-content:center;
    margin-top:13%;
    height:30px;
    box-shadow:4px,4px,4px;
}

.b1{
    
    height:45px;
    width:90%;
    border-radius:15px;
    font-size:28px;
    color:;
    background-color:#DADADA;
}
input[type="text"],input[type="password"]:focus{

    border-color: #66afe9;
    box-shadow: 0 0 8px #66afe9;
    background-color: #f0f0f0;
  outline: none;
}
.forget{

    
    display:flex;
    align-items:center;
    justify-content:center;
    margin-top:10%;
    height:30px;

}
a{
    font-size:20px;
}

    </style>
</head>
<body>



    <div class="container">

        <div class="sub_container">

            <form action="" method="POST">

                <h1>Admine login</h1>

                <div class="text_box1">
            

                <i class="fa-solid fa-user  cdn" style="color: #74C0FC;"></i>
                    <input type="text" placeholder="username" name="m1">

                </div>

                <div class="text_box2">
                
                <i class="fa-solid fa-lock" style="color: #74C0FC;"></i>
                     <input type="password" placeholder="password" name="m2">

                </div>
                <div class="btn">

                    <input type="submit" class="b1" value="login" name="login">
                    
                </div>

                <div class="forget">

                    <a href="#">forget password ?</a>

                </div>
            </form>
        </div>
    </div>
    
</body>
</html>