<?php

	require_once "src/TitleCaseGenerator.php";

	class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
	{
		function test_makeTitleCase_oneLetter()
		{
			//It capitalizes a single letter
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "a";

			//Act
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals("A", $result);
		}

		function test_makeTitleCase_oneWord()
		{	//It capitalizes the first letter of a single word
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "deadbeef";

			//Act
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals("Deadbeef", $result);
		}

		function test_makeTitleCase_multpleWords()
		{   //It capitalizes a each the first letter in each word in a string
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "homer simpson";

			//Act
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals("Homer Simpson", $result);
		}

		function test_makeTitleCase_desigWords()
		{	//It does not capitalize ariticles, conjuntions, and prepositions
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "beowulf from brighton beach";

			//Act
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals("Beowulf from Brighton Beach", $result);
		}

		function test_makeTitleCase_firstDesigWords()
		{	//It capitalizes ariticles, conjuntions, and prepositions only if they are the first word in a string.
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "from beowulf to the hulk";

			//Act
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals("From Beowulf to the Hulk", $result);
		}

		function test_makeTitleCase_nonLetter()
		{//It handles non-letter characters
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "57 beowulf endings!!";

			//Act
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals("57 Beowulf Endings!!", $result);
		}

		function test_makeTitleCase_allCap()
		{//It handles "ALL CAPS" strings and returns title case formate
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "BEOWULF ON THE ROCKS";

			//Act
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals("Beowulf on the Rocks", $result);
		}

		function test_makeTitleCase_mixedCap()
		{//It handles "MiXeD cApS" strings and returns title case format
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "BeoWulf aNd mE";

			//Act
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals("Beowulf and Me", $result);
		}

		function test_makeTitleCase_uniqueStrings()
		{//It handles unique strings like "O'Malley" or "McCool"
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "here's to beowulf and McDuff and O'Malley";

			//Act
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals("Here's to Beowulf and McDuff and O'Malley", $result);
		}

	}
?>
