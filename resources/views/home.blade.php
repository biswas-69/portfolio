<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: arial;
    }
    body {
        background-color: aqua;
        color: #777;
        line-height: 1;
    }
    .a{
        color: #222;
        text-decoration: underline;
    }
    .navbar{
        position:fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px;
        background-color: azure;
        display: flex;
        justify-content: space-between;
        align-items: center;

    }
    .navbar logo{
        font-size: small;
        font-weight: 100;
    }
    .navbar ul{
        display: flex;
    }
    .navbar ul li a:hover{
        color: cadetblue;
    }
    .image{
        border-radius: 50%;
        width: 50%;
    }
    .space{
        width: 70%;
    }
    a{
        text-decoration: none;
    }
    .logo{
        height: 50px;
        width: 90px;
        border: 2px solid black;
    }

        </style>
</head>
<body>
    <nav class="navbar">

       
            <div class="logo">Portfolio</div>
            <div class="space"></div>
            <div><a href ="a.html">HOME</a></div>
            <div><a href ="a.html">PROJECTS</a></div>
            <div><a href ="a.html">ABOUT</a></div>
            <div><a href ="a.html">CONTRACT</a></div>
            <div><a href ="a.html">RESUME</a></div>
  
    </nav>
    


</body>
</html>