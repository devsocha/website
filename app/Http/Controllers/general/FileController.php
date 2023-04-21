<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public $file;

    public function __construct($file)
    {
        $this->file = $file;
    }
    public function getFileType(): string
    {
        return $this->file->extension();
    }
    public function saveFile(string $name,string $path): void
    {
     $this->file->move($path,$name);
    }
    public function deleteFile(string $path, string $name):void
    {
        unlink($path,$name);
    }
}
