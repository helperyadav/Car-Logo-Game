<?php
/********************************************************
	This is a Unit test for Hard coded puzzleProvider class.
*********************************************************/
include_once("PuzzleProvider.php");

function GetPuzzles(){
	$Puzzles;
	$Puzzles[0] = new Puzzle("myImage1","img/puzzles/bmw.png", 'BMW','AUDI','TOYOTA', 'TATA','op1');
	$Puzzles[1] = new Puzzle("myImage2","img/puzzles/audi.png",'BMW','nividia','TOYOTA','Audi', 'op4');
	$Puzzles[2] = new Puzzle("myImage3","img/puzzles/mercedes.png", 'BMW', 'AUDI', 'Mercedes','TATA','op3');
	$Puzzles[3] = new Puzzle("myImage4", "img/puzzles/Jaguar.png", 'Jaguar', 'AUDI', 'Mercedes', 'TATA', 'op1');
	$Puzzles[4] = new Puzzle("Renault", "img/puzzles/Renault.png", 'Renault', 'AUDI', 'Mercedes','TATA', 'op1');
	$Puzzles[5] = new Puzzle("farrari", "img/puzzles/farrari1.png",'Renault', 'AUDI','Mercedes','farrari', 'op4');
	$Puzzles[6] = new Puzzle("farrari", "img/puzzles/farrari1.png",'Renault', 'AUDI','Mercedes','farrari', 'op4');
	$Puzzles[7] = new Puzzle("farrari", "img/puzzles/farrari1.png",'Renault', 'AUDI','Mercedes','farrari', 'op4');

	return $Puzzles;
}
	
	
$actual = GetPuzzleProvider(2);
$expected = GetPuzzles();

echo("<p><table border='2'><th>id</th><th>src</th><th>option1</th><th>option2</th><th>option3</th><th>option4</th><th>ans</th><th >Result</th>");
$index =0;
foreach($actual->GetPuzzles() as $puzzle)
{
	echo("<tr><td>$puzzle->id</td><td>$puzzle->src</td>");
	echo("<td>$puzzle->op1</td><td>$puzzle->op2</td>");
	echo("<td>$puzzle->op3</td><td>$puzzle->op4</td>");
	echo("<td>$puzzle->ans</td>");
	
	$result = $puzzle->id === $expected[$index]->id && $puzzle->src === $expected[$index]->src ;
	if($result == 1)
		echo("<td bgcolor='green'>$result</td></tr>");
	else 
		echo("<td bgcolor='red'>$result</td></tr>");
		
	$index = $index +1;
		
}
echo("</table></p>\r\n");	
	



?>