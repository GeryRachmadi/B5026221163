<html>
    <head>
        <!-- div di seluruh halaman ini, diset seperti i block -->
     <link rel="stylesheet" href="mystyle.css">
        <style>
    div {
            color :green ;
            font-weight: bold ;
            text-align: right ;
    }
    .judulhalaman {
            text-align: center ;
            font-size: large ;
    }
        </style>

    </head>

    <body>
        <div class="judulhalaman">Selamat Datang</div>
        <!-- Inline CSS, digunakan ketika ada spesifik ke 1 bagian saja-->
        <p  style="text-decoration: line-through;
        color:brown ;
        ">Hallo! Apa kabarnya?</p>
        <!-- Inpage CSS, digunakan ketika ada yang spesifik ke-1 halaman khusus -->
        <div>Hallo! Apa kabarnya?</div>
        <!-- External CSS, digunakan untuk format umum 1 website-->
        <span>Hallo! Apa kabarnya?</span>\
        <p>Bagian terakhir</p>
    </body>
</html>
