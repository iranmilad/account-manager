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
 * define all blockui
 */
let products_container = document.getElementById("products_container");
let productsBlockUI = new KTBlockUI(products_container, {
    overlayClass: "rounded ",
});
var ProcutsPicker = new KTBlockUI(document.getElementById("products_select"), {
    overlayClass: "rounded ",
});
var InvoicesPicker = new KTBlockUI(document.getElementById("kt_datepicker_2"), {
    overlayClass: "rounded ",
});

/**
 * Send Rows of invoices manager to server single
 * @param {Event} e
 * @sendJson {id: 123 , rowId: 1}
 * @returnJson {id: 123 , rowId: 1 , name: "فرهاد باقری", price: "24000", status: 0, date: "1400-01-01"}
 */
function InvoicesSingle(e) {
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
    $.post("/invoices", {
        rowId: rowId,
        id,
    })
        .done(function (data) {
            blockUI.release();
            blockUI.destroy();
            let each = JSON.parse(data.data);
            let rowId = each.rowId;
            delete each.rowId;
            tableInstance.row(rowId).data(each).draw();
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
 * Send Rows of products to server single
 * @sendJson {productGp: 1 , targetGp: 2 , id: 123, rowId: 1}
 * @returnJson {data: {id: 123 , rowId: 1 , name: "کفش",amount: 20, price: "24000", status: 0}}
 */
function ProductsSingle(e) {
    e.preventDefault();
    e.stopPropagation();
    let productstableInstance = $("#invoices_table1").DataTable();
    if ($("#products_select_2").val() !== "") {
        let productGp = $("#products_select").val();
        let targetGp = $("#products_select_2").val();
        const rowId = e.target.getAttribute("data-row-id");
        const trparent = e.target.closest("tr");
        const id = trparent.querySelectorAll("td")[0].innerText;
        productsBlockUI.block();
        $.post("/products", {
            productGp,
            targetGp,
            id,
            rowId,
        })
            .done(function (data) {
                let each = JSON.parse(data.data);
                let rowIdx = each.rowId;
                delete each.rowId;
                productsBlockUI.release();
                productstableInstance.row(JSON.parse(rowIdx)).data(each).draw();
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

/**
 * Send Rows of invoices manager to server batch
 * @sendJson {ids: [{id: 123 , rowId: 1} , {id: 456 , rowId: 2}]}
 * @returnJson {data: [{id: 123 , rowId: 1 , name: "فرهاد باقری", price: "24000", status: 0, date: "1400-01-01"} }
 */
function InvoicesBatch(e) {
    e.preventDefault();
    e.stopPropagation();
    let parent = document.getElementById("invoicesTableContainer");
    let blockUI = new KTBlockUI(parent, {
        overlayClass: "rounded ",
    });
    let tableInstance = $("#invoices_table1").DataTable();
    let checkboxes = document.querySelectorAll(
        '#invoices_table1 tbody [type="checkbox"]'
    );
    let ids = [];
    checkboxes.forEach((c, idx) => {
        if (c.checked) {
            let id = c.parentNode.parentNode.nextSibling.textContent;
            let rowId = c.getAttribute("data-row");
            ids.push({ id, rowId });
        }
    });
    blockUI.block();
    $.post("/invoices/batch", { ids: JSON.stringify(ids) })
        .done(function (data) {
            let arr = JSON.parse(data.data);
            arr.map((item) => {
                let rowId = item.rowId;
                delete item.rowId;
                tableInstance.row(rowId).data(item.data).draw();
            });
            blockUI.release();
            blockUI.destroy();
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
 * Send Rows of products to server batch
 * @sendJson {productGp: 1 , targetGp: 2 , ids: [{id: 123 , rowId: 1}]}
 * @returnJson {data: [{id: 123 , rowId: 1 , name: "کفش",amount: 20, price: "24000", status: 0}]}
 */
function ProductsBatch(e) {
    e.preventDefault();
    e.stopPropagation();
    let tableInstance = $("#products").DataTable();
    let checkboxes = document.querySelectorAll(
        '#products tbody [type="checkbox"]'
    );
    if ($("#products_select_2").val() !== "") {
        let productGp = $("#products_select").val();
        let targetGp = $("#products_select_2").val();
        let ids = [];
        checkboxes.forEach((c, idx) => {
            if (c.checked) {
                let id = c.getAttribute("data-real-id");
                let rowId = c.getAttribute("data-row");
                ids.push({ id, rowId });
            }
        });
        productsBlockUI.block();
        $.post("/products/batch", {
            productGp,
            targetGp,
            ids: JSON.stringify(ids),
        })
            .done(function (data) {
                productsBlockUI.release();
                productsBlockUI.destroy();
                let arr = JSON.parse(data.data);
                arr.map((item) => {
                    let rowId = item.rowId;
                    delete item.rowId;
                    tableInstance.row(rowId).data(item).draw();
                });
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

/**
 * @page Products
 * @products_select_Json {id: 123 , name: "کفش",amount: 20, price: "24000", status: 0}
 */
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
            { data: "checkbox" },
            { data: "name" },
            { data: "amount" },
            { data: "price" },
            { data: null },
        ],
        columnDefs: [
            {
                targets: 0,
                orderable: false,
                render: function (data, type, row, meta) {
                    return `
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="${data}" data-row="${meta.row}" data-real-id="${row.id}" />
                        </div>`;
                },
            },// Disable ordering on column 4 (actions)
        ],
        pageLength: 50,
        order: [[1, "desc"]],
        stateSave: true,
    });

    table = dt.$;
    dt.on("draw", function () {
        resetTable();
        handleAddRow();
        initToggleToolbar();
    });

    const resetTable = () => {
        const checkboxes = document.querySelectorAll(
            '#products [type="checkbox"]'
        );
        checkboxes.forEach((c) => {
            c.checked = false;
        });
    };

    $("#products_select").on("select2:select", function (e) {
        var data = e.params.data;
        $.get(`/products/${data.id}`).done((data) => {
            ProcutsPicker.release();
            dt.clear();
            dt.rows.add(JSON.parse(data.data)).draw();
        });
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
    const toggleToolbars = () => {
        // Define variable
        const toolbarSelected = document.querySelector(
            '[data-kt-customer-table-toolbar="selected"]'
        );

        // Select refreshed checkbox DOM elements
        const allCheckboxes = document.querySelectorAll(
            '#products tbody [type="checkbox"]'
        );

        // Detect checkboxes state & count
        let checkedState = false;
        let count = 0;

        // Count checked boxes
        allCheckboxes.forEach((c) => {
            if (c.checked) {
                checkedState = true;
            }
        });
        let deleteSelected = toolbarSelected.querySelector("#delete_selected");

        // Toggle toolbars
        if (checkedState) {
            deleteSelected.style.visibility = "visible";
            // add an onclick method named ProductsBatch
            deleteSelected.setAttribute("onclick", "ProductsBatch(event)");
        } else {
            deleteSelected.style.visibility = "hidden";
            // remove onclick method named ProductsBatch
            deleteSelected.removeAttribute("onclick");
        }
    };
    const initToggleToolbar = () => {
        const checkboxes = document.querySelectorAll(
            '#products [type="checkbox"]'
        );

        // Toggle delete selected toolbar
        checkboxes.forEach((c) => {
            // Checkbox on click event
            c.addEventListener("click", function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });
    };
};

/**
 * @page Messages
 * @returnJson {id: 2,name: "سارا محمدی", profile: null,seen: null,sent: "1401/11/05",body: "سلام، چه خبر؟"}
 */
const Messages = () => {
    $.get("/messages").done(function (data) {
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
        data.data.map((item) => {
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

/**
 * send first request to server for get notifications
 * @returnJson {data: [{id: 2,name: "سارا محمدی", profile: null,seen: null,sent: "1401/11/05",body: "سلام، چه خبر؟"}]}
 */
$.get("/test").done(function (data) {
    let realData = JSON.parse(data.data);
    let count = 0;
    realData.map((item) => (item.seen === null ? count++ : null));
    notification().set(count);
});

/**
 * Send request every 30 seconds to server for get notifications
 * @returnJson {data: [{id: 2,name: "سارا محمدی", profile: null,seen: null,sent: "1401/11/05",body: "سلام، چه خبر؟"}]}
 */
setInterval(() => {
    $.get("/test").done(function (data) {
        let realData = JSON.parse(data.data);
        let count = 0;
        realData.map((item) => (item.seen === null ? count++ : null));
        notification().set(count);
    });
}, 30000);

/**
 * @page Invoices Manager
 * @returnJson_after_select_date {data: [{id: 123 , name: "فرهاد باقری", price: "24000", status: 0, date: "1400-01-01"}]}
 */
const InvoicesManager = (minDate, maxDate) => {
    let table;
    let dt;

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
            { data: "checkbox" },
            { data: "id" },
            { data: "name" },
            { data: "price" },
            { data: "status" },
            { data: "date" },
            { data: null },
        ],
        columnDefs: [
            {
                targets: 0,
                orderable: false,
                render: function (data, type, row, meta) {
                    return `
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="${data}" data-row="${meta.row}" data-real-id="${row.id}" />
                        </div>`;
                },
            },
            {
                targets: 4,
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
                        return `<button class='btn btn-sm btn-info' onclick="InvoicesSingle(event)" data-row-id='${meta.row}'>ثبت مجدد</button>`;
                    } else
                        return `<button class='btn btn-sm btn-primary' onclick="InvoicesSingle(event)" data-row-id='${meta.row}'>ثبت</button>`;
                },
            }, // Disable ordering on column 4 (actions)
        ],
    });

    table = dt.$;

    dt.on("draw", function () {
        resetTable();
        toggleToolbars();
        initToggleToolbar();
    });

    const toggleToolbars = () => {
        // Define variable
        const toolbarSelected = document.querySelector(
            '[data-kt-customer-table-toolbar="selected"]'
        );
        const selectedCount = document.querySelector(
            '[data-kt-customer-table-select="selected_count"]'
        );

        // Select refreshed checkbox DOM elements
        const allCheckboxes = document.querySelectorAll(
            '#invoices_table1 tbody [type="checkbox"]'
        );

        // Detect checkboxes state & count
        let checkedState = false;
        let count = 0;

        // Count checked boxes
        allCheckboxes.forEach((c) => {
            if (c.checked) {
                checkedState = true;
            }
        });

        // Toggle toolbars
        if (checkedState) {
            // add a button to toolbarSelected without remove other buttons
            toolbarSelected.innerHTML = `
                <button class="btn btn-info btn-sm" onclick="InvoicesBatch(event)">ثبت انتخاب شده</button>
            `;
        } else {
            toolbarSelected.innerHTML = "";
        }
    };

    // reset all checkboxes
    const resetTable = () => {
        const checkboxes = document.querySelectorAll(
            '#invoices_table1 [type="checkbox"]'
        );
        checkboxes.forEach((c) => {
            c.checked = false;
        });
    };

    const initToggleToolbar = () => {
        const checkboxes = document.querySelectorAll(
            '#invoices_table1 [type="checkbox"]'
        );

        // Toggle delete selected toolbar
        checkboxes.forEach((c) => {
            // Checkbox on click event
            c.addEventListener("click", function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });
    };
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

// setTimeout(() => {
//     document.getElementById("xyz").innerHTML = `
//     <div type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="hello">
//     Tooltip on top
// </div>`;
// $('[data-bs-toggle="tooltip"]').tooltip();
// }, 2000);

function generatePassword() {
    var length = 8,
        charset =
            "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    return retVal;
}

// create password .create-password-input-group
$(".create-password-input-group-generate").on("click", function () {
    var password = generatePassword();
    $(this).parent().find("input").val(password);
});

$(".create-password-input-group-copy").on("click", function () {
    let copyText = $(this).parent().find("input");
    if (copyText.val() == "") {
        return;
    }
    copyText.select();
    document.execCommand("copy");
    // remove btn-dark and add btn-success for 2 seconds. after 2 seconds revert back to btn-dark
    $(this).removeClass("btn-dark").addClass("btn-success");
    setTimeout(() => {
        $(this).removeClass("btn-success").addClass("btn-dark");
    }, 2000);
});