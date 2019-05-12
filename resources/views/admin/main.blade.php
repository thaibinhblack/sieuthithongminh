<div class="main">
        <!-- MAIN CONTENT -->
        @if(Request()->has('page'))
            @if(Request()->get('page')== 'user')
                @include('admin.user.alluser')
            @else
                @include('admin.cuahang.product')
            @endif
        @endif
        <!-- END MAIN CONTENT -->
    </div>