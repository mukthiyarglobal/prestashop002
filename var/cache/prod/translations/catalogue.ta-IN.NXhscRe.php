<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ta-IN', array (
));

$catalogueTa = new MessageCatalogue('ta', array (
));
$catalogue->addFallbackCatalogue($catalogueTa);

return $catalogue;
