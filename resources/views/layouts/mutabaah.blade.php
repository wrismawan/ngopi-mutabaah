@extends('layouts.base')
@section('content')
<div class="row" style="margin-top:20px">
    <div class="col-lg-4 col-lg-offset-4">
        <h3 class="text-center">NGOPI MUTABAAH</h3>
        <hr class="clean">
        <ul role="tablist" class="nav nav-tabs" id="myTab">
            <li class="active"><a data-toggle="tab" role="tab" href="#home">Laporan</a></li>
            <li><a data-toggle="tab" role="tab" href="#group">Rekap</a></li>
            <li><a data-toggle="tab" role="tab" href="#statistics">Denda</a></li>
        </ul>
        <div class="tab-content" id="myTabContent">
            @include('tab.tab_lapor')
            @include('tab.tab_group')
            @include('tab.tab_stat')
        </div>
        <h5 class="text-center done">Thanks karena hari ini udah lapor</h5>
        <hr>

    </div>
</div>
@endsection