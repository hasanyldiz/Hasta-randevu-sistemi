<!DOCTYPE html>
<html>
<head>
    <title>Randevu Talep Formu</title>
    <style>
        /* Form Container */
.user-details {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 20px;
}

/* Input Box */
.input-box {
  position: relative;
}

.input-box input,
.input-box select,
.input-box textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
  transition: border-color 0.3s;
}

.input-box input:focus,
.input-box select:focus,
.input-box textarea:focus {
  border-color: #3498db;
}

/* Radio Buttons */
.gender-details {
  display: flex;
  align-items: center;
  margin-top: 10px;
}

.gender-tittle {
  margin-right: 10px;
}

.category {
  display: flex;
  gap: 10px;
}

/* Submit Button */
.button input[type="submit"] {
  background-color: #3498db;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.button input[type="submit"]:hover {
  background-color: #2980b9;
}

/* General Styling */
.col {
  flex-basis: calc(50% - 10px);
}

.w-100 {
  width: 100%;
}

.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
  transition: border-color 0.3s;
}

.form-text {
  font-size: 12px;
  color: #777;
}

/* Password Visibility Button */
.button__password-visibility {
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}

/* Error Messages */
.form__label--error {
  color: #e74c3c;
  font-size: 12px;
  margin-top: 5px;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>KAYIT OL</h2>
        <form method="post" action="../index.php?route=Register@AddHasta" class="login__form">
            <div class="user-details">
                <div class="col">
                    <div class="input-box">
                        <span class="details">Kullunaıcı adı</span>
                        <input type="text" name="Username" required>
                    </div>
                </div>
                <div class="col">
                    <div class="input-box">
                        <span class="details">Şifre</span>
                        <input type="text" name="Userpassword" required>
                    </div>
                </div>                <div class="col">
                    <div class="input-box">
                        <span class="details">İsim Soyisim</span>
                        <input type="text" name="HastaIsimsoyisim" required>
                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="input-box">
                        <span class="details">E-Posta</span>
                        <input type="email" class="form-control" name="HastaEposta" required>
                        <small class="form-text text-muted">E-postanızı asla başka biriyle paylaşmayacağız.</small>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <div class="input-box">
                        <span class="details">Telefon</span>
                        <input type="text" class="form-control" name="HastaTelefon" id="telefonNumarasi" value="">
                    </div>
                </div>
                
                <div class="w-100"></div>
                <div class="col">
                    <div class="input-box">
                        <span class="details">Doğum Tarihi</span>
                        <input type="date" name="HastaDogumtarihi" required>
                    </div>
                </div>
                
            </div>
            

            
            <div class="col">
                <div class="gender-details">
                    <input type="radio" name="HastaCinsiyeti" id="dot-1" value="Erkek">
                    <input type="radio" name="HastaCinsiyeti" id="dot-2" value="Kadın">
                    <input type="radio" name="HastaCinsiyeti" id="dot-3" value="Diğer">
                    <span class="gender-tittle">Cinsiyet</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Erkek</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Kız</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Söylemek İstemiyorum</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="KAYDET">
            </div>
        </form>
    </div>
</body>
</html>
