<?php



include('funciones.php');
cabecera('Contacto');

    // Get a key from https://www.google.com/recaptcha/admin/create
    require_once('recaptcha/recaptchalib.php');
    $publickey = "6LfHG9USAAAAAAfiAP9U2t-RXluk4rwVg_ZiDBGF";
    $privatekey = "6LfHG9USAAAAAKD5BsLc9Tuadds0BViIgKvf2Kc9";
    # the response from reCAPTCHA
    $resp = null;
    # the error code from reCAPTCHA, if any
    $error = null;
    # was there a reCAPTCHA response?
    if ($_POST["recaptcha_response_field"]) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
                echo "You got it!";
        } else {
                # set the error code so that we can display it
                $error = $resp->error;
        }
    }
    


print "
  <div id=\"contacto\">
        <h2 id='h2contacto'>Contacta con nosotros</h2>
        <div id=\"formulario\">
         <form id=\"form1\" method=\"post\" action=\"\">
          <p>Nombre: <input name=\"nombre\" type=\"text\" class=\"textbox\" id=\"nombre\" /></p>
          <p>Correo electrónico: <input name=\"mail\" type=\"text\" class=\"textbox\" id=\"mail\" /></p>
          <p>Teléfono: <input name=\"tlf\" type=\"text\" class=\"textbox\" id=\"tlf\" /></p>
          <p>Mensaje: <textarea name=\"mensaje\" cols=\"20\" rows=\"6\" class=\"textbox\" id=\"mensaje\"></textarea></p>";
          
          echo recaptcha_get_html($publickey, $error); /* esta línea introduce el recatpcha*/
print "
         <p><input id=\"enviar\" type=\"submit\" value=\"Enviar\"  onclick=\"MM_validateForm('nombre','','R','mail','','RisEmail','tlf','','R','mensaje','','R');return document.MM_returnValue\" /></p>
         </form>
      </div>
	  <div id=\"direccion\" class=\"direccion\">
		    <iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" 
            src=\"https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Calle+de+Nicolau+Primitiu+G%C3%B3mez+Serrano,
            +26+esserestudi&amp;aq=&amp;sll=39.452714,-0.401173&amp;sspn=0.011813,0.029955&amp;t=h&amp;g=Calle+de+Nicolau+Primitiu+G%C3%B3mez+Serrano,
            +26&amp;ie=UTF8&amp;hq=esserestudi&amp;hnear=Calle+de+Nicolau+Primitiu+G%C3%B3mez+Serrano,+26,+46014+Valencia,+Comunidad+Valenciana&amp;
            ll=39.454009,-0.40193&amp;spn=0.011813,0.029955&amp;z=14&amp;iwloc=A&amp;cid=8504360191965195921&amp;output=embed\">
            </iframe>
             
              <br /><small><a href=\"https://maps.google.es/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;
            q=Calle+de+Nicolau+Primitiu+G%C3%B3mez+Serrano,+26+esserestudi&amp;aq=&amp;sll=39.452714,-0.401173&amp;sspn=0.011813,0.029955&amp;t=h&amp
            ;g=Calle+de+Nicolau+Primitiu+G%C3%B3mez+Serrano,+26&amp;ie=UTF8&amp;hq=esserestudi&amp;hnear=Calle+de+Nicolau+Primitiu+G%C3%B3mez+Serrano,
            +26,+46014+Valencia,+Comunidad+Valenciana&amp;ll=39.454009,-0.40193&amp;spn=0.011813,0.029955&amp;z=14&amp;iwloc=A&amp;cid=8504360191965195921\" 
            style=\"color:#0000FF;text-align:right\">Ver mapa más grande</a></small>
        </div>
        


    </div>
  
 ";

pie();
?>
