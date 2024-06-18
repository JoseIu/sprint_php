@extends('layout')

@section('content')
<section class="home-component">
    <div class="home-component__content rooms-list">
        <div class="wrapper">
            <div class="room-home">
                <h2 class="home-component__subtitle title">The Ultimate Luxury</h2>
                <h2 class="home-component__title old">ROOM DETAILS</h2>
            </div>
        </div>
    </div>
</section>
<section class="wrapper2">
    <button class="toogleRoom">ROOM DETAILS</button>
    <section class="rooms-grid">
        <img src="{{ $roomdetails['images'][0] }}" alt="">
    </section>

    <div>
        <form action="./room_details.php?room={{ $roomdetails['_id'] }}" method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="your name..">
            </div>
            <div>
                <label for="last_name">Las Name</label>
                <input type="text" name="last_name" id="last_name" placeholder="your name..">
            </div>
            <div>
                <label for="check_in">Check In</label>
                <input type="date" name="check_in" id="check_in">
            </div>
            <div>
                <label for="check_out">Check out</label>
                <input type="date" name="check_out" id="check_out">
            </div>
            <div>
                <label for="special_request">Special Request</label>
                <textarea name="special_request" id="special_request"></textarea>
            </div>

            <button type="submit">Book now</button>
        </form>
    </div>
</section>



@endsection