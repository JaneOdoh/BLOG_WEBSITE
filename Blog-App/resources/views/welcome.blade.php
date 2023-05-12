<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developers Blog</title>
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,400&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    scroll-padding-top: 2rem;
    box-sizing: border-box;
}

/* root values */
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

a{
    text-decoration: none;
}

li{
    list-style: none;
}

img{
    width: 100%;
}

section{
    padding: 3rem 0 2rem;
}

.container{
    max-width: 1068px;
    margin: auto;
    width: 100%;
}

a{
    color: #fff;
}

/* Header */
header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 200;
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
}

.logo{
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--bg-color);
}

.logo span{
    color: var(--second-color);
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

.home{
    width: 100%;
    min-height: 440px;
    background: url("https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGJsb2dnZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: grid;
    justify-content: center;
    align-items: center;
}

.home-text{
    color: var(--bg-color);
    text-align: center;
}

.home-title{
    font-size: 3.5rem;
}

.home-subtitle{
    font-size: 1rem;
    font-weight: 400;
}

.about{
    position: relative;
    width: 100%;
    display: flex !important;
    justify-content: center;
    align-items: center;
}

.about .contentBx{
    max-width: 50%;
    width: 50%;
    text-align: left;
    padding-right: 40px;
}

.titleText{
    font-weight: 600;
    color: #111;
    font-size: 2rem;
    margin-bottom: 10px;
}

.title-text{
    color: #111;
    font-size: 1em;
}

.about .imgBx{
    position: relative;
    min-width: 50%;
    width: 50%;
    min-height: 500px;
}

.btn2{
    position: relative;
    display: inline-block;
    margin-top: 30px;
    padding: 10px 30px;
    background: #fff;
    border: .8px solid #111;
    color: #333;
    text-decoration: none;
    transition: 0.5s;
}

.btn2:hover{
    background-color: var(--second-color);
    border: none;
    color: #fff;
}

.post-filter{
    display: flex;
    justify-content: center;
    align-items: center;
    column-gap: 1.5rem;
    margin-top: 2rem !important;
}

.filter-item{
    font-size: 0.9rem;
    font-weight: 500;
    cursor: pointer;
}

.active-filter{
    background: var(--second-color);
    color: var(--bg-color);
    padding: 4px 10px;
    border-radius: 4px;
}

.post{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, auto));
    justify-content: center;
    gap: 1.5rem;
}

.post-box{
    background: var(--bg-color);
    box-shadow: 0 4px 14px hsl(35deg 25% 15% / 10%);
    padding: 15px;
    border-radius: 0.5rem;
}

.post-img{
    width: 100%;
    height: 200px;
    object-fit: cover;
    object-position: center;
    border-radius: 0.5rem;
}

.category{
    font-size: 0.9rem;
    font-weight: 500;
    text-transform: uppercase;
    color: var(--second-color);
}

.post-title{
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--text-color);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.post-date{
    display: flex;
    font-size: 0.875rem;
    text-transform: uppercase;
    margin-top: 4px;
    font-weight: 400;
}

