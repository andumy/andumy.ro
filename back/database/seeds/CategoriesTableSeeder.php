<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            'Branding',
            'Graphic Design, 3D Art & VFX',
            'Web Development',
            'Data Science',
            'Desktop Development',
            'Digital Media Development',
            
        ];
        foreach($services as $key => $service){
            $category = new Category([
                'name' => $service,
                'order' => $key,
            ]);
            $category->save();
        }
    }
}
