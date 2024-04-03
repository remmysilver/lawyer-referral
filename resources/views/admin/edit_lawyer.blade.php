<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public"> <!--  Add this line when css is not working -->
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
                <h1 class="h2_font">Update Lawyers</h1>
                
                <form action="{{url('/update_lawyer')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_design">
                <label>Lawyer Name:</label>
                <input class="input_color" type="text" name="name" placeholder="Write lawyer name" Required="" value="{{$data->name}}">
                </div>
                
                <div class="div_design">
                <label>Lawyer Email:</label>
                <input class="input_color" type="email" name="email" placeholder="Write lawyer email" Required="" value="{{$data->email}}">
                </div>

                <div class="div_design">
                <label>Lawyer Phone:</label>
                <input class="input_color" type="number" name="phone" placeholder="Write lawyer phone" Required="" value="{{$data->phone}}">
                </div>

                <div class="div_design">
                <label>Lawyer Address:</label>
                <input class="input_color" type="text" name="address" placeholder="Write lawyer address" Required="" value="{{$data->address}}">
                </div>

                <div class="div_design">
                <label>Category:</label>
                <select class="input_color" name="Category" Required="">
                    <option value="{{$data->category}}" selected="">{{$data->category}}</option>
                    @foreach($category as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach
                    
                </select>
                </div>

                <div class="div_design">
                <label>Lawyer City:</label>
                <input class="input_color" type="text" name="city" placeholder="Write lawyer city" Required="" value="{{$data->city}}">
                </div>

                <div class="div_design">
                <label>Law Firm:</label>
                <input class="input_color" type="text" name="lawyer_co" placeholder="Write lawyer company" Required="" value="{{$data->lawyer_co}}">
                </div>

                <div class="div_design">
                <label>Lawyer Status:</label>
                <input class="input_color" type="text" name="status" placeholder="status" Required="" value="{{$data->status}}">
                </div>

                <div class="div_design">
                <label>Lawyer Fees:</label>
                <input class="input_color" type="number" name="fees" placeholder="Write lawyer price" Required="" value="{{$data->fees}}">
                </div>

                <div class="div_design">
                <label>Lawyer Discount Fees:</label>
                <input class="input_color" type="number" name="discount_fees" placeholder="Write lawyer discount price" value="{{$data->discount_fees}}">
                </div>

                <div class="div_design">
                <label>Lawyer Description:</label>
                <input class="input_color" type="text" name="description" placeholder="Write lawyer description" Required="" value="{{$data->description}}">
                </div>

                <div class="div_design">
                <label>Lawyer Experience:</label>
                <input class="input_color" type="text" name="experience" placeholder="Write lawyer experience" Required="" value="{{$data->experience}}" >
                </div>

                <div class="div_design">
                <label>Current Lawyer's Image:</label>
                <img style="margin: auto;" height="100px" width="100px" src="{{ asset('../uploads/lawyers/' . $data->image) }}" class="img_size">
                </div>
                

                <div class="div_design">
                <label>Change Lawyer's Image Here:</label>
                <input type="file" name="Image" >
                </div>

                <div class="div_design">
                <input type="Submit" value="Update Lawyer" class="btn btn-primary">
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

