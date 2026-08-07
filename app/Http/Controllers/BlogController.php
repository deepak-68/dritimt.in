<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-blog|edit-blog|delete-blog', ['only' => ['index']]);
        $this->middleware('permission:create-blog', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-blog', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-blog', ['only' => ['delete']]);
    }

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        return view('blogs.index', [
            'blogs' => Blog::orderBy('id', 'DESC')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'meta_title' => 'nullable|string|max:70',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
        ]);

        $input = $request->all();
        $input['user_id'] = Auth::id();
        $input['slug'] = $this->uniqueSlug($request->input('title'));

        if ($request->hasFile('image')) {
            $input['image'] = $this->uploadImage($request->file('image'));
        }

        Blog::create($input);

        return redirect('blog')->withSuccess('New blog is added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'meta_title' => 'nullable|string|max:70',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
        ]);

        $blog->title = $request->input('title');
        $blog->slug = $this->uniqueSlug($request->input('title'), $blog->id);
        $blog->content = $request->input('content');
        $blog->status = $request->input('status');
        $blog->meta_title = $request->input('meta_title');
        $blog->meta_description = $request->input('meta_description');
        $blog->meta_keywords = $request->input('meta_keywords');

        if ($request->hasFile('image')) {
            $this->deleteImage($blog->image);
            $blog->image = $this->uploadImage($request->file('image'));
        }

        $blog->update();

        return redirect('blog')->withSuccess('Blog is updated successfully.');
    }

    /**
     * Delete the specified resource from storage.
     */
    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $this->deleteImage($blog->image);
        $blog->delete();

        return redirect('blog')->withSuccess('Blog deleted successfully.');
    }

    /**
     * Build a unique slug for the given title.
     */
    private function uniqueSlug($title, $ignoreId = null)
    {
        $slug = Str::slug($title);
        $count = 2;

        while (Blog::where('slug', $slug)->where('id', '!=', $ignoreId)->withTrashed()->exists()) {
            $slug = Str::slug($title) . '-' . $count++;
        }

        return $slug;
    }

    /**
     * Store the uploaded image and return its public path.
     */
    private function uploadImage($file)
    {
        $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/blogs'), $name);

        return 'uploads/blogs/' . $name;
    }

    /**
     * Remove an image file from the public disk if it exists.
     */
    private function deleteImage($path)
    {
        if ($path && file_exists(public_path($path))) {
            unlink(public_path($path));
        }
    }
}
