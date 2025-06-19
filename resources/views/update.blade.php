<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .full{
        border:2px solid black;
        padding:10px;
    }
    .box{
        border:2px solid black;
        display:flex;
        justify-content:space-between;
        padding:10px;
        margin-top:50px;


    }
    .small-box{
        
        padding:5px;
        border:2px solid black;
        text-align:center;
       
      
    }
    textarea{
        padding:10px;
        width:70%;
       
    }

</style>
<body>


    <div class="home-bar box">
               <textarea placeholder="abc"></textarea>
        <div class="edit small-box">Edit</div>
        <div class="Save small-box">Save</div>
        <div class="delete small-box">Delete</div>
    </div>
    <div class="about-bar box">
               <textarea placeholder="abc"></textarea>
        <div class="edit small-box">Edit</div>
        <div class="Save small-box">Save</div>
        <div class="delete small-box">Delete</div>
    </div>
    <div class="project-bar box">
             <textarea placeholder="abc"></textarea>
        <div class="edit small-box">Edit</div>
        <div class="Save small-box">Save</div>
        <div class="delete small-box">Delete</div>
    </div>
    <div class="contact-bar box">
              <textarea placeholder="abc"></textarea>
        <div class="edit small-box">Edit</div>
        <div class="Save small-box">Save</div>
        <div class="delete small-box">Delete</div>
    </div>
</div>
    
</body>
</html>