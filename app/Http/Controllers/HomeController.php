<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function news()
    {
        return view('news');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function testimonials()
    {
        return view('testimonials');
    }
    public function story()
    {
        return view('story');
    }
    public function drvinhangsukhadia()
    {
        return view('doctors.dr-vihang-sukhadia');
    }
    public function service($id)
    {
        $product = $this->getServiceDetails($id);
        if ($product == null) {
            return redirect('/');
        }
        return view('services.service-detail', compact('product'));
    }
    public function blogs()
    {
        $blogs = BlogModel::all();
        return view('blogs.blogs', compact('blogs'));
    }
    public function blogsdetail($id)
    {
        $blog = $this->getBlog($id);
        if ($blog == null) {
            return redirect('/');
        }
        return view('blogs.blog-detail', compact('blog'));
    }

    public function getServiceDetails($id)
    {
        $list = json_decode(Storage::disk('public')->get('services.json'), true);
        foreach ($list as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return null;  // return null or throw an exception when service is not found
    }
    public function getBlog($id)
    {
        return BlogModel::with('comments')->find($id);  // return null or throw an exception when service is not found
    }
}
