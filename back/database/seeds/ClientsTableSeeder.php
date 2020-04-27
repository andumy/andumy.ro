<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Suzuki Romania',
            'Infinit Stefanini',
            'Microsoft Romania',
            'V8 Agency',
            'Lucia Olaru',
            'Universitatea Politehnica Bucuresti',
            'Valve Corporation'            
        ];
        foreach($names as $name){
            $client = new Client([
                'name' => $name,
            ]);
            $client->save();
        }
    }
}
