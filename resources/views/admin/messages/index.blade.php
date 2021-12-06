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


                                    <a class="btn btn-danger" data-toggle="modal"
                                    data-target="#del{{ $row->id }}"><i class="fas fa-trash-alt"></i></a>

                    </th>
                </tr>
                 <!-- Delete Modal -->
            <div class="modal fade dir-rtl" id="del{{ $row->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{ route('messages.destroy', $row->id) }}" method="POST">
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
