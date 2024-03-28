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
            width: 100%;
            height: 100vh;
            margin: 0;
            background-color: #1b1b32;
            color: rgb(192,192,192);
            font-family: Cambria;
            font-size: 16px;
            background-image: url(https://i0.wp.com/diversegym.co.uk/wp-content/uploads/2022/07/Diverse-Gym-Cardio-Gallery5.jpg?fit=1500%2C1000&ssl=1); /* Remplacer par l'URL de votre image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        h1,p {
            margin: 1em auto;
            text-align: center;
            color:	#ffffff; /* Rouge */
        }

        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 170px;
        }

        .product {
            width: 300px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            color: #ffffff;
            margin-bottom: 20px; /* Ajout d'une marge en bas pour un meilleur espacement */
            display: flex; /* Utilisation de flexbox pour aligner les éléments */
            flex-direction: column; /* Pour que le bouton soit en dessous du texte */
            justify-content: space-between; /* Pour espacer les éléments verticalement */
            align-items: center; /* Pour centrer horizontalement les éléments */
            height: 100%; /* Pour que tous les produits aient la même hauteur */
        }

        .product h2 {
            margin-top: 0;
            font-size: 24px;
            text-align: center; /* Centrage du titre */
        }

        .product p {
            margin: 10px 0;
        }

        .product .buy-button {
            width: 100%;
            padding: 10px;
            background-color: #cc0000; /* Rouge */
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            align-self: center; /* Pour centrer horizontalement les boutons */
        }

        .product .buy-button:hover {
            background-color: #ff4d4d; /* Rouge plus foncé */
        }
    </style>
</head>
<body>
    <h1>Boutique d'équipement d'entraînement</h1>

    <div class="products-container">
        @foreach($products as $product)
        <div class="product">
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