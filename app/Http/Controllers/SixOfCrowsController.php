<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SixOfCrowsController extends Controller
{
    const BOOK_NAME = 'Six of Crows';
    const PART_NAME = 'Part One: Shadow Business';
    const CHAPTERS = 6;

    public function index(){
        return view('index', [
            'book_name' => static::BOOK_NAME,
            'part_name' => static::PART_NAME,
            'chapter_number' => static::CHAPTERS
        ]);
    }

    public function openChapter($route_chapter){
        return view('soc-chapter', [
            'book_name' => static::BOOK_NAME,
            'part_name' => static::PART_NAME,
            'chapter_number' => static::CHAPTERS,
            'route_chapter' => $route_chapter
        ]);
    }
}
