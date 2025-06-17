<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Portfolio</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: arial;
    }
    body {
      background:rgb(60, 94, 50)
      color: #333;
      line-height: 1;
    }
    .navbar {
        display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 10%;
      background-color:rgb(73, 130, 109);
      position: sticky;
      top: 0;
      left: 0;
      z-index: 10;
      width: 100%;
    }
    .logo{
        font-size: 24px;
        font-weight: bold;
        color: white;
        margin-left: 0;
    }
    .navbar ul {
        list-style: none;
        display: flex;
    }
    .navbar ul li {
        margin-left: 30px;
        list-style: none;
    }
    .navbar ul li a {
        text-decoration: none;
        color: white;
        font-weight: bold;
        transition: color 0.3s;
    }
    .navbar ul li a:hover {
        color: rgb(34, 62, 48);
        font-size:10px;
        font-weight:500;
        transition: 1s;
    }
    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 60px 10%;
        flex-wrap: wrap;
    }
    .left {
        flex: 1;
        min-width: 300px;
    }

    .left h1 {
        font-size: 48px;
        color: silver;
        margin-bottom: 20px;
    }
    .left p {
        font-size: 18px;
        max-width: 500px;
        margin-bottom: 30px;
    }
    .btn {
        background-color:rgb(43, 65, 40);
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
    }
    .btn:hover {
        background-color:rgb(13, 245, 55);
    }
    .right {
        flex: 1;
        min-width: 300px;
        display: flex;
        justify-content: center;
    }
    .right img {
        width: 300px;
        height: 300px;
        object-fit: cover;
        border: 6px solid rgb(21, 143, 191);
    }
    @media (max-width: 768px) {
        .container {
            flex-direction: column-reverse;
            text-align: center;
        }
        .right img {
            margin-bottom: 30px;
        }
        .navbar {
            flex-direction: column;
            gap: 10px;
        }
        .navbar ul {
            flex-direction: column;
            gap: 10px;
            align-items: center;
      }
    }
  </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">My Portfolio</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="/contact.html">Contact</a></li>
            <li><a href="#resume">Resume</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="left">
            <h1>Hello, I'm Mikki</h1>
      <p>
        I’m a creative graphic designer with a strong passion for 
        visual storytelling. I love blending colors, shapes, and typography to build 
        unique designs that capture attention and communicate clearly. Whether it’s 
        branding, print design, UI elements, or social media content, 
        I enjoy crafting visual solutions that are both artistic and functional. 
        Let's work together to bring your ideas to life through thoughtful design.
      </p>
      <a href="/contact.html"><button class="btn">Contact Me</button></a>
    </div>

    <div class="right">
      <img src="https://th.bing.com/th/id/OIP.BV0smfVZaoC-6rlL8_Bc7AHaEK?w=1920&h=1080&rs=1&pid=ImgDetMain" alt="Profile Photo">
    </div>
  </div>

</body>
</html>