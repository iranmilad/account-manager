<x-main title="مدیریت فاکتور ها">
  <!-- START: CARD -->
  <div class="card mb-5 mb-xl-10">
    <div class="card-header border-0">
      <div class="card-title m-0">
        <h3 class="fw-bold m-0">تنظیمات فاکتور ها</h3>
      </div>
    </div>
    <form>
      <div class="card-body border-top p-9">
        <!--begin:: Group-->
        <div class="row mb-6">
          <!--begin::Tags-->
          <label class="col-lg-4 col-form-label required fw-semibold fs-6">وضعیت فاکتور ها</label>
          <!--end::Tags-->
          <!--begin::Col-->
          <div class="col-lg-8">
            <!--begin::Col-->
            <select class="form-select form-select-solid" data-control="select2" data-close-on-select="false" data-placeholder="انتخاب کنید" data-allow-clear="true" multiple="multiple">
              <option></option>
              <option value="1">ثبت خودکار</option>
              <option value="2">ثبت دستی</option>
            </select>
            <!--end::Col-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::group-->
      </div>
    </form>
  </div>
  <!-- END: CARD -->
  <!-- START: CARD -->
  <div class="card mb-5 mb-xl-10">
    <div class="card-header border-0">
      <div class="card-title m-0">
        <h3 class="fw-bold m-0">لیست فاکتور ها</h3>
      </div>
    </div>
    <form>
      <div class="card-body border-top p-9">
        <div class="row mb-6">
          <div class="col-lg-4">
            <div class="mb-0">
              <label for="" class="form-label">انتخاب تاریخ</label>
              <input class="form-control form-control-solid" placeholder="انتخاب کنید" id="kt_datepicker_2" />
            </div>
          </div>
        </div>
        <!--begin:: Group-->
        <div class="row mb-6">
        </div>
        <!--end::group-->
      </div>
    </form>
  </div>
  <!-- END: CARD -->
  @section('js')
  <script src="/assets/js/flatpicker_fa.js"></script>
  <script src="/assets/js/jdate.min.js"></script>
  <script>window.Date=window.JDate;</script>
  <script>
    const element = document.querySelector('#kt_datepicker_2');
    flatpickr = $(element).flatpickr({
      altInput: true,
      altFormat: "Y-m-d",
      dateFormat: "Y-m-d",
      locale: "fa",
      onChange: function(selectedDates, dateStr, instance) {
        console.log(selectedDates)
      },
    });
  </script>
  @endsection
</x-main>