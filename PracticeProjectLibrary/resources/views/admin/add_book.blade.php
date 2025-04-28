<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
      .div_center
      {
            text-align: center;
            margin: auto;
        }

        .title
        {
          color: white;
          font-size: 40px;
          font-weight: bold;
        }

        label
        {
          display: inline-block;
          width: 200px;
        }

        .div_padding
        {
          padding: 15px;
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

              <h1 class="title">Add Books</h1>

              <form action="{{ url('store_book') }}" method="POST" enctype="multipart/form-data">

                  @csrf

                  <div class="div_padding">
                      <label>Book Title</label>
                      <input type="text"name="book_name">
                  </div>

                  <div class="div_padding">
                      <label>Auther name</label>
                      <input type="text"name="auther_name">
                  </div>

                  <div class="div_padding">
                      <label>Price</label>
                      <input type="text"name="price">
                  </div>

                  <div class="div_padding">
                      <label>Quantity</label>
                      <input type="number"name="quantity">
                  </div>

                  <div class="div_padding">
                    <label>Description</label>
                    <textarea name="description" id=""></textarea>
                  </div>

                  <div class="div_padding">
                    <label>Category</label>
                    <select name="category" required>
                      <option>Select a Category</option>
                      @foreach ($data as $data)
                        
                      <option value="{{ $data->id }}">{{ $data->cat_title }}</option>

                      @endforeach
                    </select>
                  </div>

                  <div class="div_padding">
                      <label>Book Image</label>
                      <input type="file"name="book_img">
                  </div>

                  <div class="div_padding">
                      <label>Auther Image</label>
                      <input type="file"name="auther_img">
                  </div>

                  <div class="div_padding">
                      <input type="submit" value="Add Book" class="btn btn-warning">
                  </div>


              </form>

            </div>

          </div>
        </div>
      </div>
        

      @include('admin.footer')
  </body>
</html>