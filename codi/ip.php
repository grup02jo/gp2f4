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
			$sub = new IPv4\SubnetCalculator("$operand1", "$operand2");
			$ipAddress        = $sub->getIPAddress(); 
			$network        = $sub->getNetworkPortion();
			$broadcastAddress     = $sub->getBroadcastAddress(); 
			$addressableHostRange = $sub->getAddressableHostRange();
			echo "<p><b>La ip es:</b> $operand1/$operand2 </p>";
			echo "<p><b>La adreça de subxarxa es:</b>$network/$operand2</b></p>";
			echo "<p><b>El broadcast es:</b> $broadcastAddress</b></p>";
			echo "<p><b>El marge es:</b> desde $addressableHostRange[0]/$operand2<b> fins </b>$addressableHostRange[1]/$operand2</p>";
			
		?>
		<a href="ip.html">Torna a la pagina anterior</a>
	</body>
</html>
