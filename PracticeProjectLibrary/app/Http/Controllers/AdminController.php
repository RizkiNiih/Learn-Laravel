<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Book;

use App\Models\Category;

use App\Models\Borrow;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $user_type = Auth()->user()->usertype;

            if($user_type == 'admin')
            {
                $user = User::all()->count();
                $book = Book::all()->count();
                $borrow = Borrow::where('status', 'approved')->count();
                $returned = Borrow::where('status', 'returned')->count();
                return view('admin.index', compact('user', 'book', 'borrow', 'returned'));
            }
            else if($user_type == 'user')
            {
                $data = Book::all();

                return view('home.index', compact('data'));
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function category_page()
    {
        $data = Category::all();

        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new Category;
        
        $data->cat_title = $request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function cat_delete($id)
    {
        $data = Category::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function edit_category($cat_title)
    {
        $data = Category::where('cat_title', $cat_title)->first();

        return view('admin.edit_category', compact('data'));

    }

    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);
        // dd($data);

        $data->cat_title = $request->cat_name;

        $data->save();

        return redirect('/category_page')->with('message', 'Category Updated Successfully');
    }


    public function add_book()
    {
        $data = Category::all();

        return view('admin.add_book', compact('data'));
    }

    public function store_book(Request $request)
    {
        $data = new Book;

        $data->title = $request->book_name;
        $data->auther_name = $request->auther_name;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->description = $request->description;
        $data->category_id = $request->category;
        $book_img = $request->book_img;
        $auther_img = $request->auther_img;
        if ($book_img)
        {
            $book_img_name = time() . '.' . $book_img->getClientOriginalExtension();
            $request->book_img->move('book', $book_img_name);
            $data->book_img = $book_img_name;
        }
        if ($auther_img)
        {
            $auther_img_name = time() . '.' . $auther_img->getClientOriginalExtension();
            $request->auther_img->move('auther', $auther_img_name);
            $data->auther_img = $auther_img_name;
        }
        
        $data->save();

        return redirect()->back()->with('message', 'Book Added Successfully');
    }

    public function show_book()
    {
        $book = Book::all();

        return view('admin.show_book', compact('book'));
    }

    public function book_delete($id)
    {
        $data = Book::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Book Deleted Successfully');
    }

    public function book_edit($id)
    {
        $data = Book::find($id);
        $category = Category::all();

        return view('admin.edit_book', compact('data', 'category'));
    }

    public function book_update(Request $request, $id)
    {
        $data = Book::find($id);

        $data->title = $request->book_name;
        $data->auther_name = $request->auther_name;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->description = $request->description;
        $data->category_id = $request->category;
        $book_img = $request->book_img;
        $auther_img = $request->auther_img;
        if ($book_img)
        {
            $book_img_name = time() . '.' . $book_img->getClientOriginalExtension();
            $request->book_img->move('book', $book_img_name);
            $data->book_img = $book_img_name;
        }
        if ($auther_img)
        {
            $auther_img_name = time() . '.' . $auther_img->getClientOriginalExtension();
            $request->auther_img->move('auther', $auther_img_name);
            $data->auther_img = $auther_img_name;
        }

        $data->save();

        return redirect('/show_book')->with('message', 'Book Updated Successfully');
    }

    public function borrow_request()
    {
        $data = Borrow::all();

        return view('admin.borrow_request', compact('data'));
    }

    public function approve_book($id)
    {
        $data = Borrow::find($id);
        $status = $data->status;
        if ($status == 'approved') {
            return redirect()->back();
        }
        else {
        $data->status = 'approved';

        $data->save();

        $bookid = $data->book_id;
        $book = Book::find($bookid);
        $book_qty = $book->quantity - '1';
        $book->quantity = $book_qty;
        $book->save();

        return redirect()->back();
        }
    }

    public function return_book($id)
    {
        $data = Borrow::find($id);
        $status = $data->status;
        if ($status == 'returned') {
            return redirect()->back();
        }
        else {
        $data->status = 'returned';

        $data->save();

        $bookid = $data->book_id;
        $book = Book::find($bookid);
        $book_qty = $book->quantity + '1';
        $book->quantity = $book_qty;
        $book->save();

        return redirect()->back();
        }
    }

    public function rejected_book($id)
    {
        $data = Borrow::find($id);
        $data->status = 'rejected';
        $data->save();

        return redirect()->back();
    }
}
