@extends('__layouts.user')

@section('title', 'User')

@section('page-content')
<section id="product1" class="section-p1">
    <h2>Book Lists</h2>
    <a href="{{route('home')}}">Login</a>
     <div class="pro-container">
        @forEach($books as $book)
         <div class="pro">
             <h5 class="no-highlight">{{$book->name}}</h5>
            <a href="#"><img src="{{ asset('storage/' . $book->image)}}" alt="" class="thumbnail"></a>
            <div class="des">
                <span>Book Code :</span>
                <span>{{$book->code}}</span>
            </br>
                <span>Writer :</span>
                <span>{{$book->writer}}</span>
            </br>
                <span>Year released :</span>
                <span>{{$book->year}}</span>
            </div>
            <a href="#"><i class="fa fa-plus circle" aria-hidden="true" id="list" name="list"></i></a>
         </div>
        @endforeach
     </div>
</section>
@endsection