$(document).ready(function() {
	
    var readURL = function(input) {
        if (input.files && input.files[0]) {
           
        var start = 0;        
        while(input.files[start] != undefined)
        {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
                var data = "<div class='col-md-6 image-product'><img class='image-product' src='"+e.target.result+"'/></div>"; 
                $('.list-pic').append(data)
            }
            reader.readAsDataURL(input.files[start]);
            start++;
        }
        }
    }
   
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
    $(document).on('click','.btn-tacvu',function(){
        $value = $(this).val();
        $.ajax({
            type:'GET',
            url:'/account/'+$value,
            success:function(data) {
                var result = '';
                result += "<div class='group-info row'><div class='col-md-2'><label class='label-control'>USERNAME</label></div><div class='col-md-10'><input name='USERNAME' class='form-control' type='text' value='"+data["USERNAME"]+"' placeholder='USERNAME'/></div></div>";
                result += "<input name='ID_DAILY' class='form-control' type='hidden' value='"+data["ID_DAILY"]+"'/>";
                result += "<div class='group-info row'><div class='col-md-2'><label class='label-control'>TÊN ĐẠI LÝ</label></div><div class='col-md-10'><input name='TEN_DAILY' class='form-control' type='text' value='"+data["TEN_DAILY"]+"' placeholder='TÊN ĐẠI LÝ'/></div></div>";
                result += "<div class='group-info row'><div class='col-md-2'><label class='label-control'>EAMIL</label></div><div class='col-md-10'><input name='EMAIL' class='form-control' type='text' value='"+data["EMAIL"]+"' placeholder='EMAIL'/></div></div>";
                result += "<div class='group-info row'><div class='col-md-2'><label class='label-control'>ĐỊA CHỈ</label></div><div class='col-md-10'><input name='DIACHI_DAILY' class='form-control' type='text' value='"+data["DIACHI_DAILY"]+"' placeholder='ĐỊA CHỈ'/></div></div>";
                result += "<div class='group-info row'><div class='col-md-2'><label class='label-control'>SDT</label></div><div class='col-md-10'><input name='SDT' class='form-control' type='text' value='"+data["SDT"]+"' placeholder='SĐT'/></div></div>";
                if(data["QUYEN"] == 1){
                    result += "<div class='group-info row'><div class='col-md-2'><label class='label-control'>QUYỀN</label></div><div class='col-md-10'><select name='QUYEN' class='form-control'><option value='1' selected>ĐẠI LÝ</option><option value='2'>ADMIN</option></select></div></div>";
                }
                else
                {
                    result += "<div class='group-info row'><div class='col-md-2'><label class='label-control'>QUYỀN</label></div><div class='col-md-10'><select name='QUYEN' class='form-control'><option value='1'>ĐẠI LÝ</option><option selected value='2'>ADMIN</option></select></div></div>";
                }
                $('.modal-body').html(result);
            }
         });
    })
    var active = 0;
    // $(document).on('click','.btn-filter',function(){
    //     var value_option = $('.selector>option:selected').val();
    //     var value_theloai = $('.selector_theloai>option:selected').val();
        
    //     if(value_option == 1 && active == 0)
    //     {
    //         active = 1;
    //         $('.id_sanpham .name').toggle();
    //         $('.check').toggle();
    //     }
    //     if(value_option == 0 && active == 1)
    //     {
    //         active = 0;
    //         $('.id_sanpham .name').toggle();
    //         $('.check').toggle();
    //     }

    // })
    $('#editor').summernote({
        height:300,
    });
    //check cat
    $('.check_cat').change(function(e){
        console.log(e.target.checked);
        if(e.target.checked == false)
        {
            $('check_cat:first-child').attr('checked');
            
        }
        else
        {
            //console.log($('.check_cat').attr('checked',false));
            $('.check_cat').prop('checked',false);
            $(this).prop('checked','checked');
        }
    })
});