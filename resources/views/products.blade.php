<x-main title="بارگزاری محصولات">
  @section('css')
  <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
  @endsection
  <div class="card mb-5 mb-xl-10">
    <div class="card-header border-0">
      <div class="card-title m-0">
        <h3 class="fw-bold m-0">بارگزاری محصولات</h3>
      </div>
    </div>
    <div class="card-body border-top p-9">
      <!--begin:: Group-->
      <div class="row mb-6">
        <!--begin::Tags-->
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">گروه محصولات</label>
        <!--end::Tags-->
        <!--begin::Col-->
        <div class="col-lg-8">
          <!--begin::Col-->
          <select class="form-select form-select-solid" data-control="select2" data-close-on-select="false" data-placeholder="انتخاب کنید">
            <option></option>
            <option value="1">پوشاک</option>
            <option value="2">کفش</option>
          </select>
          <!--end::Col-->
        </div>
        <!--end::Col-->
      </div>
      <!--end::group-->
      <div class="row mb-6">
        <div class="col-12">
          <div class="d-flex flex-column justify-content-center container-fluid" id="products_container">
            <!-- START:TABLE -->
            <table id="products" class="table table-striped table-row-bordered gy-5 gs-7">
              <thead>
                <tr>
                  <th class="text-start">name</th>
                  <th class="text-start">position</th>
                  <th class="text-start">salary</th>
                  <th class="text-start">start_date</th>
                  <th class="text-start">office</th>
                  <th class="text-start">extn</th>
                </tr>
              </thead>
            </table>
            <!-- END:TABLE -->
          </div>
        </div>
      </div>
    </div>
  </div>
  @section('js')
  <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
  <script>Products()</script>
  @endsection
</x-main>