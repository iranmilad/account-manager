@extends('components.main')
@section('title', 'فاکتور ها')
@section('icon', '/assets/images/tablet.png')


@section('content')
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
            <div class="d-flex align-items-center justify-content-start w-100 gap-4 mb-5">
                <select class="form-select form-select-solid" style="width: max-content;" name="" id="">
                    <option>عملیات</option>
                    <option value="delete">حذف</option>
                </select>
                <button class="btn btn-primary" type="submit">اجرا</button>
            </div>
            <table id="global_table" class="table table-row-bordered gy-5 gs-7">
                <thead>
                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                        <th class="w-10px">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#global_table .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="p-0 pb-3 min-w-100px text-start">صورتحساب</th>
                        <th class="p-0 pb-3 min-w-100px text-start">تاریخ صورتحساب</th>
                        <th class="p-0 pb-3 min-w-100px text-start">تاریخ سررسید</th>
                        <th class="p-0 pb-3 min-w-100px text-start">کل</th>
                        <th class="p-0 pb-3 min-w-100px text-start">وضعیت</th>
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
                            <a href="{{route('invoice.show',['id'=>1])}}">2045</a>
                        </td>
                        <td class="text-start">12/12/1403</td>
                        <td class="text-start">29/12/1403</td>
                        <td>250,000</td>
                        <td class="text-start">
                            <span class="badge badge-success">پرداخت شده</span>
                            <span class="badge badge-danger">پرداخت نشده</span>
                        </td>
                        <td class="text-end">
                            <a href="{{route('invoice.show',['id'=>1])}}" class="btn btn-light btn-active-light-primary btn-sm">
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
@endsection

@section('before-js')
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
@endsection