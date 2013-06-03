<?php

require('../file_path.php');
include(DIR_CLASS . 'players.class.php');

class Games extends Player{
	private $dataID;
	private $gameID;
	private $playerID;
	private $playedWith;
	private $weekNum;
	private $turnsToIn;
	private $turnsToOut;
	private $outcome;
	private $outHit;

	public function __construct(){
		$this->dataID=$dataID;
		$this->gameID=$gameID;
		$this->playerID=$playerID;
		$this->playedWith=$playedWith;
		$this->weekNum=$weekNum;
		$this->turnsToIn=$turnsToIn;
		$this->turnsToOut=$turnsToOut;
		$this->outcome=$outcome;
		$this->outHit=$outHit;
	}

	public static function s501($playerID, $weekNum, $turnsToOut, $outHit, $outcome){
		$s501=new Database();
		$s501->query("INSERT INTO data (gameID, playerID, weekNum, turnsToOut, outHit, outcome) VALUES('1', :playerID, :weekNum, :turnsToOut, :outHit, :outcome)");
		$s501->bind(':playerID',$playerID);
		$s501->bind(':weekNum',$weekNum);
		$s501->bind(':turnsToOut',$turnsToOut);
		$s501->bind(':outHit',$outHit);
		$s501->bind(':outcome',$outcome);

		$s501->execute();
	}

	public static function sCricket($playerID, $weekNum, $outcome){
		$sCricket=new Database();
		$sCricket->query("INSERT INTO data (gameID, playerID, weekNum, outcome) VALUES('2', :playerID, :weekNum, :outcome)");
		$sCricket->bind(':playerID',$playerID);
		$sCricket->bind(':weekNum',$weekNum);
		$sCricket->bind(':outcome',$outcome);

		$sCricket->execute();
	}

	public static function dCricket($playerID, $playedWith, $weekNum, $outcome){
		$dCricket=new Database();
		$dCricket->query("INSERT INTO data (gameID, playerID, playedWith, weekNum, outcome) VALUES('3', :playerID, :playedWith, :weekNum, :outcome)");
		$dCricket->bind(':playerID',$playerID);
		$dCricket->bind(':playedWith',$playedWith);
		$dCricket->bind(':weekNum',$weekNum);
		$dCricket->bind(':outcome',$outcome);

		$dCricket->execute();
	}

	public static function d501($playerID, $playedWith, $weekNum, $turnsToIn, $turnsToOut, $outHit, $outcome){
		$d501=new Database();
		$d501->query("INSERT INTO data (gameID, playerID, playedWith, weekNum, turnsToIn, turnsToOut, outHit, outcome) VALUES('4', :playerID, :playedWith, :weekNum, :turnsToIn, :turnsToOut, :outHit, :outcome)");
		$d501->bind(':playerID',$playerID);
		$d501->bind(':playedWith',$playedWith);
		$d501->bind(':weekNum',$weekNum);
		$d501->bind(':turnsToOut',$turnsToOut);
		$d501->bind(':turnsToIn',$turnsToIn);
		$d501->bind(':outHit',$outHit);
		$d501->bind(':outcome',$outcome);

		$d501->execute();
	}

}