<?php
ini_set("display_errors",1);error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("kotova/rudException.php");
include_once("kotova/Linear.php");
include_once("kotova/Quadratic.php");
include_once("kotova/Log.php");

$a = 1;
$b = 9;
$c = 1;

try {
	$solver = new kotova\Quadratic($a, $b, $c);
	$roots = $solver->ur2($a, $b, $c);
	
	if (is_array($roots)) {
		kotova\Log::log("two roots");
		kotova\Log::log("roots: " . $roots[0] . " " . $roots[1]);
	} else {
		kotova\Log::log("one root");
		kotova\Log::log("root: " . $roots);
	}
}catch(kotova\BTSException $ex) {
	kotova\Log::log($ex->getMessage());
}
kotova\Log::write();
?>
