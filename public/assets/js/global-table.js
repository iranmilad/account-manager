let checkboxTableWorker = () => {
    // Define variables
    const container = document.querySelector("table");
    // Select refreshed checkbox DOM elements
    const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');
    // Detect checkboxes state & count
    let count = 0;
    allCheckboxes.forEach((item) => {
        item.addEventListener("change", function () {
            if ($(this).is(":checked")) {
                count++;
            } else {
                count--;
            }

            // if count is same as total checkboxes then check table thead tr checkbox
            if (count == allCheckboxes.length) {
                $("thead [type='checkbox']").prop("checked", true);
            } else {
                $("thead [type='checkbox']").prop("checked", false);
            }
        });
    });
};

function GlobalTable() {
    if ($("#global_table").length === 0) return;

    // get count of table thead th
    let countTh = $("#global_table thead th").length;
    let cols = [];
    for (let i = 0; i < countTh; i++) {
        // random string and number
        let randomString = Math.random().toString(36).substring(7);
        cols.push({
            data: randomString,
        });
    }

    let initTable = function () {
        let table;
        let dt = $("#global_table").DataTable({
            info: false,
            columns: cols,
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                },
                {
                    targets: -1,
                    orderable: false,
                    className: "text-end",
                },
            ],
            order: [[1, "asc"]],
            paging: false,
            searching: false,
        });

        dt.on("draw", () => {
            checkboxTableWorker();
        });
    };

    return {
        init: function () {
            initTable();
            checkboxTableWorker();
        },
    };
}

GlobalTable()?.init();