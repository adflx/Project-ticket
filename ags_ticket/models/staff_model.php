<?php
//officer_model.php


function get_staff($idd){
	
	include "config.jw.php";
	
	$conn = new mysqli($host, $user, $pass, $db);
	
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
	
	
	
	$sql = "SELECT * FROM ags_staff WHERE username = '$idd'";
	
	$result = mysqli_query($conn, $sql);	

	
	$myrow=mysqli_fetch_row($result);
	
			 $info = array();
			$info['username'] = $myrow[0];
			$info['fistname'] = $myrow[1];
			$info['lastname'] = $myrow[2];
			$info['mi'] = $myrow[3];
			
			$info['course'] = $myrow[4];
			$info['year'] = $myrow[5];
			$info['section']= $myrow[6];
			$info['position']= $myrow[7];
		
			
	
	
	return $info;
}




function get_staffs(){
	
	$tbl = "ags_staff";
	
	include "config.jw.php";
	
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	
	if( mysqli_connect_errno($conn) ){
		echo "Unable to connect to DB server.";
	}
	
	
	
	$sql = "SELECT * FROM $tbl";
	
	
	
	$result = mysqli_query($conn, $sql);
	
	
	
	if( $myrow=mysqli_fetch_array($result) ){
		
		$ags_staff = array();
		do{
			
			$info = array();
			$info['id'] = $myrow['username'];
			$info['name'] = $myrow['lname'].', '.$myrow['fname'].' '.$myrow['mi'];
			$info['course'] = $myrow['course'];
			$info['year'] = $myrow['year'];
			$info['section']= $myrow['section'];
			$info['position']= $myrow['position'];
			
			$ags_staff[] = $info;		
			
		}while($myrow=mysqli_fetch_array($result));
		
	}else{
		$ags_staff = '';
	}		
	return $ags_staff;
}



function edit_staff($sql){
	$tbl = "ags_staff";
	
	include "config.jw.php";
	
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if ($conn->query($sql) === TRUE) {
  //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}

function login_staff($idnum, $passwd){
	$tbl = "ags_staff";
	include "config.jw.php";
	$conn = new mysqli($host,$user,$pass,$db);
	//$passw = str_split($passwd,1);
	//print_r($passw);
	$encpass = md5($passwd);
	//echo'<br/>';
	//print_r($passwd);
	//echo'<br/>';
	$sql = "SELECT * FROM $tbl WHERE username='$idnum' AND passwd='$encpass'";
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
		$result=mysqli_query($conn, $sql);
		if($numrows = mysqli_fetch_array($result)){	
		
			try{
				if($numrows>0){
					
					//print_r($result);
					$conn->close();
					return true;
				}
				else{
					echo 'ret false';
					$conn->close();
					return false;
				}
			}catch(Exception $e){
				//echo 'Invalid ID Number or passwd!';
			}
		}
	$conn->close();
	return false;
}

function isEqualsOldPass($idnum,$oldpass){
	$tbl = "ags_staff";
	include "config.jw.php";
	$conn = new mysqli($host,$user,$pass,$db);
	
	$sql = "SELECT * FROM $tbl WHERE username='$idnum' AND passwd='$oldpass'";
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		$result=mysqli_query($conn, $sql);
		if($numrows = mysqli_fetch_array($result)){	
		return true;
				}
			else	
				return false;
	}
}



function getstaff($idnum){
	$tbl = "ags_staff";
	include "config.jw.php";
	$conn = new mysqli($host,$user,$pass,$db);
	
	$sql = "SELECT * FROM $tbl WHERE username='$idnum'";
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
		$result=mysqli_query($conn, $sql);
		if($numrows = mysqli_fetch_array($result)){	
		
				return $numrows['role_id'];
				}
				
				return null;
	}
			

function getstaffName($idnum){
	$tbl = "ags_staff";
	include "config.jw.php";
	$conn = new mysqli($host,$user,$pass,$db);
	
	$sql = "SELECT * FROM $tbl WHERE username='$idnum'";
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
		$result=mysqli_query($conn, $sql);
		if($numrows = mysqli_fetch_array($result)){	
		
				return $numrows['username'];
				}
				
				return null;
			}
	

function javaMd5($data) {
    assert(is_array($data));

    $dataString = byteArrayToString($data);
	//echo 'datastr';print_r($dataString);
	
    $hashString = md5($dataString);
    //echo 'hashstr';print_r($hashString);
	//assert(strlen($hashString) == 16);

    $hash = stringToByteArray($hashString);

    //assert(count($hash) == 16);
    return $hashString;
}

function stringToByteArray($s) {
    assert(is_string($s));

    $result = array_fill(0, strlen($s), 0);
    for ($i = 0; $i < strlen($s); $i++) {
        $result[$i] = ord($s[$i]);
    }
    return $result;
}

function byteArrayToString($b) {
    assert(is_array($b));

    $asciiString = '';
    for ($i = 0; $i < count($b); $i++) {
        assert($b[$i] >= 0 && $b[$i] <= 255);
		
        $asciiString .= chr($b[$i]);
		print_r($asciiString);
    }

    $utf8String = utf8_encode($asciiString);

    return $utf8String;
}

function isRestricted($position, $task){
	if($position != null)switch($position){
		case 'Adviser':case 'Co-Adviser':case 'President': case 'Vice President': return false;
		case "Secretary":
                if("Student" == $task || "Officer"==$task || "Report"== $task || "Events"== $task){
                    return false;
                }   break;
            case "Treasurer":
                 if("Expenses"==$task || "Collection"== $task){
                    return false;
                }   break;
            case "Auditor":
                if("Expenses"==$task || "Collection"==$task){
                    return false;
                }   break;
            case "Business Manager":
                if("Report"==$task){
                    return false;
                }   break;
            default:
                break;
        }
        return true;
	}
	


?>