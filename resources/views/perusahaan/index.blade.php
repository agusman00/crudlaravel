@extends('temp/sbadminperusahaan')
@section('title', 'Perusahaan')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{__('Dashboard Perusahaan')}}</h1>
        </div>

        <!-- Content Row
            <div class="row">
            </div>
        -->

        <!-- Content table -->
            <!--content-->
<div class="">
    <div class="row">
        <a href="/perusahaan/adddata" class="btn btn-success ml-2" type="button">{{__('Tambah +')}}</a>
        <a href="/perusahaan/index" class="btn btn-primary ml-2" type="button"><i class="fas fa-sync-alt"></i></a>

    </div>


    <div class="row g-3 align-items-center mt-2">
    <div class="col-6">
        <form action="/perusahaan/index" method="GET">
        <input type="search" class="form-control" name="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
    </div>

    <table class="table">
    <thead>
    <tr>
        <th>{{__('No')}}</th>
        <th>{{__('Nama Perusahaan')}}</th>
        <th>{{__('Email Perusahaan')}}</th>
        <th>{{__('Logo Perusahaan')}}</th>
        <th>{{__('Action')}}</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $index=> $row)
        <tr>
            <th scope="row">{{$index + $data->firstItem()}}</th>
            <td>{{$row->nama}}</td>
            <td>{{$row->email}}</td>
            <td>
              <img class="border border-3 border-secondary rounded" src="{{asset('logo/'.$row->foto)}}" alt="" style="width: 100px">
            </td>
            <td>
            <a href="/perusahaan/datadetails/{{$row->id}}" class="btn btn-info btn-sm" type="button"><i class="far fa-eye"></i></a>
            <a href="/perusahaan/changedata/{{$row->id}}" class="btn btn-warning btn-sm" type="button"><i class="far fa-edit"></i></a>
            <a href="#" class="btn btn-danger delete btn-sm" data-id="{{$row->id}}" data-name="{{$row->nama}}" type="button"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    {{$data->links()}}

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
