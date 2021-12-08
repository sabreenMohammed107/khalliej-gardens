@extends('layouts.admin.layout')
@section('content')
<div class="main-sparkline13-hd">


</div>
<br />
<form action="{{ route('gallery-category.update',$row->id) }}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

            <div class="form-group">
                <label class=""> الاسم عربى</label>
                <input name="ar_category" value="{{$row->ar_category}}"  type="text" class="form-control" placeholder="الاسم عربى">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

            <div class="form-group">
                <label class=""> الاسم انجليزى</label>
                <input name="en_category" value="{{$row->en_category}}"  type="text" class="form-control" placeholder="الاسم انجليزى">
            </div>
        </div>




        </div>

     <div class="card-footer">
        <button type="submit" class="btn btn-primary">حفظ</button>
        <a href="{{ route('gallery-category.index') }}" class="btn btn-secondary" >إغلاق</a>

    </div>
</form>
@endsection
