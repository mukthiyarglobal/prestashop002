<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('bn-BD', array (
));

$catalogueBn = new MessageCatalogue('bn', array (
));
$catalogue->addFallbackCatalogue($catalogueBn);

return $catalogue;
