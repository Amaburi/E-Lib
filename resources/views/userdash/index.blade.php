@extends('__layouts.user')

@section('title', 'User')

@section('page-content')
<section id="product1" class="section-p1">
    
    <div style="width: 600px;">
        <form class="d-flex" action="{{ route('search') }}" method="GET">
            <input class="form-control me-2 rounded-pill" style="background: rgba(255, 255, 255, 0.15);" type="text" name="query" placeholder="Cari  buku" aria-label="Cari  buku" aria-describedby="basic-addon2" >
        </form>
    </div>
    <div class="pro-container">
        @forEach($books as $book)
         <div class="pro">
            <h4 class="no-highlight" name="spanname">{{$book->name}}</h5>
            <a href="#"><img src="{{ asset('storage/' . $book->image)}}" alt="" class="thumbnail"></a>
            <div class="des">
                <span class="span1">Book Code :</span>
                <span class="span2">{{$book->code}}</span>
            </br>
                <span class="span1">Writer :</span>
                <span class="span2">{{$book->writer}}</span>
            </br>
                <span class="span1">Publisher :</span>
                <span class="span2">{{$book->publisher}}</span>
            </br>
                <span class="span1">Year released :</span>
                <span class="span2">{{$book->year}}</span>
            </br>
                <span class="span1">Stock In Library :</span>
                <span class="span2">{{$book->stock}}</span>
            </div>
        </div>
        @endforeach
     </div>
</section>
@endsection