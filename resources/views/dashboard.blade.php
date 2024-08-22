<x-dashboard title="داشبورد">
  <div class="row">
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="settings">
      <img src="./assets/media/icons/gear.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">تنظیمات</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="updates">
      <img src="./assets/media/icons/updates.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">بروزرسانی ها</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="products">
      <img src="./assets/media/icons/uploadproduct.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">بارگزاری محصولات</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="/issuereporting">
      <img src="./assets/media/icons/findoption.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">گزارش گیری اشکالات</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="productscategory">
      <img src="./assets/media/icons/blocks.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">دسته بندی ها</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="topics">
      <img src="./assets/media/icons/task.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">سر فصل ها</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="subscriptions">
      <img src="./assets/media/icons/important.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">اشتراک</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="invoicesmanager">
      <img src="./assets/media/icons/computer-monitor.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">مدیریت فاکتور ها</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="technicalreporting">
      <img src="./assets/media/icons/warning-sign.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">اشکال یابی</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="{{ route('subscribers.show') }}">
      <img src="/assets/images/single.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">مشترکین</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="{{ route('incomes.show') }}">
      <img src="/assets/images/coins.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">درآمد ها</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="{{ route('tickets.show') }}">
      <img src="/assets/images/chatting.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">تیکت ها</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="{{ route('servers.show') }}">
      <img src="/assets/images/secure.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">سرور ها</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="{{ route('server-logs.show') }}">
      <img src="/assets/images/error.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">گزارش سرور ها</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="{{ route('packages.show') }}">
      <img src="/assets/images/starred.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">پکیج ها</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="{{ route('calls.show') }}">
      <img src="/assets/images/videocall.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">مرکز تماس</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="{{ route('current-month-services.show') }}">
      <img src="/assets/images/calendar.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">سرویس های ماه جاری</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="{{ route('admins.show') }}">
      <img src="/assets/images/admin.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">ادمین ها</h5>
      </div>
    </a>
    <a class="col-6 col-lg-3 col-md-4 col-xl-2 card bg-transparent" href="{{ route('invoices.show') }}">
      <img src="/assets/images/tablet.png" class="card-img-top card-icons" />
      <div class="card-body d-flex flex-column flex-center">
        <h5 class="text-center lh-base">فاکتور ها</h5>
      </div>
    </a>
  </div>
</x-dashboard>