/**
 * Dark and Light teme
 */
var defaultThemeMode = "light";
var themeMode;
if (document.documentElement) {
    if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
    } else {
        if (localStorage.getItem("data-bs-theme") !== null) {
            themeMode = localStorage.getItem("data-bs-theme");
        } else {
            themeMode = defaultThemeMode;
        }
    }
    if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
    }
    document.documentElement.setAttribute("data-bs-theme", themeMode);
}

/**
 * @page Products
 */

const Products = () => {
    let dt;
    let table;
    dt = $("#products").DataTable({
        language: {
            emptyTable: "داده ای وجود ندارد",
        },
        data: [
            {
                name: "Tiger Nixon",
                position: "System Architect",
                salary: "$3,120",
                start_date: "2011/04/25",
                office: "Edinburgh",
                extn: "5421",
            },
        ],
        columns: [
            { data: "name" },
            { data: "position" },
            { data: "salary" },
            { data: "start_date" },
            { data: "office" },
            { data: "extn" },
        ],
    });

    table = dt.$;
    dt.on("draw", function () {
        handleAddRow();
    });

    let handleAddRow = () => {
        const addButtons = document.querySelectorAll(
            '[data-kt-docs-table-filter="add_row"]'
        );
        addButtons.forEach((item) => {
            item.addEventListener("click", (e) => {
                e.preventDefault();

                const parent = e.target.closest("tr");

                // Get customer name
                const customerName = parent.querySelectorAll("td")[1].innerText;
            });
        });
    };
};

/**
 * @page Messages
 */
const Messages = () => {
    $.get("/test").done(function (data) {
        let arr = [
            {
                id: 1,
                name: "محمدرضا احمدی",
                profile: null,
                seen: "1402/04/21",
                sent: "1402/01/12",
                body: "سلام، چطوری؟",
            },
            {
                id: 2,
                name: "سارا محمدی",
                profile: null,
                seen: null,
                sent: "1401/11/05",
                body: "سلام، چه خبر؟",
            },
            {
                id: 3,
                name: "علی رضایی",
                profile: null,
                seen: null,
                sent: "1400/07/28",
                body: "سلام، حالتون چطوره؟",
            },
            {
                id: 4,
                name: "نیلوفر حسینی",
                profile: null,
                seen: "1403/01/17",
                sent: "1403/01/15",
                body: "سلام، چه طوری داری؟",
            },
            {
                id: 5,
                name: "حسین محمدیان",
                profile: null,
                seen: null,
                sent: "1401/05/10",
                body: "سلام، چه خبر؟",
            },
            {
                id: 6,
                name: "فریبا حسینی",
                profile: null,
                seen: "1402/09/12",
                sent: "1402/09/10",
                body: "سلام، چه طوری داری؟",
            },
            {
                id: 7,
                name: "آرش نجفی",
                profile: null,
                seen: null,
                sent: "1400/10/23",
                body: "سلام، حالتون چطوره؟",
            },
            {
                id: 8,
                name: "رضا محمدی",
                profile: null,
                seen: "1403/06/02",
                sent: "1403/05/30",
                body: "سلام، چطوری؟",
            },
            {
                id: 9,
                name: "شیرین اکبری",
                profile: null,
                seen: null,
                sent: "1401/09/15",
                body: "سلام، چه خبر؟",
            },
            {
                id: 10,
                name: "صدیقه رضایی",
                profile: null,
                seen: null,
                sent: "1400/02/11",
                body: "سلام، حالتون چطوره؟",
            },
        ];
        function generateItem({ id, name, profile, seen, sent, body }) {
            return `
            <div class="mt-5" data-message-parent=${seen ? "" : id}>
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-stack">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-40px me-5">
                    <img src=${
                        profile === null
                            ? "/assets/media/avatars/blank.png"
                            : profile
                    } class="h-50 align-self-center" alt="">
                  </div>
                  <!--end::Symbol-->
                  <!--begin::بخش-->
                  <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <!--begin:نویسنده-->
                    <div class="flex-grow-1 me-2">
                      <a class="text-gray-800 text-hover-primary fs-6 fw-bold">${name}</a>
                      <span class="text-muted fw-semibold d-block fs-7">ارسال شده در : ${sent}</span>
                    </div>
                    <!--end:نویسنده-->
                    <!--begin:عملیات-->
                    <button class='btn btn-sm ${
                        seen ? "btn-light" : "btn-primary"
                    } fs-8 fw-bold' data-message-id=${seen ? "" : id}>${seen !== null ? "خوانده شده" : "خواندن"}</button>
                    <!--end:عملیات-->
                  </div>
                  <!--end::بخش-->
                </div>
              </div>
              <div class="card-body pt-0">
                ${body}
              </div>
            </div>
          </div>`;
        }
        arr.map((item) => {
            $("#all_messages").append(generateItem(item));
            item.seen
                ? $("#seen_messages").append(generateItem(item))
                : $("#unseen_messages").append(generateItem(item));
        });
    });
    setTimeout(() => {
        let items = document.querySelectorAll("[data-message-id]");
        items.forEach((item) => {
            if(item.getAttribute("data-message-id")){
                item.addEventListener('click',(e)=>{
                    let itsParent = document.querySelectorAll(`[data-message-parent='${item.getAttribute("data-message-id")}']`);
                    let sameButtons = document.querySelectorAll(`[data-message-id='${item.getAttribute("data-message-id")}']`);
                    itsParent.forEach(function(parent){
                        let blockUI = new KTBlockUI(parent);
                        blockUI.block();
                    });
                    $.post('https://jsonplaceholder.typicode.com/posts').done(function(){
                        itsParent.forEach(function(parent){
                            let blockInstance = KTBlockUI.getInstance(parent);
                            blockInstance.release();
                            blockInstance.destroy();
                            sameButtons.forEach(function(element){
                                $(element).replaceWith("<button class='btn btn-sm btn-light fs-8 fw-bold'>خوانده شده</button>")
                            })
                        });
                        notification().reduce();
                    }).fail(function(){
                        itsParent.forEach(function(parent){
                            let blockInstance = KTBlockUI.getInstance(parent);
                            blockInstance.release();
                            blockInstance.destroy();
                        });
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toastr-bottom-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                          };
                          toastr.error("مشکل در ارسال درخواست", "پیام سیستم");

                    })
                })
            }
        });
    }, 1000);
};


