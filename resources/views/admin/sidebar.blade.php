<div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    @if (Session()->get('account.QUYEN') == 2)
                        <li><a href="admin?page=user" class=""><i class="lnr lnr-user"></i> <span>Người dùng</span></a></li>
                    @endif
                    
                    
                    <li>
                        <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Cửa Hàng</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages" class="collapse ">
                            <ul class="nav">
                                <li><a href="/admin?page=product" class="">SẢN PHẨM</a></li>
                                <li><a href="/admin?page=donhang" class="">ĐƠN HÀNG</a></li>
                                
                            </ul>
                        </div>
                    </li>
                   
                </ul>
            </nav>
        </div>
    </div>