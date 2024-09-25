<!-- resources/views/testing.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zigzag Layout - Testing</title>
    <style>
        .zigzag-container {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        
        .zigzag-container.left .content-box {
            flex-direction: row;
        }
        
        .zigzag-container.right .content-box {
            flex-direction: row-reverse;
        }

        .content-box {
            display: flex;
            width: 100%;
        }

        .content-box img {
            width: 40%;
            margin: 0 20px;
        }

        .content-text {
            width: 60%;
            padding: 10px;
        }

        .content-text h2 {
            margin: 0;
            font-size: 24px;
        }

        .content-text p {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>

@foreach ($contents as $index => $content)
    <div class="zigzag-container {{ $loop->even ? 'left' : 'right' }}">
        <div class="content-box">
            <img src="{{ $content->image }}" alt="Content Image">
            <div class="content-text">
                <h2>{{ $content->title }}</h2>
                <p>{{ $content->description }}</p>
            </div>
        </div>
    </div>
@endforeach

</body>
</html>
