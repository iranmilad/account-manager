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
 * Handle Submit function for invoicersManger page
 * @param {Event} e
 */
function submitFuc(e) {
    e.preventDefault();
    e.stopPropagation();
    let parent = document.getElementById("invoicesTableContainer");
    let blockUI = new KTBlockUI(parent, {
        overlayClass: "rounded ",
    });
    let tableInstance = $("#invoices_table1").DataTable();
    const trparent = e.target.closest("tr");
    const id = trparent.querySelectorAll("td")[0].innerText;
    const rowId = e.target.getAttribute("data-row-id");
    blockUI.block();
    $.post("https://jsonplaceholder.typicode.com/posts", {
        id,
    })
        .done(function (data) {
            blockUI.release();
            blockUI.destroy();
            tableInstance.row(rowId).data(data.data).draw();
        })
        .fail(function () {
            blockUI.release();
            toastr.options = {
                closeButton: true,
                debug: false,
                newestOnTop: false,
                progressBar: false,
                positionClass: "toastr-bottom-right",
                preventDuplicates: true,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                timeOut: "5000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
            };
            toastr.error("مشکل در ارسال درخواست", "پیام سیستم");
        });
}

/**
 * Handle Submit function for Products page
 */

/**
 * @page Products
 */
function submitProductsFunc(e) {
    e.preventDefault();
    e.stopPropagation();
    let parent = document.getElementById("products_container");
    let productstableInstance = $("#invoices_table1").DataTable();
    let productsBlockUI = new KTBlockUI(parent, {
        overlayClass: "rounded ",
    });
    if ($("#products_select_2").val() !== "") {
        let productGp = $("#products_select").val();
        let targetGp = $("#products_select_2").val();
        const rowId = e.target.getAttribute("data-row-id");
        const trparent = e.target.closest("tr");
        const id = trparent.querySelectorAll("td")[0].innerText;
        productsBlockUI.block();
        $.post("https://jsonplaceholder.typicode.com/posts", {
            productGp,
            targetGp,
            id,
        })
            .done(function (data) {
                productsBlockUI.release();
                productstableInstance.row(rowId).data(data.data).draw();
            })
            .fail(function () {
                productsBlockUI.release();
                toastr.options = {
                    closeButton: true,
                    debug: false,
                    newestOnTop: false,
                    progressBar: false,
                    positionClass: "toastr-bottom-right",
                    preventDuplicates: true,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    timeOut: "5000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                };
                toastr.error("مشکل در ارسال درخواست", "پیام سیستم");
            });
    } else {
        Swal.fire({
            text: "گروه هدف را انتخاب کنید",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "بستن",
            customClass: {
                confirmButton: "btn btn-danger",
            },
        });
    }
}

const Products = () => {
    let products = document.getElementById("products_select");
    var productsBlockUi = new KTBlockUI(products);
    let dt;
    let table;
    dt = $("#products").DataTable({
        info: false,
        language: {
            emptyTable: "داده ای وجود ندارد",
        },
        columns: [
            { data: "name" },
            { data: "amount" },
            { data: "price" },
            { data: null },
        ],
        columnDefs: [
            {
                targets: -1,
                data: null,
                orderable: false,
                className: "text-end",
                render: function (data, type, row, meta) {
                    if (data.status === 1) {
                        return `موجود است`;
                    } else
                        return `<button class='btn btn-sm btn-primary' onclick="submitProductsFunc(event)" data-row-id='${meta.row}'>ثبت</button>`;
                },
            }, // Disable ordering on column 4 (actions)
        ],
        pageLength: 50,
        order: [[1, "desc"]],
        stateSave: true,
    });

    table = dt.$;
    dt.on("draw", function () {
        handleAddRow();
    });

    $("#products_select").on("select2:select", function (e) {
        var data = e.params.data;
        $.get("/test" , {group: data.id}).done((data) => {
            FlatPickerBlockUi.release();
            dt.rows.add(data.data).draw();
        });
        dt.rows
            .add([
                {
                    name: "کفش",
                    amount: "2123",
                    price: "99",
                    status: 0,
                },
            ])
            .draw();
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
            if (item.getAttribute("data-message-id")) {
                item.addEventListener("click", (e) => {
                    let itsParent = document.querySelectorAll(
                        `[data-message-parent='${item.getAttribute(
                            "data-message-id"
                        )}']`
                    );
                    let sameButtons = document.querySelectorAll(
                        `[data-message-id='${item.getAttribute(
                            "data-message-id"
                        )}']`
                    );
                    itsParent.forEach(function (parent) {
                        let blockUI = new KTBlockUI(parent);
                        blockUI.block();
                    });
                    $.post("/svsdvsdv")
                        .done(function () {
                            itsParent.forEach(function (parent) {
                                let blockInstance =
                                    KTBlockUI.getInstance(parent);
                                blockInstance.release();
                                blockInstance.destroy();
                                sameButtons.forEach(function (element) {
                                    $(element).replaceWith(
                                        "<button class='btn btn-sm btn-light fs-8 fw-bold'>خوانده شده</button>"
                                    );
                                });
                            });
                            notification().reduce();
                        })
                        .fail(function () {
                            itsParent.forEach(function (parent) {
                                let blockInstance =
                                    KTBlockUI.getInstance(parent);
                                blockInstance.release();
                                blockInstance.destroy();
                            });
                            toastr.options = {
                                closeButton: true,
                                debug: false,
                                newestOnTop: false,
                                progressBar: false,
                                positionClass: "toastr-bottom-right",
                                preventDuplicates: true,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                timeOut: "5000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                            };
                            toastr.error("مشکل در ارسال درخواست", "پیام سیستم");
                        });
                });
            }
        });
    }, 1000);
};

