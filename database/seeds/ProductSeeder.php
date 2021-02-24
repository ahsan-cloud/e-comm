<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ["name" => "Samsung Mobile",
            "price" => "25000",
            "category" => "Mobile",
            "desc" => "Very valuable and good piece of brand which have precious features.",
            "gallery" => "https://www.google.com/search?q=samsung+mobile+phone+images+urls&tbm=isch&source=iu&ictx=1&fir=OLXzGXRBVYfraM%252CrpXV7v0Ljt0JrM%252C_&vet=1&usg=AI4_-kSqwLqWEsL3F4Cj-mx7PreBZXHf8Q&sa=X&ved=2ahUKEwiYkL3Pys_uAhU_SBUIHUaYCeQQ9QF6BAgrEAE#imgrc=OLXzGXRBVYfraM"
        ],
        ["name" => "Oppo Mobile",
        "price" => "21000",
        "category" => "Mobile",
        "desc" => "a smart phone with 4gb ram and mostly features mobile.",
        "gallery" => "https://unsplash.com/photos/6wdRuK7bVTE"
        ],
        ]);
    }
}
