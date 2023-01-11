@section('title', 'إنشاء مقالة جديدة')


<x-layout>
    <!-- action="/posts" is the route name in web.php that will receive the data , method POST to pass the data in the request not the url -->
    <!-- name="title" name="body" name="author" is the column name in the DATABASE-->

    <h1>إنشاء مقالة جديدة</h1>
    <form action="/posts" method="POST">
        {{-- i dont need to pass the $post to the form as it will show '' but in the edit.blade view i will pass it --}}
        <x-form />
        <button type="submit" class="btn btn-primary">حفظ</button>
    </form>

</x-layout>
