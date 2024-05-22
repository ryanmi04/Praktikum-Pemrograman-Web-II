<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <title>Menu</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            background: url(img/backgroundIndex.jpg) center/cover no-repeat fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            height: 400px;
            width: 500px;
            background-color: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(5px);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .h1-container {
            background-color: #322C2B;
            padding-right: 60px;
            padding-left: 60px;
            padding-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        h1 {
            color: white;
            text-align: center;
            margin-bottom: 5px;
        }

        button {
            height: 50px;
            width: 450px;
            margin-top: 20px;
            font-size: 18px;
            font-weight: 500;
        }

        .buttonMember button {
            background-color: #AFD198;
            border-radius: 10px;
            border: none;
        }

        .buttonBuku button {
            background-color: #E8EFCF;
            border-radius: 10px;
            border: none;
        }

        .buttonPeminjaman button {
            background-color: #ECCA9C;
            border-radius: 10px;
            border: none;
        }

        .buttonMember button:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease;
        }

        .buttonBuku button:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease;
        }

        .buttonPeminjaman button:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="h1-container">
            <h1>Menu</h1>
        </div>
        <div class="button">
            <div class="buttonMember">
                <a href="Member.php"><button type="button">Member</button></a>
            </div>
            <div class="buttonBuku">
                <a href="Buku.php"><button type="button">Buku</button></a>
            </div>
            <div class="buttonPeminjaman">
                <a href="Peminjaman.php"><button type="button">Peminjaman</button></a>
            </div>
        </div>
    </div>
</body>

</html>