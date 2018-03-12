<!-- ========= EDIT SCHOOLYEAR =========== -->
<?php
session_start();
include 'conn.php';
	if(isset($_POST['btn_save']))
	{
		$txt_id = $_POST['hidden_id'];
	    $Call_Numbers = $_POST['Call_Numbers'];
		$Authors = $_POST['Authors'];
		$Title = $_POST['Title'];
		$Editor = $_POST['Editor'];
		$Edition = $_POST['Edition'];
		$Place_Of_Publ = $_POST['Place_Of_Publ'];
		$Publisher = $_POST['Publisher'];
		$Date_Of_Publ = $_POST['Date_Of_Publ'];
		$Page_No = $_POST['Page_No'];
		$Series = $_POST['Series'];
		$Notation1 = $_POST['Notation1'];
		$Notation2 = $_POST['Notation2'];
		$ISBN_No = $_POST['ISBN_No'];
		$ISSN_No = $_POST['ISSN_No'];
		$Accession_No = $_POST['Accession_No'];
		$Subject = $_POST['Subject'];
		$Quantities = $_POST['Quantities'];
		$Total_remaining_books = $_POST['Total_remaining_books'];
		$Abstractt = $_POST['Abstractt'];

	    $query = mysqli_query($conn,"UPDATE add_book_records_copy SET Call_Numbers = '".$Call_Numbers."', Authors = '".$Authors."', Title = '".$Title."', Editor = '".$Editor."', Edition = '".$Edition."', Place_Of_Publ = '".$Place_Of_Publ."', Publisher = '".$Publisher."',Date_Of_Publ = '".$Date_Of_Publ."',Page_No = '".$Page_No."',Series = '".$Series."',Notation1 = '".$Notation1."',Notation2 = '".$Notation2."',ISBN_No = '".$ISBN_No."',ISSN_No = '".$ISSN_No."',Accession_No = '".$Accession_No."',Subject = '".$Subject."',Quantities = '".$Quantities."',Total_remaining_books = '".$Total_remaining_books."',Abstractt = '".$Abstractt."'  where ID = '".$txt_id."' ");

	    if($query == true){
	        $_SESSION['edit'] = 1;
	        header("location: manage.php");
	    }

		if(mysqli_error($conn)){
			$_SESSION['duplicate'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
		}
	}
?>