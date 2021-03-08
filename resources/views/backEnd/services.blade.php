<div class="main-content">
<!-- <script>
    function readURL1(id) {

        var input = $(this);
        
        
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $("#preview_"+id).attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
</script> -->
    <div class="container-fluid">
            <button class="btn btn-success add"><span class="fa-icon fa fa-plus"></span>&nbsp;New Service</button><br/><br/>
            <div class="row show_services">
                <div class="col-sm-2"><b>Image</b></div>
                <div class="col-sm-2"><b>Title</b></div>
                <div class="col-sm-4"><b>Description</b></div>
            </div>
            @foreach($services as $service)
            <div class="row  show_services {{$service->id}}">
                <div class="col-sm-2">
                    <img src="storage/services/{{$service->image}}" height="100" width="100">
                </div>
          
                <div class="col-sm-2">
                    <h4>{{$service->title}}</h4>
                </div>
               
            
                <div class="col-sm-4" style="overflow:hidden;">
                    {{$service->description}}
                </div>
          
          
            
                <div class="col-sm-2">
                    <button class="btn btn-info manage" value="{{$service->id}}">Manage</button>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-danger del" value="{{$service->id}}">Delete</button>
                </div>
            
            </div>
            
            
            
            <form class="update_{{$service->id}} update" action="update/service/{{$service->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2">
                            <label for="title">Title : </label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="title" class="form-control" value="{{$service->title}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2">
                            <label for="description">description : </label>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="description" rows="5">{{$service->description}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2">
                            <label for="image">Image: </label>
                        </div>
                        <div class="col-sm-6">
                            <input type="file" name="image" accept="image/*">
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2">
                            <label for="image">Preview: </label>
                        </div>
                        <div class="col-sm-6">
                            <img id="preview_{{$service->id}}" class="img img-thumbnail" src="storage/services/{{$service->image}}" alt="Service Image" height=200 width="200">
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-2">
                            <input type="submit" name="submit" class="btn btn-success" value="UPDATE">
                        </div>
                    </div>
                
                </form>
            @endforeach
           
            

        <form id="form-data" action="upload/service" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <label for="title">Title : </label>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="title" class="form-control" placeholder="Enter service title">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <label for="description">description : </label>
                </div>
                <div class="col-sm-6">
                    <textarea class="form-control" name="description"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <label for="image">Image: </label>
                </div>
                <div class="col-sm-6">
                    <input type="file" id="imgInp2" name="image" accept="image/*">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <label for="image">Preview: </label>
                </div>
                <div class="col-sm-6">
                    <img id="blah2" class="img img-thumbnail" src="assets/img/service/1.jpg" alt="Service Image" height=200 width="200">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-2">
                    <input type="submit" name="submit" class="btn btn-success" value="Upload">
                </div>
            </div>
            
        </form>
        
    </div>
    <script>
        $(document).ready(function(){
            $("#form-data").hide();
            $(".update").hide();
            // function readURL1(input) {
            //     var x = $(this).val();
            //     alert(x);
                
            //     if (input.files && input.files[0]) {
            //         var reader = new FileReader();
                    
            //         reader.onload = function(e) {
            //             $('#blah1').attr('src', e.target.result);
            //         }
                    
            //         reader.readAsDataURL(input.files[0]);
            //     }
            // }
            function readURL2(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function(e) {
                        $('#blah2').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                }
            }

            // $("#imgInp1").change(function() {
            //     readURL1(this);
            // });
            $("#imgInp2").change(function() {
                readURL2(this);
            });
            
            $(".add").on('click',function(){
                $(".show_services").hide();
                $(".update").hide();
                $("#form-data").show();
            });


            $(".del").on('click',function(){
                var isDel = confirm("It will be deleted permanently.");
                if(isDel){
                    var x = $(this).val();
                    $("."+x).hide();
                    $.ajax({
                        type:"post",
                        url:"delete/service",
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

            $(".manage").on('click',function(){
                var id = $(this).val();
                $(".show_services").hide();
                $(".update_"+id).show();

                
            });

            // $("#form-data").submit(function(event){
            //     event.preventDefault();
                
            //      var formData = new FormData(this);
                 
              

            //     $.ajax({
            //         type:"post",
            //         url:"api/upload/service",
            //         //async:false,
            //         cache:false,
            //         processData:false,
            //         contentType:false,
            //         data: {
            //             form
            //         },
            //         success:function(data){
            //            // alert("success");
            //         },
            //         error:function(){
            //             alert("error");
            //         }
            //     })
            // });

        });
        
    </script>
</div>