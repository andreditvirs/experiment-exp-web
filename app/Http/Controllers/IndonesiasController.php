<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indonesia;

class IndonesiasController extends Controller
{
    public function import_to_db(){
        // for($i = 1; $i <= 11; $i++){ // ada 11 file excel
            $i = 1;
            // for($j = 1; $j <= 20; $j){ // karena 1 file excel terdiri dari 20 subfile
                $j = 1;
                if($string = file_get_contents(storage_path('\app\public\indonesia_'.$i.'_'.$j.'.json'))){
                    $jsons = json_decode($string, true);
                    foreach($jsons as $json){
                        Indonesia::create([
                            'PSNOKA' => $this->removeStartAndEndString($json['PSNOKA']),
                            'PSNOKALAMA' => $this->removeStartAndEndString($json['PSNOKALAMA']),
                            'PSNOKALAMA2' => $this->removeStartAndEndString($json['PSNOKALAMA2']),
                            'NAMA' => $this->removeStartAndEndString($json['NAMA']),
                            'NMCETAK' => $this->removeStartAndEndString($json['NMCETAK']),
                            'JENKEL' => $this->removeStartAndEndString($json['JENKEL']),
                            'AGAMA' => $this->removeStartAndEndString($json['AGAMA']),
                            'TMPLHR' => $this->removeStartAndEndString($json['TMPLHR']),
                            'TGLLHR' => $this->removeStartAndEndString($json['TGLLHR']),
                            'FLAGTANGGUNGAN' => $this->removeStartAndEndString($json['FLAGTANGGUNGAN']),
                            'NOHP' => $this->removeStartAndEndString($json['NOHP']),
                            'NIK' => $this->removeStartAndEndString($json['NIK']),
                            'NOKTP' => $this->removeStartAndEndString($json['NOKTP']),
                            'TMT' => $this->removeStartAndEndString($json['TMT']),
                            'TAT' => $this->removeStartAndEndString($json['TAT']),
                            'NPWP' => $this->removeStartAndEndString($json['NPWP']),
                            'EMAIL' => $this->removeStartAndEndString($json['EMAIL']),
                            'NOKA' => $this->removeStartAndEndString($json['NOKA']),
                            'KDHUBKEL' => $this->removeStartAndEndString($json['KDHUBKEL']),
                            'KDSTAWIN' => $this->removeStartAndEndString($json['KDSTAWIN']),
                            'KDNEGARA' => $this->removeStartAndEndString($json['KDNEGARA']),
                            'KDGOLDARAH' => $this->removeStartAndEndString($json['KDGOLDARAH']),
                            'KDSTATUSPST' => $this->removeStartAndEndString($json['KDSTATUSPST']),
                            'KDKANTOR' => $this->removeStartAndEndString($json['KDKANTOR']),
                            'TSINPUT' => $this->removeStartAndEndString($json['TSINPUT']),
                            'TSUPDATE' => $this->removeStartAndEndString($json['TSUPDATE']),
                            'USERINPUT' => $this->removeStartAndEndString($json['USERINPUT']),
                            'USERUPDATE' => $this->removeStartAndEndString($json['USERUPDATE']),
                            'TSSTATUS' => $this->removeStartAndEndString($json['TSSTATUS']),
                            'DAFTAR' => $this->removeStartAndEndString($json['DAFTAR']),
                        ]);
                    }
                }else{
                    // jika file tidak bisa dibuka
                    echo "File Is Can't Openned";
                }
                echo 'Saved_'.$i.'_'.$j;
            // }
        // }
    }

    public function removeStartAndEndString($string){
        $string = str_replace('`', '', $string);
        $string = str_replace('"', '', $string);
        return $string;
        // return addslashes($string);
    }
}
