@extends('layouts.admin.layout')
@section('content')
<div class="main-sparkline13-hd">


</div>
<br />
<form action="{{ route('gallery.store') }}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
            <div class="form-group ">
                <label> النوع</label>
                <select name="type" id="category_id" class="form-control">

                    <option value="1">صور</option>
                    <option value="2">فديو</option>

                </select>

            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

                <div class="form-group">
                    <label class="">  فديو</label>
                    <input name="image" value="{{old('image') }}"  type="url" class="form-control" placeholder=" فديو">
                </div>
            </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label for="file-upload" class="custom-file-label">
                    <i class="fa fa-cloud-upload"></i>{{old('name') }}
                  </label>
                  <input id="file-upload" class="custom-file-label" name='image' type="file" style="display: none" >


        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
            {{-- <img width="150" src="{{ asset('uploads/categories') }}/{{ $row->image }}" /> --}}

        </div>

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
                <textarea name="ar_text"   class="form-control" placeholder="النص">{{old('ar_text') }}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  النص انجليزى</label>
                <textarea name="en_text"   class="form-control" placeholder="النص">{{old('en_text') }}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
            <div class="form-group ">
                <label> التصنيف</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">إختر</option>
                    @foreach ($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->ar_name}}</option>
                    @endforeach
                </select>

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
        <a href="{{ route('gallery.index') }}" class="btn btn-secondary" >إغلاق</a>

    </div>
</form>
@endsection
