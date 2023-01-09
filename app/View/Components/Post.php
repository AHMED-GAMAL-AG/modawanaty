<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    public $post, $comments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post, $comments)
    {
        $this->post = $post;
        $this->comments = $comments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <div {{$attributes}}>
        <main role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">

                    <div class="blog-post mb-3">

                        {{-- "posts/{{$post->id}}" this passes to the url the id of the post i clicked on --}}
                        <h2 class="blog-post-title"> {{ $post->title }} </h2>

                        <p class="blog-post-body"> بقلم {{ $post->author }}
                            {{ Carbon\Carbon::parse ($post->created_at)->diffForHumans() }} {{-- Carbon\Carbon::parse()
                            converts
                            the string to date because diffForHumans dont allow strings--}}
                        </p>

                        <p>
                            {{$post->body}}
                        </p>


                        <h1>التعليقات</h1>
                        @if (count($comments) == 0 )
                        <h1>لا يوجد تعليقات</h1>
                        @else

                        {{-- you can use $comments without passing it as you use model rout binding in PostController Post
                        $post so it passes all the data of the model --}}
                        @foreach ($comments as $comment)
                        <h4>{{ $comment->name }}</h4>
                        <p>
                            {{ $comment->body }}
                        </p>
                        @endforeach
                        @endif
                    </div>
blade;
    }
}
