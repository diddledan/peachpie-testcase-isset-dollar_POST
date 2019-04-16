<?php

if ( isset( $_POST ) ) {
	echo '$_POST is set'; // This is reported as PHP5011: Unreachable code detected
} else {
	echo '$_POST is not set';
}
