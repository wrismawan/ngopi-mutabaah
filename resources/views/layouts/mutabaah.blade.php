@extends('layouts.base')
@section('content')
<div class="row" style="margin-top:20px">
    <div class="col-lg-4 col-lg-offset-4">
        <h3 class="text-center">MUTABAAH GEMBIRA</h3>
        <hr class="clean">
        <ul role="tablist" class="nav nav-tabs" id="myTab">
            <li class="active"><a data-toggle="tab" role="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" role="tab" href="#group">Group</a></li>
            <li><a data-toggle="tab" role="tab" href="#statistics">Statistics</a></li>
        </ul>
        <div class="tab-content" id="myTabContent">
            @include('tab.tab_home')
            @include('tab.tab_group')
            @include('tab.tab_stat')
        </div>
        <hr>
    </div>
</div>
@endsection