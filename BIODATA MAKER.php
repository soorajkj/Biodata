<?php

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $fname = $_POST["fname"];
    $foccupation = $_POST["foccupation"];
    $mname = $_POST["mname"];
    $moccupation = $_POST["moccupation"];
    $dob = $_POST["day"] . " " . $_POST["month"] . " " . $_POST["year"];
    $pob = $_POST["pob"];
    $mobile_number = $_POST["mobile_number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $religion = $_POST["religion"];
    $caste = $_POST["caste"];
    $languages = $_POST["lang"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $blood_group = $_POST["blood"];
    $qualification = $_POST["qualification"];
    $occupation = $_POST["occupation"];
    $skills = $_POST["skills"];
    $hobbies = $_POST["hobbies"];

    // echo $name . "<br>";
    // echo $fname . "<br>";
    // echo $foccupation . "<br>";
    // echo $mname . "<br>";
    // echo $moccupation . "<br>";
    // echo $dob . "<br>";
    // echo $pob . "<br>";
    // echo $mobile_number . "<br>";
    // echo $email . "<br>";
    // echo $address . "<br>";
    // echo $religion . "<br>";
    // echo $languages . "<br>";
    // echo $height . "<br>";
    // echo $weight . "<br>";
    // echo $blood_group . "<br>";
    // echo $qualification . "<br>";
    // echo $occupation . "<br>";
    // echo $skills . "<br>";
    // echo $hobbies . "<br>";

    require("fpdf/fpdf.php");

    $CELL_SIZE = 70;
    $CELL_HEIGHT = 8;
    $HEAD_SIZE = 9;
    $CELL_GAP = 1;
    $BORDER = FALSE;
    $COLOR = 184;
    $FONT_SIZE = 12;
    $FONT_HEAD = 14;


    $pdf = new FPDF();
    $pdf->AddPage();

//######################## MAIN TITLE #########################//

    $pdf->SetFont("Arial", "B", 18);
    $pdf->SetFillColor($COLOR , $COLOR, $COLOR);
    $pdf->Cell(0,15,"BIO-DATA",$BORDER,1,'C', TRUE);
    $pdf->Cell(0,6,"",0,1,'C');

//###########################################################//
    
//######################## HEADINGS #########################//

    $pdf->SetLeftMargin(10);
    $pdf->SetFont("Arial", "", $FONT_HEAD);
    $pdf->SetFillColor($COLOR , $COLOR, $COLOR);
    $pdf->Cell(0,$HEAD_SIZE," Personal Details",$BORDER,1,'', TRUE);
    $pdf->SetFont("Arial", "", $FONT_SIZE);
    $pdf->SetLeftMargin(15);

//###########################################################//

//######################## PERSONAL DETAILS #########################//

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Name",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->Cell(0,$CELL_HEIGHT,$name,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Date Of Birth",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->Cell(0,$CELL_HEIGHT,$dob,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Place Of Birth",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->Cell(0,$CELL_HEIGHT,$pob,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Languages Known",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->MultiCell(0,$CELL_HEIGHT,$languages,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Height",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->Cell(0,$CELL_HEIGHT,$height,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Weight",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->Cell(0,$CELL_HEIGHT,$weight,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Blood Group",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->Cell(0,$CELL_HEIGHT,$blood_group,$BORDER,1);

//###########################################################//

//######################## CONTACT DETAILS #########################//

    $pdf->SetLeftMargin(10);
    $pdf->Cell(0,$CELL_GAP,"",0,1,'C');
    $pdf->SetFont("Arial", "", $FONT_HEAD);
    $pdf->SetFillColor($COLOR , $COLOR, $COLOR);
    $pdf->Cell(0,$HEAD_SIZE," Contact Details",$BORDER,1,'', TRUE);
    $pdf->SetFont("Arial", "", $FONT_SIZE);
    $pdf->SetLeftMargin(15);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Mobile No.",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->Cell(0,$CELL_HEIGHT,$mobile_number,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Email",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->MultiCell(0,$CELL_HEIGHT,$email,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Address",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->MultiCell(0,$CELL_HEIGHT,$address,$BORDER,1);




    $pdf->SetLeftMargin(10);
    $pdf->Cell(0,$CELL_GAP,"",0,1,'C');
    $pdf->SetFont("Arial", "", $FONT_HEAD);
    $pdf->SetFillColor($COLOR , $COLOR, $COLOR);
    $pdf->Cell(0,$HEAD_SIZE," Religion & Caste Details",$BORDER,1,'', TRUE);
    $pdf->SetFont("Arial", "", $FONT_SIZE);
    $pdf->SetLeftMargin(15);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Religion",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->MultiCell(0,$CELL_HEIGHT,$religion,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Caste",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->MultiCell(0,$CELL_HEIGHT,$caste, $BORDER,1);




    $pdf->SetLeftMargin(10);
    $pdf->Cell(0,$CELL_GAP,"",0,1,'C');
    $pdf->SetFont("Arial", "", $FONT_HEAD);
    $pdf->SetFillColor($COLOR , $COLOR, $COLOR);
    $pdf->Cell(0,$HEAD_SIZE," Educational & Professional Details",$BORDER,1,'', TRUE);
    $pdf->SetFont("Arial", "", $FONT_SIZE);
    $pdf->SetLeftMargin(15);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Qualification",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->MultiCell(0,$CELL_HEIGHT,$qualification, $BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Occupation",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->MultiCell(0,$CELL_HEIGHT,$occupation, $BORDER,1);




    $pdf->SetLeftMargin(10);
    $pdf->Cell(0,$CELL_GAP,"",0,1,'C');
    $pdf->SetFont("Arial", "", $FONT_HEAD);
    $pdf->SetFillColor($COLOR , $COLOR, $COLOR);
    $pdf->Cell(0,$HEAD_SIZE," Family Details",$BORDER,1,'', TRUE);
    $pdf->SetFont("Arial", "", $FONT_SIZE);
    $pdf->SetLeftMargin(15);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Fathers Name",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->Cell(0,$CELL_HEIGHT,$fname,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Fathers Occupation",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->Cell(0,$CELL_HEIGHT,$foccupation,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Mothers Name",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->Cell(0,$CELL_HEIGHT,$mname,$BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Mothers Occupation",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->Cell(0,10,$moccupation,$BORDER,1);




    $pdf->SetLeftMargin(10);
    $pdf->Cell(0,$CELL_GAP,"",0,1,'C');
    $pdf->SetFont("Arial", "", $FONT_HEAD);
    $pdf->SetFillColor($COLOR , $COLOR, $COLOR);
    $pdf->Cell(0,$HEAD_SIZE," Skills and Interests",$BORDER,1,'', TRUE);
    $pdf->SetFont("Arial", "", $FONT_SIZE);
    $pdf->SetLeftMargin(15);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Skills",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->MultiCell(0,$CELL_HEIGHT,$skills, $BORDER,1);

    $pdf->Cell($CELL_SIZE,$CELL_HEIGHT,"Hobbies",$BORDER,0);
    $pdf->Cell(10,$CELL_HEIGHT,":",$BORDER,0,'C');
    $pdf->MultiCell(0,$CELL_HEIGHT,$hobbies, $BORDER,1);




    $pdf->output();


}

?>