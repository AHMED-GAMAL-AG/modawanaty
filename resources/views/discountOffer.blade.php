@component('mail::message')
    {{-- add this component to use markdown DONT leave any empty space  before # - or line before  @component('mail::message')--}}
# مدونتي
## تخفيض علي كتابي الجديد
### بعض العناوين المهمه

- مبادي التسويق الالكتروني
- مبادي التسويق
- تجارب ونصائح

اشتر كتابي الجديد الان واحصل علي تخفيض قدره %30 من سعره الأصلي

@component('mail::button', ['url' => '#'])
اشتر الان
@endcomponent
@endcomponent


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>

<body class="rtl">
    <h1 class="title">مدونتي</h1>
    <h1 class="subtitle">تخفيض علي كتابي الجديد</h1>
    <p>اشتر كتابي الجديد الان واحصل علي تخفيض قدره %30 من سعره الأصلي</p>
    <div class="cta">
        <a href="#" class="button">اشتر الان</a>
    </div>
</body>

</html> --}}
