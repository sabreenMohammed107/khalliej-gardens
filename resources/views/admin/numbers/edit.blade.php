@extends('layouts.admin.layout')
@section('content')
<div class="main-sparkline13-hd">


</div>
<br />
<form action="{{ route('numbers.update',$row->id) }}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="direction:rtl">

            <div class="form-group">
                <label class=""> الاسم عربى</label>
                <input name="ar_name" value="{{$row->ar_name}}"  type="text" class="form-control" placeholder="الاسم عربى">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="direction:rtl">

            <div class="form-group">
                <label class=""> الاسم انجليزى</label>
                <input name="en_name" value="{{$row->en_name}}"  type="text" class="form-control" placeholder="الاسم انجليزى">
            </div>
        </div>


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="direction:rtl">

            <div class="form-group">
                <label class=""> القيمه</label>
                <input type="number" class="form-control" name="no_value" value="{{$row->no_value}}">
            </div>
        </div>

        </div>

     <div class="card-footer">
        <button type="submit" class="btn btn-primary">حفظ</button>
        <a href="{{ route('numbers.index') }}" class="btn btn-secondary" >إغلاق</a>

    </div>
</form>
@endsection
