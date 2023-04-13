<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    private int $userId;
    private int $postId;
    private string $comment;

    private function __construct(int $userId, int $postId, string $comment = '')
    {
        $this->userId = $userId;
        $this->postId = $postId;
        $this->comment = $comment;
    }

    public function add(): void
    {
        Comment::create([
            'user_id'=>$this->userId,
            'post_id'=>$this->postId,
            'comment'=>$this->comment,
        ]);
    }
    public function get(): array
    {
        return Comment::where('post_id',$this->postId)->get();
    }
    public static function delete(int $id): void
    {
        Comment::where('id',$id)->delete();
    }
    public static function deleteFromPost(int $postId): void
    {
        Comment::where('post_id',$postId)->delete();
    }

}
