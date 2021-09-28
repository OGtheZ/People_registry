<?php
require_once "vendor/autoload.php";

use App\Person;
use App\Registry;
use App\Storage\CSVStorage;

$storage = new CSVStorage('storage/Registry.csv');
$registry = new Registry($storage->read());

if (isset($_POST["addButton"]))
{
    if ($_POST["name"] !== "" && $_POST["surname"] !== "" && $_POST["IDnumber"] !== "")
    {
        $registry->add(new Person($_POST["name"], $_POST["surname"], $_POST["IDnumber"], $_POST["description"]));
    }
    $storage->save($registry->getPeople());
    header("Location: /");
}

if (isset($_GET["searchButton"]))
{
    if ($_GET["search"] !== "")
    {
        $person = $registry->searchForPerson($_GET["search"]);
        if ($person === null)
        {
            echo "Person not found!";
        } else {
            echo $person->getName() . " ," . $person->getSurname() . " ," . $person->getIDNumber() . " ," . $person->getDescription();
        }
    }
}

if (isset($_GET["deleteButton"]))
{
    $registry->removePerson($_GET["delete"]);
    $storage->save($registry->getPeople());
}
include "template.php";
