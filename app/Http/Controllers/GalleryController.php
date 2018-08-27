<?php

namespace App\Http\Controllers;

use Cloudder;
use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Gallery::orderBy('created_at', 'desc')->get();
        return view('admin.ghome')->with('post', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gcreate');
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
                'postImage' => "image|mimes:jpeg,jpg,png,bmp,svg",
            ], 
            [
                'postImage.mimes' => 'The image must have jpeg,jpg or png format',
            ]);

            $post = new Gallery;
            $post->caption = $request->input('postTitle');

            if($request->hasFile('postImage')){

                $fileUrl = $request->file('postImage')->getRealPath();
                list($width, $height) = getimagesize($fileUrl);

                $result  =  Cloudder::upload($fileUrl,null, $options = array(
                    'folder'   => 'galaimages',
                    'timeout'  => 200
                ));

                $publicId = Cloudder::getPublicId();
                $file_url  = Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height,"crop"=>"fit"]);
                $post->pubId = $publicId;
                $post->img = $file_url;
            }

            $post->save();
            return redirect()->route('gala.index')->with('info', 'Success');
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
        $post = Gallery::find($id);
        return view('admin.gedit')->with('post', $post);
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
            'postImage' => "image|mimes:jpeg,jpg,png,bmp,svg|max:2048",
        ], 
        [
            'postImage.mimes' => 'The image must have jpeg,jpg or png format',
        ]);

        $post = Gallery::find($id);
        $post->caption = $request->input('postTitle');

        if($request->hasFile('postImage')){

            $fileUrl = $request->file('postImage')->getRealPath();
            list($width, $height) = getimagesize($fileUrl);

            if(!empty($post->pubId)){
                Cloudder::delete($post->pubId);//first delete the image from cloudinary
            }
            //now upload another image
            $result  =  Cloudder::upload($fileUrl,null, $options = array(
                'folder'   => 'galaimages',
                'timeout'  => 200
            ));

            $publicId = Cloudder::getPublicId();
            $file_url  = Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height, "crop"=>"fit"]);
            $post->pubId = $publicId;
            $post->img = $file_url;
        }

        $post->save();
        return redirect()->route('gala.index')->with('info', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Gallery::findOrFail($id);
        Cloudder::delete($post->pubId);
        $post->delete();
        return redirect()->route('gala.index')->with('info', 'Post Deleted Successfully');
    }
}
