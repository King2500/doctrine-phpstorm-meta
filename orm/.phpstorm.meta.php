<?php

namespace PHPSTORM_META {

	registerArgumentsSet('doctrine_hydration_modes',
		\Doctrine\ORM\AbstractQuery::HYDRATE_OBJECT,
		\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY,
		\Doctrine\ORM\AbstractQuery::HYDRATE_SCALAR,
		\Doctrine\ORM\AbstractQuery::HYDRATE_SINGLE_SCALAR,
		\Doctrine\ORM\AbstractQuery::HYDRATE_SIMPLEOBJECT
	);
	expectedArguments(\Doctrine\ORM\Query::setHydrationMode(), 0, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::setHydrationMode(), 0, argumentsSet('doctrine_hydration_modes'));
	expectedReturnValues(\Doctrine\ORM\AbstractQuery::getHydrationMode(), argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::getResult(), 0, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::getOneOrNullResult(), 0, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::getSingleResult(), 0, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::iterate(), 1, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::execute(), 1, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::executeIgnoreQueryCache(), 1, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::executeUsingQueryCache(), 1, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\Query::iterate(), 1, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\EntityManagerInterface::getHydrator(), 0, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\EntityManagerInterface::newHydrator(), 0, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\EntityManager::getHydrator(), 0, argumentsSet('doctrine_hydration_modes'));
	expectedArguments(\Doctrine\ORM\EntityManager::newHydrator(), 0, argumentsSet('doctrine_hydration_modes'));

	registerArgumentsSet('doctrine_orm_fetch_modes',
		\Doctrine\ORM\Mapping\ClassMetadataInfo::FETCH_EAGER,
		\Doctrine\ORM\Mapping\ClassMetadataInfo::FETCH_LAZY
	);
	expectedArguments(\Doctrine\ORM\AbstractQuery::setFetchMode(), 2, argumentsSet('doctrine_orm_fetch_modes'));

	registerArgumentsSet('doctrine_caches_impl',
		new \Doctrine\Common\Cache\ApcCache(),
		new \Doctrine\Common\Cache\ApcuCache(),
		new \Doctrine\Common\Cache\ArrayCache(),
		new \Doctrine\Common\Cache\ChainCache(),
		new \Doctrine\Common\Cache\CouchbaseBucketCache(),
		new \Doctrine\Common\Cache\ExtMongoDBCache(),
		new \Doctrine\Common\Cache\FilesystemCache(),
		new \Doctrine\Common\Cache\LegacyMongoDBCache(),
		new \Doctrine\Common\Cache\MemcachedCache(),
		new \Doctrine\Common\Cache\MongoDBCache(),
		new \Doctrine\Common\Cache\PhpFileCache(),
		new \Doctrine\Common\Cache\PredisCache(),
		new \Doctrine\Common\Cache\RedisCache(),
		new \Doctrine\Common\Cache\SQLite3Cache(),
		new \Doctrine\Common\Cache\VoidCache(),
		new \Doctrine\Common\Cache\WinCacheCache(),
		new \Doctrine\Common\Cache\ZendDataCache()
	);

