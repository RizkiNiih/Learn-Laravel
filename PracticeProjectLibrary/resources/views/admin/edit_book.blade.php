<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        .divCenter
        {
            text-align: center;
            margin: auto;
        }

        .titlel
        {
            color: white;
            font-size: 30px;
            padding: 30px;
            font-weight: bold;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }

        .divPadding
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

            <div class="divCenter">
                <h1 class="titlel">Edit Book</h1>
                <form action="{{ url('book_update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="divPadding">
                        <label>Book Title</label>
                        <input type="text" name="title" id="title" value="{{ $data->title }}">      
                    </div>

                    <div class="divPadding">
                        <label>Auther Name</label>
                        <input type="text" name="auther_name" id="auther_name" value="{{ $data->auther_name }}">
                    </div>

                    <div class="divPadding">
                        <label>Price</label>
                        <input type="text" name="price" id="price" value="{{ $data->price }}">
                    </div>

                    <div class="divPadding">
                        <label>Quantity</label>
                        <input type="text" name="quantity" id="quantity" value="{{ $data->quantity }}">

                    <div class="divPadding">
                        <label>Description</label>
                        <textarea name="decription">{{ $data->description }}</textarea>
                    </div>

                    <div class="divPadding">
                        <label>Category</label>
                        <select name="category">
                            <option value="{{ $data->category->id }}">{{ $data->category->cat_title }}</option>
                            @foreach ($category as $category)
                                <option value="{{ $category->cat_title }}">{{ $category->cat_title }}</option>
                            @endforeach
                        </select>

                        <div class="divPadding">
                            <label>Current Author Image</label>
                            <img style="width : 80px; border-radius : 50%; margin: auto" src="/auther/{{ $data->auther_img }}">
                        </div>

                        <div class="divPadding">
                            <label>Change Author Image</label>
                            <input type="file" name="auther_img">
                        </div>

                        <div class="divPadding">
                            <label>Current Book Image</label>
                            <img style="width : 80px; margin: auto" src="/book/{{ $data->book_img }}">
                        </div>

                        <div class="divPadding">
                            <label>Change Book Image</label>
                            <input type="file" name="book_img">
                        </div>

                        <div class="divPadding">
                            <input class="btn btn-info" type="submit" value="Update Book">
                        </div>

                    </div>
                </form>
            </div>

          </div>
        </div>
      </div>
        

      @include('admin.footer')
  </body>
</html>