@extends('components.main')
@section('icon', '/assets/images/coins.png')

@if(Route::is('create-income.show'))
@section('title', 'ایجاد درآمد')
@else
@section('title', 'ویرایش درآمد')
@endif

@section('content')
<form action="">
    @csrf
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">ثبت اطلاعات درآمد</h3>
            </div>
        </div>
        <div class="card-body border-top p-9">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="invoice_number" class="form-label">شماره فاکتور</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="invoice_number" placeholder="شماره فاکتور را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="received_date" class="form-label">تاریخ دریافت</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="received_date" id="date_time" placeholder="تاریخ دریافت را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="amount" class="form-label">مبلغ</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="amount" placeholder="مبلغ را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="payment_method" class="form-label">روش پرداخت</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="payment_method" placeholder="روش پرداخت را وارد کنید" class="form-control form-control-solid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <label for="status" class="form-label">وضعیت</label>
                </div>
                <div class="col-lg-8">
                    <select class="form-select form-select-solid" name="" id="" data-control="select2" data-hide-search="true">
                        <option value="1">تسویه شده</option>
                        <option value="2">در انتظار</option>
                        <option value="3">لغو شده</option>
                    </select>
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
<script src="/assets/plugins/flatpicker_fa.js"></script>
<script src="/assets/plugins/jdate.min.js"></script>
<script>
    window.Date = window.JDate;
    flatpickr = $("#date_time").flatpickr({
        disableMobile: "true",
        altInput: true,
        altFormat: "Y-m-d",
        dateFormat: "Y-m-d",
        locale: "fa",
    });
</script>
@endsection