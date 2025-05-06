<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        .div_edit
        {
            margin: auto;
            text-align: center;
        }

        .title_edit
        {
            font-size: 30px;
            font-weight: bold;
            padding: 35px;
            color: white;
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

            <div class="div_edit">

                <h2 class="title_edit">Edit Category</h2>

                <form action="{{ url('update_category',$data) }}" method="POST">

                    @csrf

                    <label for="">Category Name</label>

                    <input type="text" name="cat_name" value="{{ $data->cat_title }}">

                    <input type="submit" class="btn btn-info" value="Update">

                </form>

            </div>

          </div>
        </div>
      </div>
        

      @include('admin.footer')
  </body>
</html>