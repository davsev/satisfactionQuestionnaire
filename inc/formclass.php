<?php
	/**
	* Form class inserts form data to dataabse
	*/
	class Form{
		
		function __construct(){
			
        	$this->dbh = dbconnect::getDbh();
        	if (!$this->dbh) {
            	die('Could not connect: ' . mysql_error());
			}
		}

        public function insert_data($answer, $building, $floor){

        // if($answer != '' && $building != '' && $floor != ''){
            
            $day = time();
            $query = $this->dbh->prepare("INSERT INTO answers (thedate ,answer, building, floor) VALUES(?, ?, ?, ?)"); 
            $query->bindparam(1, $day);
            $query->bindparam(2, $answer);
            $query->bindparam(3, $building);
            $query->bindparam(4, $floor);


            $file = "../files/results.csv";
            $current = file_get_contents($file);
            $current .= date("d.m.Y",$day).','.date("H:i",$day).','.$answer.','.$building.','.$floor."\n";
            file_put_contents($file, $current);
            try {

            $query->execute();
                if ($query) { //בודק אם הנתונים הוכנסו למנ
                echo "success";
                } else {
                echo "Failure conncting db!";
                }
            }
            catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        



		// public function insert_data($name, $file, $idNo){
		// 	$query = $this->dbh->prepare("INSERT INTO signitures (name, file, idno) VALUES(?, ?, ?)"); 
		// 	$query->bindparam(1, $name);
		// 	$query->bindparam(2, $file);
		// 	$query->bindparam(3, $idNo);


	
		// 	try {

        //     $query->execute();
	    //         if ($query) { //בודק אם הנתונים הוכנסו למנ
	    //            echo "davdav ";
		// 		} else {
		// 			 echo "Failure conncting db!";
		// 		}
        // 	}
        // 	catch (PDOException $e) {
        //     	die($e->getMessage());
        // 	}
		// }
	}
?>