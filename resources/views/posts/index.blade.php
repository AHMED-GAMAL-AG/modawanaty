<x-layout>
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">

                @foreach ($posts as $post)
                    <div class="blog-post mb-3">

                        {{-- "posts/{{$post->id}}" this passes to the url the id of the post i clicked on --}}
                        <a href="posts/{{ $post->id }}">
                            <h2 class="blog-post-title"> {{ $post->title }} </h2>
                        </a>
                        <p class="blog-post-body"> بقلم
                            <a href="#"> {{ $post->author }} </a>
                            {{-- Carbon\Carbon::parse() converts the string to date because diffForHumans don't allow
                        strings
                        --}}
                            {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                        </p>

                    </div>
                @endforeach

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1"
                        aria-disabled="true">Newer</a>
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <x-subscribe />
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->

</x-layout>
