<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        // Sample data for the zigzag layout
        $contents = [
            (object)[
                'image' => 'https://via.placeholder.com/300x200?text=Image+1',
                'title' => 'First Content Block',
                'description' => 'This is the description for the first content block. Image is on the left, and text is on the right.'
            ],
            (object)[
                'image' => 'https://via.placeholder.com/300x200?text=Image+2',
                'title' => 'Second Content Block',
                'description' => 'This is the description for the second content block. Image is on the right, and text is on the left.'
            ],
            (object)[
                'image' => 'https://via.placeholder.com/300x200?text=Image+3',
                'title' => 'Third Content Block',
                'description' => 'This is the description for the third content block. Image is on the left, and text is on the right.'
            ],
            (object)[
                'image' => 'https://via.placeholder.com/300x200?text=Image+4',
                'title' => 'Fourth Content Block',
                'description' => 'This is the description for the fourth content block. Image is on the right, and text is on the left.'
            ],
        ];

        // Pass the data to the view
        return view('testing', compact('contents'));
    }
}
