<?php 
// connect to db
 $db=mysqli_connect("localhost","root","","room");
 // check connection    
if(!$db){
       die("connection failed:". mysqli_connect_error());
   }
 // if register buttom click
if(isset($_POST['register']))
 {
    $pgname=$_POST['pgname'];
    $owner_id=$_POST['ownerid'];
    $acc_id=$_POST['pgid'];
	$mobno=$_POST['mobno'];
    $location=$_POST['location'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $room_type=$_POST['roomtype'];
    $tenant_pref=$_POST['tanantpref'];
    $rent=$_POST['rent'];
    $food_servies=$_POST['foodserives'];
    $furnished=$_POST['furnished'];
    $owner_len=strlen($owner_id);
    
     $sql="INSERT INTO  accomodation(OWNER_ID,ACCOMODATION_ID,A_NAME,MOBNO,LOCATION,CITY,PIN_CODE,ROOM_TYPE,TENANT_PREF,RENT,FOOD_SERIVES,FURNISHED) VALUES('$owner_id','$acc_id','$pgname',$mobno,'$location','$city','$pincode','$room_type','$tenant_pref','$rent','$food_servies','$furnished')";
    //check validation 
    if(empty($acc_id)){
        $msg="Enter PG ID";
    }else
        if(empty(  $owner_id)){
            $msg="Enter Aadhar No";
        }else 
		 if(!is_numeric( $owner_id)){
            $msg="Enter valid Aadhar No";
        }else 
            if($owner_len!=12){
                $msg="Enter 12 digit Aadhar No ";
            }else
            if( empty($pgname)){
                $msg=" Enter PG name ";
            }else
            if( empty($mobno)){
                $msg=" Enter Mobile Number ";
            }else
			 if( strlen($mobno)!=10){
                $msg=" Enter 10 digit Mobile Number ";
            }else
			 if( !is_numeric($mobno)){
                $msg=" Enter Valid Mobile Number ";
            }else
                
            if(empty($location)){
                $msg="Enter Location";
            }else
                if(empty($city)){
                    $msg="Enter City";
                }else
                    if(empty($pincode)){
                        $msg="Enter Pincode";
                    }else
					if(!is_numeric($pincode)){
                        $msg="Enter Valid Pincode";
                    }else
                     
                                if(empty($rent)){
                                    $msg="Enter Rent";
                                }else
                                    if($rent<0){
                                        $msg="Rent must be positive";
                                         
                                    }else
                                        if(mysqli_query($db,$sql)){
                                            $s_msg="User Registrated";
                                        }else{
                                            $msg="user already  registrated with same aadhar no and same PG name!!";
                                        }
 



}  

 
mysqli_close($db);
?>
