@extends('layouts.base')
@section('content')
<div class="row" style="margin-top:20px">
    <div class="col-lg-4 col-lg-offset-4">
        <h3 class="text-center">NGOPI MUTABAAH</h3>
        <hr class="clean">
        <ul role="tablist" class="nav nav-tabs" id="myTab">
            <li class="active"><a data-toggle="tab" role="tab" href="#laporan">Laporan</a></li>
            <li><a data-toggle="tab" role="tab" href="#rekap">Rekap</a></li>
            <li><a data-toggle="tab" role="tab" href="#denda">Denda</a></li>
        </ul>
        <div class="tab-content" id="myTabContent">
            @include('tab.tab_lapor')
            @include('tab.tab_rekap')
            @include('tab.tab_denda')
        </div>
        <h5 class="text-center done">Thanks karena hari ini udah lapor<br>
            Semoga amal ibadah kita hari ini diterima Allah. Aamiin
        </h5>
        <hr>

    </div>
</div>
@endsection