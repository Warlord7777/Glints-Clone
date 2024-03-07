<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Admin;
class BlogController extends Controller
{
    public function index(){
        $recommendations = Blog::all()->random(5);
        $latest = Blog::latest()->limit(5)->get();
        $glints = Blog::where('topic', 'Dari Glints')->latest()->limit(5)->get();
        $random = Blog::all()->random(4);
        return view('blog.index')->with([
            'recommendations' => $recommendations,
            'latest' => $latest,
            'glints' => $glints,
            'random' => $random
        ]);
    }
    public function showCategory($category){
        $all = Blog::all();
        if($category == 'all'){
            $blogs = $all;
        }else{
            $blogs = Blog::where('topic', $category)->get();
        }
        return view('blog.kategori')->with([
            'blogs' => $blogs,
            'category' => $category,
            'all' => $all,
        ]);
    }

    public function showBlogs(Request $request){
        $blogs = Blog::query();

        if($request->search){
            $blogs->where('blog_title', 'like', '%'.$request->search.'%')->orWhere('topic', 'like', '%'.$request->search.'%');
        }

        $blogs = $blogs->orderBy('updated_at','desc')->paginate(12);
        return view('blog.list')->with([
            'blogs' => $blogs,
            'request' => $request->search,
        ]);
    }
    public function show($id){
        $post = Blog::where('blog_id', $id)->first();

        return view('blog.post')->with([
            'post' => $post,
        ]);
    }
    public function showWriter($id){
        $blogs = Blog::where('writer_id', $id)->get();
        $writer = Admin::where('admin_id', $id)->first();
        return view('blog.writer')->with([
            'writer' => $writer, 
            'blogs' => $blogs,
        ]);
    }
}

// CREATE FUNCTION `index`()
//     RETURNS VIEW
// BEGIN
//     DECLARE recommendations TABLE (
//         blog_id INT,
//         blog_title VARCHAR,
//         topic VARCHAR,
//         writer_id INT,
//         created_at TIMESTAMP,
//         updated_at TIMESTAMP
//     );
//     DECLARE latest TABLE (
//         blog_id INT,
//         blog_title VARCHAR,
//         topic VARCHAR,
//         writer_id INT,
//         created_at TIMESTAMP,
//         updated_at TIMESTAMP
//     );
//     DECLARE glints TABLE (
//         blog_id INT,
//         blog_title VARCHAR,
//         topic VARCHAR,
//         writer_id INT,
//         created_at TIMESTAMP,
//         updated_at TIMESTAMP
//     );
//     DECLARE random TABLE (
//         blog_id INT,
//         blog_title VARCHAR,
//         topic VARCHAR,
//         writer_id INT,
//         created_at TIMESTAMP,
//         updated_at TIMESTAMP
//     );

//     INSERT INTO recommendations
//     SELECT blog_id, blog_title, topic, writer_id, created_at, updated_at FROM Blog ORDER BY RAND() LIMIT 5;

//     INSERT INTO latest
//     SELECT blog_id, blog_title, topic, writer_id, created_at, updated_at FROM Blog ORDER BY created_at DESC LIMIT 5;

//     INSERT INTO glints
//     SELECT blog_id, blog_title, topic, writer_id, created_at, updated_at FROM Blog WHERE topic = 'Dari Glints' ORDER BY created_at DESC LIMIT 5;

//     INSERT INTO random
//     SELECT blog_id, blog_title, topic, writer_id, created_at, updated_at FROM Blog ORDER BY RAND() LIMIT 4;

//     RETURN (
//         SELECT 'blog.index' AS view_name, recommendations, latest, glints, random
//     );
// END;

// CREATE FUNCTION `showCategory`(`category` VARCHAR)
//     RETURNS VIEW
// BEGIN
//     DECLARE all_blogs TABLE (
//         blog_id INT,
//         blog_title VARCHAR,
//         topic VARCHAR,
//         writer_id INT,
//         created_at TIMESTAMP,
//         updated_at TIMESTAMP
//     );
//     DECLARE blogs TABLE (
//         blog_id INT,
//         blog_title VARCHAR,
//         topic VARCHAR,
//         writer_id INT,
//         created_at TIMESTAMP,
//         updated_at TIMESTAMP
//     );

//     INSERT INTO all_blogs
//     SELECT blog_id, blog_title, topic, writer_id, created_at, updated_at FROM Blog;

//     IF category = 'all' THEN
//         INSERT INTO blogs
//         SELECT blog_id, blog_title, topic, writer_id, created_at, updated_at FROM all_blogs;
//     ELSE
//         INSERT INTO blogs
//         SELECT blog_id, blog_title, topic, writer_id, created_at, updated_at FROM Blog WHERE topic = category;
//     END IF;

//     RETURN (
//         SELECT 'blog.kategori' AS view_name, blogs, category, all_blogs
//     );
// END;

// CREATE FUNCTION `showBlogs`(`request` Request)
//     RETURNS VIEW
// BEGIN
//     DECLARE blogs TABLE (
//         blog_id INT,
//         blog_title VARCHAR,
//         topic VARCHAR,
//         writer_id INT,
//         created_at TIMESTAMP,
//         updated_at TIMESTAMP
//     );

//     SET @search_query = CONCAT('%', `request`.search, '%');

//     INSERT INTO blogs
//     SELECT blog_id, blog_title, topic, writer_id, created_at, updated_at FROM Blog WHERE blog_title LIKE @search_query OR topic LIKE @search_query ORDER BY updated_at DESC;

//     RETURN (
//         SELECT 'blog.list' AS view_name, blogs, `request`.search
//     );
// END;

// CREATE FUNCTION `show`(`id` INT)
//     RETURNS VIEW
// BEGIN
//     DECLARE post TABLE (
//         blog_id INT,
//         blog_title VARCHAR,
//         topic VARCHAR,
//         writer_id INT,
//         created_at TIMESTAMP,
//         updated_at TIMESTAMP
//     );

//     INSERT INTO post
//     SELECT blog_id, blog_title, topic, writer_id, created_at, updated_at FROM Blog WHERE blog_id = `id` LIMIT 1;

//     RETURN (
//         SELECT 'blog.post' AS view_name, post
//     );
// END;

// CREATE FUNCTION `showWriter`(`id` INT)
//     RETURNS VIEW
// BEGIN
//     DECLARE blogs TABLE (
//         blog_id INT,
//         blog_title VARCHAR,
//         topic VARCHAR,
//         writer_id INT,
//         created_at TIMESTAMP,
//         updated_at TIMESTAMP
//     );
//     DECLARE writer TABLE (
//         admin_id INT,
//         writer_name VARCHAR,
//         writer_email VARCHAR
//     );

//     INSERT INTO blogs
//     SELECT blog_id, blog_title, topic, writer_id, created_at, updated_at FROM Blog WHERE writer_id = `id`;

//     INSERT INTO writer
//     SELECT admin_id, writer_name, writer_email FROM Admin WHERE admin_id = `id` LIMIT 1;

//     RETURN (
//         SELECT 'blog.writer' AS view_name, writer, blogs
//     );
// END;
