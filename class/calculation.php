<?php

namespace App;

class Calculation
{
	
    public function __construct(){}

    public static function getDays($startdate, $until, $timespan){

		$begin = new \DateTime($startdate);
		$end = new \DateTime($startdate);
		$end = $end->modify( "+{$until} days" );

		$interval = new \DateInterval("P{$timespan}D");
		$daterange = new \DatePeriod($begin, $interval ,$end);

		$datelist = [];
		foreach($daterange as $date){
			$datelist[] = $date->format('Y-m-d');
		}
		return $datelist;
    }
}