/**
 * Get Notifications and
 */
const notification = () => {
    let notifications = +$("#notification_count").text();
    let notification_count = notifications;
    function set(count = notification_count) {
        if (count === 0 || count <= 0) {
            $("#notification_count").text("");
            $("#notification_count").removeClass("bg-danger");
            $("#notification_count").addClass("bg-success");
        } else {
            $("#notification_count").text(count);
            $("#notification_count").removeClass("bg-success");
            $("#notification_count").addClass("bg-danger");
        }
    }
    function reduce() {
        --notification_count;
        set();
    }
    function increase() {
        ++notification_count;
        set();
    }
    return {
        set,
        reduce,
        increase,
    };
};

$.get("/test").done(function () {
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
    let count = 0;
    arr.map((item) => (item.seen === null ? count++ : null));
    notification().set(count);
});

setInterval(() => {
    $.get("/test").done(function () {
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
        let count = 0;
        arr.map((item) => (item.seen === null ? count++ : null));
        notification().set(count);
    });
}, 30000);

/**
 * @page Invoices Manager
 */
const InvoicesManager = () => {
    const element = document.querySelector("#kt_datepicker_2");
    var FlatPickerBlockUi = new KTBlockUI(element);
    let table;
    let dt;
    flatpickr = $(element).flatpickr({
        disableMobile: "true",
        altInput: true,
        altFormat: "Y-m-d",
        dateFormat: "Y-m-d",
        locale: "fa",
        onChange: function (selectedDates, dateStr, instance) {
            if (FlatPickerBlockUi.isBlocked()) {
                FlatPickerBlockUi.release();
            } else {
                FlatPickerBlockUi.block();
            }
            $.get("/test" , {date: dateStr}).done((data) => {
                FlatPickerBlockUi.release();
                dt.rows.add(data.data).draw();
            });
            // $data = [
            //     {
            //         id: 123,
            //         name: "فرهاد باقری",
            //         price: "24000",
            //         status: 0,
            //         date: new Date().toLocaleDateString(),
            //     },
            //     {
            //         id: 456,
            //         name: "فرهاد باقری",
            //         price: "99000",
            //         status: 0,
            //         date: new Date().toLocaleDateString(),
            //     },
            // ];
        },
    });

    dt = $("#invoices_table1").DataTable({
        info: false,
        language: {
            emptyTable: "داده ای وجود ندارد",
        },
        select: {
            style: "multi",
            selector: 'td:first-child input[type="checkbox"]',
            className: "row-selected",
        },
        pageLength: 50,
        order: [[1, "desc"]],
        stateSave: true,
        columns: [
            { data: "id" },
            { data: "name" },
            { data: "price" },
            { data: "status" },
            { data: "date" },
            { data: null },
        ],
        columnDefs: [
            // {
            //     targets: 0,
            //     visible: false,
            //     orderable: false,
            //     render: function (data, type, row, meta) {
            //         return `
            //             <div class="form-check form-check-sm form-check-custom form-check-solid">
            //                 <input class="form-check-input" type="checkbox" value="${data}" data-row="${meta.row}" />
            //             </div>`;
            //     },
            // },
            {
                targets: 3,
                render: function (data) {
                    if (data === 1) {
                        return `<div class='badge badge-success fw-bold' data-status="1">ثبت شده</div>`;
                    } else {
                        return `<div class='badge badge-danger fw-bold' data-status="0">ثبت نشده</div>`;
                    }
                },
            },
            {
                targets: -1,
                data: null,
                orderable: false,
                className: "text-end",
                render: function (data, type, row, meta) {
                    if (data.status === 1) {
                        return `<button class='btn btn-sm btn-info' onclick="submitFuc(event)" data-row-id='${meta.row}'>ثبت مجدد</button>`;
                    } else
                        return `<button class='btn btn-sm btn-primary' onclick="submitFuc(event)" data-row-id='${meta.row}'>ثبت</button>`;
                },
            }, // Disable ordering on column 4 (actions)
        ],
    });

    table = dt.$;

    // const toggleToolbars = () => {
    //     // Define variable
    //     const toolbarSelected = document.querySelector(
    //         '[data-kt-customer-table-toolbar="selected"]'
    //     );
    //     const selectedCount = document.querySelector(
    //         '[data-kt-customer-table-select="selected_count"]'
    //     );

    //     // Select refreshed checkbox DOM elements
    //     const allCheckboxes = document.querySelectorAll(
    //         '#invoices_table1 tbody [type="checkbox"]'
    //     );

    //     // Detect checkboxes state & count
    //     let checkedState = false;
    //     let count = 0;

    //     // Count checked boxes
    //     allCheckboxes.forEach((c) => {
    //         if (c.checked) {
    //             checkedState = true;
    //             count++;
    //         }
    //     });

    //     // Toggle toolbars
    //     if (checkedState) {
    //         selectedCount.innerHTML = count;
    //         toolbarSelected.classList.remove("d-none");
    //     } else {
    //         toolbarSelected.classList.add("d-none");
    //     }

    //     // Select elements
    //     const deleteSelected = document.getElementById("delete_selected");
    //     // Deleted selected rows
    //     deleteSelected.addEventListener("click", function () {
    //         console.log("DONE");
    //         // let ids = [];
    //         // checkboxes.forEach((c) => {
    //         //     if (c.checked) {
    //         //         // datatable.row($(c.closest('tbody tr'))).remove().draw();
    //         //         // let id = c.parentNode.parentNode.nextSibling.textContent;
    //         //         // ids.push(id);
    //         //         if (c.getAttribute("data-row")) {
    //         //             let id =
    //         //                 c.parentNode.parentNode.nextSibling.textContent;
    //         //             ids.push(id);
    //         //         }
    //         //     }
    //         // });
    //     });
    // };

    // const initToggleToolbar = () => {
    //     const checkboxes = document.querySelectorAll(
    //         '#invoices_table1 [type="checkbox"]'
    //     );

    //     // Toggle delete selected toolbar
    //     checkboxes.forEach((c) => {
    //         // Checkbox on click event
    //         c.addEventListener("click", function () {
    //             setTimeout(function () {
    //                 toggleToolbars();
    //             }, 50);
    //         });
    //     });
    // };
};

/**
 * Call Alarm Blade
 *
 */
function Alarm({
    msg,
    title,
    closeButton = true,
    debug = false,
    newestOnTop = false,
    progressBar = false,
    positionClass = "toastr-bottom-right",
    preventDuplicates = true,
    onclick = null,
    showDuration = "300",
    hideDuration = "1000",
    timeOut = "5000",
    extendedTimeOut = "1000",
    showEasing = "swing",
    hideEasing = "linear",
    showMethod = "fadeIn",
    hideMethod = "fadeOut",
    type = "success",
}) {
    toastr.options = {
        closeButton: eval(closeButton),
        debug: eval(debug),
        newestOnTop: eval(newestOnTop),
        progressBar: eval(progressBar),
        positionClass,
        preventDuplicates: eval(preventDuplicates),
        onclick: eval(onclick),
        showDuration,
        hideDuration,
        timeOut,
        extendedTimeOut,
        showEasing,
        hideEasing,
        showMethod,
        hideMethod,
    };
    if (type === "success") toastr.success(msg, title);
    if (type === "info") toastr.info(msg, title);
    if (type === "warning") toastr.warning(msg, title);
    if (type === "error") toastr.error(msg, title);
}
