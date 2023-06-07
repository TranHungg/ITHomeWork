<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' =>"MyMainPost",
                'image' =>"empty",
                'content'  =>"This is body content",
                'is_published' =>false,
            ],
            [
                'title' =>"MyMainPost2",
                'image' =>"empty",
                'content'  =>"This is body content2",
                'is_published' =>false,
            ]
            ];
            foreach ($posts as $post => $value){
                Post::create($value);
            }
    }
}
