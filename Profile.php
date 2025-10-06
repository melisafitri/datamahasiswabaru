<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #d5d9de;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            border-radius: 12px;
            padding: 40px 80px;
            box-shadow: 0 0 15px rgb(0 0 0 / 0.05);
            width: 700px;
            box-sizing: border-box;
        }
        h2 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 50px;
        }
        form {
            display: flex;
            justify-content: space-between;
        }
        .left, .right {
            display: flex;
            flex-direction: column;
            gap: 40px;
            width: 45%;
        }
        label {
            font-size: 12px;
            color: #a7a7a7;
            margin-bottom: 6px;
        }
        input[type="text"] {
            padding: 10px 15px;
            border-radius: 12px;
            border: 1px solid #85a7f2;
            outline: none;
            font-size: 14px;
            color: #5c5c5c;
            box-shadow: 0 2px 6px rgb(133 167 242 / 0.2);
            transition: box-shadow 0.3s ease;
        }
        input[type="text"]:focus {
            box-shadow: 0 4px 10px rgb(51 114 255 / 0.5);
        }
        .btn-container {
            width: 100%;
            margin-top: 40px;
            display: flex;
            justify-content: center;
        }
        button {
            background-color: #ff3333;
            border: none;
            color: white;
            padding: 12px 80px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 14px;
            box-shadow: 0 6px 15px rgb(58 148 255 / 0.6);
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #000000ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Profile Mahasiswa</h2>
        <form action="#" method="post">
            <div class="left">
                <div>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
                </div>
                <div>
                    <label for="npm">NPM</label>
                    <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" required>
                </div>
            </div>
            <div class="right">
                <div>
                    <label for="jurusan">Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan" required>
                </div>
                <div>
                    <label for="program">Program Studi</label>
                    <input type="text" id="program" name="program" placeholder="Masukkan Program Studi" required>
                </div>
            </div>
            <div class="btn-container">
                <button type="submit">Logout</button>
            </div>
        </form>
    </div>
</body>
</html>
