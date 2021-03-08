<div class="main-content">
    <div class="container-fluid">
        <div>
            <div class="row monthly">
                <div class="col-sm-2"><u><b>Monthly Price</b></u></div>
            </div>
            <div class="row monthly">
                <div class="col-sm-2"><b>Basic price</b></div>
                <div class="col-sm-3"><b>Standard price</b></div>
                <div class="col-sm-3"><b>Premium price</b></div>
            </div>
            <div class="row monthly">
                <div class="col-sm-2">{{$price[0]->basic}}</div>
                <div class="col-sm-3">{{$price[0]->standard}}</div>
                <div class="col-sm-3">{{$price[0]->premium}}</div>
                <div class="col-sm-2">
                    <button class="btn btn-info manage" value="1">UPDATE</button>
                </div>
            </div>
            <form class="update_monthly" action="update/prices/1" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="basic">Basic Plan:</label>
                    <input type="number" name="basic" class="form-control" value="{{$price[0]->basic}}">
                </div>
                <div class="form-group">
                    <label for="standard">Standard Plan:</label>
                    <input type="number" name="standard" class="form-control" value="{{$price[0]->standard}}">
                </div>
                <div class="form-group">
                    <label for="premium">Premium Plan:</label>
                    <input type="number" name="premium" class="form-control" value="{{$price[0]->premium}}">
                </div>
                <input type="submit" class="btn btn-info" value="UPDATE" style="float:right;">
            </form>
        </div>
        <div>
            <div class="row yearly">
                <div class="col-sm-2"><u><b>Yearly Price</b></u></div>
            </div>
            <div class="row yearly">
                <div class="col-sm-2"><b>Basic price</b></div>
                <div class="col-sm-3"><b>Standard price</b></div>
                <div class="col-sm-3"><b>Premium price</b></div>
            </div>
            <div class="row yearly">
            <div class="col-sm-2">{{$price[1]->basic}}</div>
                <div class="col-sm-3">{{$price[1]->standard}}</div>
                <div class="col-sm-3">{{$price[1]->premium}}</div>
                <div class="col-sm-2">
                    <button class="btn btn-info manage" value="2">UPDATE</button>
                </div>
            </div>
            <form class="update_yearly" action="update/prices/2" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="basic">Basic Plan:</label>
                    <input type="number" name="basic" class="form-control" value="{{$price[1]->basic}}">
                </div>
                <div class="form-group">
                    <label for="standard">Standard Plan:</label>
                    <input type="number" name="standard" class="form-control" value="{{$price[1]->standard}}">
                </div>
                <div class="form-group">
                    <label for="premium">Premium Plan:</label>
                    <input type="number" name="premium" class="form-control" value="{{$price[1]->premium}}">
                </div>
                <input type="submit" class="btn btn-info" value="UPDATE" style="float:right;">
            </form>
        </div>
        
        {{-- <form class="update" action="update/prices" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="basic">Basic Plan:</label>
                <input type="number" name="basic" class="form-control" value="{{$price[0]->basic}}">
            </div>
            <div class="form-group">
                <label for="standard">Standard Plan:</label>
                <input type="number" name="standard" class="form-control" value="{{$price[0]->standard}}">
            </div>
            <div class="form-group">
                <label for="premium">Premium Plan:</label>
                <input type="number" name="premium" class="form-control" value="{{$price[0]->premium}}">
            </div>
            <input type="submit" class="btn btn-info" value="UPDATE" style="float:right;">
        </form> --}}
    </div>
    <script>
        $(document).ready(function(){
            //$(".monthly,.yearly").hide();

            $(".update_monthly,.update_yearly").hide();
            $(".manage").on('click',function(){
                $(".monthly,.yearly").hide();
                var x = $(this).val();
                if(x==1){
                    $(".update_monthly").show();
                }
                else{
                    $(".update_yearly").show();
                }
            });
        });
    </script>
</div>