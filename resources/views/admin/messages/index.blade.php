@extends('layouts.admin.layout')
@section('content')
    {{-- <h3 class="card-title float-sm-left"><a href="" class="btn btn-success" data-toggle="modal"
            data-target="#add-tab9">إضافة</a></h3> --}}
    <table id="example1" class="table table-bordered table-striped">
        <thead class="bg-info">
            <tr>
                <th>#</th>
                <th>تاريخ الرسالة  </th>
                <th>موبايل </th>
                <th>الاسم </th>
                <th> البريد الالكتروني</th>
                <th>النوع </th>
                <th> العنوان </th>
                <th>  نص الرسالة</th>

                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $index => $row)
            <tr>
                <th>{{ $index + 1 }}</th>
                <th>{{ date('d-m-Y', strtotime($row->message_date)) }}</th>
                    <th>{{$row->mobile}}</th>
                    <th>{{$row->name}}</th>
                    <th>{{$row->email}} </th>
                    <th>{{$row->type->ar_message_type ?? ''}} </th>
                    <th>{{$row->address}}</th>

                    <th>{{$row->message}}</th>


                    <th>
                        <div class="btn-group">

                            <a  class="btn btn-default" href="{{route('messages.show', $row->id) }}"><i class="fas fa-eye"
                                    title="edit"></i></button>


                    </th>
                </tr>
@endforeach

        </tbody>
    </table>


@endsection
