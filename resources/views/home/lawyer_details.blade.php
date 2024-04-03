<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>User HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
    /* CSS styles */
    .bold-italic-label {
      font-weight: bold;
      color: black;
      font-style: italic;
    }
  </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->

      <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width: 50%; padding: 30px">
                  
                     <div class="img-box" style="padding: 20px">
                        <img src="{{ asset('uploads/lawyers/' . $lawyer->image) }}" alt="">
                     </div>
                     <div class="detail-box">
                        <label class="bold-italic-label">Legal Fees</label>
                        <h5>
                           {{$lawyer->lawyer}}
                        </h5>
                        @if($lawyer->discount_fees!=null)

                        <h6 style="color: red">
                           Discounted fees
                           <br>
                           KSH{{$lawyer->discount_fees}}

                        </h6>
                        <h6 style="text-decoration: line-through; color: green" >
                        Original fees
                        <br>
                           KSH{{$lawyer->fees}}
                        </h6>
                        @else
                        <h6 style="color: green">
                           Original fees
                           <br>
                           KSH{{$lawyer->fees}}
                        </h6>
                        @endif
                        <label class="bold-italic-label">Name</label>
                        <h6 style="color: green">
                            {{$lawyer->name}}
                        </h6>
                        <label class="bold-italic-label">Email</label>
                        <h6 style="color: green">
                            {{$lawyer->email}}
                        </h6>
                        <label class="bold-italic-label">Phone</label>
                        <h6 style="color: green">
                            {{$lawyer->phone}}
                        </h6>
                        <label class="bold-italic-label">Location</label>
                        <h6 style="color: green">
                            {{$lawyer->address}}
                        </h6>
                        <h6 style="color: green">
                            {{$lawyer->city}}
                        </h6>
                        <label class="bold-italic-label">Specialization</label>
                        <h6 style="color: green">
                           {{$lawyer->category}}
                        </h6>
                        <label class="bold-italic-label">Law Firm</label>
                        <h6 style="color: green">
                           {{$lawyer->lawyer_co}}
                        </h6>
                        <label class="bold-italic-label">Experience</label>
                        <h6 style="color: green">
                            {{$lawyer->experience}}
                        </h6>
                        <label class="bold-italic-label">Description</label>
                        <h6 style="color: green">                           
                           {{$lawyer->description}}
                        </h6>
                        
                       

                        <!-- <a href="{{ url('lawyer_details/'.$lawyer->id) }}" class="btn btn-primary">Add to Cart</a> -->
                        <form action="{{url('book_now',$lawyer->id)}}" method="POST">
                              @csrf
                           <div class="row">
                              <div>
                                 <input type="submit" value="Book Now">
                              </div>
                           </div>
                              
                           </form>

                        
                     </div>
                  </div>
               </div>
      
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2024 All Rights Reserved By <a href="https://html.design/">Gravel LLC</a><br>
         
            
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>