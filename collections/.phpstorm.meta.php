<?php

namespace PHPSTORM_META {

	registerArgumentsSet('doctrine_comparison_operators',
		\Doctrine\Common\Collections\Expr\Comparison::EQ,
		\Doctrine\Common\Collections\Expr\Comparison::NEQ,
		\Doctrine\Common\Collections\Expr\Comparison::LT,
		\Doctrine\Common\Collections\Expr\Comparison::LTE,
		\Doctrine\Common\Collections\Expr\Comparison::GT,
		\Doctrine\Common\Collections\Expr\Comparison::GTE,
		\Doctrine\Common\Collections\Expr\Comparison::IS,
		\Doctrine\Common\Collections\Expr\Comparison::IN,
		\Doctrine\Common\Collections\Expr\Comparison::NIN,
		\Doctrine\Common\Collections\Expr\Comparison::CONTAINS,
		\Doctrine\Common\Collections\Expr\Comparison::MEMBER_OF,
		\Doctrine\Common\Collections\Expr\Comparison::STARTS_WITH,
		\Doctrine\Common\Collections\Expr\Comparison::ENDS_WITH
	);
	expectedArguments(\Doctrine\Common\Collections\Expr\Comparison::__construct(), 1, argumentsSet('doctrine_comparison_operators'));
	expectedReturnValues(\Doctrine\Common\Collections\Expr\Comparison::getOperator(), argumentsSet('doctrine_comparison_operators'));

	registerArgumentsSet('doctrine_composite_expressions',
		\Doctrine\Common\Collections\Expr\CompositeExpression::TYPE_AND,
		\Doctrine\Common\Collections\Expr\CompositeExpression::TYPE_OR
	);
	expectedArguments(\Doctrine\Common\Collections\Expr\CompositeExpression::__construct(), 0, argumentsSet('doctrine_composite_expressions'));
	expectedReturnValues(\Doctrine\Common\Collections\Expr\CompositeExpression::getType(), argumentsSet('doctrine_composite_expressions'));

//	registerArgumentsSet('doctrine_orderings', array(
//		\Doctrine\Common\Collections\Criteria::ASC,
//		\Doctrine\Common\Collections\Criteria::DESC
//	));
//	expectedArguments(\Doctrine\Common\Collections\Criteria::__construct(), 1, argumentsSet('doctrine_orderings'));
//	expectedArguments(\Doctrine\Common\Collections\Criteria::orderBy(), 0, argumentsSet('doctrine_orderings'));
//	expectedReturnValues(\Doctrine\Common\Collections\Criteria::getOrderings(), argumentsSet('doctrine_orderings'));
}