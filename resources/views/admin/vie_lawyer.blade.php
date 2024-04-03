<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
      .center{
        margin: auto;
        width: 90%;
        border: 3px solid white;
        text-align: center;
        margin-top: 40px;
      }
      .font_size{
        font-size: 40px;
        padding-top: 40px;
        text-align: center;
      }
      .img_size{
        width: 100px;
        height: 100px;
        }
        .td_color{
            background-color: #4CAF50;
            color: white;
        }
        .th_deg{
            padding: 25px;
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

            <h2 class="font_size"> All Lawyers</h2>

            <div class="table-responsive">
            <table class="center">
                <tr class="td_color ">
                    <td class="th_deg">Lawyer's name</td>
                    <td class="th_deg">Email</td>
                    <td class="th_deg">Phone</td>
                    <td class="th_deg">Address</td>
                    <td class="th_deg">City</td>
                    <td class="th_deg">Category</td>
                    <td class="th_deg">Description</td>
                    <td class="th_deg">Experience</td>
                    <td class="th_deg">Law Firm</td>
                    <td class="th_deg">Status</td>
                    <td class="th_deg">Fees</td>
                    <td class="th_deg">Discount Fees</td>
                    <td class="th_deg">Image</td>
                    <td class="th_deg">Edit</td>
                    <td class="th_deg">Delete</td>
                </tr>

                @foreach($data as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->city}}</td>
                    <td>{{$data->category}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$data->experience}}</td>
                    <td>{{$data->lawyer_co}}</td>
                    <td>{{$data->status}}</td>
                    <td>{{$data->fees}}</td>
                    <td>{{$data->discount_fees}}</td>
                    <td><img class="img_size" src="{{url('/uploads/lawyers/'.$data->image)}}" style="width: 100px; height: 100px;"></td>
                    <td><a class="btn btn-success"href="{{url('/edit_lawyer/'.$data->id)}}">Edit</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are You Sure you want DELETE this?')" href="{{url('/delete_lawyer/'.$data->id)}}">Delete</a></td>
                </tr>
                    @endforeach



             </table>
            </div>
            </div>
            </div>
  
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>