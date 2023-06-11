<x-main title="گزارشگیری فنی">
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
</x-main>