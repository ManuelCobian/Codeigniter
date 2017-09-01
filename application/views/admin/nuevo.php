	<?php ?>
<head> </head>
<?= load_bootstrap(); ?>
<div class="container">
      <div class="row">
        
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
     		
			<?php
				//send info to method test of controller welcome
				echo form_open_multipart("article/insert");//te deja subir archivos 
				echo form_input_text('nombre','Ingresa nombre del post');
				echo form_input_text('descripcion','Ingresa una brebe Descripcion del post');
				echo form_input_textarea('contenido','Ingresa el contenido del post');
				echo form_input_file('Selecciona una imagen');
				echo form_submit("Enviar formulario");
				echo form_close();
				
			?>

    	</div>

     </div>

   </div>