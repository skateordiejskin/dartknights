<?php

require_once('players.class.php');

class Stats extends Player{
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

	/***********************************Singles 501*******************************************/

	public static function singles501($weekNum){
		$weekResults = new Database();
		$weekResults->query('SELECT d.gameID, d.playerID, d.weekNum, d.outcome, d.outHit, d.turnsToOut, p.playerID, p.firstName, p.lastName, g.gameID
						FROM
							players as p, data as d, game as g
						WHERE
							d.playerID = p.playerID
						AND
							d.gameID = g.gameID
						AND
							d.gameID = 1
						AND
							d.weekNum = :weekNum');
		$weekResults->bind(':weekNum',$weekNum);
		return $weekResults->resultSet();
	}

	/***********************************Singles Cricket*******************************************/

	public static function singlesCricket($weekNum){
		$weekResults = new Database();
		$weekResults->query('SELECT d.gameID, d.playerID, d.weekNum, d.outcome, p.playerID, p.firstName, p.lastName, g.gameID, g.gameType
						FROM
							players as p, data as d, game as g
						WHERE
							d.playerID = p.playerID
						AND
							d.gameID = g.gameID
						AND
							d.gameID = 2
						AND
							d.weekNum = :weekNum');
		$weekResults->bind(':weekNum',$weekNum);
		return $weekResults->resultSet();
	}

	/***********************************Doubles Cricket*******************************************/

	public static function doublesCricket($weekNum){
		$weekResults = new Database();
		$weekResults->query('SELECT d.gameID, d.playerID AS "player1ID", d.playedWith as "player2ID", d.weekNum AS "week", d.outcome, p.playerID AS "player1", p.firstName AS "player1first", p.lastName AS "player1Last", p2.playerID AS "player2", p2.firstName AS "player2First", p2.lastName  AS "player2Last", g.gameID
						FROM
							players as p, players as p2, data as d, game as g
						WHERE
							d.playerID = p.playerID
						AND
							d.playedWith = p2.playerID
						AND
							d.gameID = g.gameID
						AND
							d.gameID = 3
						AND
							d.weekNum = :weekNum');
		$weekResults->bind(':weekNum',$weekNum);
		return $weekResults->resultSet();
	}


	/***********************************Doubles 501*******************************************/

	public static function doubles501($weekNum){
		$weekResults = new Database();
		$weekResults->query('SELECT d.gameID, d.playerID AS "player1ID", d.playedWith as "player2ID", d.weekNum AS "week", d.outcome, d.turnsToIn, d.turnsToOut, d.outHit, p.playerID AS "player1", p.firstName AS "player1first", p.lastName AS "player1Last", p2.playerID AS "player2", p2.firstName AS "player2First", p2.lastName  AS "player2Last", g.gameID
						FROM
							players as p, players as p2, data as d, game as g
						WHERE
							d.playerID = p.playerID
						AND
							d.playedWith = p2.playerID
						AND
							d.gameID = g.gameID
						AND
							d.gameID = 4
						AND
							d.weekNum = :weekNum
						ORDER BY dataID');
		$weekResults->bind(':weekNum',$weekNum);
		return $weekResults->resultSet();
	}
	
	public static function allStarSubmit($weekNum, $playerID, $roundHit, $pointRel){
		$allStars= new Database();
		$allStars->query("INSERT INTO allStarPoints (weekNum, playerID, roundHit, pointRel) VALUES(:weekNum, :playerID, :roundHit, :pointRel)");
		$allStars->bind(':weekNum',$weekNum);
		$allStars->bind(':playerID',$playerID);
		$allStars->bind(':roundHit',$roundHit);
		$allStars->bind(':pointRel', $pointRel);
		
		$allStars->execute();
	}
	
	
	public static function percentages(){
		$percentage = new Database();
		$percentage->query('SELECT count(outcome) AS total FROM data WHERE outcome="W"');
		//$percentage->bind('',);
		return $percentage->single();

	}
}
