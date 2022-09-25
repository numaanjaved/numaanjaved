@extends('adminlte::page')
@section('plugins.Datatables', 'true')
@section('plugins.DatatablesPlugins', 'true')
@section('title')
Roles | Numaan Javed
@endsection
@section('content')
@php
$heads = [
    'ID',
    'Name',
    'Count',
    ['label' => 'Actions', 'no-export' => true, 'width' => 20],
];


$data = [];
foreach($users as $user){
    $btnEdit = '<a href="'.route("admin.roles.edit", $user->id).'" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </a>';
    $btnDelete = '<a class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </a>';
// $btnDetails = '<a class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
//                    <i class="fa fa-lg fa-fw fa-eye"></i>
//                </a>';
    $data[] = [
        $user->id,
        $user->name,
        $user->roles->count(),
        '<nobr>'.$btnEdit.$btnDelete.'</nobr>',
    ];
}

$config = [
    'data' => $data,
    'order' => [[1, 'asc']],
    'searching' => false,
    'columns' => [null, null, null, ['orderable' => false]],
    // 'dom' => '
    //               <"row" <"col-12" tr> >
    //               <"row" <"col-sm-12 d-flex justify-content-start" f> ><"row" <"col-sm-7" B> <"col-sm-5 d-flex justify-content-end" i> >'
];
@endphp
@section('content')
@if(session('success'))
    <x-adminlte-alert class="container mt-4 p-4" theme="success">{{session('success')}}</x-adminlte-alert>
@endif
<x-adminlte-card class="container mt-4 p-4" title="Roles" theme="dark">
    <a href="{{ route("admin.roles.create")}}" class="float-right btn btn-primary">Add New Role</a>
    <x-adminlte-datatable id="table8" :heads="$heads" head-theme="dark" class="bg-white" :config="$config"
    striped hoverable with-buttons bordered/>
</x-adminlte-card>
@endsection

