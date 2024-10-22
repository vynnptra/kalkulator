<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300">
    <fieldset class="text-center border-2 border-black mt-40 ml-64 rounded-3xl bg-gray-100 shadow shadow-2xl" style="width:50rem; height: 20rem;">
        <div>
            <h1  class="text-3xl font-bold mt-8">Kalku<span class="text-yellow-600">lator</span> </h1>
            <div class="mt-12">
                <form method="GET" action="">
                    <input type="number" name="angka1" id="angka1" placeholder="Masukkan angka" required class="border-2 border-black rounded">
                    <select name="operator" id="operator" class="border-2 border-black rounded" required style="width:3rem; height:2rem">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        <option value="%">%</option>
                    </select>
                    <input type="number" name="angka2" id="angka2" placeholder="Masukkan angka" required class="border-2 border-black rounded">
                </div>
                    <button class="m-4 border border-black rounded shadow shadow-2xl w-20 h-8 text-center font-bold hover:bg-yellow-600 hover:scale-110 hover:text-white transition-all duration-150" type="submit">Hitung</button>
                </form>
        </div>
        <?php 
    $hasil = 0;

    if (isset($_GET['angka1'], $_GET['angka2'], $_GET['operator'])) {
        $angka1 = $_GET['angka1'];
        $angka2 = $_GET['angka2'];
        $operator = $_GET['operator'];

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                $hasil = $angka2 != 0 ? $angka1 / $angka2 : 'Tidak terdefenisikan';
                break;
            case '%':
                $hasil = $angka1 % $angka2;
                break;
        }
    }
    ?>

        <p class="font-bold ">Hasil: <?php echo $angka1 . ' ' . $operator . ' ' . $angka2 . ' = ' . $hasil; ?></p>
    </fieldset>

 
 


</body>
</html>