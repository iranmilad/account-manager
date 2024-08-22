@extends('components.main')
@section('icon', '/assets/images/videocall.png')

@if(Route::is('create-call.show'))
@section('title', 'ایجاد گزارش')
@else
@section('title', 'ویرایش گزارش (فرهاد باقری)')
@endif

@if(Route::is('show-call.show'))
    @section("toolbar")
        <!-- PUT USER ID -->
        <!-- PUT USER ID -->
        <!-- PUT USER ID -->
        <!-- PUT USER ID -->
        <!-- PUT USER ID -->
        <a href="{{route('edit-call.show',['id'=>1])}}" class="btn btn-primary">بازگشت</a>
    @endsection
@endif

@section('content')
@if(Route::is('create-call.show') || Route::is('edit-call.show'))
<form action="" class="mb-10">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">گزارش جدید</h4>
        </div>
        <div class="card-body">
            @if(Route::is('create-call.show'))
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="serial" class="form-label">انتخاب کاربر</label>
                </div>
                <div class="col-lg-8">
                    <x-advanced-search type="user" label="" name="user" solid />
                </div>
            </div>
            @endif
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="serial" class="form-label">تاریخ تماس</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="call_date" id="call_date" placeholder="تاریخ تماس را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="serial" class="form-label">مشکل گزارش شده</label>
                </div>
                <div class="col-lg-8">
                    <textarea class="form-control form-control-solid" rows="5" placeholder="متن خود را وارد کنید" name="" id=""></textarea>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="serial" class="form-label">نتیجه گزارش</label>
                </div>
                <div class="col-lg-8">
                    <textarea class="form-control form-control-solid" rows="5" placeholder="متن خود را وارد کنید" name="" id=""></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer border-0 d-flex justify-content-end py-6 px-9">
            <button type="submit" class="btn btn-primary">افزودن</button>
        </div>
    </div>
</form>
@endif

@if(Route::is('show-call.show'))
<form action="" class="mb-10">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">اطلاعات گزارش</h4>
        </div>
        <div class="card-body">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="serial" class="form-label">تاریخ تماس</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="call_date" id="call_date" value="1403-12-12" placeholder="تاریخ تماس را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="serial" class="form-label">مشکل گزارش شده</label>
                </div>
                <div class="col-lg-8">
                    <textarea class="form-control form-control-solid" rows="5" placeholder="متن خود را وارد کنید" name="" id="">این متن مشکل گزارش شده است که از طریق دکمه ی مشاهده در لیست نمایش داده شده است</textarea>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="serial" class="form-label">نتیجه گزارش</label>
                </div>
                <div class="col-lg-8">
                    <textarea class="form-control form-control-solid" rows="5" placeholder="متن خود را وارد کنید" name="" id="">این متن نتیجه گزارش شده است که از طریق دکمه ی مشاهده در لیست نمایش داده شده است</textarea>
                </div>
            </div>
        </div>
        <div class="card-footer border-0 d-flex justify-content-end py-6 px-9" style="gap: 10px;">
            <button type="submit" class="btn btn-danger">حذف</button>
            <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
    </div>
</form>
@endif

@if(Route::is('edit-call.show'))
<div class="card">
    <div class="card-body">
        <form class="d-flex align-items-center justify-content-end" action="" method="get">
            @csrf
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span class="path2"></span></i>
                <input name="s" value="{{ request()->get('s') ?? '' }}" type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="جست و جو" />
            </div>
        </form>
        <form method="post" class="" id="action_form">
            <div class="d-flex align-items-center justify-content-between w-100 gap-4 my-5">
                <div class="d-flex align-items-center gap-5">
                    <select class="form-select form-select-solid " style="width: max-content;" name="" id="">
                        <option>عملیات</option>
                        <option value="delete">حذف</option>
                    </select>
                    <button class="btn btn-primary" type="submit">اجرا</button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#filter_collapse">فیلتر</button>
                </div>
            </div>

            <div id="filter_collapse" class="collapse">
                <div class="d-flex align-items-end flex-wrap w-100 gap-10">
                    <div>
                        <label class="form-label" for="">بازه زمانی</label>
                        <input class="form-control form-control-solid" id="filter_date" type="text" placeholder="انتخاب کنید">
                    </div>
                    <button type="submit" name="filter" class="btn btn-primary tw-h-max">اجرا</button>
                </div>
            </div>

            <table id="global_table" class="table table-row-bordered gy-5 gs-7">
                <thead>
                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                        <th class="w-10px">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#global_table .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="p-0 pb-3 text-start">تاریخ تماس</th>
                        <th class="p-0 pb-3 text-start">شماره تلفن</th>
                        <th class="p-0 pb-3 min-w-100px text-end">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" name="checked_row" value="1" />
                            </div>
                        </td>
                        <td class="text-start">
                            <a href="{{route('show-call.show',['id'=>1])}}">12/12/1403</a>
                        </td>
                        <td class="text-start">09374039436</td>
                        <td class="text-end">
                            <a href="{{route('show-call.show',['id'=>1])}}" class="btn btn-light btn-active-light-primary btn-sm">
                                مشاهده
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <ul class="pagination">
            <li class="page-item previous disabled"><a href="#" class="page-link"><i class="previous"></i></a></li>
            <li class="page-item active"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item "><a href="#" class="page-link">3</a></li>
            <li class="page-item "><a href="#" class="page-link">4</a></li>
            <li class="page-item "><a href="#" class="page-link">5</a></li>
            <li class="page-item "><a href="#" class="page-link">6</a></li>
            <li class="page-item next"><a href="#" class="page-link"><i class="next"></i></a></li>
        </ul>
    </div>
</div>
@endif

@endsection

@section('js')
<script src="/assets/plugins/flatpicker_fa.js"></script>
<script src="/assets/plugins/jdate.min.js"></script>
<script>
    window.Date = window.JDate;
    flatpickr = $("#call_date").flatpickr({
        disableMobile: "true",
        altInput: true,
        altFormat: "Y-m-d",
        dateFormat: "Y-m-d",
        locale: "fa",
    });
    flatpickr = $("#filter_date").flatpickr({
        disableMobile: "true",
        altInput: true,
        altFormat: "Y-m-d",
        dateFormat: "Y-m-d",
        locale: "fa",
        mode: "range"
    });
</script>
@endsection