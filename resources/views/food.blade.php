 <!-- ***** Menu Area Starts ***** -->
 <section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                
                @foreach ($data as $food)
                <form action="{{ url('addcart', $food->id) }}" method="POST">
                    @csrf
                    <div class="item">
                        <div style="background-image: url('foodimage/{{ $food->image }}')" class='card'>
                            <div class="price"><h6>{{ $food->price }}</h6></div>
                            <div class='info'>
                                <h1 class='title'>{{ $food->title }}</h1>
                                <p class='description'>{{ $food->description }}</p>
                                <div class="main-text-button">
                                <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center" style="width:94%;margin-left: auto;margin-right: auto;">
                            
                            <input type="number" min="1" name="quality" class="w-50">
                            <input type="submit" value="Add Cart" class="btn w-50 btn-outline-primary p-2">
                        </div>
                    </div>
                    
                </form>
            @endforeach
                
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
