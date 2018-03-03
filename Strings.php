
function getStardate(void) {
 	$offset = 2000;
  	$seconds_per_stardate = 31449.6; // is the number of seconds in a year divided by 1000, for hopefully obvious reasons
  	return time() / $seconds_per_stardate + $offset;
}
