@extends('components.main')
@section('title', 'پاسخ به تیکت 123')
@section('icon', '/assets/images/chatting.png')

@section("toolbar")
<a href="{{route('tickets.show')}}" class="btn btn-primary">بازگشت</a>
@endsection



@section('content')
<div class="card card-ticket">
    <div class="card-header d-flex align-items-center justify-content-between">
        <div>
            <h4>موضوع : </h4>
            <span>بررسی سریال نرم افزار</span>
        </div>
        <div>
            <h4>تاریخ ارسال</h4>
            <span>12/12/1403 12:59</span>
        </div>
    </div>
    <div class="card-body">
        <div class="chat-body">
            <!-- MESSAGE -->
            <div>
                <div class="message-box">
                    <div>
                        این متن از طرف فرستده است
                    </div>
                    <div class="message-box-footer">
                        <span class="text-muted fs-7"><span>تاریخ : </span>12/12/1403 23:59</span>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-wrap px-2 mt-2 message-files" style="gap: 20px;">
                    <a target="_blank" href="https://picsum.photos/200"><i class="fa-solid fa-file"></i></a>
                    <a target="_blank" href="https://picsum.photos/200"><i class="fa-solid fa-file"></i></a>
                    <a target="_blank" href="https://picsum.photos/200"><i class="fa-solid fa-file"></i></a>
                    <a target="_blank" href="https://picsum.photos/200"><i class="fa-solid fa-file"></i></a>
                </div>
            </div>
            <!-- MESSAGE -->

            <!-- MESSAGE -->
            <div>
                <div class="message-box you">
                    <div>
                        این متن از طرف ادمین است
                    </div>
                    <div class="message-box-footer">
                        <span class="text-muted fs-7"><span>تاریخ : </span>12/12/1403 23:59</span>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-wrap px-2 mt-2 message-files" style="gap: 20px;">
                    <a target="_blank" href="https://picsum.photos/200"><i class="fa-solid fa-file"></i></a>
                    <a target="_blank" href="https://picsum.photos/200"><i class="fa-solid fa-file"></i></a>
                    <a target="_blank" href="https://picsum.photos/200"><i class="fa-solid fa-file"></i></a>
                    <a target="_blank" href="https://picsum.photos/200"><i class="fa-solid fa-file"></i></a>
                </div>
            </div>
            <!-- MESSAGE -->
        </div>
    </div>
    <div class="card-footer bg-light">
        <form action="">
            @csrf
            <textarea class="form-control mb-5" name="" id="" placeholder="متن خود را وارد کنید"></textarea>
            <div class="w-100 d-flex align-items-end justify-content-between">
                <div>
                    <label class="form-label">انتخاب فایل</label>
                    <input class="form-control" style="width: max-content;" type="file" multiple name="" id="">
                </div>
                <button class="btn btn-primary">ارسال</button>
            </div>
        </form>
    </div>
</div>
@endsection


@section('js')
<script>
    $(window).on('load', function() {
        // Scroll the .card-body inside .card-ticket to the bottom
        $('.card-ticket .card-body').scrollTop($('.card-ticket .card-body')[0].scrollHeight);
    });
</script>
@endsection