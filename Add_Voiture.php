<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire</title>
  <link rel="stylesheet" type="text/css" href="Monstyle.css"> 
</head>
<body>
	<H1> Formulaire de saisie d'une voiture</H1>
	<form method="post" action="Add-Emprunt.php">
		<fieldset> 
			<legend>Données de la voiture</legend>
			<select id="profile_car_make" name="profile_car[make]" required="required" data-car-model-url="/car-models/__MAKE__" class="span3 select-car">
				<option value="">Choisissez</option>
					<option value="A15">A15</option>
					<option value="ABARTH">ABARTH</option>
					<option value="AC">AC</option>
					<option value="ACURA">ACURA</option>
					<option value="Admiral">Admiral</option>
					<option value="ALEKO">ALEKO</option>
					<option value="ALFA ROMEO">ALFA ROMEO</option>
					<option value="Alpina">Alpina</option>
					<option value="ALPINE RENAULT">ALPINE RENAULT</option>
					<option value="Alvis">Alvis</option>
					<option value="Ambassador">Ambassador</option>
					<option value="AMC">AMC</option>
					<option value="Anadol">Anadol</option>
					<option value="Aprilia">Aprilia</option>
					<option value="Ariel">Ariel</option>
					<option value="ARO">ARO</option>
					<option value="ASIA">ASIA</option>
					<option value="ASTON MARTIN">ASTON MARTIN</option>
					<option value="AUDI">AUDI</option>
					<option value="AUSTIN">AUSTIN</option>
					<option value="AUTOBIANCHI">AUTOBIANCHI</option>
					<option value="AUVERLAND">AUVERLAND</option>
					<option value="Barkas">Barkas</option>
					<option value="BEDFORD">BEDFORD</option>
					<option value="BENTLEY">BENTLEY</option>
					<option value="BERTONE">BERTONE</option>
					<option value="BMW">BMW</option>
					<option value="BOLLORE">BOLLORE</option>
					<option value="BOOM TRIKES">BOOM TRIKES</option>
					<option value="BORGWARD">BORGWARD</option>
					<option value="Brilliance">Brilliance</option>
					<option value="Bugatti">Bugatti</option>
					<option value="BUICK">BUICK</option>
					<option value="BYD">BYD</option>
					<option value="CADILLAC">CADILLAC</option>
					<option value="CAMPING-CAR">CAMPING-CAR</option>
					<option value="Can-Am">Can-Am</option>
					<option value="CARBODIES">CARBODIES</option>
					<option value="CATERHAM">CATERHAM</option>
					<option value="Cezet">Cezet</option>
					<option value="Chana">Chana</option>
					<option value="Changan">Changan</option>
					<option value="ChangFeng">ChangFeng</option>
					<option value="Changhe">Changhe</option>
					<option value="Chery">Chery</option>
					<option value="CHEVROLET">CHEVROLET</option>
					<option value="CHRYSLER">CHRYSLER</option>
					<option value="Cima Motors">Cima Motors</option>
					<option value="CITROEN">CITROEN</option>
					<option value="Coupe">Coupe</option>
					<option value="DACIA">DACIA</option>
					<option value="DADI">DADI</option>
					<option value="Daelim">Daelim</option>
					<option value="DAEWOO">DAEWOO</option>
					<option value="DAF">DAF</option>
					<option value="DAIHATSU">DAIHATSU</option>
					<option value="Daihatsu Valera">Daihatsu Valera</option>
					<option value="DAIMLER">DAIMLER</option>
					<option value="DATSUN">DATSUN</option>
					<option value="De Tomaso">De Tomaso</option>
					<option value="DELAGE">DELAGE</option>
					<option value="DELOREAN">DELOREAN</option>
					<option value="Derways">Derways</option>
					<option value="DODGE">DODGE</option>
					<option value="DONGFENG">DONGFENG</option>
					<option value="Doninvest">Doninvest</option>
					<option value="Donkervoort">Donkervoort</option>
					<option value="DR">DR</option>
					<option value="DS">DS</option>
					<option value="Ducati">Ducati</option>
					<option value="Ducato">Ducato</option>
					<option value="Eagle">Eagle</option>
					<option value="EBRO">EBRO</option>
					<option value="FAW">FAW</option>
					<option value="FERRARI">FERRARI</option>
					<option value="FIAT">FIAT</option>
					<option value="Fisher">Fisher</option>
					<option value="FISKER">FISKER</option>
					<option value="FORCE MOTORS">FORCE MOTORS</option>
					<option value="FORD">FORD</option>
					<option value="Foton">Foton</option>
					<option value="FSC">FSC</option>
					<option value="FSO">FSO</option>
					<option value="FSO-POLSKI">FSO-POLSKI</option>
					<option value="FSR">FSR</option>
					<option value="Fusca">Fusca</option>
					<option value="GALLOPER">GALLOPER</option>
					<option value="GEELY">GEELY</option>
					<option value="Geo">Geo</option>
					<option value="GILERA">GILERA</option>
					<option value="Ginetta">Ginetta</option>
					<option value="GM">GM</option>
					<option value="GMC">GMC</option>
					<option value="GME">GME</option>
					<option value="GOLF">GOLF</option>
					<option value="Gonow">Gonow</option>
					<option value="GRANDIN">GRANDIN</option>
					<option value="GREAT WALL">GREAT WALL</option>
					<option value="Groz">Groz</option>
					<option value="Hafei">Hafei</option>
					<option value="HAIMA">HAIMA</option>
					<option value="Harley-Davidson">Harley-Davidson</option>
					<option value="Haval">Haval</option>
					<option value="Holden">Holden</option>
					<option value="HOMMELL">HOMMELL</option>
					<option value="HONDA">HONDA</option>
					<option value="Huanghai">Huanghai</option>
					<option value="HUMMER">HUMMER</option>
					<option value="Hymer">Hymer</option>
					<option value="HYUNDAI">HYUNDAI</option>
					<option value="IMV">IMV</option>
					<option value="INFINITI">INFINITI</option>
					<option value="INNOCENTI">INNOCENTI</option>
					<option value="Intrall">Intrall</option>
					<option value="Iran Khodro">Iran Khodro</option>
					<option value="ISUZU">ISUZU</option>
					<option value="IVECO">IVECO</option>
					<option value="JAC">JAC</option>
					<option value="JAGUAR">JAGUAR</option>
					<option value="JEEP">JEEP</option>
					<option value="Jindei">Jindei</option>
					<option value="JMC">JMC</option>
					<option value="JOINT">JOINT</option>
					<option value="JUNAK">JUNAK</option>
					<option value="Kawasaki">Kawasaki</option>
					<option value="KIA">KIA</option>
					<option value="KTM">KTM</option>
					<option value="LADA">LADA</option>
					<option value="Laika">Laika</option>
					<option value="LAMBORGHINI">LAMBORGHINI</option>
					<option value="LANCIA">LANCIA</option>
					<option value="LAND ROVER">LAND ROVER</option>
					<option value="Landwind">Landwind</option>
					<option value="LANOS">LANOS</option>
					<option value="LDV">LDV</option>
					<option value="LEXUS">LEXUS</option>
					<option value="Lifan">Lifan</option>
					<option value="LIGIER">LIGIER</option>
					<option value="LINCOLN">LINCOLN</option>
					<option value="LOTUS">LOTUS</option>
					<option value="LTI">LTI</option>
					<option value="LUXGEN">LUXGEN</option>
					<option value="Magirus Deutz">Magirus Deutz</option>
					<option value="MAHINDRA">MAHINDRA</option>
					<option value="Marcos">Marcos</option>
					<option value="Marlin">Marlin</option>
					<option value="MARUTI">MARUTI</option>
					<option value="MASERATI">MASERATI</option>
					<option value="MATRA">MATRA</option>
					<option value="MAYBACH">MAYBACH</option>
					<option value="MAZDA">MAZDA</option>
					<option value="MCC">MCC</option>
					<option value="McLaren">McLaren</option>
					<option value="MEGA">MEGA</option>
					<option value="MERCEDES">MERCEDES</option>
					<option value="MERCEDES AMG">MERCEDES AMG</option>
					<option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
					<option value="MERCURY">MERCURY</option>
					<option value="Metrocab">Metrocab</option>
					<option value="MG">MG</option>
					<option value="MIA">MIA</option>
					<option value="MICRO COMPACT CAR">MICRO COMPACT CAR</option>
					<option value="Microcar">Microcar</option>
					<option value="Minauto">Minauto</option>
					<option value="MINI">MINI</option>
					<option value="MITSUBISHI">MITSUBISHI</option>
					<option value="Mitsuoka">Mitsuoka</option>
					<option value="MORELO PALACE">MORELO PALACE</option>
					<option value="MORGAN">MORGAN</option>
					<option value="MOTO">MOTO</option>
					<option value="MOTORRAD">MOTORRAD</option>
					<option value="NISSAN">NISSAN</option>
					<option value="NYSA">NYSA</option>
					<option value="OLDSMOBILE">OLDSMOBILE</option>
					<option value="OPEL">OPEL</option>
					<option value="Pagani">Pagani</option>
					<option value="PANHARD">PANHARD</option>
					<option value="Panoz">Panoz</option>
					<option value="PANTHER">PANTHER</option>
					<option value="Perodua">Perodua</option>
					<option value="PEUGEOT">PEUGEOT</option>
					<option value="PGO">PGO</option>
					<option value="PIAGGIO">PIAGGIO</option>
					<option value="PLYMOUTH">PLYMOUTH</option>
					<option value="Polonez">Polonez</option>
					<option value="PONTIAC">PONTIAC</option>
					<option value="PORSCHE">PORSCHE</option>
					<option value="PÖSSL">PÖSSL</option>
					<option value="PROTON">PROTON</option>
					<option value="Qoros">Qoros</option>
					<option value="QUANTUM">QUANTUM</option>
					<option value="Range Rover">Range Rover</option><option value="Ravon">Ravon</option><option value="Regal Raptor">Regal Raptor</option><option value="RELIANT">RELIANT</option><option value="RENAULT" selected="selected">RENAULT</option><option value="Roewe">Roewe</option><option value="Rolls-Royce">Rolls-Royce</option><option value="ROVER">ROVER</option><option value="SAAB">SAAB</option><option value="SAIPA">SAIPA</option><option value="Saleen">Saleen</option><option value="Samand">Samand</option><option value="Samsung">Samsung</option><option value="SANTANA">SANTANA</option><option value="Saturn">Saturn</option><option value="SAVIEM">SAVIEM</option><option value="SCION">SCION</option><option value="SEAT">SEAT</option><option value="SECMA">SECMA</option><option value="Shineray">Shineray</option><option value="Shuanghuan">Shuanghuan</option><option value="SIDE BIKE">SIDE BIKE</option><option value="SIMCA">SIMCA</option><option value="SIN">SIN</option><option value="SKODA">SKODA</option><option value="SMA">SMA</option><option value="SMART">SMART</option><option value="Spyker">Spyker</option><option value="SSANGYONG">SSANGYONG</option><option value="SUBARU">SUBARU</option><option value="SUNBEAM">SUNBEAM</option><option value="SUV LEXUS">SUV LEXUS</option><option value="SUV LEXUX">SUV LEXUX</option><option value="SUZUKI">SUZUKI</option><option value="Syrena">Syrena</option><option value="TAGAZ">TAGAZ</option><option value="TAGAZ VEGA">TAGAZ VEGA</option><option value="TALBOT">TALBOT</option><option value="TATA">TATA</option><option value="Tatra">Tatra</option><option value="Tazzari">Tazzari</option><option value="Tesla">Tesla</option><option value="THINK">THINK</option><option value="THOMAS">THOMAS</option><option value="Tianma">Tianma</option><option value="Tianye">Tianye</option><option value="Tofas">Tofas</option><option value="TOYOTA">TOYOTA</option><option value="TRABANT">TRABANT</option><option value="TRIUMPH">TRIUMPH</option><option value="TROLLER">TROLLER</option><option value="TVR">TVR</option><option value="TWIKE">TWIKE</option><option value="UMM">UMM</option><option value="URAL">URAL</option><option value="VAUXHALL">VAUXHALL</option><option value="Venturi">Venturi</option><option value="VOLKSWAGEN">VOLKSWAGEN</option><option value="VOLVO">VOLVO</option><option value="Vortex">Vortex</option><option value="WARSZAWA">WARSZAWA</option><option value="WARTBURG">WARTBURG</option><option value="WEINSBERG">WEINSBERG</option><option value="Wiesmann">Wiesmann</option><option value="Willys">Willys</option><option value="Xin Kai">Xin Kai</option><option value="Yamaha">Yamaha</option><option value="YOGOMO">YOGOMO</option><option value="Yzk">Yzk</option><option value="Z750">Z750</option><option value="ZASTAVA">ZASTAVA</option><option value="ZAZ">ZAZ</option><option value="Zotye">Zotye</option><option value="Zuk">Zuk</option><option value="ZX">ZX</option><option value="ВАЗ">ВАЗ</option><option value="Велта">Велта</option><option value="ГАЗ">ГАЗ</option><option value="ЕРАЗ">ЕРАЗ</option><option value="ЗАЗ">ЗАЗ</option><option value="ЗИЛ">ЗИЛ</option><option value="ИЖ">ИЖ</option><option value="КАМАЗ">КАМАЗ</option><option value="ЛУАЗ">ЛУАЗ</option><option value="Москвич">Москвич</option><option value="СеАЗ">СеАЗ</option><option value="ТагАЗ">ТагАЗ</option><option value="УАЗ">УАЗ</option></select>
 
 
 
 
 
 
 
 
