<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
      .div_center{
        text-align: center;
        padding-top: 50px;
      }
        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color{
            color: black;
            padding-bottom: 12px 20px;
            
        }
        label{
            display: inline-block;
            width: 140px;
        } 
        .div_design{
            padding-bottom: 15px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      
     
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden ="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif

          <div class="div_center">
                <h1 class="h2_font">Add Lawyers</h1>
                
                <form action="{{url('/add_lawyer')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_design">
                <label>Lawyer Name:</label>
                <input class="input_color" type="text" name="name" placeholder="Write lawyer name" Required>
                </div>
                
                <div class="div_design">
                <label>Lawyer Email:</label>
                <input class="input_color" type="email" name="email" placeholder="Write lawyer email" Required>
                </div>

                <div class="div_design">
                <label>Lawyer Phone:</label>
                <input class="input_color" type="number" name="phone" placeholder="Write lawyer phone" Required>
                </div>

                <div class="div_design">
                <label>Lawyer Address:</label>
                <input class="input_color" type="text" name="address" placeholder="Write lawyer address" Required>
                </div>

                <div class="div_design">
                <label>Category:</label>
                <select class="input_color" name="category" Required>
                    @foreach($category as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    <!-- <option value="2">{{$category->category_name}}</option> -->
                    @endforeach
                    <!-- <option value="" selected="">Add a Category Here</option> -->
                </select>
                </div>

                <div class="div_design">
                <label>Lawyer City:</label>
                <input class="input_color" type="text" name="city" placeholder="Write lawyer city" Required>
                </div>

                <div class="div_design">
                <label>Law Firm:</label>
                <input class="input_color" type="text" name="lawyer_co" placeholder="Write lawyer company" Required>
                </div>

                <div class="div_design">
                <label>Lawyer Status:</label>
                <input class="input_color" type="text" name="status" placeholder="status" Required>
                </div>

                <div class="div_design">
                <label>Lawyer Fees:</label>
                <input class="input_color" type="number" name="fees" placeholder="Write lawyer price" Required>
                </div>

                <div class="div_design">
                <label>Lawyer Discount Fees:</label>
                <input class="input_color" type="number" name="discount_fees" placeholder="Write lawyer discount price" >
                </div>

                <div class="div_design">
                <label>Lawyer Description:</label>
                <input class="input_color" type="text" name="description" placeholder="Write lawyer description" Required>
                </div>

                <div class="div_design">
                <label>Lawyer Experience:</label>
                <input class="input_color" type="text" name="experience" placeholder="Write lawyer experience" Required>
                </div>

                <div class="div_design">
                <label>Lawyer Image Here:</label>
                <input type="file" name="image" Required>
                </div>

                

                <div class="div_design">
                <input type="Submit" value="Add lawyer" class="btn btn-primary">
                </div>

              </form>
          </div>
            
          </div>

        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

