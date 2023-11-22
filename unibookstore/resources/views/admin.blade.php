<!-- admin.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIBOOKSTORE - Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        
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
        form {
            margin-bottom: 20px;
        }
        form input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <header>
        <h1>UNIBOOKSTORE</h1>
    </header>

 

    <nav>
        <a href="/index">Home</a> |
        <a href="/admin">Admin</a> |
        <a href="/pengadaan">Pengadaan</a>
    </nav>
  
    <div>
        <h2>Tambah Buku</h2>
        <form action="{{route('data_buku')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="id">ID Buku:</label>
            <input type="text" name="Data_Buku" id="Data_Buku" required>

            
            <label for="kategori">Kategori:</label>
            <input type="text" name="Kategori" id="Kategori" required>

            <label for="name">Nama Buku:</label>
            <input type="text" name="Nama_Buku" id="Nama_Buku" required>

            <label for="harga">Harga:</label>
            <input type="number" name="Harga" id="Harga" required>

            <label for="stok">Stok:</label>
            <input type="number" name="Stok" id="Stok" required>

            <label for="idp">Penerbit:</label>
            <input type="text" name="Penerbit" id="Penerbit" required> 

            <input type="submit" value="Tambah Buku">
            
        </form> 

        

        <h2>Tambah Penerbit</h2>
        <form action="{{url('admin')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="publisher-name">ID Penerbit:</label>
            <input type="text" name="ID_Penerbit" id="ID_Penerbit" required>

            <label for="publisher-address">Nama:</label>
            <input type="text" name="Nama" id="Nama" required>

            <label for="publisher-city">Alamat:</label>
            <input type="text" name="Alamat" id="Alamat" required>

            <label for="publisher-city">Kota:</label>
            <input type="text" name="Kota" id="Kota" required>

            <label for="publisher-phone">Telepon:</label>
            <input type="number" name="Telepon" id="Telepon" required>

            <input type="submit" value="Tambah Penerbit">
        </form>



        <h2>Daftar Buku</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Nama Buku</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>ID Penerbit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT *FROM daftarbuku JOIN authors ON daftarbuku.Id_Penerbit = authors.ID"; 
                ?>
              
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

</body>
</html>