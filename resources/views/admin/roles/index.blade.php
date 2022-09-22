@extends('adminlte::page')
@section('plugins.Datatables', 'true')
@section('content')
<div class="container mt-4 p-4 border border-light">
    <div class="row" id="heading">
        <div class="col-12">
            <div class="container"><h1>Roles</h1></div>
        </div>
    </div>
    <div class="container">
        <div class="row table-heading">
            <div class="col-4 border border-light">Id</div>
            <div class="col-4 border border-light">Name</div>
            <div class="col-4 border border-light">Action</div>
        </div>
        <div class="row message">
            <div class="col-12 border border-light">Roles are not yet made</div>
        </div>
        @if($roles)
        <div class="row table-row">

        </div>
        @else
        <div class="row message">
            <div class="col-12 border border-light">Roles are not yet made</div>
        </div>
        @endif
    </div>
</div>
@endsection

