<x-main title="سرفصل ها">
  <!-- START: CARD -->
  <div class="card mb-5 mb-xl-10">
    <form>
      <div class="card-body border-top p-9">
        <div class="card-title mb-6">
          <h3 class="fw-bold m-0">پرداخت هنگام دریافت</h3>
        </div>
        <!--begin:: Group-->
        <div class="row mb-6">
          <!--begin::Tags-->
          <label class="col-lg-4 col-form-label required fw-semibold fs-6">شماره سرفصل</label>
          <!--end::Tags-->
          <!--begin::Col-->
          <div class="col-lg-8">
            <!--begin::Col-->
            <select class="form-select form-select-solid" data-control="select2" data-close-on-select="false" data-placeholder="انتخاب کنید" data-allow-clear="true" multiple="multiple">
              <option value="1">تست</option>
            </select>
            <!--end::Col-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::group-->
        <!--begin:: Group-->
        <div class="row mb-6">
          <!--begin::Tags-->
          <label class="col-lg-4 col-form-label required fw-semibold fs-6">کارمزد درگاه</label>
          <!--end::Tags-->
          <!--begin::Col-->
          <div class="col-lg-8">
            <!--begin::Col-->
            <input type="text" name="" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="کارمزد درگاه" value="" />
            <!--end::Col-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::group-->
        <!--begin:: Group-->
        <div class="row mb-6">
          <!--begin::Tags-->
          <label class="col-lg-4 col-form-label required fw-semibold fs-6">مالیات بر ارزش افزوده</label>
          <!--end::Tags-->
          <!--begin::Col-->
          <div class="col-lg-8">
            <!--begin::Col-->
            <label class="form-check form-switch form-check-custom form-check-solid">
              <input class="form-check-input" type="checkbox" value="1" checked="checked" />
            </label>
            <!--end::Col-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::group-->
      </div>
      <div class="card-body border-top p-9">
        <div class="card-title mb-6">
          <h3 class="fw-bold m-0">پرداخت امن زرین پال</h3>
        </div>
        <!--begin:: Group-->
        <div class="row mb-6">
          <!--begin::Tags-->
          <label class="col-lg-4 col-form-label required fw-semibold fs-6">شماره سرفصل</label>
          <!--end::Tags-->
          <!--begin::Col-->
          <div class="col-lg-8">
            <!--begin::Col-->
            <select class="form-select form-select-solid" data-control="select2" data-close-on-select="false" data-placeholder="انتخاب کنید" data-allow-clear="true" multiple="multiple">
              <option value="1">تست</option>
            </select>
            <!--end::Col-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::group-->
        <!--begin:: Group-->
        <div class="row mb-6">
          <!--begin::Tags-->
          <label class="col-lg-4 col-form-label required fw-semibold fs-6">کارمزد درگاه</label>
          <!--end::Tags-->
          <!--begin::Col-->
          <div class="col-lg-8">
            <!--begin::Col-->
            <input type="text" name="" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="کارمزد درگاه" value="" />
            <!--end::Col-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::group-->
        <!--begin:: Group-->
        <div class="row mb-6">
          <!--begin::Tags-->
          <label class="col-lg-4 col-form-label required fw-semibold fs-6">مالیات بر ارزش افزوده</label>
          <!--end::Tags-->
          <!--begin::Col-->
          <div class="col-lg-8">
            <!--begin::Col-->
            <label class="form-check form-switch form-check-custom form-check-solid">
              <input class="form-check-input" type="checkbox" value="1" checked="checked" />
            </label>
            <!--end::Col-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::group-->
      </div>
      <div class="card-body border-top p-9">
        <!--begin:: Group-->
        <div class="row mb-6">
          <!--begin::Tags-->
          <label class="col-lg-4 col-form-label required fw-semibold fs-6">کد محصول هزینه ی ارسال</label>
          <!--end::Tags-->
          <!--begin::Col-->
          <div class="col-lg-8">
            <!--begin::Col-->
            <input type="text" name="" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="کد محصول هزینه ی ارسال" value="" />
            <!--end::Col-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::group-->
        <!--begin:: Group-->
        <div class="row mb-6">
          <!--begin::Tags-->
          <label class="col-lg-4 col-form-label required fw-semibold fs-6">حساب مشتری</label>
          <!--end::Tags-->
          <!--begin::Col-->
          <div class="col-lg-8">
            <!--begin::Col-->
            <select class="form-select form-select-solid" data-control="select2" data-close-on-select="false" data-placeholder="انتخاب کنید" data-allow-clear="true" multiple="multiple">
              <option value="1">تست</option>
            </select> <!--end::Col-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::group-->
      </div>
      <!--START:CARD FOOTER  -->
      <div class="card-footer border-0 d-flex justify-content-end py-6 px-9">
        <button type="reset" class="btn btn-light btn-active-light-primary me-2">لغو</button>
        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">ذخیره تغییرات</button>
      </div>
      <!-- END:CARD FOOTER -->
    </form>
  </div>
  <!-- END:CARD -->
</x-main>