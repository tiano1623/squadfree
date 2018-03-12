<?php
include 'conn.php';

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

	$sql = "INSERT INTO add_book_records_copy (Call_Numbers,Authors,Title,Editor,Edition,Place_Of_Publ,Publisher,Date_Of_Publ,Page_No,Series,Notation1,Notation2,ISBN_No,ISSN_No,Accession_No,Subject,Quantities,Total_remaining_books,Abstractt) VALUES (
	'$Call_Numbers',
	'$Authors',
	'$Title',
	'$Editor',
	'$Edition',
	'$Place_Of_Publ',
	'$Publisher',
	'$Date_Of_Publ',
	'$Page_No',
	'$Series',
	'$Notation1',
	'$Notation2',
	'$ISBN_No',
	'$ISSN_No',
	'$Accession_No',
	'$Subject',
	'$Quantities',
	'$Total_remaining_books',
	'$Abstractt')";

	$result = $conn->query($sql);

	header('Location: manage.php');
