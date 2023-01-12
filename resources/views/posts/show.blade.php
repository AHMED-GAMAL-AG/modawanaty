@section('title', $post->title)

<x-layout>
    {{-- you should define the $post and $comments variable in the constructor in app/view/components/post.php --}}
    {{-- you should pass the class as {{$attributes}} in the <x-post> component --}}
    <x-post :post="$post" class="blog-post m-3" />

    <x-comment :comments="$comments" />

    <a class="btn btn-primary" href="/posts/{{ $post->id }}/edit">تعديل المقالة</a>
    <h3>أضف تعليقًا</h3>
    <x-createComment :post="$post" />


    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
        <x-subscribe />
    </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

    </main><!-- /.container -->
    </div>
</x-layout>
