@extends('dashboard')
@section('content')
<div class="wrapperdiv">
    <div class="formcontainer">
        <div class="row">
           <div class="col-lg-12 margin-tb">
                 <div class="pull-left">
                 <h1>Add new product</h1>
                 </div>
            </div>
          </div>
          <br><br>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
          @csrf 

            <!-- Item Name -->
            <div class="row">
              <div class="col-lg-12 margin-tb">
                <div class="form-group row">
                 <label for="itamname" class="col-sm-2 col-form-control">ItemName</label>
    
                <div class="col-sm-10">
                   <input type="text" name="itemname" id="itemname"class="form-control"
                  />
                </div>
                </div>
                <br><br>
                <div class="form-group row">
                 <label for="gram" class="col-sm-2 col-form-control">gram</label>
    
                <div class="col-sm-10">
                <select name="gram" id="gram">

                  <option value="">Select Gram</option>
                   @if($gram)
                  @foreach($gram as $gram)
                  <option value="{{$gram}}">{{$gram}}</option>
                  @endforeach
                   @endif

                </select>
                </div>
                </div>
       <br><br>

       <div class="form-group row">
                 <label for="price" class="col-sm-2 col-form-control">price</label>
    
                <div class="col-sm-10">
                   <input type="currency" name="price" id="price"class="form-control" value="RS."
                  />
                </div>
</div>
                <br><br>

        
        <div class="form-group row">
           <label for="poster" class="col-sm-2 col-form-control">Upload Photo:</label>
        
        <div class="col-sm-10">
          <input type="file" name="poster" id="poster" class="form-control"/>
        </div>
        </div>
        <br><br>

        

        
        <div class="form-group row">
         <div class="col-sm-2"></div>
         <divclass="col-sm-10">
         <button 
         type="submit" 
         name="submit"
         id="submit"
         class="btn btn-primary">
         Submit</button>
        </div>
    </div>
</div>
</form>

       

    
@endsection 