@extends('layout.main')

<div class="page-content-wrapper py-3">
    <div class="container">

        <!-- QR-->
        <div class="card mb-3 shadow-sm">
            <div class="card-body direction-rtl">
                <p class="mb-2">QR Code</p>

                <div class="single-setting-panel">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_qrCode">
                        <div class="icon-wrapper bg-primary">
                            <i class="bi bi-qr-code"></i>
                        </div>
                        QR Code
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal qr code (qr) -->
        <div class="modal fade" id="modal_qrCode" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center" style="margin-top: -1%;">
                            {!! $qrCode !!}
                        </div>
                        <br>
                        <h5 style="text-align: center;"><b>{{ Auth::user()->name }} </b></h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Setting Card-->
        <div class="card mb-3 shadow-sm">
            <div class="card-body direction-rtl">
                <p class="mb-2">Settings</p>

                <div class="single-setting-panel">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Availability Status</label>
                    </div>
                </div>

                <div class="single-setting-panel">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault2" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault2">Send Me Notifications</label>
                    </div>
                </div>

                <div class="single-setting-panel">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="darkSwitch">
                        <label class="form-check-label" for="darkSwitch">Dark Mode</label>
                    </div>
                </div>

                <div class="single-setting-panel">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="rtlSwitch">
                        <label class="form-check-label" for="rtlSwitch">RTL Mode</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Setting Card-->
        <div class="card mb-3 shadow-sm">
            <div class="card-body direction-rtl">
                <p class="mb-2">Account Setup</p>

                <div class="single-setting-panel">
                    <a href="{{ route('vError') }}">
                        <div class="icon-wrapper">
                            <i class="bi bi-person"></i>
                        </div>
                        Update Profile
                    </a>
                </div>

                <div class="single-setting-panel">
                    <a href="{{ route('vError') }}">
                        <div class="icon-wrapper bg-warning">
                            <i class="bi bi-pencil"></i>
                        </div>
                        Update Bio
                    </a>
                </div>

                <div class="single-setting-panel">
                    <a href="{{ route('vError') }}">
                        <div class="icon-wrapper bg-info">
                            <i class="bi bi-lock"></i>
                        </div>
                        Change Password
                    </a>
                </div>

                <div class="single-setting-panel">
                    <a href="{{ route('vError') }}">
                        <div class="icon-wrapper bg-success">
                            <i class="bi bi-globe2"></i>
                        </div>
                        Language
                    </a>
                </div>

                <div class="single-setting-panel">
                    <a href="{{ route('vError') }}">
                        <div class="icon-wrapper bg-danger">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        Privacy Policy
                    </a>
                </div>
            </div>
        </div>

        <!-- Setting Card-->
        <div class="card shadow-sm">
            <div class="card-body direction-rtl">
                <p class="mb-2">Register &amp; Logout</p>

                <div class="single-setting-panel">
                    <a href="{{ route('vError') }}">
                        <div class="icon-wrapper bg-primary">
                            <i class="bi bi-person"></i>
                        </div>
                        Create New Account
                    </a>
                </div>

                <div class="single-setting-panel">
                    <a href="{{ route('logoutaksi') }}">
                        <div class="icon-wrapper bg-danger">
                            <i class="bi bi-box-arrow-right"></i>
                        </div>
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
