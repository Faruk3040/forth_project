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


    <!-- Single Products -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset($images[0])}}" width="100%" id="ProductImg">

                <div class="small-img-row">
                    @if(isset($images[0]))
                      <div class="small-img-col">
                          <img src="{{ asset($images[0])}}" width="100%" class="small-img">
                      </div>
                    @endif
                    @if(isset($images[1]))
                       <div class="small-img-col">
                           <img src="{{ asset($images[1])}}" width="100%" class="small-img">
                       </div>
                    @endif
                    @if(isset($images[2]))
                       <div class="small-img-col">
                            <img src="{{ asset($images[2])}}" width="100%" class="small-img">
                       </div>
                    @endif
                    @if(isset($images[3]))
                        <div class="small-img-col">
                            <img src="{{ asset($images[3])}}" width="100%" class="small-img">
                        </div>
                    @endif
                </div>

            </div>
            <div class="col-2">
                <p>{{ $product->category->category_name }}</p>
                <h1>{{ $product->name }}</h1>
                <h4>{{ $product->price }}</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add To Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>{{ $product->details }}</p>
            </div>
        </div>
    </div>
    <!-- title -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="/products"><p>View More</p></a>
        </div>
    </div>
    <!-- Products -->
    <div class="small-container">
        <div class="row">
            @foreach ($related_products as $rel_product )
            <div class="col-4">
                <a href="{{ url('/products/'. $rel_product->id) }}"><img src="{{ asset(explode('|' , $rel_product->image)[0])}}"></a>
                <h4>{{ $rel_product->name }}</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>{{ $rel_product->price }}</p>
            </div>
            @endforeach

        </div>
    </div>

    <!-- Footer -->
  

    <!-- javascript -->
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
