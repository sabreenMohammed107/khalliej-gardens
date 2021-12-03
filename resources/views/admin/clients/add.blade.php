@extends('layouts.admin.layout')
@section('content')
<div class="main-sparkline13-hd">


</div>
<br />
<form action="{{ route('clients.store') }}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label for="file-upload" class="custom-file-label">
                    <i class="fa fa-cloud-upload"></i>{{old('logo') }}
                  </label>
                  <input id="file-upload" class="custom-file-label" name='logo' type="file" style="display: none" >


        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
            {{-- <img width="150" src="{{ asset('uploads/categories') }}/{{ $row->image }}" /> --}}

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

            <div class="form-group">
                <label class=""> الاسم عربى</label>
                <input name="ar_name" value="{{old('ar_name') }}"  type="text" class="form-control" placeholder="العنوان عربى">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

            <div class="form-group">
                <label class=""> الاسم انجليزى</label>
                <input name="en_name" value="{{old('en_name') }}"  type="text" class="form-control" placeholder="العنوان انجليزى">
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

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  نظرة عامة عربى</label>
                <textarea name="ar_overview"   class="form-control" placeholder="النص">{{old('ar_overview') }}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  نظرة عامة انجليزى</label>
                <textarea name="en_overview"   class="form-control" placeholder="النص">{{old('en_overview') }}</textarea>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> فيس بوك</label>
                <input type="url" class="form-control" name="facebook" value="{{old('facebook') }}">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> انستجرام</label>
                <input type="url" class="form-control" name="instgram" value="{{old('instgram') }}">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> يوتيوب</label>
                <input type="url" class="form-control" name="youtube" value="{{old('youtube') }}">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> تويتر</label>
                <input type="url" class="form-control" name="twitter" value="{{old('twitter') }}">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
        <div class="form-group ">
            <label> </label>
            <input type="checkbox" class="" name="active" id=" active" checked {{ old('active') == 'on' ? 'checked' : '' }}
        >
           نشط

        </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> الترتيب</label>
                <input type="number" class="form-control" name="order" value="{{old('order') }}">
            </div>
        </div>

        </div>

     <div class="card-footer">
        <button type="submit" class="btn btn-primary">حفظ</button>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary" >إغلاق</a>

    </div>
</form>
@endsection
