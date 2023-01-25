<?php
get_header();
/*Template Name: CIRCULOS 10*/
$memberID = get_current_user_id();
/* comprobar_usuario ($memberID); */

	$member = get_current_user_id();
	$numeracion=1;
	$nmpreg=10;
	$dificultad="normal";
	$difnum=2;
	$tipotest="20311200";
	$testparti="Series con figuras ";
	$conaciertos="con";
	$anp2=$nmpreg+1;
	$anp3=$nmpreg+2;
	$tipotestver="Series con Figuras";
	$testparti="Series con Figuras";
		$numpru=$anp3;
	$arrayCorr=array('0');
	$arrayCorrectas=array('0');
	$arrayCorrlet=array('0');	

	$numpru=12;
	$arrayCorrectasf=array('0');
	
$uno="pdsu-req-circulos.php";
	$dos="pdsu-req-circulos.php";
	$tres="pdsu-req-cuadros.php";
	$cuatro="pdsu-req-cuadros.php";
	$cinco="pdsu-req-triangulos.php";
	$seis="pdsu-req-triangulos.php";
?>
<script>
var member =  "<?php echo $member;?>";
var nmpreg = "<?php echo $nmpreg;?>";
var dificultad ="<?php echo $dificultad;?>";
var tipotest = "<?php echo $tipotest;?>";
var testparti = "<?php echo $testparti;?>";
var conaciertos = "<?php echo $conaciertos;?>";		
var anp2 = "<?php echo $anp2;?>";	
var anp3 = "<?php echo $anp3;?>";		
var arrayResultados=[];

var numeracion = "<?php echo $numeracion;?>";	
if (numeracion==11) {numeracion=10;}
	var countCorrectas = '';
	var countFalsas = '';
	var countContestadas = '';	
	var psicotem = '1';
	var opcion = '';
	var numpreg= '';
	var numpru= '';
	var arrayLetras=['op'];
	var arrayCorrects=['op'];
	var arrayNumPreg=[];
	var arrayNumPru=[];
	var number= '';	
	var hhh=2;
	var revision='0';
 var x = arrayLetras.toString();
</script>
<script src="https://www.oposiciones-ujier.es/wp-content/themes/opositatis/js/circulos-10.js" type="text/javascript"></script>


	<main id="todo" class="wrap">
<?php
require ("seriesFiguras-10/AArepartidor.php");

?>

 
</main>


	<?php
get_footer();
?>