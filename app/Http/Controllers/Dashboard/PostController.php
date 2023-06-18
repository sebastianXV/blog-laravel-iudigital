<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PutRequest;

class PostController extends Controller
{

   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id');
        $post = new Post();
        return view('dashboard.posts.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'posted' => 'required|in:yes,no',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Subir la imagen al directorio y obtener el nombre del archivo
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
    
        $validatedData['image'] = $imageName;
    
        $post = Post::create($validatedData);
    
        return redirect()->route('post.show', $post->id);
    }
    
    // Resto de los métodos...
}

