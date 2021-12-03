@extends('layouts.admin.layout')
@section('content')
<div class="main-sparkline13-hd">


</div>
<br />
<form action="{{ route('service.update',$row->id) }}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label for="file-upload" class="custom-file-label">
                    <i class="fa fa-cloud-upload"></i>{{ $row->image }}
                  </label>
                  <input id="file-upload" class="custom-file-label" name='image' type="file" style="display: none" >


        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
            <img width="150" src="{{ asset('uploads/service') }}/{{ $row->image }}" />

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

            <div class="form-group">
                <label class=""> الاسم عربى</label>
                <input name="ar_name" value="{{ $row->ar_name }}"  type="text" class="form-control" placeholder="الاسم عربى">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

            <div class="form-group">
                <label class=""> الاسم انجليزى</label>
                <input name="en_name" value="{{ $row->en_name }}"  type="text" class="form-control" placeholder="الاسم انجليزى">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  النص عربى</label>
                <textarea name="ar_desc"   class="form-control" placeholder="النص">{{ $row->ar_desc }}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  النص انجليزى</label>
                <textarea name="en_desc"   class="form-control" placeholder="النص">{{ $row->en_desc }}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
        <div class="form-group ">
            <label> التصنيف</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">إختر</option>
                @foreach ($categories as $cat)
                <option value="{{$cat->id}}" {{ ( $cat->id == $row->category_id) ? 'selected' : '' }}>{{$cat->ar_name}}</option>
                @endforeach
            </select>

        </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> الترتيب</label>
                <input type="number" class="form-control" name="order" value="{{ $row->order }}">
            </div>
        </div>

        </div>

     <div class="card-footer">
        <button type="submit" class="btn btn-primary">حفظ</button>
        <a href="{{ route('service.index') }}" class="btn btn-secondary" >إغلاق</a>

    </div>
</form>
@endsection
