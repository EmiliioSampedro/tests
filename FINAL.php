
	<div class="filafichas">
	
			
			<br>
			<div id="revisa" onclick="pasarletras()">
			
				Revisa las respuestas antes de acabar
		<!--	<form action="../revision" method=post name=enviar>
					  <input type=hidden name=var_php></form>
		 
					<script language='javascript'>
					  document.enviar.var_php.value=arrayLetras;
					  document.enviar.submit();
				</script> -->
			</div>
	<section id="guiapreg" class="col-10 border border-dark align-top">
		<?php
			echo "Preguntas:<br> ";		
			for ($pr=1;$pr<11;$pr++)
			{
				echo "<div id=cpr".$pr." class=respuestasnum onclick='mirarClikcada(".$pr."), cambiarResp(), mandarRevision(), muestraGuia(), mostrarSiguientePreg".$pr."(), mostrarCabecera()'>";						 
				echo $pr;
				echo "</div>";
			}
			
		?>							
					
	</section>
	<div id="finalizar" onclick="pasaResultados(), ocultaGuia(), ocultarPreg(),empezarDetener(this), cambiarCabecera()">
				Finaliza 
			</div>
			<?php
		
		?>
		 
		 
		  <script type="text/javascript">
		  
				
		
		
			</script>
		<!--
			<div id="grabar" >
				Graba los resultados
			</div>
		-->
	</div>
