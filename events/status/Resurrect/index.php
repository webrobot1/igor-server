<?php
// на случай если мы в админке накинули жизней мертову существу у которого висит это событие
if ($object->components->get('hp') == 0)
{
	$object->action="resurrect";
	$object->components->add('hp', 1);
	$object->events->get('status/regenerationhp')->resetTimeout();		// не забудем сбросить таймаут регенерации что бы он шел с сомента воскрешения заного
	$object->events->get('status/regenerationmp')->resetTimeout();		// не забудем сбросить таймаут регенерации что бы он шел с сомента воскрешения заного
}