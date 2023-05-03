<template>
  
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="style.css">
            <title>OTUKPO TECH ACADEMY HUB</title>
            
        </head>
        <body style=" background-color: rgb(2, 88, 88); ">
            <marquee behavior="scroll" direction="left" class="welcome">{{title}}</marquee>
    
                <strong><p class="writing">{{type}}</p></strong>
                 <strong><p class="writing">{{caption}}</p></strong>
           <section id="home" class="about section-padding">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../assets/dave.jpg" class="d-block w-100" alt="..." img-fluid>
                                <div class="carousel-caption">
                                    <h5>DAVID MARK</h5>
                                    <h5>founder</h5>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="../assets/amedu.jpg" class="d-block w-100" alt="..." img-fluid>
                            <div class="carousel-caption">
                                    <h5> AMEDU MARK</h5>
                                    <p>Trustee-Community engagement </p>
                            </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/lore.jpg" class="d-block w-100" alt="..." img-fluid>
                                <div class="carousel-caption">
                                    <h5>LORE PETEERS</h5>
                                    <p>Trustee-Treasurer</p>
                                </div>
                            </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
           </section>
        </body>
    </html>
</template>

<script>
export default {
    name: "WelcomeComponent",
    data() {
        return{
            title:"WELCOME TO OTUKPO TECH ACADEMY HUB!.. 'PROGRAMMING AT IT'S FINEST'",
            type:"Great Team Work Is The Only Way We Create The Breakthrough That Defines Our Careers", 
            caption:"The greatness of a community is most accurately measured by the compassionate actions of its members",
           
}
    }

}
</script>

<style>
.welcome{
    color: white;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 300%;
}
.w-100{
    height: 100vh;
    
}
.carousel-inner::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(0,0,0,0.7);
    z-index: 1;
}
.w-100{
    height: 100vh;
    
}
    


.carousel-caption h5{
    font-size: 45px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 25px;
    color:rgb(51, 159, 123);
}
.carousel-caption h4{
    font-size: 45px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 25px;
    color: rgb(15, 168, 168);
}
.carousel-caption p{
    width: 60%;
    margin: auto;
    font-size: 18px;
    line-height: 1.9;
}
.a{
    width: 60%;
    font-size: 18px;
    line-height: 1.9;
}
.carousel-item{
    height: 100vh;
    min-height: 300px;
}
.carousel-caption{
    bottom: 220px;
    z-index: 2;
}
.carousel-caption p{
    width: 60%;
    margin: auto;
    font-size: 18px;
    line-height: 1.9;
}
h1,h2,h3,h4,h5,h6,
.display-4{
    
    font-weight: 700;
}
a{
    color: #21252f;
    text-decoration: none;
}
section{
    padding-top: 40px;
    padding-bottom: 40px;
}
.section-padding{
    padding: 40px 0;
}
.container{
    width: 10%;
    height: 30vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2rem;
    font-weight: normal;
}
.writing{
    font-size: 2rem;
    color: white;
    font: italic;
    text-align: center;
}


</style>