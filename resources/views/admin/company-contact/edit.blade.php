@extends('layouts.admin.layout')
@section('content')
<div class="main-sparkline13-hd">


</div>
<br />
<form action="{{ route('company-contact.update',$row->id) }}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> البريد الالكترونى</label>
                <input name="email" value="{{$row->email}}"  type="text" class="form-control" placeholder="البريد الالكترونى">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">الموبايل</label>
                <input name="phone" value="{{$row->phone}}"  type="text" class="form-control" placeholder="الموبايل ">
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
                <label class="">  الخريطه </label>
                <textarea name="google_map"   class="form-control" placeholder="الرسالة">{{$row->google_map}}</textarea>
            </div>
        </div>
    </div>
     <div class="card-footer">
        <button type="submit" class="btn btn-primary">حفظ</button>
        <a href="{{ route('company-contact.index') }}" class="btn btn-secondary" >إغلاق</a>

    </div>
</form>
@endsection
