<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form AJAX dengan PHP dan jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body { font-family: Arial, sans-serif; }
        #hasil {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #007bff; 
            background-color: #e9f7ff;
        }
    </style>
</head>
<body>
    <h2>Form Contoh</h2>
    
    <form id="myForm">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        
        <br><br>
        
        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        
        <br>
        
        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        
        <br>
        
        <input type="submit" value="Submit">
    </form>
    
    <div id="hasil">
        Hasil akan muncul di sini setelah klik Submit.
    </div>

    <script>
    $(document).ready(function () {
        $("#myForm").submit(function (e) {
            e.preventDefault(); 

            var formData = $("#myForm").serialize();

            $.ajax({
                url: "proses_lanjut.php", 
                type: "POST", 
                data: formData, 
                success: function (response) {
                    $("#hasil").html("<strong>Hasil Diterima (AJAX):</strong><br>" + response);
                },
                error: function () {
                    $("#hasil").html("Terjadi kesalahan saat mengirim data ke server.");
                }
            });
        });
    });
    </script>
</body>
</html>