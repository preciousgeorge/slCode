<?php
ini_set('auto_detect_line_endings', true);

// Set path to CSV file
$file = fopen('slatecode test.csv', "r");



/*
* read each row in the csv file given and pick columns increamentally with each iteration
* @param resouce $csvFile : csv file resource 
* @return string $result
*/
function slateCodeTest($csvFile){
	$result = '';
	$column = 0;
	if($csvFile !== FALSE){
			while ($row = fgetcsv($csvFile, 0, ',')) {
				 $result .= $row[$column++] ." ";
			}
			
	}
	return $result;
}

echo slateCodeTest($file);
echo "\n";
