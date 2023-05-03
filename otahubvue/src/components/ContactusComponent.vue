<template>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body id="ContactusComponent">
        <form action="mailto:admissions@thebackhomeproject.org" class="bg-light"  method="post" enctype="multipart/form-data">
            <div class="contact" style="  background-color: rgb(2, 88, 88);text-align: center;">
                <div class="form-content">
                    <header class="text" style="color:white">Contact Us</header>
                       <div class="row justify-content-md-center">
                        <div class="col-md-6 ">
                            <input type="text" placeholder="Name"  class="form-control">
                        </div>
                    </div><br>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 ">
                            <input type="email" name="email" id="" placeholder="Email"  class="form-control">
                        </div>
                    </div><br>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 ">
                            <textarea name="message" placeholder="message" class="form-control" cols="100" rows="8" style="width=50px"></textarea>
                        </div>
                    </div>
                    <div class="field button-field mt-3">
                        <button class="btn btn-primary text-white" type="submit">Send</button>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 " style="color:white">
                            <p>{{address}}</p>
                            <p>{{addresses}}</p>
                            <p>{{state}}</p>
                        </div>
                    </div>
                </div>   
           </div>
       </form>  

       <div class="footer">
            <footer>
                <div>
                        <p>{{footer}}</p>
                </div>
            </footer>
       </div>
           

        
  </body>
  </html>
</template>

<script>
export default {
    name:"ContactusComponent",
    data(){
        return{
            address:"Ambassador Ajonye foundation,",
            addresses:"Opposite Abglo Top",
            state:"Otukpo,Benue State",
            footer:"(c)2023 copyright all right reserved"
        }
    }

}
</script>

<style>
.footer{
    background-color: black;
    color: white;
    text-align: center;
    margin-bottom:15pc;
    width: 100%;
    align-items: center;
    height: 4vh;

}
</style>