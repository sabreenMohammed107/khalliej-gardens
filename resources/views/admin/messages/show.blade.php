@extends('layouts.admin.layout')
@section('content')
<div class="main-sparkline13-hd">


</div>
<br />
<form action="" >


    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  تاريخ الرسالة</label>
                <input name="message_date" value="{{ date('d-m-Y', strtotime($row->message_date)) }}}"  type="text" class="form-control" placeholder="  تاريخ الرسالة">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  الاسم</label>
                <input name="name" value="{{$row->name}}"  type="text" class="form-control" placeholder="الاسم ">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> البريد الالكترونى</label>
                <input name="email" value="{{$row->email}}"  type="text" class="form-control" placeholder="البريد الالكترونى">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">الموبايل</label>
                <input name="mobile" value="{{$row->mobile}}"  type="text" class="form-control" placeholder="الموبايل ">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  النوع</label>
                <input name="message_type_id" value="{{$row->type->ar_message_type ?? ''}}"  type="text" class="form-control" placeholder="النوع ">
            </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">   العنوان</label>
                <textarea name="address"   class="form-control" placeholder="العنوان">{{$row->address}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  الرسالة </label>
                <textarea name="message"   class="form-control" placeholder="الرسالة">{{$row->message}}</textarea>
            </div>
        </div>
    </div>
     <div class="card-footer">
        {{-- <button type="button" class="btn btn-primary">حفظ</button> --}}
        <a href="{{ route('messages.index') }}" class="btn btn-secondary" >إغلاق</a>

    </div>
</form>
@endsection
