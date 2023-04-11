<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    private int $userId;
    private int $postId;
    private string $comment;

    private function __construct(int $userId, int $postId, string $comment)
    {
        $this->userId = $userId;
        $this->postId = $postId;
        $this->comment = $comment;
    }
}
