<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>إنشاء مقالة جديدة</title>
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
        integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <!-- action="/posts" is the route name in web.php that will receive the data , method POST to pass the data in the request not the url -->
        <!-- name="title" name="body" name="author" is the coulmn name in the DATABASE-->
        <form action="/posts" method="POST">
            @csrf {{-- @csrf will talk about it later --}}
            <div class="form-group">
                <label for="title">عنوان المقالة</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="body">نص المقالة</label>
                <textarea type="text" name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="author">كاتب المقالة</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>
    </div>
</body>

</html>
