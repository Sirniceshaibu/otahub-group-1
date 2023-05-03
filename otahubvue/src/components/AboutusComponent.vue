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
                <img src="../assets/Nigeria.jpg" alt="" style="border-radius:10%" class="img-fluid">
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
      <h2>{{question}}</h2>
      <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
     <strong> {{free}} </strong>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong>{{of}}</strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        <strong>{{duration}}</strong>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <strong>{{long}}</strong> 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      <strong> {{enrol}}</strong>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <strong>{{email}}</strong> 
      </div>
    </div>
  </div>
</div>


      
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
        question:"Questions normally asked?",
        free:"IS IT FREE?",
        of:"Of course it is free! we believe knowledge is power",
        duration:"COURSE DURATION?",
        long:"An introduction to coding courses being carried out  for a week where our students learn basic web development skills. After that ,we offer qualified students the opportuntity to do a 3 month intensive coding bootcamp which will prepare them on the path to become capable programmers.Classes run from 9am to 4pm",
        enrol:" HOW CAN I ENROL?",
        email:"Email us at admissions@thebackhomeproject.org .Or you can fill the contact form below",


        
      }

    }

}
</script>

<style>
span{
  color:black
}
.accordion{
  font-size: 2rem;
 
}
</style>