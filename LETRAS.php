
<?php
$r=$numeracion;
$cell=$r-1;
	/* echo "<br> Numeracion : ".$numeracion;*/
	/* echo "<br> R : ".$r."<br>"; 	*/	
	/*	echo "<br>compara  0 --".$comparacorrecta[0];
	echo "<br>compara  1 --".$comparacorrecta[1];
	echo "<br>compara  2 --".$comparacorrecta[2];
	echo "<br>compara  3 --".$comparacorrecta[3];
	echo "<br>Correcta ".$correcta; */
	?>
<div id="colorin">q</div>
<div id="respues<?php echo $cell;?>" class="filafichas">
	
		<?php

for ($rsr=0; $rsr<4; ++$rsr)
{
	/* echo "<br> --- compara  0 --".$comparacorrecta[$rsr]; */
	?>
	
		<?php
	

	if ($correcta==$comparacorrecta[$rsr])
	{	
		
		
		if ($rsr==0) 
		{
			$letter="A";
			$lettercor="A";
			echo "<script> var letA = '$letter';</script>";				
			echo "<div id=rnA".$cell." onclick='cambiarColorA(".$cell."), mandarLetraA(letA), sumarSiCorrecta(".$cell."), mostrarSiguientePreg".$r."()' class=respuestasnum>";
			echo "A";
			echo "</div>";	
		}
		elseif ($rsr==1) 
		{
			$letter="B";
			$lettercor="B";
			echo "<script> var letB = '$letter';</script>";
			echo "<div id=rnB".$cell." onclick='cambiarColorB(".$cell."),mandarLetraB(letB), sumarSiCorrecta(".$cell."), mostrarSiguientePreg".$r."()' class=respuestasnum>";
			echo "B";
			echo "</div>";	
		}
		elseif ($rsr==2) 
		{
			$letter="C";
			$lettercor="C";
			echo "<script> var letC = '$letter';</script>";
			echo "<div id=rnC".$cell." onclick='cambiarColorC(".$cell."), mandarLetraC(letC), sumarSiCorrecta(".$cell."), mostrarSiguientePreg".$r."()' class=respuestasnum>";
			echo "C";
			echo "</div>";	
		}
		else 
		{
			$letter="D";
			$lettercor="D";
			echo "<script> var letD = '$letter';</script>";
			echo "<div id=rnD".$cell." onclick='cambiarColorD(".$cell."), mandarLetraD(letD), sumarSiCorrecta(".$cell."), mostrarSiguientePreg".$r."()' class=respuestasnum>";		
			echo "D";
			echo "</div>";	
		}
		/* echo "Letter ".$letter; */
		array_push ($arrayCorrectas, $lettercor);
		
	}
	else 
	{ 
		if ($rsr==0) 
		{
			$letter="A";
				
			echo "<script> var letA = '$letter';</script>";
			echo "<div id=rnA".$cell." onclick='cambiarColorA(".$cell."), mandarLetraA(letA), sumarSiFalsa(".$cell."), mostrarSiguientePreg".$r."()' class=respuestasnum>";
			echo "A";
			echo "</div>";	
		}
		elseif ($rsr==1) 
		{
			$letter="B";
			
			echo "<script> var letB = '$letter';</script>";
			echo "<div id=rnB".$cell." onclick='cambiarColorB(".$cell."), mandarLetraB(letB), sumarSiFalsa(".$cell."), mostrarSiguientePreg".$r."()' class=respuestasnum>";
			echo "B";
			echo "</div>";	
		}
		elseif ($rsr==2) 
		{
			$letter="C";
			
			echo "<script> var letC = '$letter';</script>";
			echo "<div id=rnC".$cell." onclick='cambiarColorC(".$cell."), mandarLetraC(letC), sumarSiFalsa(".$cell."), mostrarSiguientePreg".$r."()' class=respuestasnum>";
			echo "C";
			echo "</div>";	
		}
		else
		{
			$letter="D";
			echo "<script> var letD = '$letter';</script>";
			echo "<div id=rnD".$cell." onclick='cambiarColorD(".$cell."), mandarLetraD(letD), sumarSiFalsa(".$cell."), mostrarSiguientePreg".$r."()' class=respuestasnum>";
			echo "D";
			
			echo "</div>";	
		}		
	}
	
	?> 
	
	<?php
}

			echo "<div onclick='sumarNumeracion(), mostrarSiguientePreg".$r."()' class=respuestasnum>";
			echo "SIGUIENTE";
			echo "</div>";
				/* echo "CORRECTA : ".$correcta; */
				/*	 mostrarSiguientePreg".$r."(), */
