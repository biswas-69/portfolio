<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            body {
           padding-top: 80px; 
       }

        }
        .container {
               position: fixed;
                 top: 0;
                 left: 0;
                 width: 100%;
                 height: 80px;
                 background-color: black;
                 display: flex;
                 justify-content: space-between;
                
}

        a{

         color: white;
         font-size: 20px;
         text-decoration: none;
        }
        .home-button{
            display: flex;
            gap: 45px;
            margin-right: 20px;
            margin-top: 20px;
            
        }
        button{
            height:40px;
            width: 60px;
            background-color: black;
            color: white;
        }
        #logo{
            font-size: 30px;
            margin-top: 20px;
        }
        .profile{
            margin-top: 50px;
            height: 400px;
            width: 100%;
            border: 2px solid black;
            display: flex;
            flex-wrap: wrap;
            
            margin-right: 20px;
            overflow: hidden;
        }
        img{
            height:auto;
            width: 100%;
            max-width: 400px;
             max-width: 400px; 
             object-fit: contain;
              flex-shrink: 0;
              border-radius: 10px;
        }
        
        .info{
            margin-left: 30px;
            flex: 1;
            min-width: 250px;
        }
        h2{
            margin-top: 30px;
            margin-bottom: 10px;
            font-size: 40px;
        }
        p{
            margin-bottom: 140px;
        }
        .viewbutton{
            display: inline-block;
            margin-left: 400px;
            height: 50px;
            width: 200px;
            line-height: 50px;
            text-align: center;
            font-size: 16px;
            
            background-color: #dda0dd; 
            color: #333;
            font-weight: bold;
            border-radius: 25px;
            text-decoration: none;
            
        }
        .feature-project{
           width: 100%;
            display: flex;
            justify-content: center;
             flex-wrap: wrap;
              gap: 4px;
            margin-top: 3px;
        
        }
        .first-project{
            height: calc(100vh - 500px);
            width: 33%;
            border: 2px solid black;
            
        }
        .img2{
            width: 100%;
            border-radius: 20px;
            margin-left: 60px;
            margin-top: 10px;
        }
        p{
            margin-left: 10px;
            padding: 0;
        }
        
        @media (max-width: 768px) {
  .profile {
    flex-direction: column;
    align-items: center;
  }

  .info {
    margin-left: 0;
    text-align: center;
    
  }

  .viewbutton {
    margin-left: 0;
     margin-right: auto;
    margin-left: auto;
    display: block;
    

  }
}
        
    </style>
</head>
<body>
    <div class="container">
        <a id="logo" href="#">My Portfolio.</a>
        <div class="home-button">
         <button href="#" >Home</button> 
         <a href="{{ url('/about') }}"> <button>About</button></a>
        <a href="{{ url('/project') }}"> <button>Project</button></a>
         
         <button href="#">Contact</button>
         <a href="{{ url('/login') }}"><button type="button">Admin Login</button></a>

         
       </div>
       
    </div>
    <div class="profile">
        <img   src="https://upload.wikimedia.org/wikipedia/commons/d/d7/Cristiano_Ronaldo_playing_for_Al_Nassr_FC_against_Persepolis%2C_September_2023_%28cropped%29.jpg">
        <div class="info">
        <h2>My Webdevelopment <br> experience</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, libero. Eos molestias quia rerum voluptatum. Eveniet deleniti a quae placeat nam repellat odit alias in, ratione, quos optio voluptates unde!
        Hic, deleniti inventore ipsa autem sed eaque. Velit, est? Ad, eos. Deleniti repellat iure quod ut architecto nisi dolorem amet quam. Sapiente facere deserunt earum vel cum aut eligendi quae.</p>
      <button class="viewbutton">View projects</button>
    </div>
     
    </div>
    <h2>My project</h2>
    <div class="feature-project">
        <div class="first-project">
             <img class="img2" src="https://th.bing.com/th/id/OIP.-R7L1NQbT_g7R6n0Vngw6AHaEP?rs=1&pid=ImgDetMain">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia perferendis atque iste corrupti id odio suscipit quo saepe itaque, beatae exercitationem inventore eius dicta voluptates, vero animi? Magnam, optio cumque.</p>
         </div>
        <div class="first-project">
             <img  class="img2" src="https://th.bing.com/th/id/OIP.-R7L1NQbT_g7R6n0Vngw6AHaEP?rs=1&pid=ImgDetMain">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia perferendis atque iste corrupti id odio suscipit quo saepe itaque, beatae exercitationem inventore eius dicta voluptates, vero animi? Magnam, optio cumque.</p>
        </div>
        <div class="first-project">
             <img class="img2" src="https://th.bing.com/th/id/OIP.-R7L1NQbT_g7R6n0Vngw6AHaEP?rs=1&pid=ImgDetMain">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia perferendis atque iste corrupti id odio suscipit quo saepe itaque, beatae exercitationem inventore eius dicta voluptates, vero animi? Magnam, optio cumque.</p>
         
        </div>
    </div>
    <div class="footer">
        <h2>About Me</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur minus placeat, ea quaerat unde accusamus necessitatibus ad quam officiis culpa iusto magni sint consectetur quis nemo numquam optio nisi tempora!</p>
    </div>
</body>
</html>

