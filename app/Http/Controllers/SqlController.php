<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SqlController extends Controller
{
    public function get(){
        $sql = "INSERT INTO `indonesias`(`id`, `PSNOKA`, `PSNOKALAMA`, `PSNOKALAMA2`, `NAMA`, `NMCETAK`, `JENKEL`, `AGAMA`, `TMPLHR`, `TGLLHR`, `FLAGTANGGUNGAN`, `NOHP`, `NIK`, `NOKTP`, `TMT`, `TAT`, `NPWP`, `EMAIL`, `NOKA`, `KDHUBKEL`, `KDSTAWIN`, `KDNEGARA`, `KDGOLDARAH`, `KDSTATUSPST`, `KDKANTOR`, `TSINPUT`, `TSUPDATE`, `USERINPUT`, `USERUPDATE`, `TSSTATUS`, `DAFTAR`) VALUES ";
        // for($i = 1; $i <= 11; $i++){ // ada 11 file excel
            $i = 1;
            // for($j = 1; $j <= 20; $j){ // karena 1 file excel terdiri dari 20 subfile
                $j = 1;
                if($string = file_get_contents(storage_path('\app\public\indonesia_'.$i.'_'.$j.'.json'))){
                    $jsons = json_decode($string, true);
                    foreach($jsons as $json){
                        $sql .= '(`'.
                        $this->removeStartAndEndString($json['PSNOKA'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['PSNOKALAMA'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['PSNOKALAMA2'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['NAMA'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['NMCETAK'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['JENKEL'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['AGAMA'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['TMPLHR'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['TGLLHR'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['FLAGTANGGUNGAN'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['NOHP'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['NIK'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['NOKTP'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['TMT'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['TAT'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['NPWP'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['EMAIL'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['NOKA'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['KDHUBKEL'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['KDSTAWIN'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['KDNEGARA'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['KDGOLDARAH'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['KDSTATUSPST'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['KDKANTOR'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['TSINPUT'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['TSUPDATE'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['USERINPUT'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['USERUPDATE'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['TSSTATUS'])
                        .'`, `'.
                        $this->removeStartAndEndString($json['DAFTAR'])
                        .'`),';
                    }
                    $sql = substr_replace($sql, "", -1); // hapus koma
                    $sql .= ';'; // tambahkan titik koma
                    Storage::disk('public')->put('sql/indonesia_'.$i.'_'.$j.'.sql', $sql);
                    $sql = '';
                }else{
                    // jika file tidak bisa dibuka
                    // break;
                }
            // }
        // }
    }

    public function removeStartAndEndString($string){
        $string = str_replace('`', '', $string);
        return $string;
        // return addslashes($string);
    }
}
