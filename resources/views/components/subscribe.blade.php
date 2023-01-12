<div class="p-4 mb-3 bg-light rounded">
    <h4>مبادئ التسويق الإلكتروني</h4>
    <p>يكمنك الان شراء نسختك من كتاب مبادئ التسويق الإلكتروني بتخفيض قدره %30 أدخل بريدك الإلكتروني
        لتصلك رسالة بالتفاصيل</p>
    <form action="/mail" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
    </form>
</div>
@error('mail')
    <div class="alert alert-danger alert-dismissible fade show">{{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
    </div>
@enderror
