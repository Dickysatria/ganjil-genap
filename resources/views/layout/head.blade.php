<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cetak Ganjil Genap</title>
    <style>
        .container {
        max-width: 950px;
        padding: 0 20px;
        margin: 0 auto;
        }
        .form {
        align-items: center;
        }
        .heading2 {
        padding-top: 20px;
        padding-bottom: 10px;
        /* color: #000;
        border-bottom: 2px solid #dee7ec; */
        text-align: center;
        }

        input {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        .submit {
        width: 100%;
        background-color: #4caf50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        .submit:hover {
        background-color: #45a049;
        }

        h3 {
        text-align: center;
        }
    </style>
</head>
<body>
    <div class="py-4">
        @yield('content')
    </div>
</body>
</html>
