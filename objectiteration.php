<?php
/// Cara membuat iterasi data pada properties secara manual
class Data implements IteratorAggregate
{
    var string $first = 'First';
    public string $sec = 'Second';
    protected string $third = 'Third';
    private string $forth = 'Forth';

    function getIterator(): Traversable
    {

        $array = [
            'first' => $this->first,
            'sec' => $this->sec,
            'third' => $this->third,
            'forth' => $this->forth,
        ];
        return new ArrayIterator($array);

        /// Bisa juga pake yield
        // yield 'first' => $this->first;
        // yield 'sec' => $this->sec;
        // yield 'third' => $this->third;
        // yield 'forth' => $this->forth;
    }
}



$data = new Data();

// Ketika melakukan perulangan foreach, maka php akan manggil funct getIterator
foreach ($data as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
