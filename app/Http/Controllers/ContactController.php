<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function storeContact(Request $request, $slug)
    {

        // Temukan blog berdasarkan slug
        $blog = Blog::where('slug', $slug)->firstOrFail();

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Simpan komentar ke dalam basis data
        $contact = new Contact();
        $contact->blog_id = $request->blog_id;
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->message = $validatedData['message'];
        $contact->save();

        // Redirect atau response sesuai kebutuhan aplikasi Anda
        return redirect()->back()->with('success', 'Komentar Anda berhasil disimpan.');
    }

    public function store(Request $request)
    {
        $blogSlug = $request->input('blog_slug');
        // Lakukan validasi dan penyimpanan komentar sesuai dengan blog_slug yang dikirimkan
    }
}
