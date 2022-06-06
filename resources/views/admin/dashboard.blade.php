@extends('layouts.admin')
@section('content')
<div class="container-fluid" style="width: 100%;height: 100%;padding: 20px 25px 20px 55px;">
    <div class="row">
        <div class="col-3 card_style">
            <div class="row">
                <div class="col-12" style="text-align: right;margin-bottom: 1rem;">
                    <i class="fa-solid fa-user card_icon"></i>
                    <span class="card_p">مستخدمين جدد</span>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="background-color: var(--first-color);"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 card_style">
            <div class="row">
                <div class="col-12" style="text-align: right;margin-bottom: 1rem;">
                    <i class="fa-solid fa-cart-plus card_icon"></i>
                    <span class="card_p">منتجات مباعه</span>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="background-color: var(--first-color);"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 card_style">
            <div class="row">
                <div class="col-12" style="text-align: right;margin-bottom: 1rem;">
                    <i class="fa-solid fa-chart-line card_icon"></i>
                    <span class="card_p">زيارات الموقع</span>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="background-color: var(--first-color);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
