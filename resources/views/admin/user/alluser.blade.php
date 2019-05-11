<div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">USER</h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- BASIC TABLE -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Basic Table</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    
                                    <tr>
                                        <th>#</th>
                                        <th>USERNAME</th>
                                        <th>EMAIL</th>
                                        <th>QUYEN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count = 1; ?>
                                        @foreach ($accounts as $account)
                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{$account->USERNAME}}</td>
                                                <td>{{$account->EMAIL}}</td>
                                                <td>
                                                    @if($account->QUYEN == 0)
                                                    USER
                                                    @else
                                                    ADMIN
                                                    @endif
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