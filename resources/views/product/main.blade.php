<section class="single">
        <div class="container">
            <div class="row">
                @if(Session()->has('success'))
                    <p style="text-align:center;"> {{Session()->get('success')}}</p>
                @endif
                <h3 class="title-direction">
                    <a href="/">TRANG CHỦ</a>
                    <span>/</span>
                <a href="">{{$product->TEN_SP}}</a>
                </h3>
            </div>
            <div class="row">
                <div class="col-md-6 single-image">
                        
                        <div class="row">
                                <div id="ninja-slider">
                                    <div class="slider-inner">
                                        <ul>
                                            @foreach ($product->getImage as $image)
                                            <li>
                                                <a class="ns-img" href="{{$image->DUONGDAN}}"></a>
                                                
                                            </li>
                                            @endforeach
                                           
  
                                        </ul>
                                        <div class="fs-icon" title="Phóng to/Đóng"></div>
                                    </div>
                                </div>
                                
                            </div>
                    {{-- <img src="{{$product->getImage[0]->DUONGDAN}}""> --}}
                </div>
                <div class="col-md-6 single-text">
                    <h1>{{$product->TEN_SP}}</h1>
                    @if($product->NGAYKT_KM)
                        <input type="hidden" id="date" value="{{$product->NGAYKT_KM}}" />
                        <span style="color: red" id="demo"></span>
                    @endif
                    {!!html_entity_decode($product->MOTA)!!}
                    
                    <div class="single-current">
                        @if($product->GIA_GIAM)
                        <h6>Giá cũ: <span>{{$product->GIA_SP}} <small>vnđ</small></span></h6><br/>
                        <h6>Giá mới: <span>{{ $product->GIA_SP - $product->GIA_GIAM}} <small>vnđ</small> /{{$product->DONVI_SP}}</span></h6>
                        @else
                            <h6>Giá cũ: <span> {{$product->GIA_SP}} <small>vnđ</small></span></h6>
                        @endif
                    
                    </div>
                    <form class="weight" method="GET" action="addcart">
                        @if($product->DONVI_SP == 'KG')
                        <input name="SOLUONG"  class="weight-left" style="width:150px;font-size:18px;" type="number" value="0.5"  step="0.5"/>
                        @else
                        <input name="SOLUONG"  class="weight-left" style="width:150px;font-size:18px;" type="number" value="1"  step="1"/>
                        @endif   
                        <input type="hidden" name="ID_SP" value="{{$product->ID_SP}}" />
						<button type="submit" class="weight-submit">Thêm vào giỏ</button>
                    </form>

                    <div class="single-categories">
                        
                    <h4>Categories: <a href="">{{$product->LOAI_SAN_PHAM}}</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
    // Set the date we're counting down to
    var $date = document.getElementById('date').value;
    var countDownDate = new Date($date).getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
        // Get today's date and time
        var now = new Date().getTime();
        
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        
        // If the count down is over, write some text 
        if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>