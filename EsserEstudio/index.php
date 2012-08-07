<?php
include('funciones.php');
cabecera('Inicio');

print "
  <!-- banner-->
  <div class=\"slider\">
    <ul >
        <li>
          <image src=\"images/img1.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 1\" />
        </li>
        
        <li>
            <image src=\"images/img2.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 2\" />
        </li>
        
        <li>
            <image src=\"images/img3.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 3\" />
        </li>
        
        <li>
            <image src=\"images/img4.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 4\" />
        </li>  
        
        <li>
            <image src=\"images/img1.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 1\" />
        </li>
        
        <li>
            <image src=\"images/img2.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 2\" />
        </li>
        
        <li>
            <image src=\"images/img3.jpg\" width=\"800\" height=\"400\" alt=\"Imagen Esser 3\" />
        </li> 
    </ul>
 </div>
 
  <!--menu inferior-->
  <center>
  <div id=\"container2\">
  
    <ul>
        <li>
          
          <a href=\"listar.php?tipo=rock\"title='rock'><div id='rock' class='cajas'></div></a>
          
        </li>
         <li>
          
           <a href=\"listar.php?tipo=pop\" title='pop'><div id='pop' class='cajas'></div></a>
           
        </li>                      
    
        <li>
           
          <a href=\"listar.php?tipo=electro\" title='electronica'><div id='electro' class='cajas'></div></a>
          
        </li> 
        <li>
          
          <a href=\"listar.php?tipo=hiphop\" title='hip hop'><div id='hiphop' class='cajas'></div></a>
          
        </li> 
        </ul>
        <ul>
        <li>
        
          <a href=\"listar.php?tipo=world\" title='world music'><div id='world' class='cajas'></div></a>
         
        </li>
    
        <li>
        
          <a href=\"listar.php?tipo=solista\" title='solistas'><div id='solista' class='cajas'></div></a>
          
        </li> 
        <li>
         
          <a href=\"listar.php?tipo=latina\" title='música latina'><div id='latina' class='cajas'></div></a>
         
        </li> 
        <li>
          
          <a href=\"listar.php?tipo=spot\" title='Bandas Sonoras, Audiolibros, Spot'><div id='spot' class='cajas'></div></a>
          
        </li>
    </ul>
    
 </div>
 
  <!--social-->
  <div class='social'>
  
    <div id='social'>
            <div id='texto-social'>
                <img src='images/face.jpg'></img>
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
    <div id='social'>
        <div id='texto-social'>INSTAGRAM</div>
    </div>
    <div id='social'>
            <div id='texto-social'>TWITTER</div>
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



";

pie();
?>
