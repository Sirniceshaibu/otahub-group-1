<template>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background-color:black">
    <div>
      <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <img src="@/assets/logos.jpg" alt="" class="image img-fluid">

          <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="#homecomponent">HOME</a>
                </li>
                <li class="nav-item"></li>
                <li class="nav-item">
                  <a class="nav-link" href="#AboutusComponent">ABOUT US</a>
                </li>
              </ul>
              <p><a href="#ContactusComponent" class="btn btn-danger mt-3">CONTACT</a></p>
            </div>
          </div>
      </nav>
    </div>
  </body>
  </html>
 

 
</template>

<script>
export default {
  name: "NavbarComponent"
}
</script>

<style>
.image{
  width: 9%;
}
nav{
text-align: right;
justify-content: center;

}

</style>