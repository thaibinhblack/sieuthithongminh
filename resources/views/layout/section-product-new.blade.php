<section class="products-news" id="products-news">
    <div class='container'>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#new">Mới nhập</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#hot">Nổi bật</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#sale">Bán chạy</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="row tab-pane active" id="new">
                <h3>Sản phẩm mới</h3>
                @foreach ($products as $item)
                    <div class="col-md-3">
                        <div class="big-box-news">
                            <div class="img-news">

                            @if(count($item->getImage) >0)
                        
                               {{-- lấy 1 tâm ra à 1 tam ngau nhien phai ko tấm đầu tiên ok  --}}
                            <img src="{{url('/')}}{{ $item->getImage[0]->DUONGDAN }}" class="img-fluid" alt="Thịt ba chỉ">
                            @endif
                                <span>New</span>
                                <div class="hover-news">
                                <a href="/addcart?ID_SP={{$item->ID_SP}}&SOLUONG=1"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</a>
                                    <a href="/product?id={{$item->ID_SP}}" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                                </div>
                            </div>
                            <div class="text-news">
                                <div class="text-top">
                                <a href="single.html" class="h5">{{$item->TEN_SP}}</a>
                                    <p class="curren">
                                        <span>{{number_format($item->GIA_SP)}} <small>vnđ</small></span><br/>
                                        
                                    </p>
                                    
                                </div>
                                <div class="text-top">
                                <a href="/daily/{{$item->ID_DAILY}}" class="h5" style="font-size:14px;">Đại lý: {{$item->TEN_DAILY}}</a>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                @endforeach
                
              
            </div>

            <div class="row tab-pane fade" id="hot">
                <h3>Nổi bật</h3>
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/vegetables/ca-chua.jpg" class="img-fluid" alt="Cà chua">
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Cà chua</a>
                                <p class="curren">
                                    <span>$ 140.5</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/vegetables/chanh.jpg" class="img-fluid" alt="Cà chua">
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Chanh</a>
                                <p class="curren">
                                    <span>$ 250</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/vegetables/dau.jpg" class="img-fluid" alt="Dâu tây">
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Dâu tây</a>
                                <p class="curren">
                                    <span>$ 310</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/meat/heo.jpg" class="img-fluid" alt="Thịt nạc heo">
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i>> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Thịt nạc heo</a>
                                <p class="curren">
                                    <span>$ 140</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/meat/ba-chi.jpg" class="img-fluid" alt="Thịt ba chỉ">
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">thịt ba chỉ</a>
                                <p class="curren">
                                    <span>$ 175</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/cereals/dau-do.jpg" class="img-fluid" alt="Đậu đỏ"></a>
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Đậu đỏ</a>
                                <p class="curren">
                                    <span>$ 250</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/cereals/lua-mi.jpg" class="img-fluid" alt="Lúa mì"></a>
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Lúa mì</a>
                                <p class="curren">
                                    <span>$ 215.5</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/cereals/dau-den.jpg" class="img-fluid" alt="Đậu đen"></a>
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Đậu đen</a>
                                <p class="curren">
                                    <span>$ 225</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row tab-pane fade" id="sale">
                <h3>Bán chạy nhất</h3>
                
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/meat/ba-chi.jpg" class="img-fluid" alt="Thịt ba chỉ">
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">thịt ba chỉ</a>
                                <p class="curren">
                                    <span>$ 175</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/vegetables/ca-chua.jpg" class="img-fluid" alt="Cà chua">
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Cà chua</a>
                                <p class="curren">
                                    <span>$ 140.5</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/meat/heo.jpg" class="img-fluid" alt="Thịt nạc heo">
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i>> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Thịt nạc heo</a>
                                <p class="curren">
                                    <span>$ 140</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/vegetables/chanh.jpg" class="img-fluid" alt="Cà chua">
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Chanh</a>
                                <p class="curren">
                                    <span>$ 250</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/cereals/dau-den.jpg" class="img-fluid" alt="Đậu đen"></a>
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Đậu đen</a>
                                <p class="curren">
                                    <span>$ 225</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/vegetables/dau.jpg" class="img-fluid" alt="Dâu tây">
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Dâu tây</a>
                                <p class="curren">
                                    <span>$ 310</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/cereals/dau-do.jpg" class="img-fluid" alt="Đậu đỏ"></a>
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Đậu đỏ</a>
                                <p class="curren">
                                    <span>$ 250</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="big-box-news">
                        <div class="img-news">
                            <img src="images/slide/cereals/lua-mi.jpg" class="img-fluid" alt="Lúa mì"></a>
                            <span>New</span>
                            <div class="hover-news">
                                <button type="button" class="add-to-cart"><i class="fas fa-shopping-basket"></i> Thêm vào giỏ</button>
                                <a href="single.html" title="Chi tiết"><i class="far fa-eye"></i> Chi tiết</a>
                            </div>
                        </div>
                        <div class="text-news">
                            <div class="text-top">
                                <a href="single.html" class="h5">Lúa mì</a>
                                <p class="curren">
                                    <span>$ 215.5</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>