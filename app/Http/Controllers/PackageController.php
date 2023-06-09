<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function packageList(){
        return view('dashboard.packages.packageList');
    }

    public function form(){
        $data = [];
        $data['dests'] = Destination::all(); 
        return view('dashboard.packages.form',$data);
    }

    public function store(Request $request){
/*
        $request->validate([
            'title'=>'required',

            'desc'=>'required',
            'dest-images'=>'required',
            'dest-images.*' => 'mimes:jpeg,jpg,png',

            'dest'=>'required',
            'new_dest'=>'required_if:dest,==,new',

            'price'=>'required',
            'people'=>'required',
            'thumbnail'=>'required',
        ]);
*/
        $x= null;
        if ($request->hasFile('dest-images')) {

            foreach ($request->file('dest-images') as $image) {
                $x++;
            }
        }

        return $x;
/*
        $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'content'=> 'required',
            'thumbnail'=>'required',
            'category'=>'required',
            'desc'=>'required',
            'new_category'=>'required_if:category,==,new'
        ]);

        
       
        
        if ($request->hasFile('thumbnail')) {

            # Get the file from the registration form, change the name and store in the public/thumbnail folder
            
            $file=$request->thumbnail;
            $fileName = time() . '.' . $file->clientExtension();
            $file->storeAs( 'public/thumbnails', $fileName);

        }
        if (isset($request->new_category)) {

            #check if the new_category field is set, if true, create a new category

            $category = Category::create([
                'title'=>$request->new_category,
            ]);
            $category_id = $category->id;
            
        }else{
            
            # if the new_category field is not set, get the category's id from the form

            $category_id = $request->category;
        }

        # store the article

        $article = Article::create([
            'title'=>$request->title,
            'slug'=>$request->slug,
            'desc'=>$request->desc,
            'content'=>$request->content,
            'thumbnail'=>$fileName,
            'category_id'=>$category_id,
            'author_id'=>auth()->user()->id,
        ]);

            

        foreach (explode(",", $request->tags) as $tag) {

            // "Example Tag" transformed into "example tag"
            $tagname = strtolower(trim($tag));

            // Find or create a tag if it doesn't exist
            $tag = Tag::firstOrCreate([
                'name' => $tagname,
                // "example tag" transformed into "example-tag"
                'slug' => str_replace(" ", "-", $tagname),
            ]);


            // Create a new article tag (for relationship)
            ArticleTag::create([
                'article_id' => $article->id,
                'tag_id' => $tag->id,
            ]);

        }

            
        
        if($article){
            return redirect()->route('articles')->with('success','Article created successfully');
        }else{
            return redirect()->back()->with('error','A problem accured during the registration attempt');
        }

        
 */
    }
    

    public function edit($id){
        
/*
        $data =[];
        $data['categories'] = Category:: all();
        $data['article'] = Article::find($id);

        $tags=null;

        # get the tags of each article and convert them in a single string

        foreach ($data['article']->tags as $value) {

            $tags =$tags.str($value->tag->name) . ', ' ;

        }
        $data['tags'] = $tags;
        
        return view('dashboard.articles.form',$data);
    
    */
    }

    # Update an article
    public function update(Request $request){
/*
        $request->validate([
            'id'=>'required',
            'title'=>'required',
            'slug'=>'required',
            'content'=> 'required',
            'category'=>'required',
            'desc'=>'required',
            'new_category'=>'required_if:category,==,new'
        ]);

        $data = Article::find($request->id);

        # check if a new thumbnail image is set if yes, change the name and store is public/thumbnail folder
        if ($request->hasFile('thumbnail')) {
            
            $file=$request->thumbnail;
            $fileName = time() . '.' . $file->clientExtension();
            $file->storeAs( 'public/thumbnails', $fileName);   

            $data->thumbnail=$fileName;
        }

        if (isset($request->new_category)) {

            #check if the new_category field is set, if true, create a new category

            $category = Category::create([
                'title'=>$request->new_category,
            ]);
            $category_id = $category->id;
            
        }else{
            $category_id = $request->category;
        }

        $data->title = $request->title;
        $data->slug=$request->input('slug');
        $data->content=$request->input('content');
        $data->desc=$request->input('desc');
        $data->category_id=$category_id;

        # delate all the existing tags which are related to the article to set the new ones.

        $currentArtTag = ArticleTag::where('article_id','=',$request->id)->get();

        foreach ($currentArtTag as $item) {
            $item->delete();
        }

        # create the new tags and relate them to the article 

        foreach (explode(",", $request->tags) as $tag) {

            // "Example Tag" transformed into "example tag"
            $tagname = strtolower(trim($tag));

            // Find or create a tag if it doesn't exist
            $tag = Tag::firstOrCreate([
                'name' => $tagname,
                // "example tag" transformed into "example-tag"
                'slug' => str_replace(" ", "-", $tagname),
            ]);


            // Create a new article tag (for relationship)
            ArticleTag::create([
                'article_id' => $data->id,
                'tag_id' => $tag->id,
            ]);

        }

        $data -> save();

        if ($data) {
            return redirect()->route('articles')->with('success', 'Article Updated successfully !!!');
        }
        else{
            return redirect()->back()->with('error','Unable to update');
        }
*/
        
    }
  
    public function delete($id){
 /* 
        # delete the article

        $data = Article::find($id);
        $data->delete();

        #delete the tags related to the tag

        $currentArtTag = ArticleTag::where('article_id','=',$id)->get();
        foreach ($currentArtTag as $item) {
            $item->delete();
        }
        return redirect()->route('articles')->with('success', 'Article deleted successfully...');
    */
    }


    public function packages(){
        /*$data = [];
        $data['articles']=Package::all();*/
        return view('packages');

    }
   



}
