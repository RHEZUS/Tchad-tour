<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function packageList(){
        return view('dashboard.packages.packageList');
    }

    public function form(){
        return view('dashboard.packages.form');
    }
/*
    public function store(Request $request){

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

        
 
    }
    
    
    public function delete($id){

        # delete the article

        $data = Article::find($id);
        $data->delete();

        #delete the tags related to the tag

        $currentArtTag = ArticleTag::where('article_id','=',$id)->get();
        foreach ($currentArtTag as $item) {
            $item->delete();
        }
        return redirect()->route('articles')->with('success', 'Article deleted successfully...');
    }


    public function blog(){
        $data = [];
        $data['articles']=Article::all();
        return view('blog',$data);
    }
    */



}
