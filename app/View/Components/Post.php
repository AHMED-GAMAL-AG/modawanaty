<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    public $post;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->post = $post;
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
                    </div>
blade;
    }
}
