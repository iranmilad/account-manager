@extends('components.main')
@section('title', 'گزارش سرور ها')
@section('icon', '/assets/images/error.png')


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
        <form method="post" action="" id="action_form">
            @csrf
            <div class="d-flex align-items-center justify-content-start w-100 gap-4 mb-5">
                <select class="form-select form-select-solid" style="width: max-content;" name="" id="">
                    <option>عملیات</option>
                    <option value="delete">حذف</option>
                </select>
                <button class="btn btn-primary" type="submit">اجرا</button>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-muted">آیدی سرور</th>
                        <th class="text-muted">زمان</th>
                        <th class="text-muted">فرد درخواست کننده</th>
                        <th class="text-end text-muted">لینک گزارش</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#123</td>
                        <td>12/12/1403 23:59</td>
                        <td>فرهاد باقری</td>
                        <td class="text-end">
                            <a target="_blank" href="https://google.com">کلیک کنید</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <ul class="pagination mt-5">
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