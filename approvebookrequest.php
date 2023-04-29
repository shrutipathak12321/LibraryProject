<?php

include("data_class.php");

// $request=$_POST['reqid'];
// $userid= $_POST['userid'];
// $bookid= $_POST['bookid'];
// $getdate= date("d/m/Y");
// $days= $_POST['days'];
// $returnDate=Date('d/m/Y', strtotime('+'.$days.'days'));

// $obj=new data();
// $obj->setconnection();


// $obj->approvebook($request,$userid,$bookid,$getdate,$returnDate,$days);



$request=$_GET['reqid'];
$book=$_GET['book'];
$userselect= $_GET['userselect'];
$getdate= date("d/m/Y");
$days= $_GET['days'];

$returnDate=Date('d/m/Y', strtotime('+'.$days.'days'));

$obj=new data();
$obj->setconnection();
$obj->issuebookapprove($book,$userselect,$days,$getdate,$returnDate,$request);
