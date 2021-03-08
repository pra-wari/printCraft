<div class="main-content">
    <div class="container-fluid">
        <button class="btn btn-success add"><span class="fa-icon fa fa-plus"></span>&nbsp;New Testimonial</button><br/><br/>
        <div class="row show_testi">
            <div class="col-sm-2"><b>Name</b></div>
            <div class="col-sm-2"><b>Image</b></div>
            <div class="col-sm-4"><b>Message</b></div>
        </div>
        @foreach($testimonials as $testimonial)
        <div class="row show_testi {{$testimonial->id}}">
            <div class="col-sm-2">{{$testimonial->name}}</div>
            <div class="col-sm-2">
                <img src="storage/testimonials/{{$testimonial->image}}" height="100" alt="Image">
            </div>
            <div class="col-sm-4" style="overflow:hidden;">{{$testimonial->description}}</div>
            <div class="col-sm-2">
                <button class="btn btn-info manage" value="{{$testimonial->id}}">Manage</button>
            </div>
            <div class="col-sm-2">
                <button class="btn btn-danger del" value="{{$testimonial->id}}">Delete</button>
            </div>
        </div>
        <form class="update_testi update_testi_{{$testimonial->id}}" action="update/testimonial/{{$testimonial->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name:</label>
                <input name="name" type="text" class="form-control" value="{{$testimonial->name}}">
               
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" class="form-control" rows="10">{{$testimonial->description}}</textarea>
            </div>
            <input class="btn btn-info" type="submit" name="submit" value="UPDATE" style="float:right;">
        </form>
        @endforeach
        <form class="upload_testi" action="upload/testimonial" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name:</label>
                <input name="name" type="text" class="form-control" placeholder="Enter name" required>
               
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" accept="image/*">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" class="form-control" rows="10" required></textarea>
            </div>
            <input class="btn btn-info" type="submit" name="submit" value="Upload" style="float:right;">
        </form>
    </div>
    <script>
        $(document).ready(function(){
            
            $(".upload_testi").hide();
            $(".update_testi").hide();
            $(".del").on('click',function(){
                var isDel = confirm("It will be deleted permanently");
                if(isDel){
                    var x = $(this).val();
                    $("."+x).hide();
                    $.ajax({
                        type:"post",
                        url:"delete/testimonial",
                        data:{'id':x},
                        headers:{
                            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(){
                            alert("Deleted Successfully");
                        },
                        error:function(){
                            alert("Error");
                        }
                    });
                }
            });
            $(".manage").on('click',function(){
                $(".update_testi").hide();
                $(".show_testi").hide();
                $(".upload_testi").hide();
                var x = $(this).val();
                $(".update_testi_"+x).show();
            });
            $(".add").on('click',function(){
                $(".show_testi").hide();
                $(".update_testi").hide(); 
                $(".upload_testi").show();
            });
        });
    </script>
</div>