<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Devin Febrian',
        //     'email' => 'devinfebrian20@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Athala Thahira',
        //     'email' => 'athalathahira@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tempore culpa sunt omnis provident nesciunt autem error aspernatur deserunt labore eius, architecto tempora, repellendus quam nam facilis assumenda consequatur odio.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non exercitationem voluptatum nulla quia laudantium! Iusto asperiores quo blanditiis natus quod molestiae, quos ea temporibus enim! Ea, dicta voluptate eaque minima magnam architecto iusto in neque! Nobis quia minima eveniet iure, repudiandae fugiat totam iste, veritatis quo quam sunt fugit cumque, reprehenderit necessitatibus repellat? Placeat mollitia repellendus ipsum excepturi. Suscipit, dolore.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod debitis, dolorum quidem temporibus omnis eius? Laboriosam dolores illum sed odio recusandae ea nemo et enim blanditiis magnam iusto ad consequatur, deleniti vel laborum incidunt, laudantium earum inventore! Enim nihil esse itaque sed nostrum vero. Sequi dolores sint ex culpa aut distinctio temporibus, inventore, porro saepe, perferendis labore similique. Dolor, temporibus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tempore culpa sunt omnis provident nesciunt autem error aspernatur deserunt labore eius, architecto tempora, repellendus quam nam facilis assumenda consequatur odio.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non exercitationem voluptatum nulla quia laudantium! Iusto asperiores quo blanditiis natus quod molestiae, quos ea temporibus enim! Ea, dicta voluptate eaque minima magnam architecto iusto in neque! Nobis quia minima eveniet iure, repudiandae fugiat totam iste, veritatis quo quam sunt fugit cumque, reprehenderit necessitatibus repellat? Placeat mollitia repellendus ipsum excepturi. Suscipit, dolore.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod debitis, dolorum quidem temporibus omnis eius? Laboriosam dolores illum sed odio recusandae ea nemo et enim blanditiis magnam iusto ad consequatur, deleniti vel laborum incidunt, laudantium earum inventore! Enim nihil esse itaque sed nostrum vero. Sequi dolores sint ex culpa aut distinctio temporibus, inventore, porro saepe, perferendis labore similique. Dolor, temporibus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tempore culpa sunt omnis provident nesciunt autem error aspernatur deserunt labore eius, architecto tempora, repellendus quam nam facilis assumenda consequatur odio.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non exercitationem voluptatum nulla quia laudantium! Iusto asperiores quo blanditiis natus quod molestiae, quos ea temporibus enim! Ea, dicta voluptate eaque minima magnam architecto iusto in neque! Nobis quia minima eveniet iure, repudiandae fugiat totam iste, veritatis quo quam sunt fugit cumque, reprehenderit necessitatibus repellat? Placeat mollitia repellendus ipsum excepturi. Suscipit, dolore.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod debitis, dolorum quidem temporibus omnis eius? Laboriosam dolores illum sed odio recusandae ea nemo et enim blanditiis magnam iusto ad consequatur, deleniti vel laborum incidunt, laudantium earum inventore! Enim nihil esse itaque sed nostrum vero. Sequi dolores sint ex culpa aut distinctio temporibus, inventore, porro saepe, perferendis labore similique. Dolor, temporibus?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tempore culpa sunt omnis provident nesciunt autem error aspernatur deserunt labore eius, architecto tempora, repellendus quam nam facilis assumenda consequatur odio.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non exercitationem voluptatum nulla quia laudantium! Iusto asperiores quo blanditiis natus quod molestiae, quos ea temporibus enim! Ea, dicta voluptate eaque minima magnam architecto iusto in neque! Nobis quia minima eveniet iure, repudiandae fugiat totam iste, veritatis quo quam sunt fugit cumque, reprehenderit necessitatibus repellat? Placeat mollitia repellendus ipsum excepturi. Suscipit, dolore.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod debitis, dolorum quidem temporibus omnis eius? Laboriosam dolores illum sed odio recusandae ea nemo et enim blanditiis magnam iusto ad consequatur, deleniti vel laborum incidunt, laudantium earum inventore! Enim nihil esse itaque sed nostrum vero. Sequi dolores sint ex culpa aut distinctio temporibus, inventore, porro saepe, perferendis labore similique. Dolor, temporibus?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
