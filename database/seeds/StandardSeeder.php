<?php

use Illuminate\Database\Seeder;

class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Standard::create([
            'name'=>'LKG',
            'display_name'=>'LKG'
        ]);

        \App\Standard::create([
            'name'=>'UKG',
            'display_name'=>'UKG'
        ]);
        
        for($i = 1;$i <= 12; $i++){
            \App\Standard::create([
                'name'=>$this->ordinal($i),
                'display_name'=>$this->ordinal($i).' Class'
            ]);
        }
    }

    public function ordinal($number) {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($number % 100) >= 11) && (($number%100) <= 13))
            return $number. 'th';
        else
            return $number. $ends[$number % 10];
    }
}
