<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Registration Form</title>
    </head>

    <h1> Blood Donation Camp </h1>
    <body bgcolor="CFFDC7">
        <div><h2> Registration Form </h2></div>
        <form action='connect.php' method='POST'>
            <lable for='user'>Name: </lable> <br>
            <input type='text' name='name' id='name' required/> <br> <br> 
            
            <lable for='email'>Email: </lable> <br>
            <input type='text' name='email' id='email' required/> <br> <br> 
            
            <lable for='phone'>Phone: </lable> <br>
            <input type='text' name='phone' id='phone' required/> <br> <br> 
            
            <lable for='bgroup'>Blood Group: </lable> <br>
            <input type='text' name='bgroup' id='bgroup' required/> <br> <br> 
            
            <input type='submit' name='submit' id='submit'/>
        </form>
    </body>
</html>