<!DOCTYPE html>
<html lang="en">

  <head>
    @include('home.css')
    <style type="text/css">
        .table_hal {
            border: 1px solid white;
            margin: auto;
            text-align: center;
            margin-top: 100px;
        }
        th {
            background-color: rgb(53, 0, 150);
            color: white;
            font-weight: bold;
            font-size: 18px;
        }
        td {
            color: white;
            background-color: black;
            border: 1px solid white;
        }
        .book_img {
            width: 90px;
            height: 100px;
            margin: auto;
        }
    </style>
    </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  @include('home.header')
  <!-- ***** Header Area End ***** -->

  <div class="currently-market">
    <div class="container">
        <div class="row">
            @if(session()->has('message'))
                <div style="margin-top: 100px" class="alert alert-success">
                    {{ session()->get('message') }}
                    <button type="button" class="close" aria-hidden="true" data-bs-dismiss="alert">x</button>
                </div>
            @endif
            <table class="table_hal">
                <tr>
                    <th>Book Name</th>
                    <th>Book Auther</th>
                    <th>Book Status</th>
                    <th>Image</th>
                    <th>Cancel Request</th>
                </tr>
                
                @foreach ($data as $data)
                <tr>
                    <td>{{ $data->book->title }}</td>
                    <td>{{ $data->book->auther_name }}</td>
                    <td>
                        @if ( $data->status == 'approved')
                            <span style="color: lightgreen;">{{ $data->status }}</span>
                        @endif
                        @if ( $data->status == 'rejected')
                            <span style="color: red;">{{ $data->status }}</span>
                        @endif
                        @if ( $data->status == 'returned')
                            <span style="color: yellow;">{{ $data->status }}</span>
                        @endif
                        @if ( $data->status == 'Applied')
                            <span style="color: skyblue;">{{ $data->status }}</span>
                        @endif
                    </td>
                    <td>
                        <img class="book_img" src="book/{{ $data->book->book_img }}">
                    </td>
                    <td>
                        @if ($data->status == 'Applied')
                            <a href="{{ url('cancel_request', $data->id) }}" class="btn btn-warning">Cancel</a>
                        @else
                            <p style="color: white; font-weight: bold;">Not Allowed</p>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
  </div>

  @include('home.footer')

  </body>
</html>