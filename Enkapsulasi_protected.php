<?php
class person
{
    Protected $name;
    function set_name($new_name)
    {
        $this->name = $new_name;
    }

    function get_name()
    {
        return $this->name;
    }
}

    $person1 = new Person();
    //set value dari properti name
    $person1->set_name('Lukman Hakim')
    //akses value dari properti name
    echo $person1->get_name;
    //properti tidak bisa diakses secara langsung karena muncul
    echo 'hai ' . $person1->name = 'Taufiq Rizaldi';
    echo "<hr>";
    ?>