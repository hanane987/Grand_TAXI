<!-- resources/views/drivers/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Driver</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        div {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div>
    <h1>Add New Driver</h1>

    <form action="{{ route('drivers.store') }}" method="post">

        @csrf

        <label for="number_seats">Number of Seats:</label>
        <input type="number" name="number_seats" required>

        <label for="image">Image URL:</label>
        <input type="file" name="image" required>

        <label for="typ_veicl">Vehicle Type:</label>
        <input type="text" name="typ_veicl" required>

        <label for="matricule">Matricule:</label>
        <input type="number" name="matricule" required>

        <label for="price">Price:</label>
        <input type="number" name="price" required>

        <label for="method_payment">Payment Method:</label>
        <select name="method_payment" required>
            <option value="cart">Credit Card</option>
            <option value="espase">E-Space</option>
        </select>

        <label for="description">Description:</label>
        <textarea name="description" rows="4" required></textarea>
        {{-- @foreach($trajets as $trajet)
    <p>Trajet from {{ $trajet->start_city }} to {{ $trajet->end_city }}:</p>
    <p>Distance: {{ $trajet->distance }} km</p>
    <p>Duration: {{ $trajet->duration }}</p>
    <hr>
@endforeach --}}

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
