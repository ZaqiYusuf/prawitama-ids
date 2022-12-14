@extends('master')

@section('dashboard')
<div class="d-flex justify-content-between" style="margin-right: 7%;">
    <div class="card d-flex justify-content-center mt-5" style="width: 20%;height:100px;margin-left:5%;">
        <div class="card-body mt-3">
            <i class="fa-2xl fa-solid fa-graduation-cap" style="margin-left:5%"></i>
        </div>
    </div>
    <div class="card d-flex justify-content-between mt-5" style="width: 20%;height:100px;">
        <div class="card-body mt-3">
            <i class="fa-2xl fa-sharp fa-solid fa-book" style="margin-left: 5%"></i>
        </div>
    </div>
    <div class="card d-flex justify-content-between mt-5" style="width: 20%;height:100px;">
        <div class="card-body mt-3">
            <i class="fa-2xl fa-solid fa-users" style="margin-left: 5%"></i>
        </div>
    </div>
    <div class="card d-flex justify-content-between mt-5" style="width: 20%;height:100px;">
        <div class="card-body mt-3">
            <i class="fa-2xl fa-solid fa-comment" style="margin-left:5%"></i>
        </div>
    </div>
</div>
@endsection