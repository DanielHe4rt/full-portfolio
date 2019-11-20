@extends('layouts.admin')

@section('title','Teste')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cliques únicos</h5>
                    <p class="card-text">
                       {{\App\Entities\Helpers\Access::whereDate('created_at',date('Y-m-d'))->count()}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">E-mails não lidos</h5>
                    <p class="card-text">
                        {{\App\Entities\Mailer\Mail::where('mail_status','<',3)->count()}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
