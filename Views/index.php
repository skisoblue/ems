<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap-5.1.3-dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&family=Montserrat:wght@500&family=Poppins:wght@700&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <title>Employment Management System</title>
    
    <style>
        *, *:before, *:after{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: #4d4d4d;
    font-family: 'Montserrat', sans-serif;
}

input, button{
    border: none;
    outline: none;
    background: none;
    
}
.container{
    overflow: hidden;
    position: relative;
    width: 990px;
    height: 550px;
    background: #F9F9F3;
    border-radius: 6px;
    
}
.form{
    position: relative;
    width: 640px;
    height: 100px;
    padding-top: 6em;
    right: 50px;
}
h1{
    margin: 20px auto;
    width: 100%;
    font-size: 40px;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
}
.form-group{

    display: block;
    width: 230px;
    margin: 30px auto;
    text-align: relative;
    font-weight: 600;
    font-size: 14px;
    padding-top: 0em;
}

input{
    display: block;
    margin: 5px auto;
    margin-top: 10px;
    text-align: relative;
    font-family: 'Roboto', sans-serif;
}
input[type=text]:focus{
    border-color: black;
    box-shadow: 0 0 5px 0 gray;
    font-size: 14px;
}
input[type=password]:focus{
    border-color: black;
    box-shadow: 0 0 8px 0 gray;
    font-size: 14px;
}
button{
    
    display: block;
    margin: 0 auto;
    width: 230px;
    height: 36px;
    border-radius: 4px;
    font-size: 12px;
    cursor: pointer;
    font-family: 'Montserrat', sans-serif;
    color: white;
    text-transform: uppercase;
}
.button{
    margin-top: 30px;
    margin-bottom: 20px;
    text-transform: uppercase;
    font-weight: 600;
    background: #333333;
}
.button:hover{
    background: #191919;
}
.sub-cont{
    overflow: hidden;
    position: absolute;
    left: 600px;
    top: 0;
    width: 900px;
    height: 100%;
    padding-left: 260px;
}
.img{
    overflow: hidden;
    position: absolute;
    left: 0;
    top: 0;
    width: 500px;
    height: 100%;
    padding-top: 360px;
}
.img:before{
    content: '';
    position: absolute;
    right: 0;
    top: 0;
    width: 900px;
    height: 100%;
    background-image: url(https://images.unsplash.com/photo-1561519230-2f81e90b7ff1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8MXx8fGVufDB8fHx8&w=1000&q=80);
    background-size: cover;
}
.alert{
    margin: 20px auto;
    color: black;
    text-align: center;
    background: #ffe6e6;
    border-color: #E73F33;
    width: 260px;
    height: 45px;
    border-radius: 5px;
    font-size: 14px;
    font-family: 'Roboto', sans-serif;
    padding: 13px; 
    padding-left: 38px;

}
.alert .fa-exclamation-triangle{
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}
</style>
</head>
<body>

    <div class="container">
        <div class="form">
                    <!--Login-->
                    
                    <form action="<?= base_url('main/auth') ?>" method="post">
                    <h1>WELCOME</h1>

                   
                    <?php if(!empty(session()->getFlashdata('fail'))): ?>
        
                        <div class="alert">
                            <span class="fas fa-exclamation-triangle" style="color:#e12a36"></span>
                            <?= session()->getFlashdata('fail'); ?>

                        </div>
                    <?php endif ?>

                       
  <div class="form-group">
    <label for="user">Username</label>
    <input type="text" class="form-control" id="user" placeholder="Enter username" name="username">
    <span class="text-danger"><?= isset($validation) ?display_error($validation, 'username'): '' ?></span>
    </div>

    <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    <span class="text-danger"><?= isset($validation) ?display_error($validation, 'password'): '' ?></span>
  </div>
  
  <button type="submit" class="button">Log in</button>
     
                    
  </form>    
</div>     
    <!--Log in-->
  <div class="sub-cont">
            <div class="img">
            </div>
    
        </div>
    </div>
</body>
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>

<script src="<?= base_url('bootstrap-5.1.3-dist/js/bootstrap.min.js')?>"></script>
</html>