
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zebo market</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/designHome.css') }}">
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{url('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery-3.3.1.js')}}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        @if(session('successMsg'))
        <div class="alert alert-success">
            {{session('successMsg')}}
        </div>
        @endif
        <button type="button" id="new_product" class="btn btn-primary btn-lg">
            <a href="{{ url('/create')}}">New Product?</a>
        </button>
        <div class="phone_list">
            <h2>Apple</h2>
            @if(count($phones)>0)
            @foreach($phones->all() as $phone)
            @if ($phone->type == "Apple")
            <?php 
                $url = '../storage/upload/' . $phone->photo;
             ?>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" id="product_photo" src="{{ url($url) }}" alt="Product photo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $phone->name }}</h5>
                        <p class="card-text">{{ $phone->description }}</p>
                    </div>
                    <div class="card-footer">
                        Price: ${{ $phone->price }}
                        <a href='{{url("/delete/{$phone->id}")}}'>
                            <img id="delete" src="{{ url('images/bin.png') }}">
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>

        <div class="phone_list">
            <h2>Samsung</h2>
            @if(count($phones)>0)
            @foreach($phones->all() as $phone)
            @if ($phone->type == "Samsung")
            <?php 
                $url = '../storage/upload/' . $phone->photo;
             ?>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" id="product_photo" src="{{ url($url) }}" alt="Product photo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $phone->name }}</h5>
                        <p class="card-text">{{ $phone->description }}</p>
                    </div>
                    <div class="card-footer">
                        Price: ${{ $phone->price }}
                        <a href='{{url("/delete/{$phone->id}")}}'>
                            <img id="delete" src="{{ url('images/bin.png') }}">
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>

        <div class="phone_list">
            <h2>SONY</h2>
            @if(count($phones)>0)
            @foreach($phones->all() as $phone)
            @if ($phone->type == "SONY")
            <?php 
                $url = '../storage/upload/' . $phone->photo;
             ?>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" id="product_photo" src="{{ url($url) }}" alt="Product photo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $phone->name }}</h5>
                        <p class="card-text">{{ $phone->description }}</p>
                    </div>
                    <div class="card-footer">
                        Price: ${{ $phone->price }}
                        <a href='{{url("/delete/{$phone->id}")}}'>
                            <img id="delete" src="{{ url('images/bin.png') }}">
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>

        <div class="phone_list">
            <h2>XIOMI</h2>
            @if(count($phones)>0)
            @foreach($phones->all() as $phone)
            @if ($phone->type == "XIOMI")
            <?php 
                $url = '../storage/upload/' . $phone->photo;
             ?>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" id="product_photo" src="{{ url($url) }}" alt="Product photo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $phone->name }}</h5>
                        <p class="card-text">{{ $phone->description }}</p>
                    </div>
                    <div class="card-footer">
                        Price: ${{ $phone->price }}
                        <a href='{{url("/delete/{$phone->id}")}}'>
                            <img id="delete" src="{{ url('images/bin.png') }}">
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>

        <div class="phone_list">
            <h2>Artel</h2>
            @if(count($phones)>0)
            @foreach($phones->all() as $phone)
            @if ($phone->type == "Artel")
            <?php 
                $url = '../storage/upload/' . $phone->photo;
             ?>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" id="product_photo" src="{{ url($url) }}" alt="Product photo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $phone->name }}</h5>
                        <p class="card-text">{{ $phone->description }}</p>
                    </div>
                    <div class="card-footer">
                        Price: ${{ $phone->price }}
                        <a href='{{url("/delete/{$phone->id}")}}'>
                            <img id="delete" src="{{ url('images/bin.png') }}">
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>

        <div class="phone_list">
            <h2>Others</h2>
            @if(count($phones)>0)
            @foreach($phones->all() as $phone)
            @if ($phone->type == "Others")
            <?php 
                $url = '../storage/upload/' . $phone->photo;
             ?>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" id="product_photo" src="{{ url($url) }}" alt="Product photo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $phone->name }}</h5>
                        <p class="card-text">{{ $phone->description }}</p>
                    </div>
                    <div class="card-footer">
                        Price: ${{ $phone->price }}
                        <a href='{{url("/delete/{$phone->id}")}}'>
                            <img id="delete" src="{{ url('images/bin.png') }}">
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>
    </div>
</div>
</body>
</html>
@endsection
