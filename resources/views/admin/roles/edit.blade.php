@extends('adminlte::page')

@section('title')
Edit Role {{$role->name}} | Numaan Javed
@endsection
@section('content')
@if(session('error'))
    <x-adminlte-alert class="container mt-4 p-4" theme="danger">{{session('error')}}</x-adminlte-alert>
@endif

<x-adminlte-card class="container mt-4 p-4" title="Add New Role" theme="dark">
    <form action="{{route('admin.roles.update', $role->id)}}" method="POST">
        @csrf
        <div class="row">
            <x-adminlte-input name="name" label="Name" placeholder="Name of Role" fgroup-class="col-md-12" value="{{$role->name}}"/>
            <x-adminlte-button label="Update" type="Submit" icon="fas fa-lg fa-save" fgroup-class="col-md-2"/>
        </div>
    </form>

</x-adminlte-card>
@endsection
{{-- @section('js')
<script>
    $('#table1').DataTable( {
    searching: false
} );
</script>
@endsection --}}
