<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    h1{
        margin-left: 500px;
        background-color: rgb(80, 49, 8);
        color: white;
        width: 380px;
        align-items: center;
    }
    h1:hover{
        color: burlywood;
    }
    form{
        margin-left: 400px;
        background-color: burlywood;
        width: 50vw;
        height: 80vh;
    }
  
    
    input[type=text]{
        width: 500px;
        height: 50px;
        margin: 20px;
        margin-left: 90px;
        
    }
    input[type=submit]{
        width: 250px;
        height: 40px;
        margin-left: 180px;
        margin-top:20px;
        background-color: rgb(80, 49, 8);
        color: white;
        text-transform: uppercase;
        font-size: 1rem;
        cursor: pointer;
    }
    input[type=submit]:hover{
        color: burlywood;
    }
    .form{
        margin-top: 30px
    }
    .input{
        margin-top: 30px;
    }
    label{
        margin-left: 95px;
        width: 250px;
        background-color: white;
        color: grey;
        height: 40px;
    }
</style>
<body>
    <h1>CREATION OF BLOGS</h1>

    <form action="/store" method="post">
        @csrf
      <div class="form">
        <div class="input">
            <input type="text" name="name"  placeholder="Name of Blogger"> <br>
        <input type="text" name="title" placeholder="Blog Title"> <br>
        <input type="text" name="subject" placeholder="Subject"> <br>
        <label for="image">Upload Image:</label>
        <select name="image" id="">
            <option value="File">File</option>
            <option value="s">Media</option>
            
          </select> 
        
        
        </div>
      

       
        <input type="submit" value="Submit">
      </div>
    </form>
</body>
</html>