<?php

class TitleCaseGenerator
{
	function makeTitleCase($input_title)
	{
		$input_title = strtolower($input_title);
		$reserved_word = array("from", "and", "or", "the", "to", "on");
	    $input_array_of_words = explode(" ", $input_title);
	    $output_titlecased = array();
	    foreach ($input_array_of_words as $word) {
			if(in_array($word, $reserved_word)) {
				array_push($output_titlecased, lcfirst($word));
			} else {
				array_push($output_titlecased, ucfirst($word));
			}
		}
		$output_titlecased[0] = ucfirst($output_titlecased[0]);

	    return implode(" ", $output_titlecased);
	}
}

?>
