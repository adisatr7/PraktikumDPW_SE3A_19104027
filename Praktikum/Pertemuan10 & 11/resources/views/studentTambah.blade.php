<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1>Add Student</h1>
        <form action="/student/create" method="post">
            @csrf

            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" required>

            <br>

            <label for="name">Nama</label>
            <input type="text" name="name" id="name" required>

            <br>

            <label for="gender">Gender</label>
            <select name="gender" required id="">
                <option value="#" selected>Pilih</option>

                @foreach ($gender as $g)
                    <option value="{{$g}}">
                        {{$g}}
                    </option>
                @endforeach
            </select>

            <br>

            <label for="departement">Jurusan</label>
            <select name="departement" required id="">
                <option value="#" selected>Pilih</option>

                @foreach ($departement as $d)
                    <option value="{{$d}}">
                        {{$d}}
                    </option>
                @endforeach
            </select>

            <br>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>

            <br>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
