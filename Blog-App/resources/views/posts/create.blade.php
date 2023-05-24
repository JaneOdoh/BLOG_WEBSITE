<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   

<style>
   
    :root{
    --container-color: #1a1e21;
    --second-color: rgba(77, 228, 255);
    --text-color: #172317;
    --bg-color: #fff;
}

::selection{
    color: var(--bg-color);
    background: var(--second-color);
}
    .FORM h1{
        margin-left: 150px;
        background-color: rgb(80, 49, 8);
        color: white;
        width: 360px;
        text-align: center;
        margin-top: 20px
    }
    h1:hover{
        color: burlywood;
    }
    form{
        margin-left: 400px;
        background-color: burlywood;
        width: 45vw;
        height: 80vh;
    }
  
    
    input[type=text]{
        width: 500px;
        height: 50px;
        margin: 20px;
        margin-left: 90px;
        margin-top: 30px
        
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
        margin-top: 30px;
        
    }
    .input{
        margin-top: 40px;
    }
    label{
        margin-left: 95px;
        width: 250px;
        background-color: white;
        color: grey;
        height: 40px;
    }
    .head{
        margin-top: 80px;
    }
    .head h1{
        text-align: center;
        
    }
    .head h2{
        text-align: center;
    }
   .head p{
       margin-left: 28%;
       line-height: 2rem;
       
       font-size: 1.2rem;
       
        max-width: 700px
    }
    header{
    position: sticky;
   
   
    background-color: gray;
    z-index: 200;
    margin: 0;
    padding: 0
   }

header.shadow{
    background: var(--bg-color);
    box-shadow: 0 1px 4px hsl(0 4% 14% / 10%);
    transition: .5s;
}

header.shadow .logo{
    color: var(--text-color);
}
.nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 0;
    margin: 0px;
}

.logo{
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--bg-color);
}

.logo span{
    color: var(--second-color);
}
a{
    text-decoration: none;
}

li{
    list-style: none;
}


.login{
    padding: 8px 14px;
    text-transform: uppercase;
    font-weight: 500;
    border-radius: 4px;
    background: var(--second-color);
    color: var(--bg-color);
}

.login:hover{
    background: hsl(199, 98%, 56%);
    transition: .5s;
}
.all{
    gap: 10px
  

}
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    scroll-padding-top: 2rem;
    box-sizing: border-box;
}
.everything{
    display: flex;
    
}
.image{
    margin-top: 100px ;
    margin-left: 50px;


   
}
.image p{
    line-height: 1.2rem
}
.image button{
    padding: 5px 10px;
    margin-left: 100px;
    margin-top:20px;
    background-color: rgb(80, 49, 8);
    color: white;
}
.image button a{
    color: white;
    text-transform: uppercase;
}

.post{
    margin: 50px -250px
}
@media (max-width:400px){
    header{
       
        margin-left: -25px;
    }
    .head p{
        margin-left: 2px;
        font-size:1rem;
        
    }
    .everything{
        display: block;
    }
    
    .image img{
        max-width: 90%;
    }
    .post{
        margin-left:-380px;

        width: :400px;
        margin-top: -100px;
    }
    form{
        width: 360px;
        margin-top: 120px;
        margin-right: 50px
        
    }
    
    .all{
        margin-top: 50px
    }
    .FORM h1{
        margin-left: 40px;
        background-color: rgb(80, 49, 8);
        color: white;
        width: 260px;
        text-align: center;
        margin-top: 20px
    }
    input[type=text]{
        width: 300px;
        margin-left: 40px
    }
    label{
        margin-left: 48px;
        width: 250px;
        background-color: white;
        color: grey;
        height: 40px;
    }
    input[type=submit]{
        margin-left: 70px;
        width: 200px;
    }
   


    }
    @media (max-width:768px){
        .head p{
        margin-left: 2px;
        font-size:1rem;
       
        
       }
       .everything{
        display: block;
       }
       .image img{
        max-width: 100%;
        margin-left: 50px
       }
       .image h2{
        margin-left: 50px
       }
       .image p{
        margin-left: 50px
       }
       .image button{
        margin-left: 180px
       }
      form{
        width: 600px;
        margin-left: 320px;
      }
      
    }

</style>
</head>
<body>
    <header>
        <div class="nav container">
            <a href="#" class="logo" style="color:rgb(3, 3, 53); margin-left:30px;"  >Developers <span style="color:rgb(19, 233, 8);">Forum</span></a>
            <a href="#" class="login" style="background-color:rgb(3, 3, 53); margin-right:30px ">Login</a>
        </div>
    </header>


  <div class="all">
    <div class="head">
        <h1>HAVE YOU BEEN LOOKING FOR A BLOG <br> THAT GIVES YOU LATEST INFORMATION <br> ON PROGRAMMING?</h1> <br>
        <h2><span style="color:rgb(3, 3, 53);" >DEVELOPERS</span> <span style="color:rgb(19, 233, 8);">FORUM</span> <br> IS HERE FOR YOU</h2> <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, nam. Nisi ipsum quisquam soluta neque minus exercitationem, consectetur possimus rem voluptatum </p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo esse cupiditate facere deserunt animi hic nihil. Porro nam nobis tenetur aliquam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sed minus laudantium quae exercitationem eius sequi modi, praesentium reiciendis distinctio maiores ad.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium enim reiciendis officia maxime veritatis dolorem eius, sapiente aspernatur facilis dolor molestias illum error consequatur, velit, saepe quod placeat dolore adipisci</p>
        
      </div>
      <div class="everything">
        <div class="image">
           
            <img src="https://images.unsplash.com/photo-1664575198308-
            3959904fa430?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Ymxv
            Z2dlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" >
           <h2>Lorem, ipsum.</h2>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Vero blanditiis fugit tempore excepturiipsum expedita Lorem ipsum  <br>  dolor sit amet consectetur, adipisicing elit. <br> Eveniet autem magni eligendi perspiciatis inventore saepe omnis.</p>
           <button><a href="">Learn More</a></button>

        </div>

        <div class="post">
           
    
        <form action="/store" method="post">
          
            @csrf
          <div class="form">
           
            <div class="input">
                <div class="FORM">  <h1>JOIN US TODAY</h1></div>
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
        </div>
      </div>
        
    
     
    
      
  </div>
</body>
</html>