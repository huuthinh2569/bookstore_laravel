@extends("layout.master")
@include('include.header')
@section('content')
<div class="container">
  <div class="row">
    @if (count($books) > 0)
    @foreach ($books as $book)
    <div class="product-item col-lg-3">
      <div>
        <div class="img-product">
<<<<<<< HEAD
          <img src="\frontend\images\{{$book->book_img}}">
=======
          <img src="{{asset('/../storage/app/avatar/'.$book->book_img)}}">
>>>>>>> QThinh
        </div>
        <div class="details-product">
          <h3><a href="{{ 'books/'.$book->book_id }}">{{$book->book_name}}</a></h3>
          <h5 class="price-product">{{$book->book_price}} VNĐ</h5>
        </div>
      </div>
      <div class="button-group">
<<<<<<< HEAD
        <a href="{{ 'cart/'.$book->book_id }}" class="add-cart" id="{{ $book->book_id }}"><i class="fas fa-cart-plus"></i></a>
        <button class="quickview"><i class="far fa-eye"></i></button>
        <button class="wishlist"><i class="far fa-heart"></i></button>
=======
        <a href="{{ 'cart/'. $book->book_id }}" class="add-cart" id="{{ $book->book_id }}"><i class="fas fa-cart-plus"></i></a>
        <a class="quickview"><i class="far fa-eye"></i></a>
>>>>>>> QThinh
      </div>
    </div>
    @endforeach
    @else
    <h3>No book found.</h3>
    @endif
  </div>
</div>
@endsection