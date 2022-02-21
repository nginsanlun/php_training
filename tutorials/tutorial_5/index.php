<?php 
// Txt
$file = fopen('hello.txt', 'r') or die('Unable to open file!');
echo fread($file, filesize('hello.txt'));
fclose($file);

// Excel
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

$spreadsheet = $reader->load('books.xlsx');
$sheet = $spreadsheet->getActiveSheet()->toArray();
unset($sheet[0]);
$i = 1;
echo '<br>Hello Excel!<br>';

foreach ($sheet as $s) {
echo ' '.$s[0]. ','.$s[1].','.$s[2].','.$s[3].','.$s[4].'<br>';
$i++;
}

// CSV
use League\Csv\Reader;

//load the CSV document from a file path
$csv = Reader::createFromPath('hello.csv', 'r');
$csv->setHeaderOffset(0);

$header = $csv->getHeader(); //returns the CSV header record
$records = $csv->getRecords(); //returns all the CSV records as an Iterator object

echo $csv->toString(); //returns the CSV document as a string
echo '<br>';

// Doc
//require 'vendor/autoload.php';
//use PhpOffice\PhpWord\Reader\Docx;
$phpWord = \PhpOffice\PhpWord\IOFactory::load("hello.docx");
$text = '';
$sections = $phpWord->getSections();
$section = $sections[0];
$arrays = $section->getElements();
foreach ($arrays as $value) {
    print_r($value->getElements()[0]->getText());
}

?>