?>
</div>

<!------------------------------------------------REVISION --------------------------->
<!------------------------------------------------REVISION --------------------------->
<!------------------------------------------------REVISION --------------------------->

<div id="respuesrev<?php echo $cell;?>" class="filafichas">
<!------------------------------------------------REVISION --------------------------->


<?php

echo "<div class=cjexp>";
echo "<div class=cjexpsel></div> - Seleccionada";
echo "</div>";

for ($rsr=0; $rsr<4; ++$rsr)
{
	
	
	if ($correcta==$comparacorrecta[$rsr])
	{	
		
		if ($rsr==0) 
		{
			$letter="A";
			$lettercor="A";
			echo "<script> var letrA = '$letter';</script>";
			echo "<script> var nmcorrec = '$letter';</script>";
			echo "<div id=rnAr".$cell." onclick='cambiarMarcada(letrA, ".$cell.", ".$arrayCorrectas[$cell]."), cambiarColores(letrA)' class=respuestasnum>";
			echo "A";
			echo "</div>";	
			
			
		}
		elseif ($rsr==1) 
		{
			$letter="B";
			$lettercor="B";
			echo "<script> var letrB = '$letter';</script>";
		
			echo "<div id=rnBr".$cell." onclick='cambiarMarcada(letrB, ".$cell.", ".$arrayCorrectas[$cell]."), mandarLetraB(letrB)' class=respuestasnum>";
			echo "B";
			echo "</div>";	
			
		}
		elseif ($rsr==2) 
		{
			$letter="C";
			$lettercor="C";
			echo "<script> var letrC = '$letter';</script>";
			echo "<div id=rnCr".$cell." onclick='cambiarMarcada(letrC, ".$cell.", ".$arrayCorrectas[$cell]."), mandarLetraC(letrC)' class=respuestasnum>";
			echo "C";
			echo "</div>";	
			
		}
		else 
		{
			$letter="D";
			$lettercor="D";
			echo "<script> var letrD = '$letter';</script>";
			echo "<div id=rnDr".$cell." onclick='cambiarMarcada(letrD, ".$cell.", ".$arrayCorrectas[$cell]."), mandarLetraD(letrD)' class=respuestasnum>";		
			echo "D";
			echo "</div>";	
			
		}
		/* echo "Letter ".$letter; */
		
	}
	else 
	{ 
		if ($rsr==0) 
		{
			$letter="A";
			
			echo "<script> var letrA = '$letter';</script>";
			echo "<script> var nmcorrec = '$letter';</script>";
			echo "<div id=rnAr".$cell." onclick='cambiarMarcada(letrA, ".$cell."), mandarLetraA(letrA)' class=respuestasnum>";
			echo "A";
			echo "</div>";	
		}
		elseif ($rsr==1) 
		{
			$letter="B";
			
			echo "<script> var letB = '$letter';</script>";
			echo "<div id=rnBr".$cell." onclick='cambiarMarcada(letrA, ".$cell.", ".$arrayCorrectas[$cell]."), mandarLetraB(letrB)' class=respuestasnum>";
			echo "B";
			echo "</div>";	
		}
		elseif ($rsr==2) 
		{
			$letter="C";
			
			echo "<script> var letrC = '$letter';</script>";
			echo "<div id=rnCr".$cell." onclick='cambiarMarcada(letrA, ".$cell.", ".$arrayCorrectas[$cell]."), mandarLetraC(letrC)' class=respuestasnum>";
			echo "C";
			echo "</div>";	
		}
		else
		{
			$letter="D";
			echo "<script> var letrD = '$letter';</script>";
			echo "<div id=rnDr".$cell." onclick='cambiarMarcada(letrA, ".$cell.", ".$arrayCorrectas[$cell]."), mandarLetraD(letrD)' class=respuestasnum>";
			echo "D";
			
			echo "</div>";	
		}		
	}
	
	?> 
	
	<?php
}
				echo "CORRECTA : ".$correcta; 
				echo "CORRECTA : ".$lettercor; 
				
				
				/*	 mostrarSiguientePreg".$r."(), */
