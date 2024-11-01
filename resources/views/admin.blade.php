@extends('components.main')
@section('icon', '/assets/images/admin.png')

@if(Route::is('create-admin.show'))
@section('title', 'ایجاد ادمین')
@else
@section('title', 'ویرایش ادمین')
@endif

@section('content')
<form method="post">
    @csrf
    <!--begin::پایه info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::کارت header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expوed="true" aria-controls="kt_account_profile_details">
            <!--begin::کارت title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">تنظیمات حساب</h3>
            </div>
            <!--end::کارت title-->
        </div>
        <!--begin::کارت header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <div id="kt_account_profile_details_form" class="form">
                <!--begin::کارت body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Tags-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">عکس پروفایل</label>
                        <!--end::Tags-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true">
                                <!--begin::نمایش existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px"></div>
                                <!--end::نمایش existing avatar-->
                                <!--begin::Tags-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تعویض آواتار">
                                    <i class="ki-duotone ki-pencil fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Tags-->
                                <!--begin::حذف-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="حذف آواتار">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::حذف-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">فرمت های مجاز : png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">نام کاربری</label>
                        <div class="col-lg-8 col-xl-6">
                            <input type="text" name="username" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="نام را وارد کنید" value="" />
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">نام</label>
                        <div class="col-lg-8 col-xl-6">
                            <input type="text" name="first_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="نام را وارد کنید" value="" />
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">نام خانوادگی</label>
                        <div class="col-lg-8 col-xl-6">
                            <input type="text" name="last_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="نام خانوداگی را وارد کنید" value="" />
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">شماره تلفن</label>
                        <div class="col-lg-8 col-xl-6">
                            <input type="text" name="mobile" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="شماره تلفن را وارد کنید" value="" />
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">ایمیل</label>
                        <div class="col-lg-8 col-xl-6">
                            <input type="text" name="email" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="ایمیل را وارد کنید" value="" />
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>

    <!--begin::پایه info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::کارت header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expوed="true" aria-controls="kt_account_profile_details">
            <!--begin::کارت title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">رمز عبور</h3>
            </div>
            <!--end::کارت title-->
        </div>
        <!--begin::کارت header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <div id="kt_account_profile_details_form" class="form">
                <!--begin::کارت body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">رمز عبور</label>
                        <div class="col-lg-8 col-xl-6">
                            <div class="input-group mb-3 create-password-input-group">
                                <button type="button" class="btn btn-dark create-password-input-group-copy" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="کپی کردن رمز عبور"><i class="fa-solid fa-copy"></i></button>
                                <input name="password" type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="انتخاب رمز عبور">
                                <button type="button" class="btn btn-primary create-password-input-group-generate">ایجاد رمز عبور</button>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::پایه info-->
    <!--end::پایه info-->
    <button type="submit" class="btn btn-success">ذخیره</button>
    <!--end::پایه info-->
</form>
@endsection