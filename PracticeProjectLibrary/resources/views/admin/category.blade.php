<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <style type="text/css">

        .div_center{
            text-align: center;
            margin: auto;
        }

        .cat_label{
            font-size: 24px;
            font-weight: bold;
            padding: 20px;
            color: white
        }

        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 50px;
            border: 1px solid white;
        }
        th{
            background-color: skyblue;
            padding: 10px;
        }

        tr{
             border: solid cyan;
             padding: 10px;
        }

    </style>
    

  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="div_center">

                <div>

                    @if(session('message'))

                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        </div>
                        
                    @endif

                </div>

                <h1 class="cat_label">Add Category</h1>

                <form action="{{ url('add_category') }}" method="Post">

                    @csrf

                    <span style="padding-right: 20px;">   
                        <label>Category Name</label>
                        <input type="text" name="category" required>
                    </span>

                    <input class="btn btn-primary" type="submit" value="Add Category">
                
                </form>

                <div>

                    <table class="center">

                        <tr>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($data as $data)
                            
                        <tr>
                            <td>{{ $data->cat_title }}</td>
                            <td>

                                <a class="btn btn-info" href="{{ url('edit_category', $data->id) }}">Edit</a>

                                <a onclick="confirmation(event)" class="btn btn-danger" href="{{ url('cat_delete', $data->id) }}">Delete</a>

                            </td>
                        </tr>
                        
                        @endforeach

                    </table>

                </div>

            </div>

          </div>
        </div>
      </div>
        

      @include('admin.footer')


    <script type="text/javascript">

    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);

        swal({
            title: "Are you sure to Delete this",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })

        .then((willCancel) => {
            if (willCancel) {

                window.location.href = urlToRedirect;
            }
            
        });

    }
    
    </script>

  </body>
</html>