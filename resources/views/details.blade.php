@extends('layout.main')

<!-- Header Area -->
<div class="header-area" id="headerArea">
    <div class="container">
        <!-- Header Content -->
        <div class="header-content position-relative d-flex align-items-center justify-content-between">
            <!-- Back Button -->
            <div class="back-button">
                <a href="elements.html">
                    <i class="bi bi-arrow-left-short"></i>
                </a>
            </div>

            <!-- Page Title -->
            <div class="page-heading">
                <h6 class="mb-0">Data Table</h6>
            </div>

            <!-- Settings -->
            <div class="setting-wrapper">
                <div class="setting-trigger-btn" id="settingTriggerBtn">
                    <i class="bi bi-gear"></i>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content-wrapper py-3">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="w-100" id="dataTable">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional, only if you need JavaScript components) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        var list_detail = $('#dataTable').DataTable({
            destroy: true,
            processing: true,
            serverSide: true,
            searching: false,
            lengthChange: false,

            ajax: {
                url: APP_URL + '/api/listTransaksi',
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                data: function(d) {
                    d.nik = $("#nik").val();
                    d.tgl_awal = $("#tgl_awal").val();
                    d.tgl_akhir = $("#tgl_akhir").val();
                    d.no_barcode = $("#no_barcode").val();
                },
            },
        });
        // var dataTable =  $('#dataTable').DataTable({
        //     "processing": true,
        //     "serverSide": true,
        //     "ajax": {
        //         "url": "https://api.example.com/data",
        //         "type": "GET",
        //         "dataType": "json"
        //         // Tambahkan headers, data, atau konfigurasi lainnya sesuai kebutuhan
        //     },
        //     "columns": [{
        //             "data": "id"
        //         },
        //         {
        //             "data": "name"
        //         },
        //         {
        //             "data": "email"
        //         },
        //         {
        //             "data": "city"
        //         }
        //     ]
        // });
    });
</script>