<label for="profile_car_model" class=" control-label">Modèle</label>
<select id="profile_car_model" name="profile_car[model]"><option value="10">10</option><option value="11">11</option><option value="14">14</option><option value="18">18</option><option value="19">19</option><option value="21">21</option><option value="25">25</option><option value="30">30</option><option value="4">4</option><option value="4 CV">4 CV</option><option value="406 COUPE">406 COUPE</option><option value="4CV">4CV</option><option value="5">5</option><option value="8">8</option><option value="9">9</option><option value="AVANTIME">AVANTIME</option><option value="B110">B110</option><option value="B120">B120</option><option value="B70">B70</option><option value="B80">B80</option><option value="B90">B90</option><option value="CAPTUR">CAPTUR</option><option value="CARAVELLE">CARAVELLE</option><option value="CHEROKEE">CHEROKEE</option><option value="CJ7">CJ7</option><option value="CLEO">CLEO</option><option value="CLIO">CLIO</option><option value="Clio Campus">Clio Campus</option><option value="CLIO ESTATE">CLIO ESTATE</option><option value="Clio GRANDTOUR">Clio GRANDTOUR</option><option value="CLIO II">CLIO II</option><option value="CLIO III">CLIO III</option><option value="CLIO III ESTATE">CLIO III ESTATE</option><option value="CLIO IV">CLIO IV</option><option value="CLIO IV ESTATE">CLIO IV ESTATE</option><option value="Clio Sport">Clio Sport</option><option value="CLIO SPORTOUR">CLIO SPORTOUR</option><option value="Clio V6">Clio V6</option><option value="Coleos">Coleos</option><option value="DAUPHINE">DAUPHINE</option><option value="DAUPHINOIS">DAUPHINOIS</option><option value="DOKKER">DOKKER</option><option value="DUSTER">DUSTER</option><option value="ESPACE">ESPACE</option><option value="ESPACE IV">ESPACE IV</option><option value="ESPACE V">ESPACE V</option><option value="ESTAFETTE">ESTAFETTE</option><option value="ESTATE">ESTATE</option><option value="EXPRESS">EXPRESS</option><option value="FLORIDE">FLORIDE</option><option value="FLUENCE">FLUENCE</option><option value="FREGATE">FREGATE</option><option value="FUEGO">FUEGO</option><option value="G">G</option><option value="GRAND">GRAND</option><option value="GRAND ESPACE">GRAND ESPACE</option><option value="GRAND ESPACE IV">GRAND ESPACE IV</option><option value="GRAND KANGOO">GRAND KANGOO</option><option value="GRAND MODUS">GRAND MODUS</option><option value="GRAND SCENIC">GRAND SCENIC</option><option value="GRANDTOUR">GRANDTOUR</option><option value="II">II</option><option value="III">III</option><option value="INITIALE">INITIALE</option><option value="IV">IV</option><option value="JEEP">JEEP</option><option value="JEEP CJ7">JEEP CJ7</option><option value="JUVAQUATRE">JUVAQUATRE</option><option value="Kadjar">Kadjar</option><option value="KANGOO">KANGOO</option><option value="KANGOO EXPRESS">KANGOO EXPRESS</option><option value="KANGOO EXPRESS II">KANGOO EXPRESS II</option><option value="KANGOO II">KANGOO II</option><option value="Kaptur">Kaptur</option><option value="KOLEOS">KOLEOS</option><option value="KWID">KWID</option><option value="LAGUNA">LAGUNA</option><option value="LAGUNA COUPE">LAGUNA COUPE</option><option value="Laguna Grand Tour">Laguna Grand Tour</option><option value="LAGUNA II">LAGUNA II</option><option value="LAGUNA II ESTATE">LAGUNA II ESTATE</option><option value="LAGUNA III">LAGUNA III</option><option value="LAGUNA III ESTATE">LAGUNA III ESTATE</option><option value="LAGUNA NEVADA">LAGUNA NEVADA</option><option value="LATITUDE">LATITUDE</option><option value="LODGY">LODGY</option><option value="LOGAN">LOGAN</option><option value="LOGAN II">LOGAN II</option><option value="MASCOTT">MASCOTT</option><option value="MASTER">MASTER</option><option value="MASTER III">MASTER III</option><option value="MAXITY">MAXITY</option><option value="MEGANE">MEGANE</option><option value="MEGANE COUPE">MEGANE COUPE</option><option value="Megane Coupe-Cabriolet">Megane Coupe-Cabriolet</option><option value="MEGANE II">MEGANE II</option><option value="MEGANE II ESTATE">MEGANE II ESTATE</option><option value="MEGANE II GT">MEGANE II GT</option><option value="Megane II RS">Megane II RS</option><option value="MEGANE III" selected="selected">MEGANE III</option><option value="Megane III Coupe">Megane III Coupe</option><option value="MEGANE III ESTATE">MEGANE III ESTATE</option><option value="Megane III GT">Megane III GT</option><option value="Megane III RS">Megane III RS</option><option value="MÉGANE IV">MÉGANE IV</option><option value="MEGANE IV ESTATE">MEGANE IV ESTATE</option><option value="MÉGANE IV GT">MÉGANE IV GT</option><option value="MESSENGER">MESSENGER</option><option value="MIDLINER M160">MIDLINER M160</option><option value="Midlum">Midlum</option><option value="MODUS">MODUS</option><option value="NEVADA">NEVADA</option><option value="ONDINE">ONDINE</option><option value="PRAIRIE">PRAIRIE</option><option value="Premium">Premium</option><option value="Pulse">Pulse</option><option value="QASHQAI">QASHQAI</option><option value="R10">R10</option><option value="R11">R11</option><option value="R12">R12</option><option value="R14">R14</option><option value="R15">R15</option><option value="R16">R16</option><option value="R17">R17</option><option value="R18">R18</option><option value="R19">R19</option><option value="R20">R20</option><option value="R21">R21</option><option value="R21 NEVADA">R21 NEVADA</option><option value="R25">R25</option><option value="R30">R30</option><option value="R4">R4</option><option value="R5">R5</option><option value="R6">R6</option><option value="R8">R8</option><option value="R9">R9</option><option value="Rapid">Rapid</option><option value="RODEO">RODEO</option><option value="SAFRANE">SAFRANE</option><option value="SANDERO">SANDERO</option><option value="Sandero Stepway">Sandero Stepway</option><option value="SATIS">SATIS</option><option value="SAVANE">SAVANE</option><option value="SAVIEM">SAVIEM</option><option value="SCALA">SCALA</option><option value="SCENIC">SCENIC</option><option value="SCENIC II">SCENIC II</option><option value="SCENIC III">SCENIC III</option><option value="Scenic IV">Scenic IV</option><option value="SCENIC RX4">SCENIC RX4</option><option value="SPIDER">SPIDER</option><option value="Sport Spyder">Sport Spyder</option><option value="SUPERCINQ">SUPERCINQ</option><option value="Symbol">Symbol</option><option value="Talisman">Talisman</option><option value="THALIA">THALIA</option><option value="TRAFIC">TRAFIC</option><option value="TWINGO">TWINGO</option><option value="Twingo 4">Twingo 4</option><option value="TWINGO II">TWINGO II</option><option value="Twingo II RS">Twingo II RS</option><option value="Twingo III">Twingo III</option><option value="TWIZY">TWIZY</option><option value="VEL">VEL</option><option value="VEL SATIS">VEL SATIS</option><option value="WIND">WIND</option><option value="WRANGLER">WRANGLER</option><option value="XBA">XBA</option><option value="ZOE">ZOE</option></select>
 
 
<label for="profile_car_category" class=" control-label">Catégorie</label>
<select id="profile_car_category" name="profile_car[category]" class="span3"><option value="_UE_BERLINE">Berline</option><option value="_UE_TOURISM" selected="selected">Compacte</option><option value="_UE_CABRIOLET">Cabriolet</option><option value="_UE_BREAK">Break</option><option value="_UE_44">4×4</option><option value="_UE_VAN">Monospace</option><option value="_UE_SMALL_UTILITY">Minivan</option><option value="_UE_BIG_UTILITY">Fourgonnette</option></select>
			Nombre de place de la voiture : <input type="number" name="place_max" /> <BR>
			Puissance de la voiture : <input type="number" name="puissance" /> <BR>
			Couleur de la voiture : <select id="couleur" name="couleur" class="span3"> 			
					<option value="000000">Noir</option>
					<option value="FFFFFF">Blanc</option>
					<option value="727272" selected="selected">Gris foncé</option>
					<option value="DDDDDD">Gris</option>
					<option value="9B0004">Bordeaux</option>
					<option value="DD0000">Rouge</option>
					<option value="0B2742">Bleu foncé</option>
					<option value="1A7CBD">Bleu</option>
					<option value="185C3A">Vert foncé</option>
					<option value="0DB260">Vert</option>
					<option value="4E301C">Marron</option>
					<option value="C5A690">Beige</option>
					<option value="FA6600">Orange</option>
					<option value="FED141">Jaune</option>
					<option value="570E70">Violet</option>
					<option value="FFC3E3">Rose</option></select> <BR>

		</fieldset>
		<input type="submit" name="valider" value="Valider" />
					
	
	</form>
	<a href="index.html"> <img src="image/retour-ico.png"/></a><br/>	
</body>
</html>