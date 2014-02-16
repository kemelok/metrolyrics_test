<?php

function static_url () {
	// I like having this wrapped as in the future you might want to add version numbers, or change path locations
	return base_url() . STATIC_LOC;
}
