@extends('layouts.admin.layout')
@section('content')
    {{-- <h3 class="card-title float-sm-left"><a href="" class="btn btn-success" data-toggle="modal"
            data-target="#add-tab9">إضافة</a></h3> --}}
    <table id="example1" class="table table-bordered table-striped">
        <thead class="bg-info">
            <tr>
                <th>#</th>
                <th>الصورة  </th>
                <th>الاسم عربى </th>
                <th>الاسم انجليزى</th>
                <th> نبذه عربى</th>
                <th>نبذه انجليزى</th>
                <th>نظرة عامه عربى</th>
                <th>نظرة عامه انجليزى</th>
                <th>الترتيب</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $index => $row)
            <tr>
                <th>{{ $index + 1 }}</th>
                <th><img width="200" src="{{ asset('uploads/categories') }}/{{ $row->image }}" /></th>
                    <th>{{$row->ar_name}}</th>
                    <th>{{$row->en_name}}</th>
                    <th>{{$row->ar_brief}} </th>
                    <th>{{$row->en_breif}} </th>
                    <th>{{$row->ar_overview}}</th>

                    <th>{{$row->en_overview}}</th>

                    <th>{{$row->order}}</th>

                    <th>
                        <div class="btn-group">

                            <a  class="btn btn-default" href="{{route('category.edit', $row->id) }}"><i class="fas fa-edit"
                                    title="edit"></i></button>


                    </th>
                </tr>
@endforeach

        </tbody>
    </table>


@endsection