.post-description{
    font-size: 0.9rem;
    line-height: 1.5rem;
    margin: 5px 0 10px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.profile{
    display: flex;
    align-items: center;
    gap: 10px;
}

.profile-img{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    object-fit: cover;
    object-position: center;
    border: 2px solid var(--second-color);
}

.profile-name{
    font-size: .8rem;
    font-weight: 500;
}

footer{
    position: relative;
    width: 100%;
    height: auto;
    padding: 50px 100px;
    margin-top: 3rem;
    background: #111;
    display: flex;
    font-family: sans-serif;
    justify-content: space-between;
}

.footer-container{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    flex-direction: row;
}

.footer-container .sec{
    margin-right: 30px;
}

.footer-container .sec.aboutus{
    width: 40%;
}

.footer-container h2{
    position: relative;
    color: #fff;
    margin-bottom: 15px;
}

.footer-container h2::before{
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 50px;
    height: 2px;
    background: rgb(77, 228, 255);
}

footer p{
    color: #fff;
}

.sci{
    margin: 20px;
    display: flex;
}

.sci li{
    list-style: none;
}

.sci li a{
    display: inline-block;
    width: 40px;
    height: 40px;
    background: #222;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 10px;
    text-decoration: none;
    border-radius: 4px;
    transition: .5s;
}

.sci li a:hover{
    background: rgb(77, 228, 255);
}

.sci i a .bx{
    color: #fff;
    font-size: 20px;
}

.quicklinks{
    position: relative;
    width: 25%;
}

.quicklinks ul li{
    list-style: none;
}

.quicklinks ul li a{
    color: #999;
    text-decoration: none;
    margin-bottom: 10px;
    display: inline-block;
    transition: .3s;
}

.quicklinks ul li a:hover{
    color: #fff;
}

.footer-container .contactBx{
    width: calc(35% - 60px);
    margin-right: 0 !important;
}

.contactBx .info{
    position: relative;
}

.contactBx .info li{
    display: flex !important;
    margin-bottom: 16px;
}

.contactBx .info li span:nth-child(1){
    color: #fff;
    font-size: 20px;
    margin-right: 10px;
}

.contactBx .info li span{
    color: #999;
}

.contactBx .info li a{
    color: #999;
    text-decoration: none;
    transition: .5s;
}

.contactBx .info li a:hover{
    color: #fff;
}

@media (max-width: 1060px){
    .container{
        margin: 0 auto;
        width: 95%;
    }

    .home-text{
        width: 100%
    }
}

@media (max-width: 768px){
    .nav{
        padding: 10px 0;
    }

    section{
        padding: 2rem 0 !important;
    }

    .header-content{
        margin-top: 3rem !important;
    }

    .home{
        min-height: 380px;
    }

    .home-title{
        font-size: 3rem;
    }

    .header-title{
        font-size: 2rem;
    }

    .header-img{
        height: 370px;
    }

    .about{
        flex-direction: column;
    }

    .about .contentBx{
        min-width: 100%;
        width: 100%;
        text-align: center;
        padding-right: 0px;
    }

    .about .contentBx,
    .about .imgBx{
        min-width: 100%;
        width: 100%;
        padding-right: 0px;
        text-align: center;
    }

    .about .imgBx{
        min-height: 250px;
    }

    .btn2{
        margin-bottom: 30px;
    }

    .post-header{
        height: 435px;
    }

    .post-header{
        margin-top: 9rem !important;
    }
}

@media (max-width: 570px){
    .post-header{
        height: 390px;
    }

    .header-title{
        width: 100%;
    }

    .header-img{
        height: 340px;
    }
}

@media (max-width: 396px){
    .home-title{
        font-size: 2rem;
    }

    .home-subtitle{
        font-size: 0.9rem;
    }

    .home{
        min-height: 300px;
    }

    .post-box{
        padding: 10px;
    }

    .header-title{
        font-size: 1.4rem;
    }

    .header-img{
        height: 240px;
    }

    .post-header{
        height: 335px;
    }

    .header-img{
        height: 340px;
    }
}

/* Footer Media Query */
@media (max-width: 991px){
    footer{
        padding: 40px;
        font-size: 20px;
    }

    footer .footer-container{
        flex-direction: column;
    }

    footer .footer-container .sec{
        margin-right: 0;
        margin-bottom: 40px;
    }

    footer .footer-container .sec.aboutus{
        width: 100% !important;
    }

    footer .footer-container .quicklinks{
        width: 100%;
    }

    footer .footer-container .contactBx{
        width: 100%;
    }
}




    </style>
</head>
<body>
    <header>
        <div class="nav container">
            <a href="#" class="logo" style="color:rgb(3, 3, 53);">Developers <span style="color:rgb(19, 233, 8);">Forum</span></a>
            <a href="#" class="login" style="background-color:rgb(3, 3, 53);">Login</a>
        </div>
    </header>

    <section class="home" id="home">
        <div class="home-text container">
            <h2 class="home-title" style="color:rgb(3, 3, 53);">Trend Blogger</h2>
            <span class="home-subtitle" style="color:rgb(2, 2, 128);">Your source of great content</span>
        </div>
    </section>

    <section class="about container" id="about">
        <div class="contentBx">
            <h2 class="titleText">Welcome to Developers Forum!</h2>
            <p class="title-text">
              Our blog is a platform for developers to share their thoughts about web development. We're passionate about helping developers stay up-to-date with the latest trends, techniques, and best practices in the industry. Our mission is to provide useful information to developers, foster a community of like-minded individuals, and encourage collaboration and innovation.
            </p>
            <a href="#" class="btn2">Get started</a>
        </div>
        <div class="imgBx">
            <img src="https://images.unsplash.com/photo-1664575197229-3bbebc281874?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmxvZ2dlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class="fitBg">
        </div>
    </section>

    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter="all">All</span>
        <span class="filter-item" data-filter="tech">Tech</span>
        <span class="filter-item" data-filter="food">Food</span>
        <span class="filter-item" data-filter="news">News</span>
    </div>
    
    <div class="post container">
        <!-- Post 1 -->
        <div class="post-box tech">
            <img src="https://images.unsplash.com/photo-1664575198308-3959904fa430?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8YmxvZ2dlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img">
                <span class="profile-name">MKHB</span>
            </div>
        </div>
        <!-- Post 2 -->
        <div class="post-box food">
            <img src="https://images.unsplash.com/photo-1605812277167-eb392b6914a9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y2hpbGQlMjBibG9nZ2VyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZGV2ZWxvcGVyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class="profile-img">
                <span class="profile-name">MKHB</span>
            </div>
        </div>
        <!-- Post 3 -->
        <div class="post-box food">
            <img src="https://plus.unsplash.com/premium_photo-1664461662789-b72903263bad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Y2hpbGQlMjBibG9nZ2VyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="post-img">
            <h2 class="category">Food</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="https://plus.unsplash.com/premium_photo-1678565869434-c81195861939?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8ZGV2ZWxvcGVyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class="profile-img">
                <span class="profile-name">MKHB</span>
            </div>
        </div>
        <!-- Post 4 -->
        <div class="post-box news">
            <img src="https://images.unsplash.com/photo-1528901166007-3784c7dd3653?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8ZGV2ZWxvcGVyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="https://images.unsplash.com/photo-1502465771179-51f3535da42c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmxvZyUyMG5ld3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" class="profile-img">
                <span class="profile-name">MKHB</span>
            </div>
        </div>
        <!-- Post 5 -->
        <div class="post-box tech">
            <img src="https://images.unsplash.com/photo-1586281381264-de3d24d4fbd3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmxvZ2dlcnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="https://images.unsplash.com/photo-1505330622279-bf7d7fc918f4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGJsb2dnZXJzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="profile-img">
                <span class="profile-name">MKHB</span>
            </div>
        </div>
        <!-- Post 6 -->
        <div class="post-box news">
            <img src="https://plus.unsplash.com/premium_photo-1661774723035-de53c21c9838?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmxvZ2dlcnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" class="post-img">
            <h2 class="category">News</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="https://versatile153.netlify.app/assets/images/vers7.jpeg" alt="" class="profile-img">
                <span class="profile-name">MKHB</span>
            </div>
        </div>
        <!-- Post 7 -->
        <div class="post-box tech">
            <img src="https://versatile153.netlify.app/assets/images/vers7.jpeg" alt="" class="post-img">
            <h2 class="category">Tech</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="https://images.unsplash.com/photo-1665686304129-a6e2d16923e8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmxvZ2dpbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" class="profile-img">
                <span class="profile-name">MKHB</span>
            </div>
        </div>
        <!-- Post 1 -->
        <div class="post-box news">
            <img src="https://images.unsplash.com/photo-1604933762023-7213af7ff7a7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8YmxvZ2dpbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" class="post-img">
            <h2 class="category">News</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="https://plus.unsplash.com/premium_photo-1661266876531-967ffa773deb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmxvZ2dpbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" class="profile-img">
                <span class="profile-name">MKHB</span>
            </div>
        </div>
        <!-- Post 9 -->
        <div class="post-box food">
            <img src="https://plus.unsplash.com/premium_photo-1664200913973-99314cd1ff30?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8YmxvZ2dpbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" class="post-img">
            <h2 class="category">Food</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="https://plus.unsplash.com/premium_photo-1664200913973-99314cd1ff30?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8YmxvZ2dpbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="" class="profile-img">
                <span class="profile-name">MKHB</span>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="sec aboutus">
                <h2>Developers Forum</h2>
                <p>On our blog, you'll find a wide range of topics related to web development, including:

                  Front-end development
                  Back-end development
                  Full-stack development
                  Web design
                  UI/UX
                  Frameworks and libraries
                  Tools and resources
                  Industry news and updates.</p>
                <ul class="sci">
                    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                    <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="sec quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="sec contactBx">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class='bx bxs-map'></i></span>
                        <span>64 Orba d <br> Brighton PA 33445 <br> Nsukka</span>
                    </li>
                    <li>
                        <span><i class='bx bx-envelope' ></i></span>
                        <p><a href="mailto:ceze46321@gmail.com">ceze46321@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
// nav background
let header = document.querySelector("header");

window.addEventListener("scroll", () => {
    header.classList.toggle("shadow", window.scrollY > 0)
})

//Filter
$(document).ready(function () {
    $(".filter-item").click(function () {
        const value = $(this).attr("data-filter");
        if (value == "all"){
            $(".post-box").show("1000")
        } else{
            $(".post-box")
                .not("." + value)
                .hide(1000);
            $(".post-box")
            .filter("." + value)
            .show("1000")
        }
    });
    $(".filter-item").click(function () {
        $(this).addClass("active-filter").siblings().removeClass("active-filter")
    });
});
    </script>
</body>
</html>