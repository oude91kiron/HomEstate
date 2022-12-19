@extends('layouts.front.login-site')
@section('content')
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active item-bg">
        <img src="https://via.placeholder.com/1200x400?text=Turkish Cetizenship" alt="Image">
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>      
      </div>

      <div class="carousel-item item-bg">
        <img src="https://via.placeholder.com/1200x400?text=preoperty Managment" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>

      <div class="carousel-item item-bg">
        <img src="https://via.placeholder.com/1200x400?text=preoperty Managment" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://via.placeholder.com/150x80?text=IMAGE" class="img-responsive " style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://via.placeholder.com/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
        <h3>Contact Us</h3>
       <ul>
            <li class="mb-2"><a href="">Adress: Istanbul-Turkey</a></li>
            <li class="mb-2"><a href=""></a>Phone: +905345546448</li>
            <li class="mb-2"><a href=""></a>Email: info@xample.com</li>
       </ul>
      </div>
      <div class="well">
      </div>
    </div>
  </div>
</div><br>

</div>

@endsection