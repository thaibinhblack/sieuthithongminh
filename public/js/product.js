$(document).ready(function() {
    $('.option-product').change(function()
    {
       var $value =  $(this).children('option:selected').val();
       if($value == 1)
       {
            $('.checkimage').css('opacity', 1);
            $('.option-check').change(function(){
                const $value = $(this).children('option:selected').val();
                if($value == 1)
                {
                    $('.checkimage').prop('checked','checked');
                    const checked = $('.checkimage');
                   
                    console.log(array_check);
                }
            })
       }
       else
       {
        $('.checkimage').css('opacity', 1);
       }
    })
    $(document).on('click','.btn-delete',function(e){
        const $value = $(this).val();
        $.ajax({
            type:'GET',
            url:'./api/product/hinhanhsanpham/'+$value,
            success:function(data) {
               console.log(data);
               location.reload();
            }
         });
    })
    $('.option-khuyenmai').change(function(){
        const $value = $(this).children('option:selected').val();
        const $html = "<label class='label-control'> Hình thức khuyến mãi </label><select class='form-control option-hinhthuc' name='HINHTHUC'><option value='0'>SALE</option><option value='1'>QUÀ TẶNG</option><option value='2'>KHUYẾN MÃI VÀ QUÀ TẶNG</option></select><div class='box-hinhthuc'><label class='label-control'>Khuyến mãi</label><input class='form-control' type='number' step='500' value='0' name='GIAMGIA' /></div>";
        const $html_date = "<label class='label-control'>Ngày kết thúc</lable><input name='NGAY_KT' type='date' class='form-control'>";
        if($value == 1)
        {
            $('.box-km').html($html);
            $('.box-hinhthuc').html($html_date)
        }
        else
        {
            $('.box-km').html('');
            $('.box-hinhthuc').html('');
        }
    })
    $(document).on('change','.option-hinhthuc',function(){
        const $data = [];
        const $ID_DAILY = $('.ID_DAILY').val();
        var $value =  $(this).children('option:selected').val();
        $html= "<label class='label-control'> Sản Phẩm khuyến mãi </label>";
            
        $.ajax({
            type:'GET',
            url:'./api/product/'+$ID_DAILY,
            success:function(data) {
                
                $html += "<select class='form-control option_sp' name='ID_SAN_SP'>";
                data.forEach(element=>{
                    $html += "<option value='"+element['ID_SP']+"'>";
                    $html += element['TEN_SP'];
                    $html += "</option>";
                    console.log($html);
                 })
                 $html +="</select>";
                var $html2 = "<label class='label-control'>Khuyến mãi</label><input class='form-control' type='number' step='500' value='0' name='GIAMGIA' />";
                var $html_date= "<label class='label-control'>Ngày kết thúc</lable><input name='NGAY_KT' type='date' class='form-control'>";
                if($value == 1)
                {
                    
                    $('.box-hinhthuc').html($html+$html_date);
                    
                }
                else if($value == 2)
                {
                    $('.box-hinhthuc').html($html+$html2+$html_date)
                }
                else
                {
                    $('.box-hinhthuc').html($html2+$html_date);
                }
            }
         });
        
        
        
    })

    $(document).on('click','.btn-filter',function(){
        const $value = $('.selector>option:selected').val();
        if($value == 1)
        {
            $.ajax({
                type:'GET',
                url:'./api/product/'+$value+'?hinhthuc=giamgia',
                success:function(data) {
                    var $data = '<table class="table"><thead><tr>'
                        $data += '<th class="id_sanpham"><span class="name">#</span><input class="check checkall" type="checkbox" value="-1"  style="display:none;"/></th>'
                        $data +=  '<th>TÊN SẢN PHẨM</th>';
                        $data +=  '<th>SỐ LƯỢNG</th>';
                        $data +=  '<th>GIÁ SP</th>';
                        $data +=  '<th>SALE</th>';
                        $data +=  '<th>TIME</th>';
                        $data +=  '<th>ACTIONI</th></tr>'
                        data.forEach(element => {    
                            $data +=   '<tr>';
                            $data +=   '<th class="id_sanpham">';
                            $data +=   '<span class="name">'+element['ID_SP']+'</span></th>';
                            $data +=   '<th>'+element['TEN_SP']+'</th>';
                            $data +=   '<th>'+element['SOLUONG']+'</th>';
                            $data +=   '<th>'+element['GIA_SP']+'/'+element['DONVI_SP']+'</th>';
                            $data +=   '<th>'+element['GIA_GIAM']+'</th>';
                            $data +=   '<th>'+element['created_at']+'</th>';
                            $data +=   '<th><a href="/admin?page=product&action=chitiet&id='+element['ID_SP']+'"><span class="lnr lnr-eye"></span></a></th>'

                            $data +=    '</tr>';
                        })
                        $data += '</thead><tbody></table>';
                        $('.panel-body').html($data);
                   console.log(data);
                   //location.reload();
                }
             });
        }
    })
  

})