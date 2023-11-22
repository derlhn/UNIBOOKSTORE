<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIBOOKSTORE - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #eee;
            padding: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <header>
        <h1>UNIBOOKSTORE</h1>
    </header>

    <nav>
        <a href="/home">Home</a> |
        <a href="/admin">Admin</a> |
        <a href="/pengadaan">Pengadaan</a>
    </nav>

    <div>
        <h2>Book Search</h2>
        <form action="search.php" method="get">
            <label for="search">Search by Book Title:</label>
            <input type="text" name="search" id="search" required>
            <button type="submit">Search</button>
        </form>
    </div>

    <div>
        <h2>All Books</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Kategori </th>
                    <th>Nama Buku</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Penerbit</th>
                </tr>
            </thead>
       <tbody>
                <!-- You can populate this table with data from the database -->

            </tbody>
        </table>
    </div>

</body>
</html>