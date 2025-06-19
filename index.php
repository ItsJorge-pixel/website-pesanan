<!DOCTYPE html>
<html>
<head>
  <title>Form Pre-Order Es Mambo</title>
  <style>
    body { font-family: sans-serif; background: #f9f5f0; padding: 30px; }
    form { background: #fff; padding: 20px; border-radius: 10px; width: 300px; margin: auto; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    input, select, textarea { width: 100%; margin-bottom: 10px; padding: 8px; border: 1px solid #ccc; border-radius: 6px; }
    button { padding: 10px; background: #dcb18c; border: none; color: white; border-radius: 6px; cursor: pointer; }
    button:hover { background: #c89c74; }
  </style>
</head>
<body>

<h2 align="center">Pre-Order Es Mambo</h2>

<form method="POST" action="proses.php">
  <label>Nama</label>
  <input type="text" name="nama" required>

  <label>Alamat</label>
  <textarea name="alamat" required></textarea>

  <label>Pilih Rasa</label>
  <select name="rasa" required>
    <option value="Mangga">Mangga</option>
    <option value="Jeruk">Jeruk</option>
    <option value="Blewah">Blewah</option>
    <option value="Taro">Taro</option>
  </select>

  <label>Jumlah</label>
  <input type="number" name="jumlah" min="1" required>

  <button type="submit">Pesan Sekarang</button>

  <label for="catatan">Catatan:</label>
<textarea name="catatan" id="catatan" rows="3" placeholder="Tulis permintaan khusus di sini..."></textarea>
<br><br>

</form>

</body>
</html>
