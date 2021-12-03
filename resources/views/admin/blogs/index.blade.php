@extends('layouts.admin.layout')
@section('content')
    <h3 class="card-title float-sm-left"><a href="{{route('blogs.create')}}" class="btn btn-success" >إضافة</a></h3>
    <table id="example1" class="table table-bordered table-striped">
        <thead class="bg-info">
            <tr>
                <th>#</th>
                <th>الصورة  </th>
                <th style="width:120px">التاريخ  </th>
                <th>العنوان عربى </th>
                <th>العنوان انجليزى</th>
                <th> النص عربى</th>
                <th>النص انجليزى</th>
                <th>نشظ</th>
                <th>الترتيب</th>
                <th style="width:120px">الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $index => $row)
            <tr>
                <th>{{ $index + 1 }}</th>
                <th><img width="100" src="{{ asset('uploads/blogs') }}/{{ $row->image }}" /></th>
                <th>{{ date('d-m-Y', strtotime($row->blog_date)) }}</th>
                    <th>{{$row->ar_title}}</th>
                    <th>{{$row->en_title}}</th>
                    <th>{{$row->en_text}} </th>
                    <th>{{$row->ar_text}} </th>

                    <th>@if ($row->active==1)
                        <i class="fa fa-check" aria-hidden="true"></i>

                    @else
                    <i class="fa fa-times" aria-hidden="true"></i>

                    @endif</th>
                    <th>{{$row->order}}</th>

                    <th>
                        <div class="btn-group">

                            <a  class="btn btn-default" href="{{route('blogs.edit', $row->id) }}"><i class="fas fa-edit"
                                    title="edit"></i></button>
                                    <a class="btn btn-danger" data-toggle="modal"
                                    data-target="#del{{ $row->id }}"><i class="fas fa-trash-alt"></i></a>

                    </th>
                </tr>
                 <!-- Delete Modal -->
            <div class="modal fade dir-rtl" id="del{{ $row->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{ route('blogs.destroy', $row->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-content">
                            <div class="modal-header bg-gradient-danger">
                                <h5 class="modal-title" id="exampleModalLabel">تأكيد الحذف</h5>
                                <button type="button" class="close m-0 p-0 text-white"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <h3><i class="fas fa-fire text-danger"></i></h3>
                                <h4 class="text-danger">حذف جميع البيانات ؟</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">إلغاء</button>
                                <button type="submit" class="btn btn-danger">تأكيد</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endforeach

        </tbody>
    </table>


@endsection
