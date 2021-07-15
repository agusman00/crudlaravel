@extends('temp/sbadmin')
@section('title', 'Karyawan')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{__('Dashboard')}}</h1>
            <a href="/karyawan/exportpdf" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> {{__('Download Data')}}</a>
        </div>

        <!-- Content Row
            <div class="row">
            </div>
        -->

        <!-- Content table -->
            <!--content-->
<div class="">
    <div class="row">
        <a href="/karyawan/adddata" class="btn btn-success" type="button">{{__('Tambah +')}}</a>
        <a href="/" class="btn btn-primary ml-2" type="button"><i class="fas fa-sync-alt"></i></a>
    </div>


    <div class="row g-3 align-items-center mt-2">
    <div class="col-6">
        <form action="/karyawan/index" method="GET">
        <input type="search" class="form-control" name="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
    </div>

    <table class="table">
    <thead>
    <tr>
        <th>{{__('No')}}</th>
        <th>{{__('Nama Depan')}}</th>
        <th>{{__('Nama Belakang')}}</th>
        <th>{{__('Perusahaan')}}</th>
        <th>{{__('Email')}}</th>
        <th>{{__('Nomor Telepon')}}</th>
        <th>{{__('Action')}}</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $index => $row)
        <tr>
            <th scope="row">{{$index + $data->firstItem()}}</th>
            <td>{{$row->namadepan}}</td>
            <td>{{$row->namabelakang}}</td>
            <td>{{$row->perusahaan}}</td>
            <td>{{$row->email}}</td>
            <td>+62 {{$row->tlpn}}</td>
            <td>
            <a href="/karyawan/datadetails/{{$row->id}}" class="btn btn-info btn-sm" type="button"><i class="far fa-eye"></i></a>
            <a href="/karyawan/changedata/{{$row->id}}" class="btn btn-warning btn-sm" type="button"><i class="far fa-edit"></i></a>
            <a href="#" class="btn btn-danger delete btn-sm" data-id="{{$row->id}}" data-name="{{$row->namadepan}}" type="button"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    {{ $data -> links() }}


    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Agusman Pori 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    </div>

</div>
@endsection
