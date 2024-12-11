<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Participation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Create Participation</h1>
    <form action="{{ route('programme.partistore',$programme) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Proof Image -->
        <div class="form-group">
            <label for="proof_image">Upload Proof Image:</label>
            <input type="file" name="proof_image" id="proof_image" accept="image/*" required>
            @error('proof_image')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit">Create Participation</button>
    </form>
</body>
</html>
