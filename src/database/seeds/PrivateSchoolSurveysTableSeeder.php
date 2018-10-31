<?php

namespace Droplister\EduCore\Database\Seeds;

use Droplister\EduCore\App\PrivateSchoolSurvey;
use Illuminate\Database\Seeder;

class PrivateSchoolSurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://nces.ed.gov/surveys/pss/pssdata.asp
        $file = fopen(storage_path('pss1516_pu_trimmed.csv'), 'r');

        // CSV -> Database
        $skip = 0; // Skip
        while (($data = fgetcsv($file, 0, ',')) !== false) {
            // Skip First Row
            if($skip++ === 0) {
                continue;
            }

            // Trim Data
            $data = array_map('trim', $data);

            // Nullables
            $data = array_map(function($value) {
                return $value !== '' ? $value : null;
            }, $data);

            // Load File
            PrivateSchoolSurvey::create([
                'csource' => $data[0],
                'p135' => $data[1],
                'p140' => $data[2],
                'p145' => $data[3],
                'p150' => $data[4],
                'p155' => $data[5],
                'p160' => $data[6],
                'p165' => $data[7],
                'p170' => $data[8],
                'p175' => $data[9],
                'p180' => $data[10],
                'p185' => $data[11],
                'p190' => $data[12],
                'p195' => $data[13],
                'p200' => $data[14],
                'p205' => $data[15],
                'p210' => $data[16],
                'p215' => $data[17],
                'p220' => $data[18],
                'p225' => $data[19],
                'p230' => $data[20],
                'p235' => $data[21],
                'p240' => $data[22],
                'p245' => $data[23],
                'p250' => $data[24],
                'p255' => $data[25],
                'p260' => $data[26],
                'p265' => $data[27],
                'p270' => $data[28],
                'p275' => $data[29],
                'p280' => $data[30],
                'p285' => $data[31],
                'p290' => $data[32],
                'p295' => $data[33],
                'p300' => $data[34],
                'p305' => $data[35],
                'p320' => $data[36],
                'p330' => $data[37],
                'p325' => $data[38],
                'p316' => $data[39],
                'p318' => $data[40],
                'p310' => $data[41],
                'p332' => $data[42],
                'p335' => $data[43],
                'p340' => $data[44],
                'p345' => $data[45],
                'p350' => $data[46],
                'p360' => $data[47],
                'p365' => $data[48],
                'p370' => $data[49],
                'p385' => $data[50],
                'p390' => $data[51],
                'p395' => $data[52],
                'p400' => $data[53],
                'p405' => $data[54],
                'p410' => $data[55],
                'p415' => $data[56],
                'p420' => $data[57],
                'p425' => $data[58],
                'p430' => $data[59],
                'p435' => $data[60],
                'p440' => $data[61],
                'p445' => $data[62],
                'p450' => $data[63],
                'p455' => $data[64],
                'p460' => $data[65],
                'p465' => $data[66],
                'p467' => $data[67],
                'p468' => $data[68],
                'p470' => $data[69],
                'p480' => $data[70],
                'p485' => $data[71],
                'p490' => $data[72],
                'p492' => $data[73],
                'p495' => $data[74],
                'p500' => $data[75],
                'p505' => $data[76],
                'p510' => $data[77],
                'p515' => $data[78],
                'p520' => $data[79],
                'p522' => $data[80],
                'p525' => $data[81],
                'p530' => $data[82],
                'p535' => $data[83],
                'p540' => $data[84],
                'p542' => $data[85],
                'p545' => $data[86],
                'p550' => $data[87],
                'p555' => $data[88],
                'p575' => $data[89],
                'p580' => $data[90],
                'p585' => $data[91],
                'p590' => $data[92],
                'p600' => $data[93],
                'p602' => $data[94],
                'p605' => $data[95],
                'p610' => $data[96],
                'p620' => $data[97],
                'p622' => $data[98],
                'p630' => $data[99],
                'p635' => $data[100],
                'p640' => $data[101],
                'p645' => $data[102],
                'p650' => $data[103],
                'p655' => $data[104],
                'p660' => $data[105],
                'p661' => $data[106],
                'p662' => $data[107],
                'p663' => $data[108],
                'p664' => $data[109],
                'p665' => $data[110],
                'ppin' => str_pad($data[111], 8, '0', STR_PAD_LEFT),
                'pinst' => $data[112],
                'paddrs' => $data[113],
                'pcity' => $data[114],
                'pstabb' => $data[115],
                'pzip' => str_pad($data[116], 5, '0', STR_PAD_LEFT),
                'pzip4' => $data[117],
                'pcnty' => $data[118],
                'pcntnm' => $data[119],
                'pl_add' => $data[120],
                'pl_cit' => $data[121],
                'pl_stabb' => $data[122],
                'pl_zip' => str_pad($data[123], 5, '0', STR_PAD_LEFT),
                'pl_zip4' => $data[124],
                'region' => $data[125],
                'pstansi' => $data[126],
                'ulocale16' => $data[127],
                'latitude16' => $data[128],
                'longitude16' => $data[129],
                'sldlst16' => $data[130],
                'sldust16' => $data[131],
                'stcd16' => $data[132],
                'logr2016' => $data[133],
                'higr2016' => $data[134],
                'frame' => $data[135],
                'tabflag' => $data[136],
                'typology' => $data[137],
                'relig' => $data[138],
                'orient' => $data[139],
                'diocese' => $data[140],
                'level' => $data[141],
                'numstuds' => $data[142],
                'size' => $data[143],
                'numteach' => $data[144],
                'ucommtyp' => $data[145],
                'tothrs' => $data[146],
                'males' => $data[147],
                's_kg' => $data[148],
                'p_indian' => $data[149],
                'p_asian' => $data[150],
                'p_pacific' => $data[151],
                'p_hisp' => $data[152],
                'p_white' => $data[153],
                'p_black' => $data[154],
                'p_tr' => $data[155],
                'sttch_rt' => $data[156],
            ]);
        }
    }
}