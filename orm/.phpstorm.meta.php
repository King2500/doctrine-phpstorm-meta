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

	registerArgumentsSet('doctrine_cache_modes_flags',
		\Doctrine\ORM\Cache::MODE_NORMAL |
		\Doctrine\ORM\Cache::MODE_GET |
		\Doctrine\ORM\Cache::MODE_PUT |
		\Doctrine\ORM\Cache::MODE_REFRESH
	);
	expectedReturnValues(\Doctrine\ORM\AbstractQuery::getCacheMode(), argumentsSet('doctrine_cache_modes_flags'));

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
	expectedReturnValues(\Doctrine\ORM\Query::setHint(), 0, argumentsSet('doctrine_query_hints'));
	expectedReturnValues(\Doctrine\ORM\AbstractQuery::setHint(), 0, argumentsSet('doctrine_query_hints'));
	expectedReturnValues(\Doctrine\ORM\AbstractQuery::hasHint(), 0, argumentsSet('doctrine_query_hints'));
	expectedReturnValues(\Doctrine\ORM\AbstractQuery::getHint(), 0, argumentsSet('doctrine_query_hints'));

	registerArgumentsSet('doctrine_query_states',
		\Doctrine\ORM\Query::STATE_CLEAN,
		\Doctrine\ORM\Query::STATE_DIRTY
	);
	expectedReturnValues(\Doctrine\ORM\Query::getState(), argumentsSet('doctrine_query_states'));
}