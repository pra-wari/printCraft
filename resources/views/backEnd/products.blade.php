<div class="main-content">
    <div class="container-fluid">
        <button class="btn btn-success add"><span class="fa-icon fa fa-plus"></span>&nbsp;New Product</button><br/><br/>
        <div class="row col-sm-12 show_head show_products">
            <div class="col-sm-2"><b>Image</b></div>
            <div class="col-sm-4"><b>Title</b></div>
            <div class="col-sm-2"><b>Price</b></div>
        </div>
        @foreach($products as $product)
            <div class="row col-sm-12 show_products {{$product->id}}">
                <div class="col-sm-2">
                    <img src="storage/products/{{$product->image}}" height="100" width="150"/>
                </div>
                <div class="col-sm-4">
                    <h4>{{$product->title}}</h4>
                </div>
                <div class="col-sm-2" style="overflow:hidden">
                    ${{$product->price}}
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-info manage" value="{{$product->id}}">Manage</button>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-danger del" value="{{$product->id}}">Delete</button>
                </div>
            </div>
            <form class="update update_{{$product->id}}"  action="update/product/{{$product->id}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Product Title:</label>
                    <input type="text" name="title" class="form-control" value="{{$product->title}}">
                </div>
                <div class="form-group">
                    <label for="image">Select product image:</label>
                    <input type="file" name="image" accept="image/*">
                </div>
               
                <div class="form-group">
                    <label for="price">Product price</label>
                    <input type="number" name="price" class="form-control" value="{{$product->price}}">
                </div>
                <input type="submit" class="btn btn-info" value="UPDATE" style="float:right;">
            </form>
        @endforeach
         
        
        <form id="upload"  action="upload/product" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Product Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Enter product title">
            </div>
            <div class="form-group">
                <label for="title">Select product image:</label>
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <label for="price">Product price</label>
                <input type="number" name="price" class="form-control">
            </div>
            <input type="submit" class="btn btn-info" value="UPLOAD" style="float:right;">
        </form>
    </div>
    <script>
        $(document).ready(function(){
            
            $(".update, #upload").hide();
            
            $(".manage").on("click",function(){
                var x = $(this).val();
                $(".show_head, .update, .show_products").hide();
                $(".update_"+x).show();
            });

            $(".del").on('click',function(){
                var isDel = confirm("It will be deleted permanently.");
                if(isDel){
                    var x = $(this).val();
                    $("."+x).hide();
                    $.ajax({
                        type:"post",
                        url:"delete/product",
                        data:{"id":x},
                        headers:{
                            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                        },
                        success:function(data){
                            alert("deleted successfully");
                        },
                        error:function(){
                            alert("Error");
                        }
                    });
                }
                
              
            });

            $(".add").on("click",function(){
                $(".update").hide();
                $(".show_head, .show_products").hide();
                $("#upload").show();
            });
        });
    </script>
</div>