<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan AJAX & Validasi Lanjutan</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan AJAX & Validasi Lanjutan</h1>
    
    <div id="server-response" style="margin-bottom: 15px; font-weight: bold;"></div>

    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); 
                
                var form = $(this);
                var url = form.attr('action');
                var formData = form.serialize();
                
                var nama = $("#nama").val().trim();
                var email = $("#email").val().trim();
                var password = $("#password").val(); // Ambil nilai password
                var valid = true;

                // --- 1. Validasi Sisi Klien ---
                
                // Validasi Nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi Email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }
                
                // Validasi Password (Minimal 8 Karakter)
                if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }


                // --- 2. Pengiriman AJAX jika Validasi Berhasil ---

                if (valid) {
                    $("#server-response").html(""); 
                    
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: formData,
                        dataType: "json",
                        
                        beforeSend: function() {
                             form.find('input[type="submit"]').val('Mengirim...').prop('disabled', true); 
                        },
                        
                        success: function(response) {
                            if (response.success) {
                                $("#server-response").html('<span style="color: green;">' + response.message + '</span>');
                                form[0].reset(); // Kosongkan form
                            } else {
                                $("#server-response").html('<span style="color: red;">' + response.message + '</span>');
                            }
                        },
                        
                        error: function(xhr, status, error) {
                            $("#server-response").html('<span style="color: red;">Terjadi kesalahan: ' + status + '</span>');
                        },
                        
                        complete: function() {
                            form.find('input[type="submit"]').val('Submit').prop('disabled', false); 
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>