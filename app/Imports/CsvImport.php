<?php

namespace App\Imports;

use App\Models\Indonesia;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Storage;

class CsvImport implements ToCollection
{

	public $id;
	public function  __construct($id)
    	{
        	$this->id= $id;
	}

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $datas = array();
	$j = 1;
        foreach($collection as $data){
		// if($j % 5000 == 0){
		// 	Storage::disk('public')->put('json/indonesia_'.$this->id.'_'.($j/5000).'.json', json_encode($datas));
        //     unset($datas);
		// 	$datas = array();
		// }

            $data = trim($data, '[');
            $data = trim($data, ']');
            $data = stripslashes($data);
            $data = trim($data, '"');
            $array = explode(',', $data);

            for($i = 0; $i < 30; $i++){
                if(!isset($array[$i])){
                    $array[$i] = null;
                }
            }

            $data = [
                'PSNOKA'=> $array[0],
                'PSNOKALAMA'=> $array[1],
                'PSNOKALAMA2'=> $array[2],
                'NAMA'=> $array[3],
                'NMCETAK'=> $array[4],
                'JENKEL'=> $array[5],
                'AGAMA'=> $array[6],
                'TMPLHR'=> $array[7],
                'TGLLHR'=> $array[8],
                'FLAGTANGGUNGAN'=> $array[9],
                'NOHP'=> $array[10],
                'NIK'=> $array[11],
                'NOKTP'=> $array[12],
                'TMT'=> $array[13],
                'TAT'=> $array[14],
                'NPWP'=> $array[15],
                'EMAIL'=> $array[16],
                'NOKA'=> $array[17],
                'KDHUBKEL'=> $array[18],
                'KDSTAWIN'=> $array[19],
                'KDNEGARA'=> $array[20],
                'KDGOLDARAH'=> $array[21],
                'KDSTATUSPST'=> $array[22],
                'KDKANTOR'=> $array[23],
                'TSINPUT'=> $array[24],
                'TSUPDATE'=> $array[25],
                'USERINPUT'=> $array[26],
                'USERUPDATE'=> $array[27],
                'TSSTATUS'=> $array[28],
                'DAFTAR'=> $array[29],
            ];

            array_push($datas, $data);
		$j++;

        }
    Storage::disk('public')->put('json/indonesia_'.$this->id.'_'.($j/5000).'.json', json_encode($datas));
	echo 'Saved_'.$this->id;
        // return $collection;
    }
}
