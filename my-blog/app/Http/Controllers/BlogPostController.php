<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::all(); //select * from blog_posts
        return view('blog.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        $newPost = BlogPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
        ]);

        return redirect(route('blog.show', $newPost->id));
        //return view ('blog.show', ['blogPost' => $newPost]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        //$blogPost = pdo->prepare(Select * from blog_posts where id = ?) 
       /* $blog = BlogPost::select()
          ->join('users', 'users.id', '=','user_id')
          ->where('id', $blogPost)
          ->first();*/

        return view ('blog.show', ['blogPost' => $blogPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        return view('blog.edit', ['blogPost' => $blogPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        //return $request;
        //return $blogPost;
        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect(route('blog.show', $blogPost));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        //return $blogPost;
        $blogPost->delete();

        return redirect(route('blog.index'));
    }

    public function query(){

        //SELECT * FROM blog_posts
        //$blog = BlogPost::all();

       //$blog = BlogPost::select('title', 'body')->get();
       // $blog = $blog[0]

        //$blog = BlogPost::select('title', 'body')->first();

        //SELECT * FROM blog_posts WHERE user_id = 1
       /* $blog  = BlogPost::select()
                ->where('user_id', "=",1)
                ->get();*/
        //Primary key     
        //SELECT * FROM blog_posts WHERE blog_id = 1  

         //Primary key  
        //$blog = BlogPost::find(2);        

        //AND
        //SELECT * FROM blog_posts WHERE blog_id = 1 AND id = 1; 
        $blog  = BlogPost::select()
                ->where('user_id', "=",2)
                ->where('id', "=", 1)
                ->get();
        //OR
        //SELECT * FROM blog_posts WHERE blog_id = 1 OR id = 1; 
        $blog  = BlogPost::select()
                ->where('user_id', "=",2)
                ->orWhere('id', "=", 1)
                ->get();       

        //SELECT * FROM blog_posts ORDER BY title DESC; 
        $blog  = BlogPost::select()
                ->orderBy('title', 'DESC')
                ->get();
       
        //INNER JOIN
        //SELECT * FROM blog_posts INNER JOIN users ON users.id = user_id 
          $blog = BlogPost::select()
          ->join('users', 'users.id', '=','user_id')
          ->get();

        //OUTER JOIN
        //SELECT * FROM blog_posts RIGHT OUTER JOIN users ON users.id = user_id 
        /*$blog = BlogPost::select()
        ->rightJoin('users', 'users.id', '=','user_id')
        ->get();*/

        //Aggreate MAx Min COunt Sum Avg

        //$blog = BlogPost::max('id');

        $blog = BlogPost::select()
        ->join('users', 'users.id', '=','user_id')
        ->count();

        return $blog;
    }

}
