<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hi-IN', array (
));

$catalogueHi = new MessageCatalogue('hi', array (
));
$catalogue->addFallbackCatalogue($catalogueHi);

return $catalogue;
