<?php

$html="
	   <!DOCTYPE html>
	   <html>
		<head> 
			<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
			<script src=\"http://code.jquery.com/jquery-1.11.1.min.js\"></script>
			<script src=\"http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js\"></script>
			<script src=\"hue.js\"></script>\n<LINK href=\"hello.css\" rel=\"stylesheet\" type=\"text/css\">
			<title> LADDER LCS PLAYERS KOREA </title>
		</head>
		<body> 
			<table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\"> 
				<thead>
					<tr>
						<th>NAME</th>
						<th>LEAGUE</th>
						<th>TIER</th>
						<th>DIVISION</th>
						<th>POINTS</th>
						<th>WINS</th>
						<th>LOSSES</th>
						<th>WINRATES</th>
					
				</thead>
				<tbody>";
				
$tableau = array(/*"29900126,29900125,29900124,29890124,29880125,*/29900136,29890131,29890130,29880135,29880134,29900129,29880126,29900130,29880127,29900131,/*SK MEMBERS A AJOUTER ICI*/29890126,29890127,29880137,29890128,29900134);
$tableau2 = array(/*"<a href=\"http://www.op.gg/summoner/userName=Alliance%20Wickd\">Alliance Wickd</a>",
					"<a href=\"http://www.op.gg/summoner/userName=Alliance%20Shook\">Alliance Shook</a>",
					"<a href=\"http://www.op.gg/summoner/userName=Alliance%20Froggen\"></a>Alliance Froggen",
					"<a href=\"http://www.op.gg/summoner/userName=Alliance%20Tabzz\">Alliance Tabzz</a>",
					"<a href=\"http://www.op.gg/summoner/userName=A%20Nyph\">Alliance Nyph</a>",*/
					"<a href=\"http://www.op.gg/summoner/userName=EunjiSuzy\">Cloud9 Balls</a>",
					"<a href=\"http://www.op.gg/summoner/userName=ice%20cold%20water\">Cloud9 Meteos</a>",
					"<a href=\"http://www.op.gg/summoner/userName=KvotheKelsier\">Cloud9 Hai</a>","
					<a href=\"http://www.op.gg/summoner/userName=C9%20Sneaker\">Cloud9 Sneaky</a>",
					"<a href=\"http://www.op.gg/summoner/userName=%EB%84%8C%EB%82%98%ED%95%9C%ED%83%9C%EC%98%A4%EB%B9%A0%EC%95%BC\">Cloud9 Lemonation</a>",
					"<a href=\"http://www.op.gg/summoner/userName=flyingpoop\">Fnatic Soaz</a>",
					"<a href=\"http://www.op.gg/summoner/userName=Ding12\">Fnatic Cyanide</a>",
					"<a href=\"http://www.op.gg/summoner/userName=%EC%A7%B1%EC%A7%B1%20%EC%9E%98%20%EC%83%9D%EA%B8%B4%20%EA%B2%8C\">Fnatic xPeke</a>",
					"<a href=\"http://www.op.gg/summoner/userName=European%20Deft\">Fnatic Rekless</a>",
					"<a href=\"http://www.op.gg/summoner/userName=roro1\">Fnatic Yellowstar</a>"/*,
					"<a href=\"\">SK Gaming fredy122</a>",
					"<a href=\"\">SK Gaming Svenskeren</a>",
					"<a href=\"\">SK Gaming Jesiz</a>",
					"<a href=\"\">SK Gaming Candy Panda</a>",
					"<a href=\"\">SK Gaming nRated</a>"*/,
					"<a href=\"http://www.op.gg/summoner/userName=suryd\">Team Solo Mid Dyrus</a>",
					"<a href=\"http://www.op.gg/summoner/userName=Prince%20of%20BelAir\">Team Solo Mid Amazing</a>",
					"<a href=\"http://www.op.gg/summoner/userName=Nesgrejb\">Team Solo Mid Bjergsen</a>",
					"<a href=\"http://www.op.gg/summoner/userName=American%20IMP\">Team Solo Mid WildTurtle</a>",
					"<a href=\"http://www.op.gg/summoner/userName=GET%20OUTTA%20MY%20BOT\">Team Solo Mid Lustboy</a>");
$i =0;
foreach ( $tableau as $value ) {

$url = "https://kr.api.pvp.net/api/lol/kr/v2.5/league/by-summoner/{$value}/entry?api_key=e105cb9e-7ce5-4ff2-ae5a-fdbc2d3b8600";
$json = file_get_contents($url);
$hue = json_decode($json, TRUE);
$url2 = "https://kr.api.pvp.net/api/lol/kr/v1.3/stats/by-summoner/{$value}/summary?season=SEASON4&api_key=e105cb9e-7ce5-4ff2-ae5a-fdbc2d3b8600";
$json = file_get_contents($url2);
$hue2 = json_decode($json, TRUE);


$html.="<tr> <td>".$tableau2[$i]."<td>".$hue[$value][0]['name']."<td>".$hue[$value][0]['tier']."<td>".$hue[$value][0]['entries'][0]['division']."<td>".$hue[$value][0]['entries'][0]['leaguePoints']."<td>".$hue2['playerStatSummaries'][0]['wins']."<td>".$hue2['playerStatSummaries'][0]['losses']."<td>".round(($hue2['playerStatSummaries'][0]['wins']/($hue2['playerStatSummaries'][0]['losses']+$hue2['playerStatSummaries'][0]['wins'])*100))."%<br/>";
$i++;
}
$html.= "		</tbody>
			</table> 
		</body> 
		All credits to http://www.datatables.net for the sort  (to sort more than one column, hold shift :D)<br>
		PS : Ill add ALL, SK members when they're down with their placement matches.<br>
		All right reserved to Riot Games (&copy; Riot Games, Inc.).
	</html>";
echo $html;

?>