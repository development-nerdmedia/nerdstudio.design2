<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MFZL7NN');</script>
  <!-- End Google Tag Manager -->
<!-- Hotjar Tracking Code for https://nerdstudio.design/ -->
<script>
  (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:3604124,hjsv:6};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
  })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="https://nerdstudio.design/static/media/favicon-1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="format-detection" content="telephone=no">
    <meta property="og:image" content="https://nerdstudio.design/static/media/metaimagenerdstudio.jpg">
    <meta property="og:image:secure_url" content="https://nerdstudio.design/static/media/metaimagenerdstudio.jpg">
    <link rel="stylesheet" href="../static/css/main.68d1468d.css" />
    <title>Nerd Studio Design: Digital design agency</title>
  </head>
  <body
    style="
      background-color: black;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    "
  >
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFZL7NN"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php
$myemails = 'hola@nerdmedia.pe, alonso@nerdmedia.pe, jeanpierre@nerdmedia.pe, camila@nerdmedia.pe, cecilia@nerdmedia.pe, daniela.alvites@nerdmedia.pe, francesca@nerdstudio.design';
$name = $_POST['fullname'];
$email = $_POST['email'];
$tel = $_POST['celular'];
$message = $_POST['message'];

$cuerpo = '
<html>  
<body>  
<h1>Hola Nerd Studio Design</h1> 
<p>Tienes un nuevo mensaje:</p>
<p> Nombre : <b>'.$name .'</b></p>
<p> Email : <b>'.$email .'</b></p>
<p> Celular : <b>'.$tel .'</b></p>
<p> Mensaje : <b>'.$message .'</b></p>
</body> 
</html> 
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: $name <$email>\r\n";

$to = $myemails;
$email_subject = "Contacto NERD STUDIO DESIGN";

mail($to, $email_subject, $cuerpo, $headers);
?>

  

    <section class="thankspage">
        <div class="container">
            <div class="top">
                <a href="https://nerdstudio.design/">X</a>
            </div>
            <div class="content">
                <div class="contentImg">
                  <img src="../static/media/personajeNosotros.8f5b6a6833a92996723d9c36542612fd.svg" alt="img2" class='imageDistorcion img1' />
                  <img src="../static/media/personajeNosotros.8f5b6a6833a92996723d9c36542612fd.svg" alt="img2" class='imageDistorcion img2' />
                  <img src="../static/media/personajeNosotros.8f5b6a6833a92996723d9c36542612fd.svg" alt="img2" class='imageDistorcion img3' />
                  <img src="../static/media/personajeNosotros.8f5b6a6833a92996723d9c36542612fd.svg" alt="img2" class='imageDistorcion img4' />
                  <img src="../static/media/personajeNosotros.8f5b6a6833a92996723d9c36542612fd.svg" alt="img2" class='imageDistorcion img5' />
                  <img src="../static/media/personajeNosotros.8f5b6a6833a92996723d9c36542612fd.svg" alt="img2" class='imageDistorcion img6' />
                  <img src="../static/media/personajeNosotros.8f5b6a6833a92996723d9c36542612fd.svg" alt="img2" class='imageDistorcion img7' />
                  <img src="../static/media/personajeNosotros.8f5b6a6833a92996723d9c36542612fd.svg" alt="img2" class='imageDistorcion img8' />
                  <img src="../static/media/personajeNosotros.8f5b6a6833a92996723d9c36542612fd.svg" alt="img2" class='imageDistorcion img9' />
                  <img src="../static/media/personajeNosotros.8f5b6a6833a92996723d9c36542612fd.svg" alt="img2" class='imageDistorcion img10' />
                </div>
                <h1>¡Thank you!</h1>
                <p>We will contact you shortly.</p>
            </div>
        </div>
      </section>
  </body>
  <script>
      var contentImg = document.querySelector(".contentImg");

      function distorcion() {
        console.log("hello entrooo");
        var listaImagenes = document.querySelectorAll(".contentImg .imageDistorcion");
        var tiempoTransicion = 70;

        for (let i = 0; i < listaImagenes.length; i++) {
            setTimeout(() => {
                listaImagenes[i].style.opacity = 1;
            }, i * tiempoTransicion);
            if (i !== listaImagenes.length - 1) {
                setTimeout(() => {
                    listaImagenes[i + 1].style.opacity = 1;
                    setTimeout(() => {
                        listaImagenes[i].style.opacity = 0;
                    }, (i) * 20);
                }, (i + 0.2) * tiempoTransicion);
            } else {
                listaImagenes[i].style.opacity = 0;
            }
        }
      }

      contentImg.addEventListener("mouseenter", function() {
        distorcion(); 
      });
  </script>
</html>
