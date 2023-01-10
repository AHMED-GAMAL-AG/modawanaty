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
