

<section class="cajaexterior content-area align-top">
	
	<div id="resultadostest">Resultados del test</div>
	<?php
	/* declararmos variables con los requires para insertar en arrels */
	
	$cero="INICIO.php";

	$final="FINAL.php";
	$arrels=array($uno, $dos, $tres, $cuatro, $uno, $dos, $tres, $cuatro, $uno, $tres);
	$arraynumlet=array('');
	shuffle ($arrels); /* Mezclamos el array de los requires */
	/* Renombramos array con la mezcla, y añadimos cero y final */
	$arraysalprueba=array($cero, $arrels[0], $arrels[1], $arrels[2], $arrels[3], $arrels[4], $arrels[5], 
	$arrels[6], $arrels[7],$arrels[8], $arrels[9], $final);
	for ($h = 0; $h < $anp3; ++$h) /* Bucle con vueltas ihgual a numero de pruebas/preguntas */
	{ 		
		
		if ($h==0 or $h==11) {}
		else {require ('CABECERA.php');}
		echo "<div ID='cajapregresp".$h."'>";
			require ($arraysalprueba[$h]);
			
			if ($h==0 or $h==11) {}
			else {
				require ('LETRAS.php');
				
				array_push ($arraynumlet, $arraysalprueba[$h]);
				}

			
			?>
				
				
			<?php
		echo "</div>";
		$numeracion++;
		
	}

	?>

</section>
<section id="guiapregrev" class="border border-dark align-top">
		<?php
			echo "<div id=cabrev> REVISIÓN:</div> ";
			echo "Preguntas:<br> ";
			for ($pr=1;$pr<11;$pr++)
			{
				echo "<div id=pr".$pr." class=respuestasnum onclick='mostrarSiguientePreg".$pr."(), mostrarCabecera()'>";						 
				echo $pr;
				echo "</div>";
			}
			
		?>							
			<div id="finalizarrev" onclick="ocultaGuia(), ocultarPreg(), empezarDetener(this), cambiarCabecera()">
				Finaliza 
			</div>
</section>
<section id="guiapregcor" class="border border-dark align-top">
		<?php
			echo "<div id=cabcor>CORRECIÓN:</div> ";	
			echo "Preguntas:<br> ";				
			for ($prc=1;$prc<11;$prc++)
			{
				/* cambiarCorr() - Pone Letras resultados de correcion, anula normal y revision */
				echo "<div id=prc".$prc." onclick='recambioCorr(".$prc."), mostrarcaracorre(".$arrayCorrectasf[$prc]."), 
				misCorreciones(), reubicaCabecera(".$prc."), 
				cambiarRespCorr(), mostrarSiguientePreg".$prc."()' class=respuestasnum10 >";
				
				echo $prc;
				echo "</div>";
			}			
		?>							
</section>
		<!--
			<div id="grabar" >
				Graba los resultados
			</div>
		-->	
<div id="elegida">00</div>
<div id="numberpru">00</div>	
<div id="revrev">0</div>