<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cloudder;
use App\Post;

class PostController extends Controller
{

    private function slugIt($slug)
    {
        $lettersNamesSpaces = '/[^\-\s\pN\pL]+/u';
        $spacesHypens = '/[\-\s]+/';

        $slug = preg_replace($lettersNamesSpaces, '', mb_strtolower($slug, 'UTF-8'));

        $slug = preg_replace($spacesHypens, '-', $slug);

        $slug = trim($slug, '-');

        return $slug;
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('admin.home')->with('post', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'postTitle' =>  "required|string|max:255",
            'postContent' => "required|string",
            'postImage' => "image|mimes:jpeg,jpg,png,bmp,svg|max:2048",
        ], 
        [
            'postImage.mimes' => 'The image must have jpeg,jpg or png format',
        ]);


        $slug = $this->slugIt($request->input('postTitle'));
        $post = new Post;
        $post->title = $request->input('postTitle');
        $post->body  = $request->input('postContent');
        $post->slug  = $slug;

        if($request->hasFile('postImage')){
            $fileUrl = $request->file('postImage')->getRealPath();
            list($width, $height) = getimagesize($fileUrl);

            $result  =  Cloudder::upload($fileUrl,null, $options = array(
                'folder'   => 'postImage',
                'timeout'  =>  200,
                'format'   => 'jpg',
                'quality'  => 'auto'
            ));            

            $pubId =  Cloudder::getPublicId();

            $file_url  = Cloudder::getResult();
            
            // dd($file_url['url']);
            
            if(!empty($pubId)){
                $post->pubId = $pubId;
                $post->image = $file_url['url'];
            }
        }

        $post->save();

        return redirect()->route('posts.index')->with('info', 'Success');
        // dd('all clear');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'postTitle' =>  "required|string|max:255",
            'postContent' => "required|string",
            'postImage' => "image|mimes:jpeg,jpg,png,bmp,svg|max:2048",
        ], 
        [
            'postImage.mimes' => 'The image must have jpeg,jpg or png format',
        ]);
        $slug = $this->slugIt($request->input('postTitle'));
        $post = Post::find($id);
        $post->title = $request->input('postTitle');
        $post->body  = $request->input('postContent');
        $post->slug  = $slug;

        if($request->hasFile('postImage')){

            $fileUrl = $request->file('postImage')->getRealPath();
            list($width, $height) = getimagesize($fileUrl);


            if(!empty($post->pubId)){
                Cloudder::delete($post->pubId);//first delete the image from cloudinary
            }
            //now upload another image
            $result  =  Cloudder::upload($fileUrl,null, $options = array(
                'folder'   => 'postImage',
                'timeout'  =>  200,
                'format'   => 'jpg',
                'quality'  => 'q_37'
            ));            

            $pubId =  Cloudder::getPublicId();

            $file_url  = Cloudder::getResult();
            
            // dd($file_url['url']);
            
            if(!empty($pubId)){
                $post->pubId = $pubId;
                $post->image = $file_url['url'];
            }
        }

        $post->save();
        return redirect()->route('posts.index')->with('info', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if(!empty($post->pubId))
        	Cloudder::delete($post->pubId);
        $post->delete();
        return redirect()->route('posts.index')->with('info', 'Post Deleted Successfully');
    }
}
