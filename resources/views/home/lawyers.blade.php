<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>Lawyers</span>
               </h2>
            </div>
            <div class="row">
               @foreach($lawyer as $lawyers)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                        <a href="{{url('lawyer_details', $lawyers->id)}}" class="option1">
                           Lawyer Details
                           </a>
                           <a >
                           <form action="{{url('book_now',$lawyers->id)}}" method="POST">
                              @csrf
                           <div class="row">
                              
                              <div>
                                 <input type="submit" value="Book Now">
                              </div>
                           </div>
                              
                           </form>
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="{{ asset('uploads/lawyers/' . $lawyers->image) }}" alt="">
                     </div>
                     <div class="detail-box">
                     <h5>
                           {{$lawyers->name}}
                        </h5>
                        @if($lawyers->discount_fees!=null)

                        <h6 style="color: red">
                           Discounted fees
                           <br>
                           KSH{{$lawyers->discount_fees}}

                        </h6>
                        <h6 style="text-decoration: line-through; color: green" >
                        Original fees
                        <br>
                           KSH{{$lawyers->fees}}
                        </h6>
                        @else
                        <h6 style="color: grren">
                           Original fees
                           <br>
                           KSH{{$lawyers->fees}}
                        </h6>
                        @endif
                     </div>
                  </div>
               </div>
               @endforeach
               
               <span style="padding: 20px" >
               {!!$lawyer->withQueryString()->links('pagination::bootstrap-5')!!}
               </span>
            
         </div>
      </section>