<?php

	require_once "src/TitleCaseGenerator.php";

	class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
	{

		function test_makeTitleCase_oneWord()
		{
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "deadbeef";

			//Act 
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals("Deadbeef", $result);
		}

		function test_makeTitleCase_multpleWords()
		{
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "homer simpson";

			//Act 
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals("Homer Simpson", $result);
		}
	}

?>