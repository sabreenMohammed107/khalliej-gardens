@extends('layouts.admin.layout')
@section('content')
<div class="main-sparkline13-hd">


</div>
<br />
<form action="{{ route('whyus.store') }}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

            <div class="form-group">
                <label class=""> العنوان عربى</label>
                <input name="ar_title" value="{{old('ar_title') }}"  type="text" class="form-control" placeholder="العنوان عربى">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

            <div class="form-group">
                <label class=""> العنوان انجليزى</label>
                <input name="en_title" value="{{old('en_title') }}"  type="text" class="form-control" placeholder="العنوان انجليزى">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  النص عربى</label>
                <textarea name="ar_brief"   class="form-control" placeholder="النص">{{old('ar_brief') }}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  النص انجليزى</label>
                <textarea name="en_breif"   class="form-control" placeholder="النص">{{old('en_breif') }}</textarea>
            </div>
        </div>


        </div>

     <div class="card-footer">
        <button type="submit" class="btn btn-primary">حفظ</button>
        <a href="{{ route('whyus.index') }}" class="btn btn-secondary" >إغلاق</a>

    </div>
</form>
@endsection