	expectedArguments(\Doctrine\DBAL\Configuration::setResultCacheImpl(), 0, argumentsSet('doctrine_caches_impl'));
	expectedArguments(\Doctrine\DBAL\Cache\QueryCacheProfile::setResultCacheDriver(), 0, argumentsSet('doctrine_caches_impl'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::setResultCacheDriver(), 0, argumentsSet('doctrine_caches_impl'));
	expectedArguments(\Doctrine\ORM\Configuration::setQueryCacheImpl(), 0, argumentsSet('doctrine_caches_impl'));
	expectedArguments(\Doctrine\ORM\Configuration::setHydrationCacheImpl(), 0, argumentsSet('doctrine_caches_impl'));
	expectedArguments(\Doctrine\ORM\Configuration::setMetadataCacheImpl(), 0, argumentsSet('doctrine_caches_impl'));

	registerArgumentsSet('doctrine_cache_modes',
		\Doctrine\ORM\Cache::MODE_NORMAL,
		\Doctrine\ORM\Cache::MODE_GET,
		\Doctrine\ORM\Cache::MODE_PUT,
		\Doctrine\ORM\Cache::MODE_REFRESH
	);
	expectedArguments(\Doctrine\ORM\AbstractQuery::setCacheMode(), 0, argumentsSet('doctrine_cache_modes'));
	expectedArguments(\Doctrine\ORM\QueryBuilder::setCacheMode(), 0, argumentsSet('doctrine_cache_modes'));

	registerArgumentsSet('doctrine_cache_modes_flags',
		\Doctrine\ORM\Cache::MODE_NORMAL |
		\Doctrine\ORM\Cache::MODE_GET |
		\Doctrine\ORM\Cache::MODE_PUT |
		\Doctrine\ORM\Cache::MODE_REFRESH
	);
	expectedReturnValues(\Doctrine\ORM\AbstractQuery::getCacheMode(), argumentsSet('doctrine_cache_modes_flags'));
	expectedReturnValues(\Doctrine\ORM\QueryBuilder::getCacheMode(), argumentsSet('doctrine_cache_modes_flags'));

	registerArgumentsSet('doctrine_query_hints',
		\Doctrine\ORM\Query::HINT_REFRESH,
		\Doctrine\ORM\Query::HINT_CACHE_ENABLED,
		\Doctrine\ORM\Query::HINT_CACHE_EVICT,
		\Doctrine\ORM\Query::HINT_REFRESH_ENTITY,
		\Doctrine\ORM\Query::HINT_FORCE_PARTIAL_LOAD,
		\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS,
		\Doctrine\ORM\Query::HINT_CUSTOM_TREE_WALKERS,
		\Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
		\Doctrine\ORM\Query::HINT_INTERNAL_ITERATION,
		\Doctrine\ORM\Query::HINT_LOCK_MODE
	);
	expectedArguments(\Doctrine\ORM\Query::setHint(), 0, argumentsSet('doctrine_query_hints'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::setHint(), 0, argumentsSet('doctrine_query_hints'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::hasHint(), 0, argumentsSet('doctrine_query_hints'));
	expectedArguments(\Doctrine\ORM\AbstractQuery::getHint(), 0, argumentsSet('doctrine_query_hints'));

	registerArgumentsSet('doctrine_query_states',
		\Doctrine\ORM\Query::STATE_CLEAN,
		\Doctrine\ORM\Query::STATE_DIRTY
	);
	expectedReturnValues(\Doctrine\ORM\Query::getState(), argumentsSet('doctrine_query_states'));

	registerArgumentsSet('doctrine_querybuilder_types',
		\Doctrine\ORM\QueryBuilder::SELECT,
		\Doctrine\ORM\QueryBuilder::DELETE,
		\Doctrine\ORM\QueryBuilder::UPDATE
	);
	expectedReturnValues(\Doctrine\ORM\QueryBuilder::getType(), argumentsSet('doctrine_querybuilder_types'));

	registerArgumentsSet('doctrine_querybuilder_states',
		\Doctrine\ORM\QueryBuilder::STATE_CLEAN,
		\Doctrine\ORM\QueryBuilder::STATE_DIRTY
	);
	expectedReturnValues(\Doctrine\ORM\QueryBuilder::getState(), argumentsSet('doctrine_querybuilder_states'));

	registerArgumentsSet('doctrine_querybuilder_parts',
		'select', 'from', 'join', 'set', 'where', 'groupBy', 'having', 'orderBy'
	);
	expectedArguments(\Doctrine\ORM\QueryBuilder::add(), 0, argumentsSet('doctrine_querybuilder_parts'));
	expectedArguments(\Doctrine\ORM\QueryBuilder::resetDQLPart(), 0, argumentsSet('doctrine_querybuilder_parts'));

	registerArgumentsSet('doctrine_querybuilder_expr_dummy', '');
	expectedArguments(\Doctrine\ORM\QueryBuilder::where(), 0, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\QueryBuilder::andWhere(), 0, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\QueryBuilder::orWhere(), 0, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\QueryBuilder::having(), 0, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\QueryBuilder::andHaving(), 0, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\QueryBuilder::orHaving(), 0, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\Query\Expr::andX(), 0, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\Query\Expr::andX(), 1, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\Query\Expr::andX(), 2, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\Query\Expr::andX(), 3, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\Query\Expr::orX(), 0, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\Query\Expr::orX(), 1, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\Query\Expr::orX(), 2, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\Query\Expr::orX(), 3, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\Query\Expr\Base::add(), 0, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedArguments(\Doctrine\ORM\Query\Expr\Base::addMultiple(), 0, argumentsSet('doctrine_querybuilder_expr_dummy'));
	expectedReturnValues(\Doctrine\ORM\QueryBuilder::expr(), argumentsSet('doctrine_querybuilder_expr_dummy'));  // This does the trick ;-)

	registerArgumentsSet('doctrine_join_condition_types',
		\Doctrine\ORM\Query\Expr\Join::ON,
		\Doctrine\ORM\Query\Expr\Join::WITH
	);
	expectedArguments(\Doctrine\ORM\QueryBuilder::join(), 2, argumentsSet('doctrine_join_condition_types'));
	expectedArguments(\Doctrine\ORM\QueryBuilder::innerJoin(), 2, argumentsSet('doctrine_join_condition_types'));
	expectedArguments(\Doctrine\ORM\QueryBuilder::leftJoin(), 2, argumentsSet('doctrine_join_condition_types'));
	expectedReturnValues(\Doctrine\ORM\Query\Expr\Join::getConditionType(), argumentsSet('doctrine_join_condition_types'));

	registerArgumentsSet('doctrine_join_types',
		\Doctrine\ORM\Query\Expr\Join::INNER_JOIN,
		\Doctrine\ORM\Query\Expr\Join::LEFT_JOIN
	);
	expectedArguments(\Doctrine\ORM\Query\Expr\Join::__construct(), 0, argumentsSet('doctrine_join_types'));
	expectedReturnValues(\Doctrine\ORM\Query\Expr\Join::getJoinType(), argumentsSet('doctrine_join_types'));

	registerArgumentsSet('doctrine_comparison_operators',
		\Doctrine\ORM\Query\Expr\Comparison::EQ,
		\Doctrine\ORM\Query\Expr\Comparison::NEQ,
		\Doctrine\ORM\Query\Expr\Comparison::LT,
		\Doctrine\ORM\Query\Expr\Comparison::LTE,
		\Doctrine\ORM\Query\Expr\Comparison::GT,
		\Doctrine\ORM\Query\Expr\Comparison::GTE
	);
	expectedArguments(\Doctrine\ORM\Query\Expr\Comparison::__construct(), 1, argumentsSet('doctrine_comparison_operators'));
	expectedReturnValues(\Doctrine\ORM\Query\Expr\Comparison::getOperator(), argumentsSet('doctrine_comparison_operators'));

	registerArgumentsSet('doctrine_order_directions', 'ASC', 'DESC');
	expectedArguments(\Doctrine\ORM\QueryBuilder::orderBy(), 1, argumentsSet('doctrine_order_directions'));
	expectedArguments(\Doctrine\ORM\QueryBuilder::addOrderBy(), 1, argumentsSet('doctrine_order_directions'));
	expectedArguments(\Doctrine\ORM\Query\Expr\OrderBy::__construct(), 1, argumentsSet('doctrine_order_directions'));
	expectedArguments(\Doctrine\ORM\Query\Expr\OrderBy::add(), 1, argumentsSet('doctrine_order_directions'));

	registerArgumentsSet('doctrine_lifecycle_events',
		\Doctrine\ORM\Events::postLoad,
		\Doctrine\ORM\Events::prePersist,
		\Doctrine\ORM\Events::postPersist,
		\Doctrine\ORM\Events::preUpdate,
		\Doctrine\ORM\Events::postUpdate,
		\Doctrine\ORM\Events::preRemove,
		\Doctrine\ORM\Events::postRemove,
		\Doctrine\ORM\Events::preFlush,
		\Doctrine\ORM\Events::onFlush,
		\Doctrine\ORM\Events::postFlush
	);
	expectedArguments(\Doctrine\ORM\Event\ListenersInvoker::getSubscribedSystems(), 1, argumentsSet('doctrine_lifecycle_events'));
	expectedArguments(\Doctrine\ORM\Event\ListenersInvoker::invoke(), 1, argumentsSet('doctrine_lifecycle_events'));

	registerArgumentsSet('doctrine_listener_invoke',
		\Doctrine\ORM\Event\ListenersInvoker::INVOKE_NONE |
		\Doctrine\ORM\Event\ListenersInvoker::INVOKE_LISTENERS |
		\Doctrine\ORM\Event\ListenersInvoker::INVOKE_CALLBACKS |
		\Doctrine\ORM\Event\ListenersInvoker::INVOKE_MANAGER
	);
	expectedArguments(\Doctrine\ORM\Event\ListenersInvoker::invoke(), 4, argumentsSet('doctrine_listener_invoke'));
	expectedReturnValues(\Doctrine\ORM\Event\ListenersInvoker::getSubscribedSystems(), argumentsSet('doctrine_listener_invoke'));

	registerArgumentsSet('doctrine_rename_modes',
		\Doctrine\ORM\Query\ResultSetMappingBuilder::COLUMN_RENAMING_NONE,
		\Doctrine\ORM\Query\ResultSetMappingBuilder::COLUMN_RENAMING_CUSTOM,
		\Doctrine\ORM\Query\ResultSetMappingBuilder::COLUMN_RENAMING_INCREMENT
	);
	expectedArguments(\Doctrine\ORM\Query\ResultSetMappingBuilder::__construct(), 1, argumentsSet('doctrine_rename_modes'));
	expectedArguments(\Doctrine\ORM\Query\ResultSetMappingBuilder::addRootEntityFromClassMetadata(), 3, argumentsSet('doctrine_rename_modes'));
	expectedArguments(\Doctrine\ORM\Query\ResultSetMappingBuilder::addJoinedEntityFromClassMetadata(), 5, argumentsSet('doctrine_rename_modes'));
	expectedArguments(\Doctrine\ORM\Query\ResultSetMappingBuilder::getColumnAlias(), 1, argumentsSet('doctrine_rename_modes'));
	expectedArguments(\Doctrine\ORM\Query\ResultSetMappingBuilder::getColumnAliasMap(), 1, argumentsSet('doctrine_rename_modes'));

	registerArgumentsSet('doctrine_entity_states',
		\Doctrine\ORM\UnitOfWork::STATE_MANAGED,
		\Doctrine\ORM\UnitOfWork::STATE_NEW,
		\Doctrine\ORM\UnitOfWork::STATE_DETACHED,
		\Doctrine\ORM\UnitOfWork::STATE_REMOVED
	);
	expectedArguments(\Doctrine\ORM\UnitOfWork::getEntityState(), 1, argumentsSet('doctrine_entity_states'));
	expectedReturnValues(\Doctrine\ORM\UnitOfWork::getEntityState(), argumentsSet('doctrine_entity_states'));
}