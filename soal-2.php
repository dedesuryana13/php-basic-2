<?php
    echo "<h3>Soal No 2 Reverse String</h3>";
    /* 
    Soal No 2
    Reverse String
    Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
    Function reverseString menerima satu parameter berupa string.
    NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!
    
    reverseString("abdul");
    Output: ludba
    */
    
    // Code function di sini
    function reverseString($shopi) {
        $length = strlen($shopi);
        $bolakBalikHuruf = '';
        for ($i = $length - 1; $i >= 0; $i--) {
            $bolakBalikHuruf .= $shopi[$i];
        }
        echo($bolakBalikHuruf . "<br>");
    }
    
    // Hapus komentar di bawah ini untuk jalankan Code
    reverseString("mx king");
    reverseString("fz1r");
    reverseString("motor yang tidak bisa dicapai");
?>