@extends('adminlte::page')
@section('plugins.Datatables', 'true')
@section('plugins.DatatablesPlugins', 'true')
@section('content')
@php
$heads = [
    'ID',
    'Name',
    ['label' => 'Actions', 'no-export' => true, 'width' => 15],
];

$btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
$btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';

$config = [
    'data' => $roles,
    'order' => [[1, 'asc']],
    'columns' => [null, null, ['orderable' => false]],
    // 'dom' => '
    //               <"row" <"col-12" tr> >
    //               <"row" <"col-sm-12 d-flex justify-content-start" f> ><"row" <"col-sm-7" B> <"col-sm-5 d-flex justify-content-end" i> >'
];
@endphp
<x-adminlte-card title="Roles" theme="dark" icon="fas fa-lg fa-moon">

<x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" class="bg-white" :config="$config"
striped hoverable with-buttons bordered compressed/>

</x-adminlte-card>
<x-adminlte-card title="Roles" theme="dark" icon="fas fa-lg fa-moon">
    <x-adminlte-datatable id="table8" :heads="$heads" head-theme="dark" class="bg-white" :config="$config"
    striped hoverable with-buttons bordered/>
</x-adminlte-card>
@endsection
{{-- @section('js')
<script>
    $('#table1').DataTable( {
    searching: false
} );
</script>
@endsection --}}
