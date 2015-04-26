<?php
include_once("Puzzle.php");

/********************************************
	GetPuzzleProvider returns an appropriate puzzle provider for 
*********************************************/
function GetPuzzleProvider($repository)
{
	switch($repository)
	{
		case 1:
			//echo 'return dbpuzzleprovider';
			return new DBPuzzleProvider();
		break;
		case 2:
			//echo 'return hardcoded puzzles';
			return new HardCodedPuzzles();
		break;
		default:
		 	return new HardCodedPuzzles();
	}
	
	//echo 'return null';
	
};


interface IPuzzleProvider 
{
	public function GetPuzzles();
	public function GetPuzzle($id);

};

class DBPuzzleProvider implements IPuzzleProvider
{
	function GetPuzzles(){
		$db = new PuzzleDB();
		$output = $db->GetPuzzles();
		return $output;
	}

	public function GetPuzzle($id)
	{
		$db = new PuzzleDB();
		$output = $db->GetPuzzles();
		while($id >= count($output))
			$id = $id - count($output) ;
			
		return $output[$id];
	}
}
	
/******
	
*******/
class HardCodedPuzzles implements IPuzzleProvider
{
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
		/*
			{id: "AUDI", src:"img/puzzles/AUDI.JPG", op1: 'Renault', op2: 'AUDI', op3:'Mercedes', op4:'farrari', ans:'op4'}
		*/
					
		return $Puzzles;
	}

	function GetPuzzle($id){
		$Puzzles;
		$Puzzles[0] = new Puzzle("myImage1","img/puzzles/bmw.png", 'BMW','AUDI','TOYOTA', 'TATA','op1');
		$Puzzles[1] = new Puzzle("myImage2","img/puzzles/audi.png",'BMW','nividia','TOYOTA','Audi', 'op4');
		$Puzzles[2] = new Puzzle("myImage3","img/puzzles/mercedes.png", 'BMW', 'AUDI', 'Mercedes','TATA','op3');
		$Puzzles[3] = new Puzzle("myImage4", "img/puzzles/Jaguar.png", 'Jaguar', 'AUDI', 'Mercedes', 'TATA', 'op1');
		$Puzzles[4] = new Puzzle("Renault", "img/puzzles/Renault.png", 'Renault', 'AUDI', 'Mercedes','TATA', 'op1');
		$Puzzles[5] = new Puzzle("farrari", "img/puzzles/farrari1.png",'Renault', 'AUDI','Mercedes','farrari', 'op4');
		$Puzzles[6] = new Puzzle("farrari", "img/puzzles/farrari1.png",'Renault', 'AUDI','Mercedes','farrari', 'op4');
		$Puzzles[7] = new Puzzle("farrari", "img/puzzles/farrari1.png",'Renault', 'AUDI','Mercedes','farrari', 'op4');
		/*
			{id: "AUDI", src:"img/puzzles/AUDI.JPG", op1: 'Renault', op2: 'AUDI', op3:'Mercedes', op4:'farrari', ans:'op4'}
		*/
					
		return $Puzzles[$id];
	}
};

?>