/**
 * Get Notifications and 
 */
const notification = () => {
    let notifications = +$('#notification_count').text();
    let notification_count = notifications;
    function set(count = notification_count){
        if(count === 0 || count <= 0){
            $('#notification_count').text("")
            $('#notification_count').removeClass("bg-danger")
            $('#notification_count').addClass("bg-success")
        }
        else{
            $('#notification_count').text(count)
            $('#notification_count').removeClass("bg-success")
            $('#notification_count').addClass("bg-danger")
        }
    }
    function reduce(){
        --notification_count;
        set();
    }
    function increase(){
        ++notification_count;
        set()
    }
    return {
        set,
        reduce,
        increase
    }
}

$.get('/test').done(function(){
    let arr = [
        {
            id: 1,
            name: "محمدرضا احمدی",
            profile: null,
            seen: "1402/04/21",
            sent: "1402/01/12",
            body: "سلام، چطوری؟",
        },
        {
            id: 2,
            name: "سارا محمدی",
            profile: null,
            seen: null,
            sent: "1401/11/05",
            body: "سلام، چه خبر؟",
        },
        {
            id: 3,
            name: "علی رضایی",
            profile: null,
            seen: null,
            sent: "1400/07/28",
            body: "سلام، حالتون چطوره؟",
        },
        {
            id: 4,
            name: "نیلوفر حسینی",
            profile: null,
            seen: "1403/01/17",
            sent: "1403/01/15",
            body: "سلام، چه طوری داری؟",
        },
        {
            id: 5,
            name: "حسین محمدیان",
            profile: null,
            seen: null,
            sent: "1401/05/10",
            body: "سلام، چه خبر؟",
        },
        {
            id: 6,
            name: "فریبا حسینی",
            profile: null,
            seen: "1402/09/12",
            sent: "1402/09/10",
            body: "سلام، چه طوری داری؟",
        },
        {
            id: 7,
            name: "آرش نجفی",
            profile: null,
            seen: null,
            sent: "1400/10/23",
            body: "سلام، حالتون چطوره؟",
        },
        {
            id: 8,
            name: "رضا محمدی",
            profile: null,
            seen: "1403/06/02",
            sent: "1403/05/30",
            body: "سلام، چطوری؟",
        },
        {
            id: 9,
            name: "شیرین اکبری",
            profile: null,
            seen: null,
            sent: "1401/09/15",
            body: "سلام، چه خبر؟",
        },
        {
            id: 10,
            name: "صدیقه رضایی",
            profile: null,
            seen: null,
            sent: "1400/02/11",
            body: "سلام، حالتون چطوره؟",
        },
    ];
    let count = 0
    arr.map(item => item.seen === null ? count++ : null);
    notification().set(count);
})

setInterval(() => {
    $.get('/test').done(function(){
        let arr = [
            {
                id: 1,
                name: "محمدرضا احمدی",
                profile: null,
                seen: "1402/04/21",
                sent: "1402/01/12",
                body: "سلام، چطوری؟",
            },
            {
                id: 2,
                name: "سارا محمدی",
                profile: null,
                seen: null,
                sent: "1401/11/05",
                body: "سلام، چه خبر؟",
            },
            {
                id: 3,
                name: "علی رضایی",
                profile: null,
                seen: null,
                sent: "1400/07/28",
                body: "سلام، حالتون چطوره؟",
            },
            {
                id: 4,
                name: "نیلوفر حسینی",
                profile: null,
                seen: "1403/01/17",
                sent: "1403/01/15",
                body: "سلام، چه طوری داری؟",
            },
            {
                id: 5,
                name: "حسین محمدیان",
                profile: null,
                seen: null,
                sent: "1401/05/10",
                body: "سلام، چه خبر؟",
            },
            {
                id: 6,
                name: "فریبا حسینی",
                profile: null,
                seen: "1402/09/12",
                sent: "1402/09/10",
                body: "سلام، چه طوری داری؟",
            },
            {
                id: 7,
                name: "آرش نجفی",
                profile: null,
                seen: null,
                sent: "1400/10/23",
                body: "سلام، حالتون چطوره؟",
            },
            {
                id: 8,
                name: "رضا محمدی",
                profile: null,
                seen: "1403/06/02",
                sent: "1403/05/30",
                body: "سلام، چطوری؟",
            },
            {
                id: 9,
                name: "شیرین اکبری",
                profile: null,
                seen: null,
                sent: "1401/09/15",
                body: "سلام، چه خبر؟",
            },
            {
                id: 10,
                name: "صدیقه رضایی",
                profile: null,
                seen: null,
                sent: "1400/02/11",
                body: "سلام، حالتون چطوره؟",
            },
        ];
        let count = 0
        arr.map(item => item.seen === null ? count++ : null);
        notification().set(count);
    })
},30000)