@extends('components.main')
@section('icon', '/assets/images/single.png')

@if(Route::is('create-income.show'))
@section('title', 'ایجاد مشترک')
@else
@section('title', 'ویرایش مشترک')
@endif


@section('content')

<form action="">
    @csrf
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">مشخصات مشترک</h3>
            </div>
        </div>
        <div class="card-body border-top p-9">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="fullname" class="form-label">نام کامل</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="fullname" placeholder="نام کامل را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="website" class="form-label">آدرس سایت مشترک</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="website" placeholder="آدرس سایت مشترک را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="serial" class="form-label">سریال نرم‌افزار</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="serial" placeholder="سریال نرم‌افزار را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="serial" class="form-label">سرویس خریداری شده</label>
                </div>
                <div class="col-lg-8">
                    <select class="form-select form-select-solid" name="" id="" data-control="select2" data-hide-search="true">
                        <option value="">سرویس 1 ماهه</option>
                        <option value="">سرویس ویژه</option>
                    </select>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="" class="form-label">ویژگی سرویس ها</label>
                </div>
                <div class="col-lg-8">
                    <input class="form-control form-control-solid" value="ویژگی 3 , ویژگی 2 , ویژگی 1" id="tagify" />
                    <span class="text-muted fs-7">ویژگی را وارد کنید و Enter را بزنید</span>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="buy_start_date" class="form-label">تاریخ شروع خرید</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="buy_start_date" data-jdp placeholder="تاریخ شروع خرید را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="phone" class="form-label">انتخاب سرور</label>
                </div>
                <div class="col-lg-8">
                    <select class="form-select form-select-solid" name="" id="" data-control="select2" data-hide-search="true">
                        <option value="">سرور 1</option>
                        <option value="">سرور 2</option>
                        <option value="">سرور 3</option>
                    </select>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="phone" class="form-label">شماره تلفن</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="phone" placeholder="شماره تلفن را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="email" class="form-label">ایمیل</label>
                </div>
                <div class="col-lg-8">
                    <input type="email" name="email" placeholder="ایمیل را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="address" class="form-label">آدرس</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="address" placeholder="آدرس را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="city" class="form-label">شهر</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="city" placeholder="شهر را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="state" class="form-label">استان</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="state" placeholder="استان را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="postal_code" class="form-label">کد پستی</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="postal_code" placeholder="کد پستی را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="company_name" class="form-label">نام شرکت</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="company_name" placeholder="نام شرکت را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="registration_number" class="form-label">شماره ثبت</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="registration_number" placeholder="شماره ثبت را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="national_id" class="form-label">کد ملی</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="national_id" placeholder="کد ملی را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="tax_number" class="form-label">شماره مالیاتی</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="tax_number" placeholder="شماره مالیاتی را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
        </div>
        <div class="card-footer border-0 d-flex justify-content-end py-6 px-9">
            <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
    </div>
</form>
@endsection


@section('js')
<script src="/assets/js/jalalidatepicker.min.js"></script>
<script>
    var input = document.querySelector("#tagify");

    // Initialize Tagify script on the above inputs
    let post_types_tags = new Tagify(input, {
        dropdown: {
            // <- mixumum allowed rendered suggestions
            enabled: 0, // <- show suggestions on focus
            closeOnSelect: false, // <- do not hide the suggestions dropdown once an item has been selected
            pattern: /^.{1,70}/,
        },
    });
    jalaliDatepicker.startWatch();
</script>
@endsection