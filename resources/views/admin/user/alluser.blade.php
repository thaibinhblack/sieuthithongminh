<div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">TẤT CẢ ĐẠI LÝ</h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- BASIC TABLE -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">THÔNG TIN ĐẠI LÝ</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    
                                    <tr>
                                        <th>#</th>
                                        <th>USERNAME</th>
                                        <th>ĐẠI LÝ</th>
                                        <th>EMAIL</th>
                                        <th>SĐT</th>
                                        <th>ĐC</th>
                                        <th>Tác Vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count = 1; ?>
                                        @foreach ($accounts as $account)
                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{$account->USERNAME}}</td>
                                                <td>{{$account->TEN_DAILY}}</td>
                                                <td>{{$account->EMAIL}}</td>
                                                <td>{{$account->SDT}}</td>
                                                <td>{{$account->DIACHI_DAILY}}</td>
                                                <td>
                                                <button class="btn-tacvu"  data-toggle="modal" data-target="#infodaily" value="{{$account->ID_DAILY}}"><span class="lnr lnr-eye"></span></button>
                                                </td>
                                                
                                                <?php $count+=1; ?>
                                            </tr>
                                        @endforeach
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END BASIC TABLE -->
                </div>
               
            </div>
           
        </div>
    </div>
    <div class="modal" id="infodaily">
            <div class="modal-dialog">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title"></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="POST" action="/daily/update">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- Modal body -->
                <div class="modal-body">
                    
                        
                    
                </div>
          
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" >CẬP NHẬT</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
              </div>
    </div>