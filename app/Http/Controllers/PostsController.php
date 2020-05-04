<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;

class PostsController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }

  public function create()
  {
      return view('posts.create');
  }

  public function store()
    {

      $data = request()->validate([
        'title' => 'required',

        'description_part1' => 'required',
        'image1' => 'image',
        'image1_caption' => 'required_with:image1',
        'image1_place' => 'required_with:image1',
        // 'image1_place' => 'required',

        'description_part2' => '',
        'image2' => 'image',
        'image2_caption' => 'required_with:image2',
        'image2_place' => 'required_with:image2',

        'description_part3' => '',
        'image3' => 'image',
        'image3_caption' => 'required_with:image3',
        'image3_place' => 'required_with:image3',

        'tag' => 'required',
      ]);

      // \App\Post::create($data); // we are storing our data with validation

      if (request('image1')) {
       $imagePath1 = request('image1')->store('profile','public');

       // $image1 = Image::make(public_path("storage/{$imagePath1}"))->fit(1000,1000);
       $image1 = Image::make(public_path("storage/{$imagePath1}"))->resize(3000,3000);
       $image1->save();

       $image1->destroy();
       // $imageArray1 = ['image1'=> $imagePath1];  // ['image'=> $imagePath] will override what was previously on 'image'
    }
    else {$imagePath1 = 'null';}

      if (request('image2')) {
       $imagePath2 = request('image2')->store('profile','public');

       $image2 = Image::make(public_path("storage/{$imagePath2}"))->fit(3000,3000);
       $image2->save();

       $image2->destroy();
       // $imageArray2 = ['image2'=> $imagePath2];  // ['image'=> $imagePath] will override what was previously on 'image'
    }
    else {$imagePath2 = 'null';}

      if (request('image3')) {
       $imagePath3 = request('image3')->store('profile','public');

       $image3 = Image::make(public_path("storage/{$imagePath3}"))->fit(3000,3000);
       $image3->save();

       $image3->destroy();
       // $imageArray3 = ['image1'=> $imagePath3];  // ['image'=> $imagePath] will override what was previously on 'image'
    }
    else {$imagePath3 = 'null';}

    if (request('image1_place')) {
      $image1_place = request('image1_place');
    } else $image1_place = 'null';

    if (request('image2_place')) {
      $image2_place = request('image2_place');
    } else $image2_place = 'null';

    if (request('image3_place')) {
      $image3_place = request('image3_place');
    } else $image3_place = 'null';


      auth()->user()->posts()->create([
        'title' => $data['title'],

        'description_part1' => $data['description_part1'],
        'image1' => $imagePath1,
        'image1_caption' => $data['image1_caption'],
        'image1_place' => $image1_place,

        'description_part2' => $data['description_part2'],
        'image2' => $imagePath2,
        'image2_caption' => $data['image2_caption'],
        'image2_place' => $image2_place,

        'description_part3' => $data['description_part3'],
        'image3' => $imagePath3,
        'image3_caption' => $data['image3_caption'],
        'image3_place' => $image3_place,

        'tag' => $data['tag'],
      ]);



     // dd(request()->all());

    return redirect('/home');
    }

    public function show(\App\Post $post)
    {
        //dd($post);
        return view('posts.show',compact('post'));
    }

    public function edit(\App\Post $post)
    {
      return view('posts.edit', compact('post'));
    }

    public function update(\App\Post $post)
    {

      $data = request()->validate([
        'title' => 'required',

        'description_part1' => 'required',
        'image1' => 'image',
        'image1_caption' => 'required_with:image1',
        'image1_place' => 'required_with:image1',
        // 'image1_place' => 'required',

        'description_part2' => '',
        'image2' => 'image',
        'image2_caption' => 'required_with:image2',
        'image2_place' => 'required_with:image2',

        'description_part3' => '',
        'image3' => 'image',
        'image3_caption' => 'required_with:image3',
        'image3_place' => 'required_with:image3',

        'tag' => 'required',
      ]);

      if (request('image1')) {
        $imagePath1 = request('image1')->store('profile','public'); //stores the image in storage > app > public > 'profile'.
                                                // As we are using local storage it'll be on 'public' driver.
                                                // We also need php artisan storage:link at this point (only once for the entire project)

         $image1 = Image::make(public_path("storage/{$imagePath1}"))->fit(3000,3000); // fitting/cutting an image to a 1200x1200 square
                                            // first run: composer require intervention/image
         $image1->save();

         $imageArray1= ['image1'=> $imagePath1];  // ['image'=> $imagePath] will override what was previously on 'image'
      }

      if (request('image2')) {
         $imagePath2 = request('image2')->store('profile','public');
         $image2 = Image::make(public_path("storage/{$imagePath2}"))->fit(3000,3000);
         $image2->save();
         $imageArray2= ['image2'=> $imagePath2];
      }

      if (request('image3')) {
         $imagePath3 = request('image3')->store('profile','public');
         $image3 = Image::make(public_path("storage/{$imagePath3}"))->fit(3000,3000);
         $image3->save();
         $imageArray3= ['image3'=> $imagePath3];
      }

      // dd($data);
      // dd(array_merge(
      //   $data,
      //   ['image'=> $imagePath],
      // ));



      auth()->user()->posts()->whereId($post->id)->update(array_merge(
        $data,
        $imageArray1 ?? [],
        $imageArray2 ?? [],
        $imageArray2 ?? []
      ));

      return redirect("/home");
    }



    public function destroy(\App\Post $post)
    {
        $post->delete();
        return redirect('/home');
    }
}
