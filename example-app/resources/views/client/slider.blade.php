<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
</head>
<body>
    <div class="slider-container">
        <div class="slider">
            @foreach($sliders as $slider)
                <div class="slider-item">
                    <img src="{{ asset('images/sliders/' . $slider->image) }}" alt="Slider Image">
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                dots: true,           // Show dots for pagination
                infinite: true,       // Infinite loop sliding
                speed: 500,           // Transition speed
                slidesToShow: 1,      // Number of slides to show
                slidesToScroll: 1,    // Number of slides to scroll
                autoplay: true,       // Enable autoplay
                autoplaySpeed: 2000,  // Autoplay speed
            });
        });
    </script>
</body>
</html>
