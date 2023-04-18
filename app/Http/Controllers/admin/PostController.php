<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private string $title;
    private string $desc;
    private int $userId;

    public function __construct(string $title, string $desc, int $userId)
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->userId = $userId;
    }

    public static function get(int $id): Post
    {
        return Post::where('id',$id)->first();
    }

    public function add(): void
    {
        Post::create([
            'title'=>$this->title,
            'desc'=>$this->desc,
            'user_id'=>$this->userId,
        ]);
    }
    public static function getAll(): Post
    {
        return Post::paginate(5);
    }
    public function update(int $id):void
    {
        Post::where('id',$id)->update([
            'title'=>$this->title,
            'desc'=>$this->desc,
            'user_id'=>$this->userId,
        ]);
    }
    public static function delete(int $id): void
    {
        Post::where('id',$id)->delete();
    }

}
