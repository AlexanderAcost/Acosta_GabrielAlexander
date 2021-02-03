<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class editorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $editoriales=[
            
            ['nombre'=>'Norma',
             'direccion'=>'Av. El Dorado 90-10',
             'ciudad'=>'Bogota',   
             'telefono'=>'426652'
            ],
            ['nombre'=>'Mc Graw Hill',
             'direccion'=>'Carrera 85 k #46a-66',
             'ciudad'=>'Bogota',   
             'telefono'=>'3102266'
            ],
            ['nombre'=>'Alfaomega Colombiana',
             'direccion'=>'Cl, 62 #2046',
             'ciudad'=>'Bogota',   
             'telefono'=>'485210'
            ],
            ['nombre'=>'Los Tres Editores S.A.S',
             'direccion'=>'Cl. 32 #8a-95',
             'ciudad'=>'Cali',   
             'telefono'=>'125520'
            ],
            ['nombre'=>'La Santillana',
             'direccion'=>'Cra 82 # 11241 N 33AA',
             'ciudad'=>'Medellin',   
             'telefono'=>'700022'
            ]
           
        ];
        DB::table('editorial')->insert($editoriales);


    }
}
