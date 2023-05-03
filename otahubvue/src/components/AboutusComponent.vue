<template>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body id="AboutusComponent">
    <h2 class="heading" style=" font-family: 'Times New Roman', Times, serif;">{{learn}}</h2>
   
    <section id="about" class="about section-padding">
        <div id="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
              <div class="about-img">
                <img src="../assets/Nigeria.jpg" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12" style=" background-color: rgb(2, 88, 88);border-radius: 30PX; ">
              <div class="about-text" style="color:white">
                <h2><span>{{title}}</span>{{otukpo}}</h2>
                <p style="">{{body}}</p>
                <p>{{we}}</p>
                <ul>
                  <li>{{html}}</li>
                  <li>{{word}}</li>
                  <li>{{php}}</li>
                </ul>
                <h3 class="aims">{{aim}}</h3>
                <ul>
                  <li>{{aims}}</li>
                  <li>{{objectives}}</li>
                  <li>{{environment}}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>


      
  </body>
  </html>
</template>

<script>
export default {
    name:"AboutusComponent",
    data(){
      return{
        learn:"LEARN MORE ABOUT US",
        title:"About ",
        otukpo:"OTA",
        body:"Otukpo Tech Academy (OTA),is a non-profit programming institute that is driven with the goal of empowering young ones and giving them the opportunity to explore the world of programming.",
        we:"we offer courses on:",
        html:"Html/css",
        word:"worldpress",
        php: "php/mysql and lots more",
        aim:"Our Aims And Objectives",
        aims:"To enable our students to gain more knowledge on programming.",
        objectives:"To reduce the level of unemployment in /Nigeria by empowering individuals",
        environment: "Having a conducive learning environment where learning would be made easy",
        
      }

    }

}
</script>

<style>
span{
  color:black
}
.men{
 
}
</style>