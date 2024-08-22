@extends('components.main')
@section('icon', '/assets/images/starred.png')

@if(Route::is('create-package.show'))
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
                <h3 class="fw-bold m-0">تعریف پکیج</h3>
            </div>
        </div>
        <div class="card-body border-top p-9">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="package_name" class="form-label">نام پکیج</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="package_name" placeholder="نام پکیج را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="description" class="form-label">توضیحات</label>
                </div>
                <div class="col-lg-8">
                    <textarea name="description" placeholder="توضیحات پکیج را وارد کنید" class="form-control form-control-solid" rows="4"></textarea>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="price" class="form-label">قیمت (به تومان)</label>
                </div>
                <div class="col-lg-8">
                    <input type="number" name="price" placeholder="قیمت پکیج را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="duration" class="form-label">دوره زمانی (به روز)</label>
                </div>
                <div class="col-lg-8">
                    <input type="number" name="duration" placeholder="مدت زمان پکیج را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="features" class="form-label">ویژگی‌های پکیج</label>
                </div>
                <div class="col-lg-8">
                    <textarea name="features" placeholder="ویژگی‌های پکیج را وارد کنید" class="form-control form-control-solid" rows="4"></textarea>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="max_users" class="form-label">حداکثر تعداد کاربران</label>
                </div>
                <div class="col-lg-8">
                    <input type="number" name="max_users" placeholder="حداکثر تعداد کاربران را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="extra_features" class="form-label">ویژگی‌های اضافی</label>
                </div>
                <div class="col-lg-8">
                    <textarea name="extra_features" placeholder="ویژگی‌های اضافی را وارد کنید (اختیاری)" class="form-control form-control-solid" rows="4"></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer border-0 d-flex justify-content-end py-6 px-9">
            <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
    </div>
</form>

@endsection