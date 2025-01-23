@extends('dashboard')

@section('content')

<div class="wrapperdiv">
@if ($message =Session::get('success'))
  <div class="alert alert-success text-center">{{$message}}</div>
  @endif
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Item Name</th>
      <th scope="col">gram</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  
  @if($products)
  <tbody>
    @foreach($products as $product)
    <tr>
    
      <td class="align-middle"><img src="{{asset('upload/'.$product->poster)}} " class="img-thumbnail"/></td>
      <td class="align-middle">{{$product->itemname}}</td>
      <td class="align-middle">{{$product->gram}}</td>
      <td class="align-middle">{{$product->price}}</td>
      <td class="align-middle">
      <form method="post" action ="{{route('product.destroy',$product->id)}}">.
      @csrf
      @method('DELETE')
        <a href="{{route('product.show',$product->id)}}"class="btn btn-info">Show</a>
        <a href="{{route('product.edit',$product->id)}}"class="btn btn-primary">edit</a>
        
        <input type="submit" class="btn btn-danger btn-sm" value="DELETE"/>
</form>

      </tr>
    @endforeach     
  </tbody>
  
  @endif
</table>
    <div class="mx-auto">
    {!! $products->links()!!}
</div>
      </div>
    </div>

@endsection