?>

</div>

<!------------------------------------------------CORRECIONES--------------------------->
<!------------------------------------------------CORRECIONES--------------------------->
<!------------------------------------------------CORRECIONES--------------------------->
<div id="respuescor<?php echo $cell;?>" class="filafichas">

<?php
echo "<div class=cjexp>";
echo "<div class=cjexpsel></div> - Seleccionada";
echo "<br><div class=cjexpcor></div> - Correcta";
echo "<br><div class=cjexpcorsel></div> - Seleccionada y Correcta";
echo "</div>";


for ($rsr=0; $rsr<4; ++$rsr)
{
	
	
	if ($correcta==$comparacorrecta[$rsr])
	{	
		
		if ($rsr==0) 
		{
			$letter="A";
			
			echo "<script> var letA = '$letter';</script>";
			
			echo "<div id=rnAc".$cell." class=respuestasnum>";
			echo "A";
			echo "</div>";	
			echo "<script>document.getElementById('rnAc".$cell."').style.backgroundColor = 'LimeGreen';</script>";
			
		}
		elseif ($rsr==1) 
		{
			$letter="B";
			echo "<script> var letB = '$letter';</script>";
		
			echo "<div id=rnBc".$cell."  class=respuestasnum>";
			echo "B";
			echo "</div>";	
			echo "<script>document.getElementById('rnBc".$cell."').style.backgroundColor = 'LimeGreen';</script>";
		}
		elseif ($rsr==2) 
		{
			$letter="C";
			
			echo "<script> var letC = '$letter';</script>";
			echo "<div id=rnCc".$cell." class=respuestasnum>";
			echo "C";
			echo "</div>";	
			echo "<script>document.getElementById('rnCc".$cell."').style.backgroundColor = 'LimeGreen';</script>";
		}
		else 
		{
			$letter="D";
			
			echo "<script> var letD = '$letter';</script>";
			echo "<div id=rnDc".$cell." class=respuestasnum>";		
			echo "D";
			echo "</div>";	
			echo "<script>document.getElementById('rnDc".$cell."').style.backgroundColor = 'LimeGreen';</script>";
		}
		/* echo "Letter ".$letter; */
		
	}
	else 
	{ 
		if ($rsr==0) 
		{
			$letter="A";
			
			echo "<script> var letA = '$letter';</script>";
			echo "<div id=rnAc".$cell." class=respuestasnum>";
			echo "A";
			echo "</div>";	
		}
		elseif ($rsr==1) 
		{
			$letter="B";
			
			echo "<script> var letB = '$letter';</script>";
			echo "<div id=rnBc".$cell." class=respuestasnum>";
			echo "B";
			echo "</div>";	
		}
		elseif ($rsr==2) 
		{
			$letter="C";
			
			echo "<script> var letC = '$letter';</script>";
			echo "<div id=rnCc".$cell." class=respuestasnum>";
			echo "C";
			echo "</div>";	
		}
		else
		{
			$letter="D";
			echo "<script> var letD = '$letter';</script>";
			echo "<div id=rnDc".$cell." class=respuestasnum>";
			echo "D";
			
			echo "</div>";	
		}		
	}
	
	?> 

	<?php
}

			 /*	echo "CORRECTA : ".$correcta; */
				
				
				/*	 mostrarSiguientePreg".$r."(), */
?>
</div>