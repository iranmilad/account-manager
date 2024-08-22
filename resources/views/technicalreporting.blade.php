@extends('components.main')
@section('title', 'گزارشگیری فنی')
@section('icon', '/assets/media/icons/warning-sign.png')

@section('content')
<!-- START:CARD -->
<div class="card mb-5 mb-xl-10">
  <div class="card-header border-0">
    <div class="card-title m-0">
      <h3 class="fw-bold m-0">گزارش وب هوک</h3>
    </div>
  </div>
  <div class="card-body border-top p-9">
    <div class="d-flex flex-column justify-content-center container-fluid">
      <!-- START:TABLE -->
      <table id="technicalreporting_table_1" class="table table-striped table-row-bordered gy-5 gs-7">
        <thead>
          <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
            <th class="p-0 pb-3 min-w-175px text-start">کد کالا</th>
            <th class="p-0 pb-3 min-w-100px text-start">زمان</th>
            <th class="p-0 pb-3 min-w-100px text-start">وضعیت</th>
            <th class="p-0 pb-3 min-w-100px text-end">عملیات</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-start">#123</td>
            <td class="text-start">23:59:59</td>
            <td class="text-start">
              <i class="ki-duotone ki-check-circle fs-1 text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="متن راهنما">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
            </td>
            <td class="text-end">
              <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                عملیات
                <span class="svg-icon fs-5 m-0">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon points="0 0 24 0 24 24 0 24"></polygon>
                      <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                    </g>
                  </svg>
                </span>
              </a>
              <!--begin::Menu-->
              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a href="#" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                    ویرایش
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a href="#" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
                    حذف
                  </a>
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu-->
            </td>
          </tr>
        </tbody>
      </table>
      <!-- END:TABLE -->
    </div>
  </div>
</div>
<!-- END:CARD -->

<!-- START:CARD -->
<div class="card mb-5 mb-xl-10">
  <div class="card-header border-0">
    <div class="card-title m-0">
      <h3 class="fw-bold m-0">گزارش فاکتور</h3>
    </div>
  </div>
  <div class="card-body">
    <div class="d-flex flex-column justify-content-center container-fluid">
      <!-- START:TABLE -->
      <table id="technicalreporting_table_2" class="table table-striped table-row-bordered gy-5 gs-7">
        <thead>
          <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
            <th class="p-0 pb-3 min-w-175px text-start">شماره فاکتور</th>
            <th class="p-0 pb-3 min-w-100px text-start">زمان</th>
            <th class="p-0 pb-3 min-w-100px text-start">وضعیت</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-start">#123</td>
            <td class="text-start">23:59:59</td>
            <td class="text-start">
              <i class="ki-duotone ki-check-circle fs-1 text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="متن راهنما">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- END:TABLE -->
    </div>
  </div>
</div>
<!-- END:CARD -->

<!-- START:CARD -->
<div class="card mb-5 mb-xl-10">
  <div class="card-header border-0">
    <div class="card-title m-0">
      <h3 class="fw-bold m-0">گزارش بروزرسانی</h3>
    </div>
  </div>
  <div class="card-body">
    <div class="d-flex flex-column justify-content-center container-fluid">
      <!-- START:TABLE -->
      <table id="technicalreporting_table_3" class="table table-striped table-row-bordered gy-5 gs-7">
        <thead>
          <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
            <th class="p-0 pb-3 min-w-175px text-start">تاریخ شروع</th>
            <th class="p-0 pb-3 min-w-100px text-start">تاریخ پایان</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-start">23:59:59</td>
            <td class="text-start">23:59:59</td>
          </tr>
        </tbody>
      </table>
      <!-- END:TABLE -->
    </div>
  </div>
</div>
<!-- END:CARD -->


@section('js')
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script>
  $("#technicalreporting_table_1").DataTable({
    language: {
      emptyTable: 'داده ای وجود ندارد'
    },
    info: false
  });
  $("#technicalreporting_table_2").DataTable({
    language: {
      emptyTable: 'داده ای وجود ندارد'
    },
    info: false
  });
  $("#technicalreporting_table_3").DataTable({
    language: {
      emptyTable: 'داده ای وجود ندارد'
    },
    info: false
  });
</script>
@endsection
@endsection