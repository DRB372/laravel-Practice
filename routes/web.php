<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', function () {
    return view('welcome');
});

Route::get('prac','PostController@getIndex' )->name('blog.index');

route::get('post/{id}',function($id){
     if($id==1){
        $post=[
            'title'=> 'Learning Laravel',
            'content'=> 'This blog post will get you right on track with laravel.'
        ];
    }else{
        $post=[
            'title'=> 'Something else',
            'content'=> 'Some Other Content'

        ];
    }
     
    return view('blog.post');
})->name('blog.post');

Route::get('about', function () {
    return view('other.about ');
})->name('other.about');

Route::group(['prefix' => 'admin'],function(){
    Route::get('', function () {
        return view('admin.index ');
    })->name('admin.index');
    
    Route::get('create', function () {
        return view('admin.create ');
    })->name('admin.create');
    
    Route::post ('create',function(Illuminate\Http\Request $request,
    \Illuminate\Validation\Factory $validator){
      $validation=  $validator->make($request->all(),[
'title'=> 'required|min:5',
'content'=>'required|min:10'
        ]);
         if($validation->fails()){ 
             return redirect()->back()->withErrors($validation);
         }
        return redirect()->route('admin.index')
        ->with('info','Post Created New Title is: '.$request->input('title'));
    })->name('admin.create');
    
    Route::get('edit/post{id}',function($id){
        if($id==1){
            $post=[
                'title'=> 'Learning Laravel',
                'content'=> 'This blog post will get you right on track with laravel.'
            ];
        }else{
            $post=[
                'title'=> 'Something else',
                'content'=> 'Some Other Content'
    
            ];
        }
       
        return view('admin.edit');
    })->name('admin.edit');
    
    Route::post ('edit',function( Illuminate\Http\Request $request,
    \Illuminate\Validation\Factory $validator){
        $validation=  $validator->make($request->all(),[
            'title'=> 'required|min:5',
            'content'=>'required|min:10'
                    ]);
                     if($validation->fails()){ 
                         return redirect()->back()->withErrors($validation);
                     }
                 
        return redirect()->route('admin.index')
        ->with( 'info','Post Edited. New Title is: '.$request->input( 'title') );
        // return "It works updating";
    })->name('admin.update');
    
});



Route::get('FB', function () {
    return view('Facebook');
});
  //  Route::resource ('cars','carsController');