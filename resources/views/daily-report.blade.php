<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.dataTables.min.css" />
    </head>
    <body>
        <div class="container-fluid col-sm-12 mt-3">
            <table id="daily-confirmed-cases-report" class="table table-striped cell-border compact" style="width: 100%;">
                <thead>
                    <tr>
                        <th>國家</th>
                        <th>日期</th>
                        <th>總確診數</th>
                        <th>新增確診數</th>
                        <th>七天移動平均新增確診數</th>
                        <th>總確診數／每百萬人</th>
                        <th>新增確診數／每百萬人</th>
                        <th>七天移動平均新增確診數／每百萬人</th>
                        <th>總人口數</th>
                        <th>新聞稿發佈新增確診數</th>
                    </tr>
                </thead>
            </table>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
        <script>
            $(function () {
                $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
                    className: "btn",
                });

                let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons);

                //$.fn.dataTable.ext.classes.sPageButton = "";

                $("#daily-confirmed-cases-report").DataTable({
                    language: {
                        url: "https://cdn.datatables.net/plug-ins/1.13.3/i18n/zh-HANT.json",
                    },
                    buttons: dtButtons,
                    dom: 'lBfrtip<"actions">',
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route("get-daily-data") }}',
                    columns: [
                        // { data: "id", name: "id" },
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