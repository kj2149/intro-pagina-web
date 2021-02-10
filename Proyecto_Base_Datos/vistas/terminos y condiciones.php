<?php
    include("../conexion/conexion.php");
	/*include("../controlador/ususarios.class.php");	*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilos3.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
    <link rel="stylesheet" href="../css/css.pie.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyswords" content="html5, css3">
    <link rel="stylesheet" type="text/css" href="../css/estilos3.css" >
    <link rel="stylesheet" type="text/css" href="../css/estilos.encabezado.terminos.css" >
		<!--IMPLEMENTANDO BOOTSTRAP - Ajax -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>unlimited tecnology</title>
</head>
<body id="parallax" class="text-white">

  <header class="">
    <img class="logo" src="../imagenes/2.jpg" alt="logoempresa">

    <h1 class="titulo1">UNLIMITED TECNHOLOGY</h1>

    <div class="buscar1">
      <input type="text" placeholder="Buscar" required>
      <div class="btn">
        <i class="fas fa-search icon"></i>
      </div>
    </div>

    <a class="iniciar1" href="../vista/login.html">iniciar sesion</a>
    <a class="registrar1" href="#">registrarse</a>



    <input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
    <ul id="css3menu1" class="topmenu">
      <li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
      <li class="topmenu"><a href="inicio.html" target="marco" style="height:28px;line-height:22px;">inicio</a>
      </li>
      <li class="toproot"><a href="#" target="marco"
          style="height:28px;line-height:22px;"><span>productos</span></a>
        <ul>
          <li><a href="#" target="marco">celulares</a></li>
          <li><a href="#" target="marco">computadores</a></li>
          <li><a href="#" target="marco">herramientas</a></li>
          <li><a href="#" target="marco">componentes</a></li>
          <li><a href="#" target="marco">repuestos</a></li>
          <li><a href="#" target="marco">cableado</a></li>
        </ul>
      </li>
      <li class="toproot"><a href="#" target="marco"
          style="height:28px;line-height:22px;"><span>servicios</span></a>
        <ul>
          <li><a href="#" target="marco">instalaciones</a></li>
          <li><a href="#" target="marco">mantenimiento</a></li>
          <li><a href="#" target="marco">proyectos</a></li>
        </ul>
      </li>
      <li class="toproot"><a href="#" target="marco" style="height:28px;line-height:22px;"><span>Quienes
            somos?</span></a>
        <ul>
          <li><a href="#" target="marco">vision y mision</a></li>
          <li><a href="#" target="marco">valores calidad</a></li>
          <li><a href="#" target="marco">Que hacemos?</a></li>
        </ul>
      </li>
      <li class="toplast"><a href="#" target="marco" style="height:26px;line-height:22px;">contactenos</a></li>
    </ul>
      

  </header>

    <aside class="aside">

      <div class="filtro">

        <h3 class="text-white">Celulares</h3>
        <p>36.744 resultados</p>

        <h4 class="text-white">Tiendas oficiales</h4>
        <a href="#"><span>Solo tiendas oficiales<
          <li><a href="#">P Series <span>(950)</span></a></li>
          <li><a href="#">Y Series <span>(875)</span></a></li>
          <li><a href="#">Galaxy S <span>(800)</span></a></li>
          <li><a href="#">Galaxy J <span>(450)</span></a></li>
          <li><a href="#">Moto <span>(1.500)</span></a></li>

          <li><a href="#" data-toggle="modal" data-target="#myModal">Ver todos</a></li>
        </ul>

        <h4 class="text-white">Modelos</h4>

        <ul>
          <li><a href="#">Iphone 7 <span>(500)</span></a></li>
          <li><a href="#">Iphone 7 Plus<span>(546)</span></a></li>
          <li><a href="#">Iphone 8 Plus <span>(300)</span></a></li>
          <li><a href="#">Iphone 11 <span>(400)</span></a></li>
          <li><a href="#">Iphone X <span>(950)</span></a></li>

          <li><a href="#">Ver todos</a></li>
        </ul>

        <h4 class="text-white">Capacidades</h4>

        <ul>

          <li><a href="#">16GB RAM / 256GB ROM <span>(800)</span></a></li>
          <li><a href="#">8GB RAM / 128GB ROM <span>(750)</span></a></li>
          <li><a href="#">4GB RAM / 64GB ROM <span>(340)</span></a></li>
          <li><a href="#">2GB RAM / 32GB ROM<span>(750)</span></a></li>
          <li><a href="#">1GB RAM / 16GB ROM <span>(100)</span></a></li>

          <li><a href="#">Ver todos</a></li>
        </ul>

        <h4 class="text-white">Descuentos</h4>

        <ul>

          <li><a href="#">Desde 5% OFF  <span>(137)</span></a></li>
          <li><a href="#">Desde 10% OFF <span>(50)</span></a></li>
          <li><a href="#">Desde 15% OFF <span>(140)</span></a></li>
          <li><a href="#">Desde 20% OFF <span>(250)</span></a></li>
          <li><a href="#">Desde 25% OFF <span>(160)</span></a></li>
          <li><a href="#">Desde 30% OFF <span>(161)</span></a></li>

          <li><a href="#">Ver todos</a></li>
        </ul>

                <h4 class="text-white">Otras caracteristicas</h4>

        <ul>

          <li><a href="#">Es Dual SIM <span>(139)</span></a></li>
          <li><a href="#">Resistente al agua <span>(80)</span></a></li>
          <li><a href="#">Reconocimiento facial <span>(540)</span></a></li>
          <li><a href="#">Lector de huella digital <span>(50)</span></a></li>

          <li><a href="#">Ver todos</a></li>
        </ul>       


        <h4 class="text-white">Red</h4>

        <ul>
          <li><a href="#">2G <span>(10.400)</span></a></li>
          <li><a href="#">3G <span>(5.200)</span></a></li>
          <li><a href="#">4G <span>(1.200)</span></a></li>
          <li><a href="#">5G <span>(1.800)</span></a></li>
          <li><a href="#">4G/LTE <span>(950)</span></a></li>

          <li><a href="#" data-toggle="modal" data-target="#myModal">Ver todos</a></li>
        </ul>

      </div> 

    </aside>  
 <div class="especificartermino">
     <center><h1>Política de Términos y Condiciones</h1></center> <br> <br>
     <p>
        Esta página web es propiedad y está operado por 
        [nombre del operador de tu página web].
        Estos Términos establecen los términos y condiciones bajo los cuales tu puedes 
        usar nuestra página web y servicios ofrecidos por nosotros. 
        Esta página web ofrece a los visitantes [descripción de lo que se ofrece en tu sitio web]. 
        Al acceder o usar la página web de nuestro servicio, usted aprueba que haya leído, 
        entendido y aceptado estar sujeto a estos Términos:
     </p>
 </div>
 <div class="especificartermino">
    <center><h2>Cuenta</h2></center> <br> <br>
    <p>
        Para usar nuestro página web y / o recibir nuestros servicios, debes tener al menos 
        [agregar número] años de edad, o la mayoría de edad legal en tu jurisdicción, y poseer 
        la autoridad legal, el derecho y la libertad para participar en estos Términos como un 
        acuerdo vinculante. No tienes permitido utilizar esta página web y / o recibir servicios 
        i hacerlo está prohibido en tu país o en virtud de cualquier ley o regulación aplicable 
        a tu caso.
    </p>
</div><div class="especificartermino">
    <center><h2>Compra de productos o servicios</h2></center> <br> <br>
    <p>
        Al comprar un artículo, aceptas que: (i) eres responsable de leer el listado completo 
        del artículo antes de comprometerte a comprarlo: 
        
        (ii) celebras un contrato legalmente 
        inculante para comprar un artículo cuando te comprometed a comprar un artículo y 
        completar el proceso de check-out.
        Los precios que cobramos por usar nuestros servicios / para nuestros 
        productos se enumeran en  la página web. Nos reservamos el derecho de cambiar nuestros 
        precios para los productos que se muestran en cualquier momento y de corregir los 
        errores de precios que pueden ocurrir inadvertidamente. Información adicional sobre 
        precios e impuestos sobre las ventas está disponible en la página de pagos. 
       
       "La tarifa por los servicios y cualquier otro cargo que pueda incurrir en relación con tu uso del servicio, como los impuestos y las posibles tarifas de transacción, se cobrarán mensualmente a tu método de pago.
    </p>
</div><div class="especificartermino">
    <center><h2>Devolucion de compra</h2></center> <br> <br>
    <p>
        Para cualquier producto no dañado, simplemente devuélvelo  con los accesorios y el 
        paquete incluidos junto con el recibo original (o recibo de regalo) dentro de 
        los 14 días posteriores a la fecha que recibiste el producto, y lo cambiaremos o te 
        ofreceremos un reembolso basado en el método de pago original . Además, ten en cuenta 
        lo siguiente: (i) Los productos solo se pueden devolver en el país en el que se compraron 
        originalmente; y (ii) 
        los siguientes productos no son elegibles para la devolución: [lista de artículos].
    </p>
</div>
<div class="especificartermino">
    <center><h2>Garantías y responsabilidad por servicios y productos</h2></center> <br> <br>
    <p>
        Cuando recibimos un reclamo de garantía válido de un producto que vendemos, repararemos
        el defecto relevante o reemplazaremos el producto. Si no podemos reparar o reemplazar 
        el producto dentro de un tiempo razonable, el cliente tendrá derecho a un reembolso 
        total cuando nos devuelva el producto. Pagaremos el envío de los productos reparados o 
        reemplazados al cliente y el cliente será responsable de devolvernos el producto.
    </p>
    </div>
    <div class="especificartermino">
    <center><h2>Limitación de responsabilidad</h2></center> <br> <br>
    <p>
        En la máxima medida permitida por la ley aplicable, en ningún caso el [propietario 
        de la página web] será responsable por daños indirectos, punitivos, incidentales, 
        especiales, consecuentes o ejemplares, incluidos, entre otros, daños por pérdida de
        beneficios, buena voluntad, uso, datos. u otras pérdidas intangibles, que surjan de o 
        stén relacionadas con el uso o la imposibilidad de utilizar el servicio. 

        En la máxima medida permitida por la ley aplicable, [el propietario la página web] no 
        asume responsabilidad alguna por (i) errores, errores o inexactitudes de contenido; (ii) 
        lesiones personales o daños a la propiedad, de cualquier naturaleza que sean, como 
        resultado de tu acceso o uso de nuestro servicio; y (iii) cualquier acceso no autorizado
        o uso de nuestros servidores seguros y / o toda la información personal almacenada en 
        los mismos.
    </p>
   </div>

<!-- FOOTER DE LA PAGINA -->

    <footer>
	   <div class="redes">
	   	<br></br>
		   <p>Buscanos en</p><br>
	     <lu>
	          <div><a><img id="face" src="../imagenes/facebook.png">UNLIMITED TECNOLOGY</a></div><br>
	          <div><a><img id="twit" src="../imagenes/twitter.png"> @UNLIMITED_TECNOLOGY</a></div><br>
			  <div><a><img id="gml" src="../imagenes/gmail.png">unlimited.tec2021@gmail.com</a></div>
		</div>

		<div class="contactenos">
		  <div><img id="phon" src="../imagenes/Phone.png">Contactenos</div><br>
			<ul>
			<div id="contac">
             <li>Ingeniero de Sistemas: editoz@hotmail.com - editozz@gmail.com</li><br>
			 <li>Celular: 310 619 91 97</li><br>
			 <li>Servicios a domicilio de mantenimiento y soporte:<br></br>316 514 0646 – 301 366 7023</li><br>
			</div>
			 </lu>
		<img id="pin" src="../imagenes/pin.png">Calle 167 C No. 54C-36 Piso 3 - Bogotá D. C. - Colombia<br>
		</div>
           <div id="copyright"> 
			<p>| © 2021 todos los derechos reservados |</p>
		   </div>

	     <div id="terminos">
		  <p><a href="../vista/terminos y condiciones.html">Terminos y Condiciones</a></p><br>
		  
	    </div>
   </footer>


</body>
</html>