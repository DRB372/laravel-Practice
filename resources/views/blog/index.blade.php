
    @extends('layouts.master') 
    <!-- Extends the master layout -->
    
    @section ('content') 
    <!-- user defined-->


    <!-- <div class="row">
    <div class="col-md-12">
    <h1>Some content</h1>
    <p> {{ 2==2 ? "Hello" : "Bye"}}</p> 
    <h1>Control structure</h1>
    @if(true)
    <p>Condition True</p>
    @else
    <p>Condition False</p>
    @endif
    @for($i =1; $i<= 5; $i++)
    <P>{{ $i}}. Iteration </p>
    @endfor
    </div>
    </div> -->


    <div class="row">
    <div class="col-md-12">
    <p class="quote">The Beautiful Laravel</p>
    </div>
    </div>
    @foreach( $posts as $post)
    <div class="row">
    <div class="col-md-12">
    <h1 class="post-title"> {{ $post['title']}}</h1>
<p style="text-align:center; font-size:20px"> {{$post ['content']}}</p>
    <p><a href="{{ route ('blog.post',['id'=> array_search($post,$posts)] )}}">Read more...</a></p>
    </div>
    </div>
    @endforeach
 @endsection



    <!-- <hr>
    <div class="row">
    <div class="col-md-12">
    <h1 class="post-title"> The next step</h1>
    <p style="text-align:center; font-size:20px" >understanding the basics is great, but you need to be able to make the next steps</p>
    <p><a href="{{ route ('blog.post',['id'=>2] )}}">Read more...</a></p>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-12">
    <h1 class="post-title"> laravel 5.3</h1>
    <p style="text-align:center; font-size:20px">Though announced as a minoe release, Laravel 5.3 ships with some very intresting additions and features.</p>
    <p><a href="{{ route ('blog.post',['id'=>3] )}}">Read more...</a></p>
    </div>
    </div>
    <hr>  -->
   