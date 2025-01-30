<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
*{
    margin: 0px;
    padding: 0px;
    font-family: "Poppins", sans-serif;
    box-sizing: border-box;
    
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url(Capture\ d’écran\ 2024-08-28\ 105225.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.all{
    text-align: center;
}
.border{
    width: 320px;
    background: transparent;
    border: rgba(255, 255, 255, .2) 2px solid;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
    text-align: center;
}
h1{
    font-size: 30px;
    margin-bottom: 100px;
}
input{
    font-size: 20px;
    text-align: center;
    border: rgba(255, 255, 255, .2) 2px solid;
    border-radius: 25px;
    width: 100%;
    height: 40px;
    background: transparent;
    font-size: 15px;
    color: white;
    
}
.mess{
    height: 100px;
}
.submit{
    margin-top: -150px;
    border: none;
    border-radius: 20px;
    background-color: white;
    color: black;
    width: 100%;
    height: 40px;
}
    </style>
</head>
<body>
    <div class="all">
    <h1 class="intro">Welcome in my website</h1>
    
    <div class="border">
    <form action="form.php" method="post">
        <label for="name">Name : </label><br>
        <input type="text" id="name" name="name" placeholder="Enter your full name here" ><br>
        <label for="email">email : </label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email here" ><br><br>
        <label for="message">Message : </label><br>
        <input type="text" class="mess" id="password" name="password" placeholder="Enter your message here"><br><br>
        <input type="submit" class="submit" value="Submit">
    </form>
</div>

</div>

</body>
</html>