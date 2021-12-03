@extends('layouts.admin.layout')
@section('content')
<div class="main-sparkline13-hd">

    <a href="{{route('company.edit', $company->id) }}" class="btn btn-primary">تعديل بيانات الشركه</a>

</div>
<br />
<form action="{{ route('company.update',$company->id) }}" method="POST">
    {{ csrf_field() }}
    @method('PUT')

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> الاسم عربى</label>
                <input name="ar_name" value="{{$company->ar_name}}"  type="text" class="form-control" placeholder="الاسم عربى">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> الاسم انجليزى</label>
                <input name="en_name" value="{{$company->en_name}}"  type="text" class="form-control" placeholder="الاسم انجليزى">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> عن الشركه - عربى</label>
                <input name="ar_about_title" value="{{$company->ar_about_title}}"  type="text" class="form-control" placeholder="عن الشركه">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> عن الشركة - انجليزى</label>
                <input name="en_about_title" value="{{$company->en_about_title}}"  type="text" class="form-control" placeholder="عن الشركه">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> نص عنا عربى</label>
                <textarea name="ar_about"   class="form-control" placeholder="عنا">{{$company->ar_about}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> نص عنا انجليزى</label>
                <textarea name="en_about"   class="form-control" placeholder="عنا">{{$company->en_about}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">نظره عامه عربى</label>
                <textarea name="ar_overview"   class="form-control" placeholder="نظرة عامه">{{$company->ar_overview}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> نظرة عامه انجليزى</label>
                <textarea name="en_overview"   class="form-control" placeholder="نظرة عامه">{{$company->en_overview}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  رؤيتنا عربى</label>
                <textarea name="ar_vision"   class="form-control" placeholder="رؤيتنا">{{$company->ar_vision}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">رؤيتنا  انجليزى</label>
                <textarea name="en_vision"   class="form-control" placeholder="رؤيتنا">{{$company->en_vision}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> مهمتنا  عربى</label>
                <textarea name="ar_mission"   class="form-control" placeholder="مهمتنا">{{$company->ar_mission}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  مهمتنا انجليزى</label>
                <textarea name="en_mission"   class="form-control" placeholder="مهمتنا">{{$company->en_mission}}</textarea>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> قيمتنا  عربى</label>
                <textarea name="ar_value"   class="form-control" placeholder="قيمتنا">{{$company->ar_value}}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  قيمتنا انجليزى</label>
                <textarea name="en_value"   class="form-control" placeholder="قيمتنا">{{$company->en_value}}</textarea>
            </div>
        </div>


        </div>

    {{-- <div class="card-footer">
        <button type="submit" class="btn btn-primary">حفظ</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>

    </div> --}}
</form>
@endsection
