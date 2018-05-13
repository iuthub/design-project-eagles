<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
class PagesController extends Controller
{
        public function index(){
            $title = 'Information about Cars';
            //return view('pages.index', compact('title'));
            //return view('pages.index')->with('title', $title);
            return vuew('posts');
        }
        public function about(){
            return view('pages.about');
        }
        public function services(){
            $data = array(
                'title' => 'Services',
                'services' => ['web design', 'Programming', 'SEO'],
            );
            return view('pages.services')->with($data);
        }
}
