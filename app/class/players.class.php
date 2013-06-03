<?php
require '../file_path.php';
include DIR_DB . 'app.class.php';

class Player{
	private $playerID;
	private $firstName;
	private $lastName;
	
	public function __construct(){
		$this->playerID=$playerID;
		$this->firstName=$firstName;
		$this->lastName=$lastName;
	}	
	public static function getAllPlayers(){
		$playerList = new Database();
		$playerList->query('SELECT * FROM players');
		return $playerList->resultSet();
		}
	public static function getPlayer($playerID){
		$playerList = new Database();
		$playerList->query('SELECT * FROM players WHERE playerID=:playerID');
		$playerList->bind(':playerID', $playerID);
		return $playerList->single();
		}
	public static function weeks(){
		$week = new Database();
		$week->query('SELECT DISTINCT weekNum FROM data');
		return $week->resultSet();
		}
		
	public static function playerTotalPercentage($playerID){}
	public static function totalGames($playerID){
		$totalGames=new Database();
		$totalGames->query("SELECT count(outcome) FROM data WHERE playerID=:playerID OR playedWith=:playerID");
		$totalGames->bind(':playerID', $playerID);
		return $totalGames->single();
		}
	public static function totalWins($playerID){
		$totalGames=new Database();
		$totalGames->query("SELECT count(outcome) FROM data WHERE (playerID=:playerID OR playedWith=:playerID) AND outcome='W'");
		$totalGames->bind(':playerID', $playerID);
		return $totalGames->single();

	}
	public static function totalLoss($playerID){
		$totalGames=new Database();
		$totalGames->query("SELECT count(outcome) FROM data WHERE (playerID=:playerID OR playedWith=:playerID) AND outcome='L'");
		$totalGames->bind(':playerID', $playerID);
		return $totalGames->single();}
	public static function totalSCricket($playerID){}
	public static function totalS501($playerID){}
	public static function totalDCricket($playerID){}
	public static function totalD501($playerID){}
	
	public static function allStarTotal($playerID){
		$allStarTotal= new Database();
		$allStarTotal->query("SELECT a.playerID, SUM(a.pointRel) as TotalPoints, p.playerID, p.firstName, p.lastName FROM allStarPoints AS a, players as p WHERE a.playerID=p.playerID AND p.playerID=:playerID");
		$allStarTotal->bind(':playerID',$playerID);
		$allStarTotal->execute();
		return $allStarTotal->resultSet();
	}
	public static function allStarWeek(){}


	}