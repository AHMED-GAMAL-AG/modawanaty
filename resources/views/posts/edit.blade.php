<x-layout>
<!-- action="/posts" is the route name in web.php that will receive the data , method POST to pass the data in the request not the url -->
<!-- name="title" name="body" name="author" is the column name in the DATABASE-->

    <form action="/posts/{{ $post->id }}" method="POST">
    {{-- html5 doesn't support patch only post/get so i will override it with @method('PATCH') but you should edit action="/posts" form this to   action="/posts/{{ $post->id }}"--}}
    {{-- this route will make the request to the method update() in the PostController  --}}
    @method('PATCH')
        <x-form :post="$post" />
        <button type="submit" class="btn btn-primary">تعديل</button>
    </form>
</x-layout>
