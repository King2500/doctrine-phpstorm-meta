<?php

namespace PHPSTORM_META {

	registerArgumentsSet('doctrine_annotation_targets',
		\Doctrine\Common\Annotations\Annotation\Target::TARGET_CLASS |
		\Doctrine\Common\Annotations\Annotation\Target::TARGET_METHOD |
		\Doctrine\Common\Annotations\Annotation\Target::TARGET_PROPERTY |
		\Doctrine\Common\Annotations\Annotation\Target::TARGET_ANNOTATION |
		\Doctrine\Common\Annotations\Annotation\Target::TARGET_ALL
	);
	expectedArguments(\Doctrine\Common\Annotations\DocParser::setTarget(), 0, argumentsSet('doctrine_annotation_targets'));

	registerArgumentsSet('doctrine_lexer_tokens',
		\Doctrine\Common\Annotations\DocLexer::T_NONE,
		\Doctrine\Common\Annotations\DocLexer::T_INTEGER,
		\Doctrine\Common\Annotations\DocLexer::T_STRING,
		\Doctrine\Common\Annotations\DocLexer::T_FLOAT,
		\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER,
		\Doctrine\Common\Annotations\DocLexer::T_AT,
		\Doctrine\Common\Annotations\DocLexer::T_CLOSE_CURLY_BRACES,
		\Doctrine\Common\Annotations\DocLexer::T_CLOSE_PARENTHESIS,
		\Doctrine\Common\Annotations\DocLexer::T_COMMA,
		\Doctrine\Common\Annotations\DocLexer::T_EQUALS,
		\Doctrine\Common\Annotations\DocLexer::T_FALSE,
		\Doctrine\Common\Annotations\DocLexer::T_NAMESPACE_SEPARATOR,
		\Doctrine\Common\Annotations\DocLexer::T_OPEN_CURLY_BRACES,
		\Doctrine\Common\Annotations\DocLexer::T_OPEN_PARENTHESIS,
		\Doctrine\Common\Annotations\DocLexer::T_TRUE,
		\Doctrine\Common\Annotations\DocLexer::T_NULL,
		\Doctrine\Common\Annotations\DocLexer::T_COLON
	);
	expectedReturnValues(\Doctrine\Common\Annotations\DocLexer::getType(), argumentsSet('doctrine_lexer_tokens'));
	expectedArguments(\Doctrine\Common\Lexer\AbstractLexer::isNextToken(), 0, argumentsSet('doctrine_lexer_tokens'));
	//expectedArguments(\Doctrine\Common\Lexer\AbstractLexer::isNextTokenAny(), 0, array(argumentsSet('doctrine_lexer_tokens')));
	expectedArguments(\Doctrine\Common\Lexer\AbstractLexer::skipUntil(), 0, argumentsSet('doctrine_lexer_tokens'));
	expectedArguments(\Doctrine\Common\Lexer\AbstractLexer::isA(), 1, argumentsSet('doctrine_lexer_tokens'));
}