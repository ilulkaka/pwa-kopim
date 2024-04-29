@extends('layout.main')

<div class="page-content-wrapper py-3">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="w-100" id="dataTable">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('/assets/js/jquery-3.6.0.min.js') }}"></script>

<script>
    $(document).ready(function() {
        var list_detail = $('#dataTable').DataTable({
            // destroy: true,
            processing: true,
            serverSide: true,
            searching: true,
            lengthChange: true,

            ajax: {
                url: APP_URL + '/api/listTransaksi',
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                data: function(d) {
                    d.tgl_awal = $("#tgl_awal").val();
                    d.tgl_akhir = $("#tgl_akhir").val();
                    d.id = $("#id").val();
                },
            },
            columns: [{
                    data: 'tgl_trx',
                    name: 'tgl_trx'
                },
                {
                    data: 'nominal',
                    name: 'nominal',
                    render: $.fn.dataTable.render.number(',', '.', 0, '')
                },
            ],
        });
    });
</script>
