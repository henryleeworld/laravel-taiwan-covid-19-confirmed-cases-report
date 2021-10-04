<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css" integrity="sha512-F7WyTLiiiPqvu2pGumDR15med0MDkUIo5VTVyyfECR5DZmCnDhti9q5VID02ItWjq6fvDfMaBaDl2J3WdL1uxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css" />
    </head>
    <body>
        <div class="container-fluid col-sm-12 mt-3">
            <table id="deaths-report" class="cell-border compact stripe" style="width: 100%;">
                <thead>
                    <tr>
                        <th>公布日</th>
                        <th>案號</th>
                        <th>性別</th>
                        <th>年齡</th>
                        <th>慢性病史</th>
                        <th>活動接觸史</th>
                        <th>發病日</th>
                        <th>症狀</th>
                        <th>採檢日</th>
                        <th>住院／隔離日</th>
                        <th>確診日</th>
                        <th>死亡日</th>
                    </tr>
                </thead>
            </table>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js" integrity="sha512-NWNl2ZLgVBoi6lTcMsHgCQyrZVFnSmcaa3zRv0L3aoGXshwoxkGs3esa9zwQHsChGRL4aLDnJjJJeP6MjPX46Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

                $("#deaths-report").DataTable({
                    language: {
                        url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/zh_Hant.json",
                    },
                    buttons: dtButtons,
                    dom: 'lBfrtip<"actions">',
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route("get-death-data") }}',
                    columns: [
                        // { data: "id", name: "id" },
                        { data: "a01", name: "a01" },
                        { data: "a02", name: "a02" },
                        { data: "a03", name: "a03" },
                        { data: "a04", name: "a04" },
                        { data: "a05", name: "a05" },
                        { data: "a06", name: "a06" },
                        { data: "a07", name: "a07" },
                        { data: "a08", name: "a08" },
                        { data: "a09", name: "a09" },
                        { data: "a10", name: "a10" },
                        { data: "a11", name: "a11" },
                        { data: "a12", name: "a12" },
                    ],
                    lengthMenu: [10, 25, 50, 100],
                    order: [[1, "desc"]],
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