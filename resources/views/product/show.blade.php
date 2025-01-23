@extends('dashboard')

@section('content')

<div class="wrapperdiv">
    @if($product)
    <div class="row pb-5">
<div class="col-4"></div>
<div class="col-4">
<div class="card" style="width: 20rem;">
  <img src="{{asset('uploads/'.$product->poster)}}" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">{{$product->itemname}}</h5>
    <p class="card-text">{{$product->gram}} | {{$product->price}}</p>
    
  </div>
</div>
</div>
<div class="col-4"></div>
</div>
    @endif
</div>
@endsection 
