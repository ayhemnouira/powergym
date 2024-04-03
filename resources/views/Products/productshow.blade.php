@extends('frontend')
@section('title', 'Power Gym - Boutique')
@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique d'équipement d'entraînement</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #1b1b32;
            color: #ffffff;
            background-image: url(https://i0.wp.com/diversegym.co.uk/wp-content/uploads/2022/07/Diverse-Gym-Cardio-Gallery5.jpg?fit=1500%2C1000&ssl=1);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding-bottom: 50px;
            padding-top: 100px
        }
    
        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
    
        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
    
        .product {
            width: 300px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            color: #ffffff;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
    
        .product:hover {
            transform: translateY(-5px);
        }
    
        .product h2 {
            margin-top: 0;
            font-size: 24px;
            text-align: center;
            margin-bottom: 10px;
        }
    
        .product p {
            margin: 10px 0;
            text-align: justify;
        }
    
        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    
        .product .buy-button {
            width: 100%;
            padding: 10px;
            background-color: #cc0000;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            text-align: center;
        }
    
        .product .buy-button:hover {
            background-color: #ff4d4d;
        }
    </style>
    
</head>
<body>
    <h1>Boutique d'équipement d'entraînement</h1>

    <div class="products-container">
        @foreach($products as $product)
        <div class="product">
            <img src="{{ $product->image }}" alt="{{ $product->name }}"> <!-- Display product image -->
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>Prix : ${{ $product->price }}</p>
            <form action="{{ route('purchase', ['id' => $product->id]) }}" method="POST">
                @csrf
                <button type="submit" class="buy-button">Acheter</button>
            </form>
        </div>
        @endforeach
    </div>
</body>
</html>
@endsection
