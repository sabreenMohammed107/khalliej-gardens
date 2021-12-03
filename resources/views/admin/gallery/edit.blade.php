@extends('layouts.admin.layout')
@section('content')
<div class="main-sparkline13-hd">


</div>
<br />
<form action="{{ route('gallery.update',$row->id) }}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
            <div class="form-group ">
                <label> النوع</label>
                <select name="type" id="type" class="form-control">

                    <option value="1" {{ ( 1 == $row->type) ? 'selected' : '' }}>صور</option>
                    <option value="2" {{ ( 2 == $row->type) ? 'selected' : '' }}>فديو</option>

                </select>

            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
            </div>
            @if($row->type==2)
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4" style="direction:rtl">

                <div class="form-group">
                    <label class="">  فديو</label>
                    <input name="image" value="{{$row->image}}"  type="url" class="form-control" placeholder=" فديو">
                </div>
            </div>
            @else
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label for="file-upload" class="custom-file-label">
                    <i class="fa fa-cloud-upload"></i>{{$row->image}}
                  </label>
                  <input id="file-upload" class="custom-file-label" name='image' type="file" style="display: none" >


        </div>
        </div>
        @endif
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
            @if ($row->type==1)
            <img width="100" src="{{ asset('uploads/categories') }}/{{ $row->image }}" />

            @else
            <video autoplay muted loop width="100">
                <source src="{{ $row->image }}" type="video/mp4" />
            </video>
            @endif
        </div>
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
                <textarea name="ar_text"   class="form-control" placeholder="النص">{{$row->ar_text}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  النص انجليزى</label>
                <textarea name="en_text"   class="form-control" placeholder="النص">{{$row->en_text}}</textarea>
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
        <div class="form-group ">
            <label> </label>
            <input type="checkbox" class="" name="active" id=" active" @if($row->active==1) checked @endif
        >
           نشط

        </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> الترتيب</label>
                <input type="number" class="form-control" name="order" value="{{$row->order}}">
            </div>
        </div>

        </div>

     <div class="card-footer">
        <button type="submit" class="btn btn-primary">حفظ</button>
        <a href="{{ route('gallery.index') }}" class="btn btn-secondary" >إغلاق</a>

    </div>
</form>
@endsection
