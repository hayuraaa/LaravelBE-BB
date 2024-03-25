<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontend\ContactRequest;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = blog::get();   
        return view('frontend.blog.index', compact('blogs'));
    }

    public function show(blog $blog)
    {
        return view ('frontend.blog.show', compact('blog'));
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->back()->with('success', 'Pesan Anda berhasil terkirim.');
    }

}
