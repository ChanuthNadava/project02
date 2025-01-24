<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ajax curd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <script type="module" src="admin/js/sb-admin-2"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
  <div class="wrapperdiv">
  <div class="formcontainer">

<div class="modal fade ajax-model" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="model-title"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<form id="ajaxform">
      <div class="modal-body">

        
        <div class="row">
              
            <div class="form-group row">
                 <label for="employeename" class="col-sm-2 col-form-control">E_Name</label>
            </div>
            <div class="col-sm-10">
                   <input type="text" name="employeename" class="form-control"/>
                   <span id="nameError" class="text-denger  error-messages" ></span>
            </div>
                <br><br>
            
                <div class="form-group row">
                 <label for="itamname" class="col-sm-2 col-form-control">age</label>
            </div>
            <div class="col-sm-10">
                   <input type="text" name="age"id="age"class="form-control"/>
                   <span id="ageError" class="text-denger error-messages"></span>

            </div>
                <br><br>

                <div class="form-group row">
                    <label for="department" class="col-sm-2 col-form-control">Department</label>
                </div>
    
                <div class="col-sm-10">
                <select name="department"class="form-control" >

                  <option value="">Select departmrent</option>
                   @if($department)
                  @foreach($department as $department)
                  <option value="{{$department}}">{{$department}}</option>
                  @endforeach
                   @endif

                   </select>
                   <span id="ageError" class="text-denger error-messages"></span>
                </div>
                
       <br><br>

        </div>
                



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveBtn"></button>
      </div>
    </div>
  </div>
</div>
</form>

    <div class ="row">
        <div class="col-md-6 offset-3" style="margin-top:80px">
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD Employee</button>
        </div>
    </div>
</div>
<div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

            $('#model-title').html('create Employee');
            $('#saveBtn').html('Save Employee');
            var form=$('#ajaxform')[0];
            $('#saveBtn').click(function(){

              $('.error-messages').html('');
                var formData = new formData(form);   
                
              
                  $.ajax({
                      url: '{{route("employee.store")}}',
                      method:'post',
                      processData:false, 
                      contentType:false,
                      data: formData,

                      success:function(response){
                        $('#ajax-model').model('hide');
                        if(response)
                        swal("success!", response.success, "success");
    
                      },
                      error: function(error){
                          if(error){
                            console.log(error.responseJSON.errors.name)
                            $('#nameError').html(error.responseJSON.errors.employeename);
                            $('#ageError').html(error.responseJSON.errors.age);


                            
                          }
                      }
                  });

        })

    });
    </script>
</body>
</html>