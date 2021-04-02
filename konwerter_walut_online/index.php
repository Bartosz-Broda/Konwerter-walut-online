<!DOCTYPE HTML>
<html lang="pl"> 
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	
	<title>Konwerter walut</title>
	
	<meta name="description" content="Serwis o pieniądzu i walutach, posiadający funkcję konwentera."
	<meta name="keywords" content="waluta, wymiana, konwenter, euro, pln, dolar"/>
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	
	
</head>

<body>
	<div id="container">
		<div id="header">
		<div class="name">CurrencyCalculator &trade; </div>
		<div id="czas">
			<script type="text/javascript">
			function getTime()
			{
				return (new Date()).toLocaleTimeString();
			}
			document.getElementById('czas').innerHTML = getTime();
			setInterval(function() {
				document.getElementById('czas').innerHTML = getTime();
			}, 1000);
			</script>
			</div>
		</div>
		<div id="slogan_background">
			<div id="slogan">
			<span class="important">Przelicz swoją walutę!</span>
			<p><span class="less_important">Najlepszy darmowy konwerter walut</span></p>
			</div>
		</div>	
		
		
		
		<div id="content">
			
			<div id="contentM">
			<h1><center>Konwerter walut</center></h1>
				<div id="currency">
				<?php
					error_reporting(0);
					$a=0;
					$b=$_GET['przed'];
					$b = str_replace(",",".",$b);
					$waluta1=$_GET['waluta1'];
					$waluta2=$_GET['waluta2'];
					if (isset($_GET['button']))
					switch($waluta1){
						case "PLN": switch($waluta2)
						{
							case "PLN": $a = $b * 1; break;
							case "EUR": $a = $b * 0.23; break;
							case "USD": $a = $b * 0.26; break;
							case "GBP": $a = $b * 0.20; break;
							case "RUB": $a = $b * 17.29; break;
							default: $a = $b * 1;
						}; 
						$a = round($a, 2, PHP_ROUND_HALF_UP);
						break;
						
						case "EUR": switch($waluta2)
						{
							case "PLN": $a = $b * 4.33; break;
							case "EUR": $a = $b * 1; break;
							case "USD": $a = $b * 1.13; break;
							case "GBP": $a = $b * 0.88; break;
							case "RUB": $a = $b * 74.89; break;
							default: $a = $b * 4.33;
						}; 
						$a = round($a, 2, PHP_ROUND_HALF_UP);
						break;
						
						case "USD": switch($waluta2)
						{
							case "PLN": $a = $b * 3.82; break;
							case "EUR": $a = $b * 0.88; break;
							case "USD": $a = $b * 1; break;
							case "GBP": $a = $b * 0.76; break;
							case "RUB": $a = $b * 65.92; break;
							default: $a = $b * 3.82;
						}; 
						$a = round($a, 2, PHP_ROUND_HALF_UP);
						break;
						
						case "GBP": switch($waluta2)
						{
							case "PLN": $a = $b * 4.98; break;
							case "EUR": $a = $b * 1.15; break;
							case "USD": $a = $b * 1.30; break;
							case "GBP": $a = $b * 1; break;
							case "RUB": $a = $b * 85.96; break;
							default: $a = $b * 4.98;
						}; 
						$a = round($a, 2, PHP_ROUND_HALF_UP);
						break;
						
						case "RUB": switch($waluta2)
						{
							case "PLN": $a = $b * 0.058; break;
							case "EUR": $a = $b * 0.013; break;
							case "USD": $a = $b * 0.015; break;
							case "GBP": $a = $b * 0.012; break;
							case "RUB": $a = $b * 1; break;
							default: $a = $b * 0.058;
						}; 
						$a = round($a, 2, PHP_ROUND_HALF_UP);
						break;
						
						default: switch($waluta2)
						{
							case "PLN": $a = $b * 1; break;
							case "EUR": $a = $b * 0.23; break;
							case "USD": $a = $b * 0.26; break;
							case "GBP": $a = $b * 0.20; break;
							case "RUB": $a = $b * 17.29; break;
							default: $a = $b * 1; 
						}; $a = round($a, 2, PHP_ROUND_HALF_UP);
					}
					?>
				<form method="get" action="index.php" id="formularz">
				<table class="tab_kursy">
				<tr>
					<td>
					<select name="waluta1" id="waluta">
					<option value="PLN">PLN - Złotówka polska</option>
					<option value="EUR">EUR - Euro</option>
					<option value="USD">USD - Dolar amerykański</option>
					<option value="GBP">GBP - Funt brytyjski</option>
					<option value="RUB">RUB - Rubel rosyjski</option>
					<option selected>Wybierz walutę</option>
					</select></td>
					
					<td>
					<select name="waluta2" id="waluta">
					<option value="PLN">PLN - Złotówka polska</option>
					<option value="EUR">EUR - Euro</option>
					<option value="USD">USD - Dolar amerykański</option>
					<option value="GBP">GBP - Funt brytyjski</option>
					<option value="RUB">RUB - Rubel rosyjski</option>
					<option selected>Wybierz walutę</option>
					</select></td>
				</tr>
				<tr>
					<td><p class="how_much">Przed wymianą:</p>
					<input type="value" id="pole" name="przed" value="0">
					</td>
					
					<td><p class="how_much">Po wymianie:</p>
					<?php
					echo '<input type="text" id="pole" name="nazwa" value="'.$a.'")>';
					$a=0;
					?>
					
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="button" id="button" value="Przelicz!">
					</td>
				</tr>
				</table>
				</form>
				</div>
			
			<h1><center> Krótka historia pieniądza </center></h1>
			W prehistorii ludzie nie używali pieniędzy, ponieważ ich nie potrzebowali. Potrzebne do życia środki zyskiwali dzięki własnoręcznej produkcji. Wraz z rozwojem wspólnot plemiennych pojawiała się stopniowo specjalizacja: poszczególne grupy zajmowały się produkcją określonych rzeczy, a nadwyżki wymieniały z innymi. Na przykład grupa produkująca miód dokonywała wymiany na przykład z grupą produkującą skórę bydlęcą. Wiązało się to z pewnymi problemami, dotyczącymi jakości i ilości wymienianych dóbr.
			<br /><br />
			
			Lekarstwem na te problemy okazał się być pieniądz towarowy. Jakiś towar stawał się środkiem płatniczym, była to na przykład sól lub bydło. W źródłach historycznych można znaleźć około 150 różnych towarów, które pełniły funkcje pieniądza. Problemy wiązały się z podzielnością i jednorodnością tych towarów.Jeśli pieniądzem towarowym było bydło, trudno było mówić o podzielności czy jednorodności: w końcu byk bykowi nierówny. Z tego powodu zastąpiono towary powszechnie stosowanymi metalami, później wprowadzono metale szlachetne - srebro i złoto. Początkowo wprowadzono odważane sztabki, które były niewogydnym rozwiązaniem, a następnie zastąpiono je kawałkami metalu, które łatwo można było liczyć. Pierwotnie były to kulki, ale aby przeciwdziałać psuciu pieniądza, zaczęto je spłaszczać i odbijać na nich pieczęcie. W taki właśnie sposób powstały monety.

			<br /><br />
			
			Posługiwanie się monetami nie było jednak zbyt wygodne. Dlatego rozpoczęto deponowanie ich u złotników, którzy w zamian wydawali kwity depozytowe, potwierdzające ulokowanie monet. Jak nietrudno się domyślić, złotnicy wkrótce przekształcili się w bankierów, a kwity depozytowe w noty bankowe. (Słowo banknot powstało z niemieckiego słowa Banknote, czyli właśnie nota bankowa).

			<br /><br />
			Pieniądz w postaci monet i banknotów okazał się z czasem mało wygodny. Dużo lepszym rozwiązaniem było umożliwienie korzystania z pieniędzy zgromadzonych na rachunku bankowym, bez wypłacania pieniędzy w okienku bankowym. W ten sposób powstał pieniądz depozytowy (bezgotówkowy). W XX w. wynaleziono karty kredytowe i płatnicze umożliwiające dostęp do pieniędzy zgromadzonych na koncie w każdym miejscu na świecie.
			<br /><br />
			Źródło: <a href="https://sciaga.pl/tekst/29912-30-krotka_historia_pieniadza">https://sciaga.pl/tekst/29912-30-krotka_historia_pieniadza</a>
			
			<div id="footer">
			CurrencyCalculator &copy; Designed by Bartosz B.
			</div>
			</div>
		</div>
	</div>
</body>
</html>