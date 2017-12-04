<?php 
if(isset($_POST['submit_form']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dcity=$_POST['dcity'];
    $ocity=$_POST['ocity'];
    $vehicle=$_POST['vehicle'];
    $date1=$_POST['date1'];
        $service1=$_POST['service'];

    $message=$_POST['message'];    

    $email_message="New service request at dolphinarium. The customer details are as follows - Name : ".$name.", Email : ".$email.", Destination :".$dcity." , Origin :".$ocity." , Vechile : ".$vehicle." , Date : ".$date1." , Service : ".$service1." His message says -".$message;
// ==============mail the details========
mail("hrishabhsingh175@gmail.com","Transport service quotation",$email_message);


//===========
mail("info@dtlpl.in","Transport service quotation",$email_message);

}

?>

