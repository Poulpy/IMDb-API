<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleAkasSeeder extends Seeder
{


    private function nullifNA($str) {
        if (strcmp($str, "\N") === 0) {
            return null;
        } else {
            return $str;
        }
    }
    /**
     * Run the database seeds.
     * File's number of lines: 26357849
     *
     * @return void
     */
    public function run()
    {
        $row = 0;
        $LIMIT = 20;
        if (($handle = fopen(__DIR__ . "/title.akas.tsv", "r")) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE)
            {
                
                $title_akas_array[$row] = array('titleId'      => $data[0],
                                          'ordering' => $data[1],
                                          'title' => $data[2],
                                          'region'   => $this->nullifNA($data[3]),
                                          'language'   => $this->nullifNA($data[4]),
                                          'types'   => $this->nullifNA($data[5]),
                                          'attributes'   => $this->nullifNA($data[6]),
                                          'isOriginalTitle'   => ($data[7] === '0' ? false : true));
                $row++;
                if ($row == $LIMIT) break;
            }
            fclose($handle);
            DB::table('title_akas')->insert($title_akas_array);
        }
    }

}
