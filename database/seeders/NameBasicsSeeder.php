<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NameBasicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * File's number of lines: 10747437
     *
     * @return void
     */
    public function run()
    {
        $row = 0;
        echo __DIR__ . "/name.basics.tsv";
        if (($handle = fopen(__DIR__ . "/name.basics.tsv", "r")) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE)
            {
                // $num = count($data);
                // echo "<p> $num fields in line $row: <br /></p>\n";
                // $row++;
                // for ($c=0; $c < $num; $c++)
                // {
                //     echo $data[$c] . "<br />\n";
                // }


                
                $name_basics_array[$row] = array('nconst'      => $data[0],
                                          'primary_name' => $data[1],
                                          'birth_year'   => $data[2],
                                          'death_year'   => $data[3]);
                $row++;
                if ($row == 20) break;
            }
            fclose($handle);
            DB::table('name_basics')->insert($name_basics_array);
        }
    }
}
