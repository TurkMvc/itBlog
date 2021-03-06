@extends('layouts.master')

@section('content')


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Yeni Kategori Ekle</div>
                    <div class="panel-body">
                        {!! Form::open(["url" => "/kategori", "method" => "post","files" => true]) !!}

                        {!! Form::bsText("baslik","Başlık") !!}
                        {!! Form::bsText("enbaslik","İngilizce Başlık") !!}
                        {!! Form::bsSubmit("Kaydet") !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
