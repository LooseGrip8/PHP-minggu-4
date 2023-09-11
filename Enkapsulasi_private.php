<?php
class person
{
    private $name;
    function set_name($new_name)
    {
        $this->name = $new_name;
    }

    function get_name()
    {
        return $this->name;
    }
}
?>

<?php
$person1 = new Person();

//properti bisa diakses secara laangsung

echo 'hai ' . $person1->name = 'Taufiq Rizaldi';
echo "<hr>";

//method tidak bisa diakses secara langsung
echo $person1->get_name();
?>