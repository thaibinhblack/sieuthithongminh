<div class="main">
        <!-- MAIN CONTENT -->
        @if(Request()->has('page'))
            @if(Request()->get('page')== 'user')
                @include('admin.user.alluser')
            @elseif(Request()->get('page') == 'donhang')
                @include('admin.cuahang.donhang')
            @else
                @include('admin.cuahang.product')
            @endif
        @endif
        <!-- END MAIN CONTENT -->
    </div>