@extends('partial.layout')
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
       align-items: center; 
      flex-direction: column;
    }
    * {
       box-sizing: border-box;
      }


    .container {
      width: 90%;
      display: flex;
      flex-direction: column;
      align-items: center;
      border: 2px solid black;
    }

    .contents {
      height: 30vh;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
     
      padding: 10px;
      position: relative;
    }

    img {
      height: 200px;
      width: 200px;
      border-radius: 50%;
      margin-top: 15px;
    }

    .contactcontainer {
      display: flex;
      justify-content: space-between;
      width: 100%;
      position: absolute;
      bottom: 10px;
      padding: 0 20px;
    }

    .contact
     {
      font-size: 20px;
      margin-right: 66px;
      
      
    }
    a{
       text-decoration: none;  
    }
    
    .email {
      font-size: 20px;
      margin-left: 60px;
      
      
    }

    p {
      margin: 0;
      padding: 10px;
    }
    .about {
  position: fixed;
  top: 20;
  left: 60px;
  margin-left: 30px;
  padding: 0px;
  font-size: 38px;
  
  
}

  </style>

<body>
  
  <div class="container">
    <div class="contents">
        
      <div class="logo">
        <img src="https://i.guim.co.uk/img/media/9e1633d73fcfdf20bbf77fecaef9256c8912843f/0_123_3691_2215/master/3691.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=0b5b86b6aebaee4a31f7ef863cd2a94e">
      </div>
        <div class="about"><a href="#">ABOUT ME</a></div>
      <div class="contactcontainer">
        <div class="email"><a href="#">anjupurkuti@gmail.com</a></div>
        <div class="contact"><a href="#">984970291</a></div>
      </div>
    </div>
    

    <div>
      <p>Hi, I'm a BCA undergraduate with a passion for coding and technology.
       I’ve learned programming languages like PHP, Laravel, Java, and others as part of my course.
       I’m not an expert yet, but I have a solid basic understanding and I enjoy exploring and building 
       things through code. I'm always eager to learn more and grow my skills by working on real-world projects.
      Hi, I'm a BCA undergraduate with a passion for coding and technology.
       I’ve learned programming languages like PHP, Laravel, Java, and others as part of my course.
       I’m not an expert yet, but I have a solid basic understanding and I enjoy exploring and building 
       things through code. I'm always eager to learn more and grow my skills by working on real-world projects.
      Hi, I'm a BCA undergraduate with a passion for coding and technology.
       I’ve learned programming languages like PHP, Laravel, Java, and others as part of my course.
       I’m not an expert yet, but I have a solid basic understanding and I enjoy exploring and building 
       things through code. I'm always eager to learn more and grow my skills by working on real-world projects.
      Hi, I'm a BCA undergraduate with a passion for coding and technology.
       I’ve learned programming languages like PHP, Laravel, Java, and others as part of my course.
       I’m not an expert yet, but I have a solid basic understanding and I enjoy exploring and building 
       things through code. I'm always eager to learn more and grow my skills by working on real-world projects.
      Hi, I'm a BCA undergraduate with a passion for coding and technology.
       I’ve learned programming languages like PHP, Laravel, Java, and others as part of my course.
       I’m not an expert yet, but I have a solid basic understanding and I enjoy exploring and building 
       things through code. I'm always eager to learn more and grow my skills by working on real-world projects.
      Hi, I'm a BCA undergraduate with a passion for coding and technology.
       I’ve learned programming languages like PHP, Laravel, Java, and others as part of my course.
       I’m not an expert yet, but I have a solid basic understanding and I enjoy exploring and building 
       things through code. I'm always eager to learn more and grow my skills by working on real-world projects.
      Hi, I'm a BCA undergraduate with a passion for coding and technology.
       I’ve learned programming languages like PHP, Laravel, Java, and others as part of my course.
       I’m not an expert yet, but I have a solid basic understanding and I enjoy exploring and building 
       things through code. I'm always eager to learn more and grow my skills by working on real-world projects.</p>
    </div>
  </div>
</body>

