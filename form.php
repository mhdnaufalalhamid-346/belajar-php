<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>FORM INPUT</h2>
    <form action="form_proses.php" method="POST">
        <div>
            <label for="">nama daerah</label><br>
            <input type="text" name="nama" required>            
        </div>
        <div>
            <label for="">kode pos</label><br>
            <input 
            type="text" 
            name="kode"
            minlength="5"
            maxlength="5"
            pattern="[0-9]{5}">
        </div>
        <br>
        <button type="submit">simpan data</button>
    </form>
</body>
</html>