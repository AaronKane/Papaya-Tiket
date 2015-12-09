@extends('master')
@section('logo')

    <div class="logo">
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" align="center">
    <h2>Papaya Ticket</h2>
    <a href=""><button class="btn btn-primary mdl-js-button mdl-js-ripple-effect mdl-shadow--2dp">Sign In</button></a>
    
    <a href=""><button class="btn btn-success mdl-js-button mdl-js-ripple-effect mdl-shadow--2dp">Sign Up</button></a>
    </div>
    <div class="col-md-4"></div>
    </div>
    </div>

@endsection
@section('content')

{!! HTML::style('css/custom.css') !!}

    <div class="container">

    <section class="event">
     <div class="row">
     <div class="mdl-grid">
            <div class="mdl-cell col-md-4 mdl-shadow--4dp">
              <div class="box-area" align="center">
                  <div class="box-area-icon">
                 <a href="www.google.com">{!! HTML::image('img/plus.png', 'facebook', array('class' => 'img-responsive mdl-shadow--2dp')) !!} </a>
                  </div>
                  <h3>Create Ticket</h3>
                  <div class="box-area-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</div>
              </div>
            </div>
            <div class="mdl-cell col-md-4 mdl-shadow--4dp">
              <div class="box-area" align="center">
                  <div class="box-area-icon">
                 <a href="www.google.com">{!! HTML::image('img/calendar-multiple.png', 'facebook', array('class' => 'img-responsive mdl-shadow--2dp')) !!} </a>
                 
                  </div>
                  <h3>View Event</h3>
                  <div class="box-area-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</div>
              </div>
            </div>
            <div class="mdl-cell col-md-4 mdl-shadow--4dp">
              <div class="box-area" align="center">
                  <div class="box-area-icon">
                 <a href="www.google.com"> {!! HTML::image('img/ticket.png', 'facebook', array('class' => 'img-responsive mdl-shadow--2dp')) !!} </a>
                  </div>
                  <h3>Get Ticket</h3>
                  <div class="box-area-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</div>
              </div>
            </div>
            

      </div>
      <div  class="col-md-2"></div>
      <div class="col-md-8 line"><div>
      </section>

            <!--popular event-->

      <section id="popularevent">

      <div class="row">
      <div class="col-md-12">

      <h3 align="center">Popular Event</h3>
      
      <div class="displayPE mdl-shadow--4dp">
      <h2 align="center">Display Items</h2>
      <div class="mdl-cell col-md-12 list mdl-shadow--4dp" >
      </div>
      <div class="mdl-cell col-md-12 list mdl-shadow--4dp">
      </div>
      <div class="mdl-cell col-md-12 list mdl-shadow--4dp">
      </div>
      </div>
      <!--backend processes for popular event-->
      <div  class="col-md-2"></div>
      <div class="col-md-8 line"><div>

        
      </section>

  <section id="famousevent">
  <div class="row">
  <div class="col-md-12">
  
  <h3 align="center">Famous Event</h3>

      <div id="demo">
        <div id="dayevent" class="owl-carousel mdl-shadow--4dp">
          <!--display for famous event-->
          <div class="item"><h3>Mon</h3>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p></div>
          <div class="item"><h1>2</h1></div>
          <div class="item"><h1>3</h1></div>
          <div class="item"><h1>4</h1></div>
          <div class="item"><h1>5</h1></div>
          <div class="item"><h1>6</h1></div>
          <div class="item"><h1>7</h1></div>
          <div class="item"><h1>8</h1></div>
          <div class="item"><h1>9</h1></div>
          <div class="item"><h1>10</h1></div>
          <div class="item"><h1>11</h1></div>
          <div class="item"><h1>12</h1></div>
          <div class="item"><h1>13</h1></div>
          <div class="item"><h1>14</h1></div>
          <div class="item"><h1>15</h1></div>
          <div class="item"><h1>16</h1></div>
          <div class="item"><h1>17</h1></div>
          <div class="item"><h1>18</h1></div>
          <div class="item"><h1>19</h1></div>
          <div class="item"><h1>20</h1></div>

        </div>
    </div>

   

 
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>


    <!-- Demo -->

    


    <script>
    $(document).ready(function() {

      var owl = $("#dayevent");

      owl.owlCarousel({

        // Define custom and unlimited items depending from the width
        // If this option is set, itemsDeskop, itemsDesktopSmall, itemsTablet, itemsMobile etc. are disabled
        // For better preview, order the arrays by screen size, but it's not mandatory
        // Don't forget to include the lowest available screen size, otherwise it will take the default one for screens lower than lowest available.
        // In the example there is dimension with 0 with which cover screens between 0 and 450px
        
        itemsCustom : [
          [0, 2],
          [450, 4],
          [600, 7],
          [700, 9],
          [1000, 10],
          [1200, 12],
          [1400, 13],
          [1600, 15]
        ],
        navigation : true

      });



    });
    </script>


</div>
</div>
      <div  class="col-md-2"></div>
      <div class="col-md-8 line"><div>
      </section>
 
      <section id="eventsearch">

      <div class="row">
      <div class="col-md-12">

      <h3 align="center">Event Search</h3>
      
      <form action="" class="search mdl-shadow--4dp">
        

      <h3>Display Search Function</h3>

      </form>
      </div>
      </div>

      <div  class="col-md-2"></div>
      <div class="col-md-8 line"><div>
      </section>

</div>

<section id="sponsership">
  

<div class="row">
<div class="col-md-12">

  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  


</div>
</div>
</section>
@endsection