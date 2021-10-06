<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.2/css/bootstrap.min.css" integrity="sha512-SCpMC7NhtrwHpzwKlE1l6ks0rS+GbMJJpoQw/A742VaxdGcQKqVD8F/y/m9WLOfIPppy7mWIs/kS0bKgSI0Bfw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css" />
    </head>
    <body>
        <div class="container-fluid col-sm-6 mt-3">
            <table id="breakdown-of-confirmed-cases-by-district-report" class="cell-border compact stripe" style="width: 100%;">
                <thead>
                    <tr>
                        <th>個案研判日</th>
                        <th>縣市</th>
                        <th>鄉鎮</th>
                        <th>性別</th>
                        <th>是否為境外移入</th>
                        <th>年齡層</th>
                    </tr>
                </thead>
            </table>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.2/js/bootstrap.min.js" integrity="sha512-HSNvqjhsAxRPvbSBEdXWlkR9uYmJtUvXEyfAvUzlA0uS5SyFZMZdczgz8oPWTz2NUEBaXkIYL4kdrBJkP66jYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
        <script>
            $(function () {
                $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
                    className: "btn",
                });

                let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons);

                $.fn.dataTable.ext.classes.sPageButton = "";

                $("#breakdown-of-confirmed-cases-by-district-report").DataTable({
                    language: {
                        url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/zh_Hant.json",
                    },
                    buttons: dtButtons,
                    dom: 'lBfrtip<"actions">',
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route("get-breakdown-by-district-data") }}',
                    columns: [
                        // { data: "id", name: "id" },
                        { data: "a01", name: "a01" },
                        { data: "a02", name: "a02" },
                        { data: "a03", name: "a03" },
                        { data: "a04", name: "a04" },
                        { data: "a05", name: "a05" },
                        { data: "a06", name: "a06" },
                    ],
                    lengthMenu: [10, 25, 50, 100],
                    order: [[0, "desc"]],
                    pageLength: 10,
                    responsive: true,
                    scrollX: true,
                    searching: false,
                });

                $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
                    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
                });
            });
        </script>
    </body>
</html>