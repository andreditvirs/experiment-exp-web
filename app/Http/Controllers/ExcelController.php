<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Imports\CsvImport;

class ExcelController extends Controller
{
    public function get(){
	// for($i = 1; $i <= 11; $i++){
		$i=11; // file index
	        $excelFile = public_path().'/files/indonesia_'.$i.'.csv';
	        $datas = Excel::import(new CsvImport($i), $excelFile);
	// }
    }
}
