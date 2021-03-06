@extends('layouts.admin.layout')
@section('content')
    <h3 class="card-title float-sm-left"><a href="{{route('gallery-category.create')}}" class="btn btn-success" >إضافة</a></h3>
    <table id="example1" class="table table-bordered table-striped">
        <thead class="bg-info">
            <tr>
                <th>#</th>


                <th>الاسم عربى </th>
                <th>الاسم انجليزى</th>


                <th style="width:120px">الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $index => $row)
            <tr>
                <th>{{ $index + 1 }}</th>

                    <th>{{$row->ar_category}}</th>
                    <th>{{$row->en_category}}</th>


                    <th>
                        <div class="btn-group">

                            <a  class="btn btn-default" href="{{route('gallery-category.edit', $row->id) }}"><i class="fas fa-edit"
                                    title="edit"></i></button>
                                    <a class="btn btn-danger" data-toggle="modal"
                                    data-target="#del{{ $row->id }}"><i class="fas fa-trash-alt"></i></a>

                    </th>
                </tr>
                 <!-- Delete Modal -->
            <div class="modal fade dir-rtl" id="del{{ $row->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{ route('gallery-category.destroy', $row->id) }}" method="POST">
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
