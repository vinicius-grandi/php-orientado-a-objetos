<?php
class Extendia {
    function extender() {
        echo "Fui extendido.";
    }
}

class Extensor extends Extendia {
}

$extensor = new Extensor;
$extensor->extender();