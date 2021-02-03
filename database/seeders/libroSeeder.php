<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class libroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $libros=[
            ['ISBN'=>'ABC-123',
             'titulo'=>'El Nacho',
             'precio'=>'10000',   
             'stock'=>'50',
             'editorial_fk'=>'1'
            ],
            ['ISBN'=>'CBA-321',
             'titulo'=>'Orgullo y Perjuicio',
             'precio'=>'20000',   
             'stock'=>'40',
             'editorial_fk'=>'2'
            ],
            ['ISBN'=>'DEF-123',
             'titulo'=>'1984',
             'precio'=>'30000',   
             'stock'=>'30',
             'editorial_fk'=>'3'
            ],
            ['ISBN'=>'FED-123',
             'titulo'=>'El Codigo De Mentes',
             'precio'=>'40000',   
             'stock'=>'9',
             'editorial_fk'=>'4'
            ],
            ['ISBN'=>'GHI-321',
             'titulo'=>'El Principito',
             'precio'=>'50000',   
             'stock'=>'0',
             'editorial_fk'=>'5'
            ],
        ];
        DB::table('libro')->insert($libros);
        
    }
}
