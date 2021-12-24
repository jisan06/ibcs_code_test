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
                'product_name' => 'Games acc 1',
                'sku' => '86997939',
                'price' => 1200,
                'quantity' => 50,
                'description' => 'Non doloremque nihil ipsam qui sequi distinctio repellendus. Quo ad dicta doloremque et aspernatur ut ea. Commodi error tenetur sit et. Autem illum ad beatae consequuntur aut magni similique .Commodi error tenetur sit et. Autem illum ad beatae consequuntur aut magni similiqueaut.',
                'image' => 'uploads/images/products/71NBQ2a52CL._AC_UL320__2081116.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:26',
                'updated_at' => '2021-12-24 13:11:34',
            ),
            1 => 
            array (
                'product_id' => 2,
                'product_name' => 'Video games 134',
                'sku' => '72966105',
                'price' => 900,
                'quantity' => 20,
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use',
                'image' => 'uploads/images/products/31Zm5UaF-sL._AC_UL320__2660044.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:26',
                'updated_at' => '2021-12-24 13:12:54',
            ),
            2 => 
            array (
                'product_id' => 3,
                'product_name' => 'gmt chair09',
                'sku' => '40991810',
                'price' => 9179,
                'quantity' => 40,
            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32',
                'image' => 'uploads/images/products/71XnZP3ofCL._AC_UL320__1977092.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:26',
                'updated_at' => '2021-12-24 13:13:44',
            ),
            3 => 
            array (
                'product_id' => 4,
                'product_name' => 'Bgm chaor 02',
                'sku' => '69236222',
                'price' => 24000,
                'quantity' => 20,
            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32',
                'image' => 'uploads/images/products/61HEqHMkRhL._AC_UL320__9756555.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:26',
                'updated_at' => '2021-12-24 13:14:25',
            ),
            4 => 
            array (
                'product_id' => 5,
                'product_name' => 'Gst high comfort chair 03',
                'sku' => '97084936',
                'price' => 3000,
                'quantity' => 20,
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
                'image' => 'uploads/images/products/71y8rPagzDL._AC_UL320__1558954.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:26',
                'updated_at' => '2021-12-24 13:15:09',
            ),
            5 => 
            array (
                'product_id' => 6,
                'product_name' => 'mouse 9454tgt ware01',
                'sku' => '24560762',
                'price' => 450,
                'quantity' => 50,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'image' => 'uploads/images/products/61UxfXTUyvL._AC_UY218__5722876.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:27',
                'updated_at' => '2021-12-24 13:16:00',
            ),
            6 => 
            array (
                'product_id' => 7,
                'product_name' => 'mouse 5654tgt ware02',
                'sku' => '51457296',
                'price' => 7576,
                'quantity' => 33,
                'description' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure',
                'image' => 'uploads/images/products/61mpMH5TzkL._AC_UY218__5985447.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:27',
                'updated_at' => '2021-12-24 13:16:35',
            ),
            7 => 
            array (
                'product_id' => 8,
                'product_name' => 'Headphone mr001',
                'sku' => '18158952',
                'price' => 1800,
                'quantity' => 50,
                'description' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure

But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure',
                'image' => 'uploads/images/products/61Ufzi3lugL._AC_UY218__6252913.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:27',
                'updated_at' => '2021-12-24 13:17:52',
            ),
            8 => 
            array (
                'product_id' => 9,
                'product_name' => 'Keyboard s34054',
                'sku' => '22613575',
                'price' => 300,
                'quantity' => 100,
                'description' => '"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."',
                'image' => 'uploads/images/products/61WgmLgwuQL._AC_UY218__7933778.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:27',
                'updated_at' => '2021-12-24 13:18:43',
            ),
            9 => 
            array (
                'product_id' => 10,
                'product_name' => 'Joystick premier j009232',
                'sku' => '80522062',
                'price' => 600,
                'quantity' => 50,
                'description' => '"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"

"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"',
                'image' => 'uploads/images/products/615YaAiA-ML._AC_UL320__5131740.jpg',
                'deleted_at' => NULL,
                'created_at' => '2021-12-20 13:56:27',
                'updated_at' => '2021-12-24 13:20:00',
            ),
        ));
        
        
    }
}