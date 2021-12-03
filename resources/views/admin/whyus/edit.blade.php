@extends('layouts.admin.layout')
@section('content')
<div class="main-sparkline13-hd">


</div>
<br />
<form action="{{ route('whyus.update',$row->id) }}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

            <div class="form-group">
                <label class=""> العنوان عربى</label>
                <input name="ar_title" value="{{$row->ar_title}}"  type="text" class="form-control" placeholder="العنوان عربى">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

            <div class="form-group">
                <label class=""> العنوان انجليزى</label>
                <input name="en_title" value="{{$row->en_title}}"  type="text" class="form-control" placeholder="العنوان انجليزى">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  النص عربى</label>
                <textarea name="ar_brief"   class="form-control" placeholder="النص">{{$row->ar_brief}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  النص انجليزى</label>
                <textarea name="en_breif"   class="form-control" placeholder="النص">{{$row->en_breif}}</textarea>
            </div>
        </div>


        </div>

     <div class="card-footer">
        <button type="submit" class="btn btn-primary">حفظ</button>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary" >إغلاق</a>

    </div>
</form>
@endsection
