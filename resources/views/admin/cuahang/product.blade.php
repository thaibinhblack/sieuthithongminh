<div class="main-content">
    <div class="container-fluid">
            <h3 class="page-title">QUẢN LÝ SẢN PHẨM <a  style="margin-left:15px;" href="/admin?page=producta&action=addproduct"><span class="lnr lnr-plus-circle"></span></a></h3> 
            @if(Request()->has('action'))
                @if(Request()->get('action') == 'addproduct')
                    @include('admin.cuahang.addproduct')
                @else
                    @include('admin.cuahang.detailproduct')
                @endif
                
            @else
                @include('admin.cuahang.allproduct')
                
            @endif
    </div>
</div>