<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'product_name' => 'Christian Murray Sr.',
                'sku' => '86997939',
                'price' => 100,
                'quantity' => 96,
                'description' => 'Non doloremque nihil ipsam qui sequi distinctio repellendus. Quo ad dicta doloremque et aspernatur ut ea. Commodi error tenetur sit et. Autem illum ad beatae consequuntur aut magni similique aut.',
                'image' => 'uploads/images/products/Jesan_original_photo_6508462.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:26',
                'updated_at' => '2021-12-21 15:47:52',
            ),
            1 => 
            array (
                'product_id' => 2,
                'product_name' => 'Hilario Purdy',
                'sku' => '72966105',
                'price' => 5466,
                'quantity' => 90,
                'description' => 'Non est totam aut odio non. Facilis aut nobis nam officiis. Aspernatur culpa eos suscipit aspernatur vel.',
                'image' => 'uploads/images/products/download_9498143.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:26',
                'updated_at' => '2021-12-21 15:54:11',
            ),
            2 => 
            array (
                'product_id' => 3,
                'product_name' => 'Baylee Nolan',
                'sku' => '40991810',
                'price' => 9179,
                'quantity' => 40,
                'description' => 'Voluptatem voluptas qui eum. Magni deleniti optio et non dignissimos eum. Ut dolores culpa fuga aut iste.',
                'image' => 'sample-pr.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:26',
                'updated_at' => '2021-12-20 13:56:26',
            ),
            3 => 
            array (
                'product_id' => 4,
                'product_name' => 'Merle Bosco',
                'sku' => '69236222',
                'price' => 8082,
                'quantity' => 20,
                'description' => 'Eaque earum tempore eum fuga amet animi. Deleniti dolorem exercitationem sed dolore. Sunt corrupti ea facere odit maxime.',
                'image' => 'sample-pr.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:26',
                'updated_at' => '2021-12-20 13:56:26',
            ),
            4 => 
            array (
                'product_id' => 5,
                'product_name' => 'Samara Lang DDS',
                'sku' => '97084936',
                'price' => 1895,
                'quantity' => 61,
                'description' => 'Commodi ad tenetur sit et autem non harum. Veritatis ab animi quam. Est quam maxime sapiente natus nam. Quidem harum ut non exercitationem.',
                'image' => 'sample-pr.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:26',
                'updated_at' => '2021-12-20 13:56:26',
            ),
            5 => 
            array (
                'product_id' => 6,
                'product_name' => 'Josefina Wolf',
                'sku' => '24560762',
                'price' => 1272,
                'quantity' => 40,
                'description' => 'Voluptas quis qui voluptate. Sed et fuga voluptas tempore consectetur. Eum maiores ex natus quaerat eius. Sed exercitationem provident harum mollitia cupiditate.',
                'image' => 'sample-pr.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:27',
                'updated_at' => '2021-12-20 13:56:27',
            ),
            6 => 
            array (
                'product_id' => 7,
                'product_name' => 'Margarita Schmeler DVM',
                'sku' => '51457296',
                'price' => 7576,
                'quantity' => 33,
                'description' => 'Quam molestiae aspernatur repudiandae facere blanditiis. Reiciendis pariatur veniam ipsum pariatur itaque. Reiciendis tempora et quos aut. Tempora nulla illum ratione quaerat unde.',
                'image' => 'sample-pr.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:27',
                'updated_at' => '2021-12-20 13:56:27',
            ),
            7 => 
            array (
                'product_id' => 8,
                'product_name' => 'Dr. Wilbert Herzog II',
                'sku' => '18158952',
                'price' => 8029,
                'quantity' => 61,
                'description' => 'Itaque voluptatibus odit quis deleniti dolores quod ea. Beatae sed dolores qui sed. Laborum rerum dolores tempore praesentium illum natus quidem modi. Nemo soluta dolor dolorem itaque similique quo.',
                'image' => 'sample-pr.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:27',
                'updated_at' => '2021-12-20 13:56:27',
            ),
            8 => 
            array (
                'product_id' => 9,
                'product_name' => 'Aaron Mills',
                'sku' => '22613575',
                'price' => 9793,
                'quantity' => 27,
                'description' => 'Quam nobis atque deleniti ab nobis aperiam. Dicta eius sit dolores. Quaerat harum quae quia. Eaque assumenda in numquam cum.',
                'image' => 'sample-pr.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:27',
                'updated_at' => '2021-12-20 13:56:27',
            ),
            9 => 
            array (
                'product_id' => 10,
                'product_name' => 'Lesly Koelpin',
                'sku' => '80522062',
                'price' => 3605,
                'quantity' => 5,
                'description' => 'Molestias quisquam rerum cum nesciunt. Reiciendis animi velit a. Id commodi itaque voluptatibus quis qui. Iusto eius nobis eius culpa.',
                'image' => 'sample-pr.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:27',
                'updated_at' => '2021-12-20 13:56:27',
            ),
        ));
        
        
    }
}