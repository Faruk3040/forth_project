<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products | RedStore</title>
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
 <button>   <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal"
                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
     </a>
     <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    </button>
    <!-- Account Page -->
    <div class="account-page">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="container">

            <div class="row">
                <div class="col-xs-8">
                    <div class="row">
                        @foreach ($returnProducts as $product)
                            <div class="col-xs-4" style="padding: 10px;">
                                <img src="{{ asset($product['image']) }}" height="200" width="150">
                                <h4> {{ $product['name'] }}</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <p>{{ $product['price'] }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-xs-4 ">
                        <div class="form-container">
                            <div class="form-btn">
                                <span>Add Product</span>
                                <hr style="border: none; background: #ff523b; height: 2px;">
                            </div>
                            <form id="LoginForm" method="POST" action="/products" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="name" placeholder="Product Name">
                                <input type="text" name="price" placeholder="Price">
                                <input type="text" name="amount" placeholder="Amount">
                                <input type="text" name="details" placeholder="Details">
                                <input type="text" name="category_id" placeholder="Category Id">
                                <input type="file" name="images[]" multiple>
                                <button type="submit" class="btn">Add Product</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>



        <script>
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";
            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px"
                }
                else {
                    MenuItems.style.maxHeight = "0px"
                }
            }
        </script>


</body>

</html>
