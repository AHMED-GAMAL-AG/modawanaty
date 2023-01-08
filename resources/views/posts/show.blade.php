@extends('posts.layout')


@section('title' , $post->title)

@section('content')
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">

            <div class="blog-post mb-3">

                {{-- "posts/{{$post->id}}" this passes to the url the id of the post i clicked on --}}
                <h2 class="blog-post-title"> {{ $post->title }} </h2>

                <p class="blog-post-body"> بقلم {{ $post->author }}
                    {{ Carbon\Carbon::parse ($post->created_at)->diffForHumans() }} {{-- Carbon\Carbon::parse() converts
                    the string to date because diffForHumans dont allow strings--}}
                </p>

                <p>
                    {{$post->body}}
                </p>


                <h1>التعليقات</h1>
                @if (count($comments) == 0 )
                <h1>لا يوجد تعليقات</h1>
                @else

                {{-- you can use $comments without passing it as you use  model rout binding in PostController Post $post so it passes all the data of the model --}}
                @foreach ($comments as $comment)
                <h4>{{ $comment->name }}</h4>
                <p>
                    {{ $comment->body }}
                </p>
                @endforeach
                @endif
            </div>

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur
                    purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>

            <div class="p-4">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>

            <div class="p-4">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

@endsection
