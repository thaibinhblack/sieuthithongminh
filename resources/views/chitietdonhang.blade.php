@extends('masteradmin')
@section('content')
    
    @include('admin.nav-top')
    @include('admin.sidebar')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">QUẢN LÝ SẢN PHẨM <a  style="margin-left:15px;" href="/admin?page=producta&action=addproduct"><span class="lnr lnr-plus-circle"></span></a></h3> 
                @include('admin.cuahang.chitiet')
            </div>
        </div>
    </div>
   
@endsection