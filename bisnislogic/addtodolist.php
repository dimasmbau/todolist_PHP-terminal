<?php

function addtodolist($todo){
    
    //di panggil dulu tempat penampung varibale todo menggunakan global karena varible tersebut tidak tidak terdapt di lokal
    //tetapi di global
    global $todolist;

    //di cek dulu penambahan todo terletak pada nomer berapa menggunakan "sizeof" fungsi dari php kemudian di +1
    //untuk memasukkan nilai size ke key value
    $number = sizeof($todolist) + 1;

    //hasilnya seperti ini
    //ketika sudah mendapatkan "sizeof" + 1 maka, nilai tersebut di gunakan untuk menambahkan key value sesuai dengan urutan
    $todolist[$number] = $todo;
}