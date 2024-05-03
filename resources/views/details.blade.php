@extends('layout.main')

<head>
    <!-- Tag-tag meta lainnya -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Link CSS, script JavaScript, dan lainnya -->
</head>

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
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

{{-- <script>
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
</script> --}}

<script>
    document.addEventListener("DOMContentLoaded", function() {
        fetch('/api/listTransaksi', {
                method: 'post',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // Jika menggunakan CSRF token
                },
                body: JSON.stringify({
                    id: '0031' // Ganti dengan nilai yang sesuai
                })
            })
            .then(response => response.json())
            .then(data => {
                var table = new DataTable("#dataTable", {
                    data: {
                        headings: ['Tanggal', 'Nominal'],
                        rows: data // Data dari controller
                    }
                });
            })
            .catch(error => console.error('Error:', error));

    });
</script>
