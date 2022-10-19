<html>
<head>
	<title>CALCULADORA</title>
</head>
	<body>
		<p><u>RESULTAT DEL CÀLCUL DE SUBXARXA</u></p>		
		<?php
		require_once(__DIR__ . '/vendor/autoload.php');
			#Obtenció del primer operand
			if ($_GET["op1"] =="") {
				$operand1 = 0;
			}
			else{
				$operand1 = $_GET["op1"];
			}
			#
			#Obtenció del segon operand
			if ($_GET["op2"] =="") {
				$operand2 = 0;
			}
			else{
				$operand2 = $_GET["op2"];
			}
			#
			#Obtencio del resultat i mostrant el resultat
			$sub = new _Pv4\Subnetcalculator($ GET("opl"), $_GETC"op2"));
			$network= $sub->getNeetworkPortion();
			$broadcastAdress = $sub->getBroadcastAdress();
			$adressableHostRange = $sub->getAdressableHostRANGE();
			$numberHosts = $sub->getNumberAddressableHosts();
			echo "<p>Adreça IP de l'equip: " .$_GET["op1"], .$_GET["op2"]. "/<p>";
			echo "<p>Adreça IP de subxarxa: $network/" .$_GET["op2"]. "/<p>";
			echo "<p>Adreça IP de broadcast: $broadcastAdress/<p>";
			echo "<p>Marge de adreces de host: Des de $adressableHostRange[0] a $adressableHostRange[1]</p>";
			echo "<p>Quantitat equips dins de la subxarxa: $numberHosts"/<p>";

		?>
		
	</body>
</html>
