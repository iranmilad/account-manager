@extends('components.main')
@section('title', 'تیکت ها')
@section('icon', '/assets/images/chatting.png')


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
            @csrf
            <div class="d-flex align-items-center justify-content-between w-100 gap-4 my-5">
                <div class="d-flex align-items-center gap-5">
                    <select class="form-select form-select-solid " style="width: max-content;" name="" id="">
                        <option>عملیات</option>
                        <option value="delete">حذف</option>
                        <option value="close">بستن</option>
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
                    <div>
                        <label class="form-label" for="">وضعیت</label>
                        <select multiple class="form-select form-select-solid" data-placeholder="انتخاب وضعیت" data-control="select2" name="" id="">
                            <option value="1">باز</option>
                            <option value="2">بسته</option>
                        </select>
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
                        <th class="p-0 pb-3 min-w-100px text-start">شماره تیکت</th>
                        <th class="p-0 pb-3 min-w-100px text-start">تاریخ</th>
                        <th class="p-0 pb-3 min-w-100px text-start">الویت</th>
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
                            <a href="{{route('ticket.show',['id'=>1])}}">123</a>
                        </td>
                        <td class="text-start">21/08/1403</td>
                        <td class="text-start">
                            <span class="badge badge-success">کم</span>
                            <span class="badge badge-warning">متوسط</span>
                            <span class="badge badge-danger">زیاد</span>
                        </td>
                        <td class="text-end">
                            <a href="{{route('ticket.show',['id'=>1])}}" class="btn btn-light-primary btn-sm">
                                پاسخ
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
<script src="/assets/plugins/flatpicker_fa.js"></script>
<script src="/assets/plugins/jdate.min.js"></script>
@endsection

@section('js')
<script>
    window.Date = window.JDate;
    flatpickr = $("#filter_date").flatpickr({
        disableMobile: "true",
        altInput: true,
        altFormat: "Y-m-d",
        dateFormat: "Y-m-d",
        locale: "fa",
    });
</script>
@endsection