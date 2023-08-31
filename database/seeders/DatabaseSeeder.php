<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Alvian Daniel',
        //     'email' => 'alvian.sus@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Jason Susanto',
        //     'email' => 'jason.sus@gmail.com',
        //     'password' => bcrypt('321')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-progamming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => '2',
        //     'user_id' => '1',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet pertama',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda iure provident sapiente cumque quisquam sunt pariatur ratione praesentium, blanditiis odit, maiores deserunt est debitis doloremque possimus quaerat dolorem perspiciatis quas mollitia neque voluptate fuga, eos modi quidem.</p><p>Rem quis ullam et accusantium. Fuga natus necessitatibus amet debitis repellendus? Tempore, error? Magnam quasi cum perspiciatis explicabo possimus accusantium at maiores animi. Sed quo, cupiditate impedit inventore quae est maxime, tempora expedita nulla sapiente, laboriosam laborum officiis fugit nostrum et. Tempore impedit vel nisi debitis nihil dolores totam soluta id non quam eius, tempora reprehenderit, quos officiis distinctio, vitae quae maxime praesentium dignissimos numquam nulla ipsam!</p><p>Eius, odit facere quaerat iure illo eveniet dolor culpa architecto vitae magnam, repudiandae reprehenderit, unde porro! Reprehenderit laboriosam animi libero mollitia incidunt qui corrupti adipisci quidem. Quo, culpa ab. Vitae esse earum minus commodi deserunt et voluptatum laudantium delectus aperiam reprehenderit porro omnis, sapiente dolorum nostrum!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet kedua',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda iure provident sapiente cumque quisquam sunt pariatur ratione praesentium, blanditiis odit, maiores deserunt est debitis doloremque possimus quaerat dolorem perspiciatis quas mollitia neque voluptate fuga, eos modi quidem.</p><p>Rem quis ullam et accusantium. Fuga natus necessitatibus amet debitis repellendus? Tempore, error? Magnam quasi cum perspiciatis explicabo possimus accusantium at maiores animi. Sed quo, cupiditate impedit inventore quae est maxime, tempora expedita nulla sapiente, laboriosam laborum officiis fugit nostrum et. Tempore impedit vel nisi debitis nihil dolores totam soluta id non quam eius, tempora reprehenderit, quos officiis distinctio, vitae quae maxime praesentium dignissimos numquam nulla ipsam!</p><p>Eius, odit facere quaerat iure illo eveniet dolor culpa architecto vitae magnam, repudiandae reprehenderit, unde porro! Reprehenderit laboriosam animi libero mollitia incidunt qui corrupti adipisci quidem. Quo, culpa ab. Vitae esse earum minus commodi deserunt et voluptatum laudantium delectus aperiam reprehenderit porro omnis, sapiente dolorum nostrum!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => '2',
        //     'user_id' => '2',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet ketiga',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda iure provident sapiente cumque quisquam sunt pariatur ratione praesentium, blanditiis odit, maiores deserunt est debitis doloremque possimus quaerat dolorem perspiciatis quas mollitia neque voluptate fuga, eos modi quidem.</p><p>Rem quis ullam et accusantium. Fuga natus necessitatibus amet debitis repellendus? Tempore, error? Magnam quasi cum perspiciatis explicabo possimus accusantium at maiores animi. Sed quo, cupiditate impedit inventore quae est maxime, tempora expedita nulla sapiente, laboriosam laborum officiis fugit nostrum et. Tempore impedit vel nisi debitis nihil dolores totam soluta id non quam eius, tempora reprehenderit, quos officiis distinctio, vitae quae maxime praesentium dignissimos numquam nulla ipsam!</p><p>Eius, odit facere quaerat iure illo eveniet dolor culpa architecto vitae magnam, repudiandae reprehenderit, unde porro! Reprehenderit laboriosam animi libero mollitia incidunt qui corrupti adipisci quidem. Quo, culpa ab. Vitae esse earum minus commodi deserunt et voluptatum laudantium delectus aperiam reprehenderit porro omnis, sapiente dolorum nostrum!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => '2',
        //     'user_id' => '1',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet keempat',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda iure provident sapiente cumque quisquam sunt pariatur ratione praesentium, blanditiis odit, maiores deserunt est debitis doloremque possimus quaerat dolorem perspiciatis quas mollitia neque voluptate fuga, eos modi quidem.</p><p>Rem quis ullam et accusantium. Fuga natus necessitatibus amet debitis repellendus? Tempore, error? Magnam quasi cum perspiciatis explicabo possimus accusantium at maiores animi. Sed quo, cupiditate impedit inventore quae est maxime, tempora expedita nulla sapiente, laboriosam laborum officiis fugit nostrum et. Tempore impedit vel nisi debitis nihil dolores totam soluta id non quam eius, tempora reprehenderit, quos officiis distinctio, vitae quae maxime praesentium dignissimos numquam nulla ipsam!</p><p>Eius, odit facere quaerat iure illo eveniet dolor culpa architecto vitae magnam, repudiandae reprehenderit, unde porro! Reprehenderit laboriosam animi libero mollitia incidunt qui corrupti adipisci quidem. Quo, culpa ab. Vitae esse earum minus commodi deserunt et voluptatum laudantium delectus aperiam reprehenderit porro omnis, sapiente dolorum nostrum!</p>'
        // ]);

    }
}
