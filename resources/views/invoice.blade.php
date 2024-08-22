@extends('components.main')
@section('title', 'فاکتور 000756')
@section('icon', '/assets/images/tablet.png')

@section('css')
<style>
    @media print{
        #kt_app_toolbar,#kt_app_header_container,#kt_app_header,#print-btn,#kt_app_footer{
            display:none
        }
    }
</style>
@endsection

@section('content')
<section class="invoice-view-wrapper">
    <div class="card invoice-print-area">
        <div class="card-content">
            <div class="card-body pb-0 mx-25">
                <!-- header section -->
                <div class="row line-height-2 mt-n50">
                    <div class="col-xl-4 col-md-12 mb-50 mb-xl-0">
                        <span class="invoice-number mr-50">صورتحساب</span>
                        <span>000756</span>
                    </div>
                    <div class="col-xl-8 col-md-12">
                        <div class="d-flex align-items-center justify-content-xl-end flex-wrap">
                            <div class="mr-3">
                                <small class="text-muted">تاریخ تنظیم:</small>
                                <span>1399/03/12</span>
                            </div>
                            <div>
                                <small class="text-muted">تاریخ اعتبار:</small>
                                <span>1399/03/12</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- logo and title -->
                <div class="row my-3">
                    <div class="col-sm-6">
                        <h4 class="text-primary">صورتحساب</h4>
                        <span>توسعه نرم افزار</span>
                    </div>
                    <div class="mt-1 mt-sm-0 col-sm-6 d-flex justify-content-end">
                        <img src="/assets/media/logos/default-dark.svg" alt="logo" height="46" width="164">
                    </div>
                </div>
                <hr>
                <!-- invoice address and contact -->
                <div class="row invoice-info">
                    <div class="col-6 mt-1">
                        <h6 class="invoice-from">صورتحساب از</h6>
                        <div class="mb-75">
                            <span>توضیحات اضافه</span>
                        </div>
                        <div class="mb-75">
                            <span>تبریز، چهارراه آبرسان، برج بلور، طبقه 567</span>
                        </div>
                        <div class="mb-75">
                            <span>hello@clevision.net</span>
                        </div>
                        <div class="mb-75">
                            <span class="ltr-text">(+98) 601 678 8022</span>
                        </div>
                    </div>
                    <div class="col-6 mt-1">
                        <h6 class="invoice-to">صورتحساب به</h6>
                        <div class="mb-75">
                            <span>شرکت سیب پردازان</span>
                        </div>
                        <div class="mb-75">
                            <span>تهران، سعادت آباد، جنب بانک ملت، پلاک 456</span>
                        </div>
                        <div class="mb-75">
                            <span>pixinvent@gmail.com</span>
                        </div>
                        <div class="mb-75">
                            <span class="ltr-text">(+98) 987 352 5603</span>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- product details table-->
            <div class="table table-responsive mx-md-10">
                <table class="table table-borderless mb-0">
                    <thead>
                        <tr class="border-0">
                            <th scope="col">آیتم</th>
                            <th scope="col">توضیحات</th>
                            <th scope="col">هزینه</th>
                            <th scope="col">تعداد</th>
                            <th scope="col" class="text-right">قیمت</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>سرویس ویژه</td>
                            <td>سرور رم 2</td>
                            <td>28,000 تومان</td>
                            <td>1</td>
                            <td class="text-primary text-right font-weight-bold">28,000 تومان</td>
                        </tr>
                        <tr>
                            <td>سرور VIP</td>
                            <td>سرور 2 گیگابایت</td>
                            <td>24,000 تومان</td>
                            <td>1</td>
                            <td class="text-primary text-right font-weight-bold">24,000 تومان</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- invoice subtotal -->
            <div class="card-body pt-0 mx-25">
                <hr>
                <div class="row">
                    <div class="col-12 d-flex justify-content-end mt-75">
                        <div class="invoice-subtotal">
                            <div class="invoice-calc d-flex justify-content-between">
                                <span class="invoice-title">جمع جزء</span>
                                <span class="invoice-value">76,000 تومان</span>
                            </div>
                            <div class="invoice-calc d-flex justify-content-between">
                                <span class="invoice-title">تخفیف</span>
                                <span class="invoice-value">- 9,600 تومان</span>
                            </div>
                            <div class="invoice-calc d-flex justify-content-between">
                                <span class="invoice-title">مالیات</span>
                                <span class="invoice-value">21%</span>
                            </div>
                            <hr>
                            <div class="invoice-calc d-flex justify-content-between">
                                <span class="invoice-title">جمع صورتحساب</span>
                                <span class="invoice-value">66,400 تومان</span>
                            </div>
                            <div class="invoice-calc d-flex justify-content-between">
                                <span class="invoice-title">پرداخت در زمان مقرر</span>
                                <span class="invoice-value">- 0 تومان</span>
                            </div>
                            <div class="invoice-calc d-flex justify-content-between">
                                <span class="invoice-title">مالیات</span>
                                <span class="invoice-value">10,953 تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary mt-5" id="print-btn" onclick="window.print()">چاپ فاکتور</button>
</section>
@endsection