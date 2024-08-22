@extends('components.main')
@section('icon', '/assets/images/secure.png')

@if(Route::is('create-server.show'))
    @section('title', 'ایجاد سرور')
@else
    @section('title', 'ویرایش سرور')
@endif




@section('content')
<form action="">
    @csrf
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">مشخصات سرور</h3>
            </div>
        </div>
        <div class="card-body border-top p-9">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="server_name" class="form-label">نام سرور</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="server_name" placeholder="نام سرور را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="ip_address" class="form-label">آدرس IP</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="ip_address" placeholder="آدرس IP سرور را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="dns1" class="form-label">DNS 1</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="dns1" placeholder="DNS 1 را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="dns2" class="form-label">DNS 2</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="dns2" placeholder="DNS 2 را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="ram" class="form-label">میزان RAM (به گیگابایت)</label>
                </div>
                <div class="col-lg-8">
                    <input type="number" name="ram" placeholder="میزان RAM را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="cpu_cores" class="form-label">تعداد هسته‌های CPU</label>
                </div>
                <div class="col-lg-8">
                    <input type="number" name="cpu_cores" placeholder="تعداد هسته‌های CPU را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="storage" class="form-label">فضای ذخیره‌سازی (به گیگابایت)</label>
                </div>
                <div class="col-lg-8">
                    <input type="number" name="storage" placeholder="فضای ذخیره‌سازی را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="os" class="form-label">سیستم عامل</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="os" placeholder="سیستم عامل سرور را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="location" class="form-label">مکان فیزیکی سرور</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="location" placeholder="مکان فیزیکی سرور را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="admin_user" class="form-label">نام کاربری ادمین</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="admin_user" placeholder="نام کاربری ادمین را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="admin_password" class="form-label">رمز عبور ادمین</label>
                </div>
                <div class="col-lg-8">
                    <input type="password" name="admin_password" placeholder="رمز عبور ادمین را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
        </div>
        <div class="card-footer border-0 d-flex justify-content-end py-6 px-9">
            <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
    </div>
</form>
@endsection