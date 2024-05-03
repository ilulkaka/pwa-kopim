@extends('layout.main')

<!-- Modal qr code (qr) -->
<div class="modal fade" id="modal_qrCode" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row justify-content-center" style="margin-top: -1%;">
                    {!! $qrCode !!}
                </div>
                <br>
                <h5 style="text-align: center;"><b>{{ Auth::user()->name }} </b></h5>
                <h5 style="text-align: center;">{{ $no_barcode }}</h5>
            </div>
        </div>
    </div>
</div>
