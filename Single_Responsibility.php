<?php

//Single Responsibility 
// اصل یا تک وظیفگی می‌گوید که هر ماژول یا کلاس برنامه فقط باید در راستای یک هدف فعالیت کند


interface  Product
{
    public function create ();
    public function update();
}

interface ShowProduct {
     public function show($number);
}

?>