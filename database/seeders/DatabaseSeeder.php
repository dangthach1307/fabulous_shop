<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'username' => 'CodeLean',
                'email' => 'CodeLean@gmail.com',
                'password' => Hash::make('123456'),
                'first_name' => 'CodeLean',
                'last_name' => 'CodeLean',
                'country' => 'Country',
                'street_address' => 'Street Address',
                'postcode_zip' => 'Postcode Zip',
                'town_city' => 'Town City',
                'avatar' => null,
                'level' => 0,
                'status' => 1,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'country' => 'Country',
                'street_address' => 'Street Address',
                'postcode_zip' => 'Postcode Zip',
                'town_city' => 'Town City',
                'avatar' => null,
                'level' => 1,
                'status' => 1,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 1,
                'title' => 'The Personality Trait That Makes People Happier',
                'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.',
                'image' => 'blog-1.jpg',
                'category' => 'TRAVEL',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.',
                'status' => 1
            ],
            [
                'user_id' => 1,
                'title' => 'This was one of our first days in Hawaii last week.',
                'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.',
                'image' => 'blog-2.jpg',
                'category' => 'CodeLeanON',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.',
                'status' => 1
            ],
        ]);
        DB::table('blog_comments')->insert([
            [
                'blog_id' => 1,
                'user_id' => 2,
                'email' => 'admin@gmail.com',
                'name' => 'Admin',
                'messages' => 'Great post!',
            ],
            [
                'blog_id' => 1,
                'user_id' => 1,
                'email' => 'CodeLean@gmail.com',
                'name' => 'CodeLean',
                'messages' => 'Thanks!',
            ],
            [
                'blog_id' => 2,
                'user_id' => 2,
                'email' => 'admin@gmail.com',
                'name' => 'Admin',
                'messages' => 'Nice photo!',
            ],
        ]);
        DB::table('brands')->insert([
            [
                'name' => 'Nike',
                'slug' => 'nike',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => 'brand-1.jpg',
                'meta_title' => 'Nike',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'meta_keywords' => 'nike, sport, fashion',
                'tag' => 'nike',
                'status' => 1,
            ],
            [
                'name' => 'Adidas',
                'slug' => 'adidas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => 'brand-2.jpg',
                'meta_title' => 'Adidas',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'meta_keywords' => 'adidas, sport, fashion',
                'tag' => 'adidas',
                'status' => 1,
            ],
            [
                'name' => 'Converse',
                'slug' => 'converse',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => 'brand-3.jpg',
                'meta_title' => 'Converse',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'meta_keywords' => 'converse, fashion, lifestyle',
                'tag' => 'converse',
                'status' => 1,
            ],
        ]);

        DB::table('categories')->insert([
            [
                'name' => 'TRAVEL',
                'slug' => 'travel',
                'parent_id'=>0,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => 'category-1.jpg',
                'meta_title' => 'TRAVEL',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'meta_keywords' => 'travel, adventure, explore',
                'tag' => 'travel',
                'status' => 1,
            ],
            [
                'name' => 'CodeLeanON',
                'slug' => 'codeleanon',
                'parent_id'=>0,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => 'category-2.jpg',
                'meta_title' => 'CodeLeanON',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'meta_keywords' => 'codeleanon, fashion, lifestyle',
                'tag' => 'codeleanon',
                'status' => 1,
            ],
            [
                'name' => 'FOOD',
                'slug' => 'food',
                'parent_id'=>0,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => 'category-3.jpg',
                'meta_title' => 'FOOD',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'meta_keywords' => 'food, cuisine, restaurant',
                'tag' => 'food',
                'status' => 1,
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'category_id' => 2,
                'name' => 'Pure Pineapple',
                'slug' => 'pure-pineapple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '<div class="row"><div class="col-lg-7"><h5>Introduction</h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in </p><h5>Features</h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in </p></div><div class="col-lg-5"><div class="product-full"><img class="img-responsive" src="{{ asset("front/images/products/".$product->productImages[0]->path) }}" alt="" /></div></div></div>',
                'price' => 62000,
                'qty' => 20,
                'discount' => 20,
                'sku' => '00012',
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 2,
                'brand_id' => 2,
                'category_id' => 2,
                'name' => 'Guangzhou sweater',
                'slug' => 'guangzhou-sweater',
                'description' => null,
                'content' => '<div class="row"><div class="col-lg-7"><h5>Introduction</h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in </p><h5>Features</h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in </p></div><div class="col-lg-5"><div class="product-full"><img class="img-responsive" src="{{ asset("front/images/products/".$product->productImages[0]->path) }}" alt="" /></div></div></div>',
                'price' => 35,
                'qty' => 20,
                'discount' => 13,
                'sku' => null,
                'featured' => true,
                'tag' => 'Clothing',
            ],

        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpg',
                'status' => 1,
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-1.jpg',
                'status' => 1,
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.jpg',
                'status' => 1,
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpg',
                'status' => 1,
            ],
            [
                'product_id' => 2,
                'path' => 'product-3.jpg',
                'status' => 1,
            ],
            [
                'product_id' => 2,
                'path' => 'product-4.jpg',
                'status' => 1,
            ],

        ]);

        DB::table('product_attributes')->insert([
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'S',
                'qty' => 5,
                'status' => 1
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'M',
                'qty' => 5,
                'status' => 1
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'L',
                'qty' => 5,
                'status' => 1
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'XS',
                'qty' => 5,
                'status' => 1
            ],
            [
                'product_id' => 1,
                'color' => 'yellow',
                'size' => 'S',
                'qty' => 0,
                'status' => 1
            ],
            [
                'product_id' => 1,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
                'status' => 1
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 1,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 4,
                'status' => 1
            ],
            [
                'product_id' => 1,
                'user_id' => 2,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
                'status' => 1
            ],
        ]);
    }
}
