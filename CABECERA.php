<style>
@media (max-width: 1040px) and (orientation: portrait) {
	.numeracion {
	font-size:0.8rem;
	padding:1px;
	margin:1px;
	border:1px;
}
#cabecera-contador-tiempo {
	padding:1px;
	margin:1px;
	border:1px;
}
.crono {
	font-size:0.8rem;
	padding:1px;
	margin:1px;
	border:1px;
}
}
</style>
<div id="cabe">
	<div id="cabeceraL" >
		<div id="tipoexamen">
			<?php 
			echo $testparti." - ";
			
			?>
		</div>	
		<div id="preguntasTotales">
			<i class="far fa-list-alt"></i>
				<?php
				echo $nmpreg." - Preguntas ";
				?>				
		</div>
		
		<!-- <div id="cajanumeracion">
			<i class="far fa-question-circle"></i>
		</div> -->
		<div id="numeracion">
			1 
		</div>	
	</div>
	<div id="cabeceraR" >
			
		<div id="contestadasTotales">
				<div id="contestadas"> 0 </div>
		</div>
		
		<?php
			if ($conaciertos=="con") 
			{
				?>
					<div id="correctasTotales">
							  <div id="correctas"> 0</div>
					</div>
					<div id="fallosTotales">
							 <div id="fallos"> 0</div>
					</div>
					<?php
			}
			else
			{
				?>
					<div id="correctasTotalesnot">
							 <i class="far fa-thumbs-up"></i> <div id="correctas"> 0</div>
					</div>
					<div id="fallosTotalesnot">
							 <i class="far fa-thumbs-down"></i> <div id="fallos"> 0</div>
					</div>
					<?php
			}
			?>
		<div id="cabecera-contador-tiempo">	
		<div id='crono'>00:00:00</div>
		</div>

<!--
	 <div id="numberpreg">00</div>
	 <div id="electtem"></div>
	<div id="electopt"></div>
	<div id="electnp"></div>
	<div id="electdif"></div> 
		
		 <input type="button" value="Finalizar" onclick="empezarDetener(this);"> -->
	</div>
</div>