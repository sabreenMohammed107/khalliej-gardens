@extends('layouts.admin.layout')
@section('content')
    {{-- <h3 class="card-title float-sm-left"><a href="" class="btn btn-success" data-toggle="modal"
            data-target="#add-tab9">إضافة</a></h3> --}}
    <table id="example1" class="table table-bordered table-striped">
        <thead class="bg-info">
            <tr>
                <th>#</th>

                <th>موبايل </th>

                <th> البريد الالكتروني</th>

                <th> العنوان </th>
                <th> الخريطه</th>

                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $index => $row)
            <tr>
                <th>{{ $index + 1 }}</th>
                    <th>{{$row->phone}}</th>
                    <th>{{$row->email}} </th>
                    <th>{{$row->address}}</th>

                    <th>{{$row->google_map}}</th>


                    <th>
                        <div class="btn-group">

                            <a  class="btn btn-default" href="{{route('company-contact.edit', $row->id) }}"><i class="fas fa-edit"
                                    title="edit"></i></button>


                    </th>
                </tr>
@endforeach

        </tbody>
    </table>


@endsection
