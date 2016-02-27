<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
         <link href="css/main.css" rel="stylesheet">
    <link href='icono.png' rel='shortcut icon' type='image/png'>
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        

    <title>Hack for Life</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
 <link href="css/main.css" rel="stylesheet">
    <!-- Custom Fonts -->
    
    
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="menu.html">
                    <span class="light">Hackfor</span> Life
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#avisos">Avisos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   

    <!-- jQuery -->
    

    <div id="map" style="margin-top: 100px " class="center-block" style="color:black"></div>
    

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    <script>
    function boton() {
    alert("Gracias por colaborar con su aviso, está ayudando a salvar vidas");
}
</script>

<div id="avisos" class=" blanco" style="margin-top: 10px ">
        
            <div class="content">
                <div id="form_wrapper" class="form_wrapper">
                    <form class="register active " style="color: black ">
                        <h3 style="text-align: center " class="relieve">Notifica una alerta</h3>
                        <div class="column">
                            <div>
                                <label>Tipo de Alerta:</label>
                                <input id="nombre" type="text" placeholder="Llegada/Naufragio"/>
                                <span class="error">This is an error</span>
                            </div>
                            <div>
                                <label>Latitud:</label>
                                <input type="text" id="myText"/>
                                <span class="error">This is an error</span>
                            </div>
                       </div>
                        <div class="column">
                            <div>
                                <label>Fecha:</label>
                                <input type="text" id="fecha" placeholder="dd/mm/aaaa"/>
                                <span class="error">This is an error</span>
                            </div>
                            <div>
                                <label>Longitud</label>
                                <input type="text" id="myText2"  />
                                <span class="error">This is an error</span>
                            </div>
                           
                        </div> 
                        <div class="bottom ">
                            <button  class="botoncentro" style="background-color:white;color:black; border-color:black;border-width:1px;align-items:center;align-content: center;")>Enviar información</button>
                            <div class="clear"></div>
                            

                            
                        </div>
                        </div>
                    </form>
             
            </div>
        </div>
       
        <script>
        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 5
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude,
              site: position.coords.Ubicacion};
              document.getElementById("myText").value = pos.lat;
            document.getElementById("myText2").value = pos.lng;
            infoWindow.setPosition(pos);
            infoWindow.setContent('Ubicacion actual');
    
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());

        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
       
      }

        function fn(){
            
        }
        window.addEventListener('load', fn, false );
     
</script>
<div class="col-xs-3" style="display: inline-block;padding-right: 0;">
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALKRTQu6s9h-gjVp1rlY_c3CunOMfdlsk&signed_in=true&callback=initMap">
    </script></div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                    //the form wrapper (includes all forms)
                var $form_wrapper   = $('#form_wrapper'),
                    //the current form is the one with class active
                    $currentForm    = $form_wrapper.children('form.active'),
                    //the change form links
                    $linkform       = $form_wrapper.find('.linkform');
                        
                //get width and height of each form and store them for later                        
                $form_wrapper.children('form').each(function(i){
                    var $theForm    = $(this);
                    //solve the inline display none problem when using fadeIn fadeOut
                    if(!$theForm.hasClass('active'))
                        $theForm.hide();
                    $theForm.data({
                        width   : $theForm.width(),
                        height  : $theForm.height()
                    });
                });
                
                //set width and height of wrapper (same of current form)
                setWrapperWidth();
                
                /*
                clicking a link (change form event) in the form
                makes the current form hide.
                The wrapper animates its width and height to the 
                width and height of the new current form.
                After the animation, the new form is shown
                */
                $linkform.bind('click',function(e){
                    var $link   = $(this);
                    var target  = $link.attr('rel');
                    $currentForm.fadeOut(400,function(){
                        //remove class active from current form
                        $currentForm.removeClass('active');
                        //new current form
                        $currentForm= $form_wrapper.children('form.'+target);
                        //animate the wrapper
                        $form_wrapper.stop()
                                     .animate({
                                        width   : $currentForm.data('width') + 'px',
                                        height  : $currentForm.data('height') + 'px'
                                     },500,function(){
                                        //new form gets class active
                                        $currentForm.addClass('active');
                                        //show the new form
                                        $currentForm.fadeIn(400);
                                     });
                    });
                    e.preventDefault();
                });
                
                function setWrapperWidth(){
                    $form_wrapper.css({
                        width   : $currentForm.data('width') + 'px',
                        height  : $currentForm.data('height') + 'px'
                    });
                }
                
                /*
                for the demo we disabled the submit buttons
                if you submit the form, you need to check the 
                which form was submited, and give the class active 
                to the form you want to show
                */
                $form_wrapper.find('input[type="submit"]')
                             .click(function(e){
                                e.preventDefault();
                             });    
            });
        </script>


<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

</body>

</html>
