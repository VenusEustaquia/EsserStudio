<?php
include('funciones.php');
cabecera('Inicio');

print "
  <!-- banner-->
  <div class=\"slider\">
    <ul >
        <li>
          <img src=\"images/img1.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 1\" />
        </li>
        
        <li>
            <img src=\"images/img2.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 2\" />
        </li>
        
        <li>
            <img src=\"images/img3.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 3\" />
        </li>
        
        <li>
            <img src=\"images/img4.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 4\" />
        </li>  
        
        <li>
            <img src=\"images/img1.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 1\" />
        </li>
        
        <li>
            <img src=\"images/img2.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 2\" />
        </li>
        
        <li>
            <img src=\"images/img3.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 3\" />
        </li> 
    </ul>
 </div>
 
  <!--menu inferior-->
  <div id=\"container2\">
  
    <ul>
        <li>
          
          <a href=\"listar.php?tipo=rock\" title='rock' id='rock' class='cajas'>Rock</a>
          
        </li>
         <li>
          
           <a href=\"listar.php?tipo=pop\" title='pop' id='pop' class='cajas'>Pop</a>
           
        </li>                      
    
        <li>
           
          <a href=\"listar.php?tipo=electro\" title='electronica' id='electro' class='cajas'>Electrónico</a>
          
        </li> 
        <li>
          
          <a href=\"listar.php?tipo=hiphop\" title='hip hop' id='hiphop' class='cajas'>Música urbana</a>
          
        </li> 
    </ul>
    <ul>
        <li>
        
          <a href=\"listar.php?tipo=world\" title='world music' id='world' class='cajas'>World Music</a>
         
        </li>
    
        <li>
        
          <a href=\"listar.php?tipo=solista\" title='solistas' id='solista' class='cajas'>Solistas</a>
          
        </li> 
        <li>
         
          <a href=\"listar.php?tipo=latina\" title='m√∫sica latina' id='latina' class='cajas'>Música Latina</a>
         
        </li> 
        <li>
          
          <a href=\"listar.php?tipo=spot\" title='Bandas Sonoras, Audiolibros, Spot' id='spot' class='cajas'>Bandas Sonoras, Audiolibros, Spot</a>
          
        </li>
    </ul>
    
 </div>

<!--social-->
  <div class='socialholder'>
  
    <div class='social_column'>
        <div id='socialfacebook' class='social'>
                <div id='texto-social1' class='texto-social'>
                   Facebook
                </div>
                <div id='fb-root'></div>
                <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = '//connect.facebook.net/es_ES/all.js#xfbml=1 ';
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
                </script>
                <div class='fb-like-box' data-href='http://www.facebook.com/esserstudio' data-width='300' data-show-faces='true' data-stream='true' data-header='false'></div>
        </div>
     </div>
     <div class='social_column'>
        <div id='socialInsta' class='social'>
            <div id='texto-social2' class='texto-social'>
                Instagram
            </div>
           Duis mattis gravida ultrices. Fusce id pulvinar purus. Donec venenatis odio nec mauris tempus lobortis. Nulla pellentesque, urna sit amet volutpat molestie, diam nulla dictum nibh, ac cursus dui diam vel quam. Morbi quis sollicitudin ipsum. Proin non nisi vitae dolor scelerisque accumsan. Fusce luctus viverra est vel cursus. Nulla at nulla ut ipsum ultrices tincidunt ut vel turpis. Duis volutpat odio in magna sollicitudin sodales viverra sapien ultricies. Etiam non nibh eget mi vestibulum egesta
        </div>
     </div>
     <div class='social_column'>
        <div id='socialTwitter' class='social'>
                <div id='texto-social3' class='texto-social'>
                    Twitter
                </div>
                <script>
            new TWTR.Widget({
            version: 2,
            type: 'profile',
            rpp: 10,
            interval: 30000,
            width: 300,
            height: 470,
            theme: {
                shell: {
                background: '#d4ccb1',
                color: '#000000'
                },
                tweets: {
                background: '#d4ccb1',
                color: '#000000',
                links: '#0ac200'
                }
            },
            features: {
                scrollbar: false,
                loop: true,
                live: true,
                behavior: 'default'
            }
            }).render().setUser('EsserEstudi').start();
            </script>
        </div>
     </div>
  </div>


";
pie();
?>
