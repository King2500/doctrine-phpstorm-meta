<?php

namespace PHPSTORM_META {

	registerArgumentsSet('doctrine_mapping_types',
		\Doctrine\DBAL\Types\Type::STRING,
		\Doctrine\DBAL\Types\Type::INTEGER,
		\Doctrine\DBAL\Types\Type::BIGINT,
		\Doctrine\DBAL\Types\Type::SMALLINT,
		\Doctrine\DBAL\Types\Type::DECIMAL,
		\Doctrine\DBAL\Types\Type::FLOAT,
		\Doctrine\DBAL\Types\Type::TEXT,
		\Doctrine\DBAL\Types\Type::BINARY,
		\Doctrine\DBAL\Types\Type::BOOLEAN,
		\Doctrine\DBAL\Types\Type::DATETIME,
		\Doctrine\DBAL\Types\Type::DATETIME_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::DATETIMETZ,
		\Doctrine\DBAL\Types\Type::DATETIMETZ_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::DATE,
		\Doctrine\DBAL\Types\Type::DATE_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::TIME,
		\Doctrine\DBAL\Types\Type::TIME_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::DATEINTERVAL,
		\Doctrine\DBAL\Types\Type::TARRAY,
		\Doctrine\DBAL\Types\Type::SIMPLE_ARRAY,
		\Doctrine\DBAL\Types\Type::JSON_ARRAY,
		\Doctrine\DBAL\Types\Type::JSON,
		\Doctrine\DBAL\Types\Type::OBJECT,
		\Doctrine\DBAL\Types\Type::BLOB,
		\Doctrine\DBAL\Types\Type::GUID
	);
	expectedArguments(\Doctrine\DBAL\Types\Type::getType(), 0, argumentsSet('doctrine_mapping_types'));
	expectedArguments(\Doctrine\DBAL\Types\Type::hasType(), 0, argumentsSet('doctrine_mapping_types'));
	expectedArguments(\Doctrine\DBAL\Types\Type::overrideType(), 0, argumentsSet('doctrine_mapping_types'));
	expectedReturnValues(\Doctrine\DBAL\Types\Type::getName(), argumentsSet('doctrine_mapping_types'));
	expectedArguments(\Doctrine\DBAL\Connection::convertToDatabaseValue(), 1, argumentsSet('doctrine_mapping_types'));
	expectedArguments(\Doctrine\DBAL\Connection::convertToPHPValue(), 1, argumentsSet('doctrine_mapping_types'));
	expectedArguments(\Doctrine\DBAL\Platforms\AbstractPlatform::registerDoctrineTypeMapping(), 1, argumentsSet('doctrine_mapping_types'));
	expectedArguments(\Doctrine\DBAL\Schema\Table::addColumn(), 1, argumentsSet('doctrine_mapping_types'));
	expectedArguments(\Doctrine\ORM\Query\ResultSetMapping::addScalarResult(), 2, argumentsSet('doctrine_mapping_types'));
	expectedArguments(\Doctrine\ORM\Query\ResultSetMapping::addMetaResult(), 4, argumentsSet('doctrine_mapping_types'));

	registerArgumentsSet('doctrine_parameter_types',
		\Doctrine\DBAL\ParameterType::STRING,
		\Doctrine\DBAL\ParameterType::INTEGER,
		\Doctrine\DBAL\ParameterType::NULL,
		\Doctrine\DBAL\ParameterType::LARGE_OBJECT,
		\Doctrine\DBAL\ParameterType::BOOLEAN,
		\Doctrine\DBAL\ParameterType::BINARY
	);
	expectedArguments(\Doctrine\DBAL\Driver\Statement::bindValue(), 2, argumentsSet('doctrine_parameter_types'));
	expectedArguments(\Doctrine\DBAL\Driver\Statement::bindParam(), 2, argumentsSet('doctrine_parameter_types'));
	expectedReturnValues(\Doctrine\DBAL\Types\Type::getBindingType(), argumentsSet('doctrine_parameter_types'));
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::createNamedParameter(), 1, argumentsSet('doctrine_parameter_types'));
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::createPositionalParameter(), 1, argumentsSet('doctrine_parameter_types'));
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::setParameter(), 2, argumentsSet('doctrine_parameter_types'));
//	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::setParameters(), 2, array(argumentsSet('doctrine_parameter_types')));
	expectedReturnValues(\Doctrine\DBAL\Query\QueryBuilder::getParameterType(), argumentsSet('doctrine_parameter_types'));
//	expectedReturnValues(\Doctrine\DBAL\Query\QueryBuilder::getParameterTypes(), array(argumentsSet('doctrine_parameter_types')));
//	expectedArguments(\Doctrine\DBAL\Connection::fetchAll(), 2, array(argumentsSet('doctrine_parameter_types')));
//	expectedArguments(\Doctrine\DBAL\Connection::fetchAssoc(), 2, array(argumentsSet('doctrine_parameter_types')));
//	expectedArguments(\Doctrine\DBAL\Connection::fetchArray(), 2, array(argumentsSet('doctrine_parameter_types')));
//	expectedArguments(\Doctrine\DBAL\Connection::fetchColumn(), 3, array(argumentsSet('doctrine_parameter_types')));
//	expectedArguments(\Doctrine\DBAL\Connection::delete(), 2, array(argumentsSet('doctrine_parameter_types')));
//	expectedArguments(\Doctrine\DBAL\Connection::update(), 3, array(argumentsSet('doctrine_parameter_types')));
//	expectedArguments(\Doctrine\DBAL\Connection::insert(), 2, array(argumentsSet('doctrine_parameter_types')));
//	expectedArguments(\Doctrine\DBAL\Connection::extractTypeValues(), 1, array(argumentsSet('doctrine_parameter_types')));
	expectedArguments(\Doctrine\DBAL\Driver\Connection::quote(), 1, argumentsSet('doctrine_parameter_types'));
	expectedArguments(\Doctrine\DBAL\Query\Expression\ExpressionBuilder::literal(), 1, argumentsSet('doctrine_parameter_types'));

	registerArgumentsSet('doctrine_binding_types',
		\Doctrine\DBAL\Types\Type::STRING,
		\Doctrine\DBAL\Types\Type::INTEGER,
		\Doctrine\DBAL\Types\Type::BIGINT,
		\Doctrine\DBAL\Types\Type::SMALLINT,
		\Doctrine\DBAL\Types\Type::DECIMAL,
		\Doctrine\DBAL\Types\Type::FLOAT,
		\Doctrine\DBAL\Types\Type::TEXT,
		\Doctrine\DBAL\Types\Type::BINARY,
		\Doctrine\DBAL\Types\Type::BOOLEAN,
		\Doctrine\DBAL\Types\Type::DATETIME,
		\Doctrine\DBAL\Types\Type::DATETIME_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::DATETIMETZ,
		\Doctrine\DBAL\Types\Type::DATETIMETZ_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::DATE,
		\Doctrine\DBAL\Types\Type::DATE_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::TIME,
		\Doctrine\DBAL\Types\Type::TIME_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::DATEINTERVAL,
		\Doctrine\DBAL\Types\Type::TARRAY,
		\Doctrine\DBAL\Types\Type::SIMPLE_ARRAY,
		\Doctrine\DBAL\Types\Type::JSON_ARRAY,
		\Doctrine\DBAL\Types\Type::JSON,
		\Doctrine\DBAL\Types\Type::OBJECT,
		\Doctrine\DBAL\Types\Type::BLOB,
		\Doctrine\DBAL\Types\Type::GUID,
		\Doctrine\DBAL\ParameterType::STRING,
		\Doctrine\DBAL\ParameterType::INTEGER,
		\Doctrine\DBAL\ParameterType::NULL,
		\Doctrine\DBAL\ParameterType::LARGE_OBJECT,
		\Doctrine\DBAL\ParameterType::BOOLEAN,
		\Doctrine\DBAL\ParameterType::BINARY
	);
	expectedArguments(\Doctrine\DBAL\Statement::bindValue(), 2, argumentsSet('doctrine_binding_types'));
	expectedArguments(\Doctrine\ORM\QueryBuilder::setParameter(), 2, argumentsSet('doctrine_binding_types'));
	expectedArguments(\Doctrine\ORM\Query\Parameter::__construct(), 2, argumentsSet('doctrine_binding_types'));
	expectedArguments(\Doctrine\ORM\Query\Parameter::setValue(), 1, argumentsSet('doctrine_binding_types'));
	expectedReturnValues(\Doctrine\ORM\Query\Parameter::getType(), argumentsSet('doctrine_binding_types'));

	registerArgumentsSet('doctrine_binding_types_with_list',
		\Doctrine\DBAL\Types\Type::STRING,
		\Doctrine\DBAL\Types\Type::INTEGER,
		\Doctrine\DBAL\Types\Type::BIGINT,
		\Doctrine\DBAL\Types\Type::SMALLINT,
		\Doctrine\DBAL\Types\Type::DECIMAL,
		\Doctrine\DBAL\Types\Type::FLOAT,
		\Doctrine\DBAL\Types\Type::TEXT,
		\Doctrine\DBAL\Types\Type::BINARY,
		\Doctrine\DBAL\Types\Type::BOOLEAN,
		\Doctrine\DBAL\Types\Type::DATETIME,
		\Doctrine\DBAL\Types\Type::DATETIME_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::DATETIMETZ,
		\Doctrine\DBAL\Types\Type::DATETIMETZ_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::DATE,
		\Doctrine\DBAL\Types\Type::DATE_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::TIME,
		\Doctrine\DBAL\Types\Type::TIME_IMMUTABLE,
		\Doctrine\DBAL\Types\Type::DATEINTERVAL,
		\Doctrine\DBAL\Types\Type::TARRAY,
		\Doctrine\DBAL\Types\Type::SIMPLE_ARRAY,
		\Doctrine\DBAL\Types\Type::JSON_ARRAY,
		\Doctrine\DBAL\Types\Type::JSON,
		\Doctrine\DBAL\Types\Type::OBJECT,
		\Doctrine\DBAL\Types\Type::BLOB,
		\Doctrine\DBAL\Types\Type::GUID,
		\Doctrine\DBAL\ParameterType::STRING,
		\Doctrine\DBAL\ParameterType::INTEGER,
		\Doctrine\DBAL\ParameterType::NULL,
		\Doctrine\DBAL\ParameterType::LARGE_OBJECT,
		\Doctrine\DBAL\ParameterType::BOOLEAN,
		\Doctrine\DBAL\ParameterType::BINARY,
		\Doctrine\DBAL\Connection::PARAM_INT_ARRAY,
		\Doctrine\DBAL\Connection::PARAM_STR_ARRAY
	);
//	expectedArguments(\Doctrine\DBAL\Connection::executeQuery(), 2, array(argumentsSet('doctrine_binding_types_with_list')));
//	expectedArguments(\Doctrine\DBAL\Connection::executeCacheQuery(), 2, array(argumentsSet('doctrine_binding_types_with_list')));
//	expectedArguments(\Doctrine\DBAL\Connection::executeUpdate(), 2, array(argumentsSet('doctrine_binding_types_with_list')));
//	expectedArguments(\Doctrine\DBAL\SQLParserUtils::expandListParameters(), 2, array(argumentsSet('doctrine_binding_types_with_list')));

	registerArgumentsSet('doctrine_query_types',
		\Doctrine\DBAL\Query\QueryBuilder::SELECT,
		\Doctrine\DBAL\Query\QueryBuilder::DELETE,
		\Doctrine\DBAL\Query\QueryBuilder::UPDATE,
		\Doctrine\DBAL\Query\QueryBuilder::INSERT
	);
	expectedReturnValues(\Doctrine\DBAL\Query\QueryBuilder::getType(), argumentsSet('doctrine_query_types'));

	registerArgumentsSet('doctrine_query_states',
		\Doctrine\DBAL\Query\QueryBuilder::STATE_DIRTY,
		\Doctrine\DBAL\Query\QueryBuilder::STATE_CLEAN
	);
	expectedReturnValues(\Doctrine\DBAL\Query\QueryBuilder::getState(), argumentsSet('doctrine_query_states'));

	registerArgumentsSet('doctrine_query_parts',
		'select', 'from', 'join', 'set', 'where', 'groupBy', 'having', 'orderBy', 'values'
	);
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::add(), 0, argumentsSet('doctrine_query_parts'));
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::getQueryPart(), 0, argumentsSet('doctrine_query_parts'));
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::resetQueryPart(), 0, argumentsSet('doctrine_query_parts'));
//	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::resetQueryParts(), 0, array(argumentsSet('doctrine_query_parts')));

	registerArgumentsSet('doctrine_query_expr_dummy', '');
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::where(), 0, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::andWhere(), 0, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::orWhere(), 0, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::having(), 0, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::andHaving(), 0, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::orHaving(), 0, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\Expression\ExpressionBuilder::andX(), 0, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\Expression\ExpressionBuilder::andX(), 1, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\Expression\ExpressionBuilder::andX(), 2, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\Expression\ExpressionBuilder::andX(), 3, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\Expression\ExpressionBuilder::orX(), 0, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\Expression\ExpressionBuilder::orX(), 1, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\Expression\ExpressionBuilder::orX(), 2, argumentsSet('doctrine_query_expr_dummy'));
	expectedArguments(\Doctrine\DBAL\Query\Expression\ExpressionBuilder::orX(), 3, argumentsSet('doctrine_query_expr_dummy'));
	expectedReturnValues(\Doctrine\DBAL\Query\QueryBuilder::expr(), argumentsSet('doctrine_query_expr_dummy'));  // This does the trick ;-)

	registerArgumentsSet('doctrine_expression_operators',
		\Doctrine\DBAL\Query\Expression\ExpressionBuilder::EQ,
		\Doctrine\DBAL\Query\Expression\ExpressionBuilder::NEQ,
		\Doctrine\DBAL\Query\Expression\ExpressionBuilder::LT,
		\Doctrine\DBAL\Query\Expression\ExpressionBuilder::LTE,
		\Doctrine\DBAL\Query\Expression\ExpressionBuilder::GT,
		\Doctrine\DBAL\Query\Expression\ExpressionBuilder::GTE
	);
	expectedArguments(\Doctrine\DBAL\Query\Expression\ExpressionBuilder::comparison(), 1, argumentsSet('doctrine_expression_operators'));

	registerArgumentsSet('doctrine_order_directions', 'ASC', 'DESC');
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::orderBy(), 1, argumentsSet('doctrine_order_directions'));
	expectedArguments(\Doctrine\DBAL\Query\QueryBuilder::addOrderBy(), 1, argumentsSet('doctrine_order_directions'));

	registerArgumentsSet('doctrine_fetch_modes',
		\Doctrine\DBAL\FetchMode::MIXED,
		\Doctrine\DBAL\FetchMode::ASSOCIATIVE,
		\Doctrine\DBAL\FetchMode::NUMERIC,
		\Doctrine\DBAL\FetchMode::STANDARD_OBJECT,
		\Doctrine\DBAL\FetchMode::COLUMN,
		\Doctrine\DBAL\FetchMode::CUSTOM_OBJECT
	);
	expectedArguments(\Doctrine\DBAL\Connection::setFetchMode(), 0, argumentsSet('doctrine_fetch_modes'));
	expectedArguments(\Doctrine\DBAL\Statement::setFetchMode(), 0, argumentsSet('doctrine_fetch_modes'));
	expectedArguments(\Doctrine\DBAL\Statement::fetch(), 0, argumentsSet('doctrine_fetch_modes'));
	expectedArguments(\Doctrine\DBAL\Driver\ResultStatement::setFetchMode(), 0, argumentsSet('doctrine_fetch_modes'));
	expectedArguments(\Doctrine\DBAL\Driver\ResultStatement::fetch(), 0, argumentsSet('doctrine_fetch_modes'));

	registerArgumentsSet('doctrine_fetch_modes_with_fetch_func',
		\Doctrine\DBAL\FetchMode::MIXED,
		\Doctrine\DBAL\FetchMode::ASSOCIATIVE,
		\Doctrine\DBAL\FetchMode::NUMERIC,
		\Doctrine\DBAL\FetchMode::STANDARD_OBJECT,
		\Doctrine\DBAL\FetchMode::COLUMN,
		\Doctrine\DBAL\FetchMode::CUSTOM_OBJECT,
		\PDO::FETCH_FUNC
	);
	expectedArguments(\Doctrine\DBAL\Statement::fetchAll(), 0, argumentsSet('doctrine_fetch_modes'));
	expectedArguments(\Doctrine\DBAL\Driver\ResultStatement::fetchAll(), 0, argumentsSet('doctrine_fetch_modes'));

	registerArgumentsSet('pdo_cursor_orientations',
		\PDO::FETCH_ORI_NEXT,
		\PDO::FETCH_ORI_PRIOR,
		\PDO::FETCH_ORI_FIRST,
		\PDO::FETCH_ORI_LAST,
		\PDO::FETCH_ORI_ABS,
		\PDO::FETCH_ORI_REL
	);
	expectedArguments(\Doctrine\DBAL\Statement::fetch(), 1, argumentsSet('pdo_cursor_orientations'));
	expectedArguments(\Doctrine\DBAL\Driver\ResultStatement::fetch(), 1, argumentsSet('pdo_cursor_orientations'));

	registerArgumentsSet('doctrine_lock_modes',
		\Doctrine\DBAL\LockMode::NONE,
		\Doctrine\DBAL\LockMode::OPTIMISTIC,
		\Doctrine\DBAL\LockMode::PESSIMISTIC_READ,
		\Doctrine\DBAL\LockMode::PESSIMISTIC_WRITE
	);
	expectedArguments(\Doctrine\DBAL\Platforms\AbstractPlatform::appendLockHint(), 1, argumentsSet('doctrine_lock_modes'));
	expectedArguments(\Doctrine\ORM\Query::setLockMode(), 0, argumentsSet('doctrine_lock_modes'));
	expectedReturnValues(\Doctrine\ORM\Query::getLockMode(), argumentsSet('doctrine_lock_modes'));
	expectedArguments(\Doctrine\ORM\EntityManagerInterface::lock(), 1, argumentsSet('doctrine_lock_modes'));
	expectedArguments(\Doctrine\ORM\EntityManager::find(), 2, argumentsSet('doctrine_lock_modes'));
	expectedArguments(\Doctrine\ORM\Decorator\EntityManagerDecorator::find(), 2, argumentsSet('doctrine_lock_modes'));

	registerArgumentsSet('doctrine_transaction_isolation_levels',
		\Doctrine\DBAL\TransactionIsolationLevel::READ_UNCOMMITTED,
		\Doctrine\DBAL\TransactionIsolationLevel::READ_COMMITTED,
		\Doctrine\DBAL\TransactionIsolationLevel::REPEATABLE_READ,
		\Doctrine\DBAL\TransactionIsolationLevel::SERIALIZABLE
	);
	expectedArguments(\Doctrine\DBAL\Connection::setTransactionIsolation(), 0, argumentsSet('doctrine_transaction_isolation_levels'));
	expectedReturnValues(\Doctrine\DBAL\Connection::getTransactionIsolation(), argumentsSet('doctrine_transaction_isolation_levels'));
	expectedArguments(\Doctrine\DBAL\Platforms\AbstractPlatform::getSetTransactionIsolationSQL(), 0, argumentsSet('doctrine_transaction_isolation_levels'));
	expectedReturnValues(\Doctrine\DBAL\Platforms\AbstractPlatform::getDefaultTransactionIsolationLevel(), argumentsSet('doctrine_transaction_isolation_levels'));

	registerArgumentsSet('doctrine_trim_modes',
		\Doctrine\DBAL\Platforms\TrimMode::UNSPECIFIED,
		\Doctrine\DBAL\Platforms\TrimMode::LEADING,
		\Doctrine\DBAL\Platforms\TrimMode::TRAILING,
		\Doctrine\DBAL\Platforms\TrimMode::BOTH
	);
	expectedArguments(\Doctrine\DBAL\Platforms\AbstractPlatform::getTrimExpression(), 1, argumentsSet('doctrine_trim_modes'));

	registerArgumentsSet('doctrine_create_flags',
		\Doctrine\DBAL\Platforms\AbstractPlatform::CREATE_INDEXES |
		\Doctrine\DBAL\Platforms\AbstractPlatform::CREATE_FOREIGNKEYS
	);
	expectedArguments(\Doctrine\DBAL\Platforms\AbstractPlatform::getCreateTableSQL(), 1, argumentsSet('doctrine_create_flags'));

	registerArgumentsSet('doctrine_dateinterval_units',
		\Doctrine\DBAL\Platforms\DateIntervalUnit::SECOND,
		\Doctrine\DBAL\Platforms\DateIntervalUnit::MINUTE,
		\Doctrine\DBAL\Platforms\DateIntervalUnit::HOUR,
		\Doctrine\DBAL\Platforms\DateIntervalUnit::DAY,
		\Doctrine\DBAL\Platforms\DateIntervalUnit::WEEK,
		\Doctrine\DBAL\Platforms\DateIntervalUnit::MONTH,
		\Doctrine\DBAL\Platforms\DateIntervalUnit::QUARTER,
		\Doctrine\DBAL\Platforms\DateIntervalUnit::YEAR
	);
	expectedArguments(\Doctrine\DBAL\Platforms\AbstractPlatform::getDateArithmeticIntervalExpression(), 3, argumentsSet('doctrine_dateinterval_units'));
	expectedArguments(\Doctrine\DBAL\Platforms\AbstractPlatform::getDateArithmeticIntervalExpression(), 1, '+', '-');

	registerArgumentsSet('doctrine_schema_table_options_keys',
		'engine',
		'collation',
		'autoincrement',
		'comment',
		'create_options',
		'azure.federatedOnDistributionName',
		'azure.federatedOnColumnName'
	);
	expectedArguments(\Doctrine\DBAL\Schema\Table::hasOption(), 0, argumentsSet('doctrine_schema_table_options_keys'));
	expectedArguments(\Doctrine\DBAL\Schema\Table::getOption(), 0, argumentsSet('doctrine_schema_table_options_keys'));
	expectedArguments(\Doctrine\DBAL\Schema\Table::addOption(), 0, argumentsSet('doctrine_schema_table_options_keys'));

	registerArgumentsSet('doctrine_schema_index_options_keys',
		'where',
		'lengths'
	);
	expectedArguments(\Doctrine\DBAL\Schema\Index::hasOption(), 0, argumentsSet('doctrine_schema_index_options_keys'));
	expectedArguments(\Doctrine\DBAL\Schema\Index::getOption(), 0, argumentsSet('doctrine_schema_index_options_keys'));

	registerArgumentsSet('doctrine_schema_fk_options_keys',
		'onUpdate',
		'onDelete',
		'match',
		'deferrable',
		'deferred',
		'feferred',
		'check_on_commit',
		'clustered',
		'for_olap_workload'
	);
	expectedArguments(\Doctrine\DBAL\Schema\ForeignKeyConstraint::hasOption(), 0, argumentsSet('doctrine_schema_fk_options_keys'));
	expectedArguments(\Doctrine\DBAL\Schema\ForeignKeyConstraint::getOption(), 0, argumentsSet('doctrine_schema_fk_options_keys'));

	registerArgumentsSet('doctrine_events',
		\Doctrine\DBAL\Events::postConnect,
		\Doctrine\DBAL\Events::onSchemaCreateTable,
		\Doctrine\DBAL\Events::onSchemaCreateTableColumn,
		\Doctrine\DBAL\Events::onSchemaDropTable,
		\Doctrine\DBAL\Events::onSchemaAlterTable,
		\Doctrine\DBAL\Events::onSchemaAlterTableAddColumn,
		\Doctrine\DBAL\Events::onSchemaAlterTableRemoveColumn,
		\Doctrine\DBAL\Events::onSchemaAlterTableChangeColumn,
		\Doctrine\DBAL\Events::onSchemaAlterTableRenameColumn,
		\Doctrine\DBAL\Events::onSchemaColumnDefinition,
		\Doctrine\DBAL\Events::onSchemaIndexDefinition,
		\Doctrine\ORM\Events::prePersist,
		\Doctrine\ORM\Events::postPersist,
		\Doctrine\ORM\Events::preUpdate,
		\Doctrine\ORM\Events::postUpdate,
		\Doctrine\ORM\Events::preRemove,
		\Doctrine\ORM\Events::postRemove,
		\Doctrine\ORM\Events::postLoad,
		\Doctrine\ORM\Events::loadClassMetadata,
		\Doctrine\ORM\Events::onClassMetadataNotFound,
		\Doctrine\ORM\Events::preFlush,
		\Doctrine\ORM\Events::onFlush,
		\Doctrine\ORM\Events::postFlush,
		\Doctrine\ORM\Events::onClear,
		\Doctrine\ORM\Tools\ToolEvents::postGenerateSchemaTable,
		\Doctrine\ORM\Tools\ToolEvents::postGenerateSchema
	);
	expectedArguments(\Doctrine\Common\EventManager::dispatchEvent(), 0, argumentsSet('doctrine_events'));
	expectedArguments(\Doctrine\Common\EventManager::getListeners(), 0, argumentsSet('doctrine_events'));
	expectedArguments(\Doctrine\Common\EventManager::hasListeners(), 0, argumentsSet('doctrine_events'));
	expectedArguments(\Doctrine\Common\EventManager::addEventListener(), 0, argumentsSet('doctrine_events'));
//	expectedArguments(\Doctrine\Common\EventManager::addEventListener(), 0, array(argumentsSet('doctrine_events')));
	expectedArguments(\Doctrine\Common\EventManager::removeEventListener(), 0, argumentsSet('doctrine_events'));
//	expectedArguments(\Doctrine\Common\EventManager::removeEventListener(), 0, array(argumentsSet('doctrine_events')));
//	expectedReturnValues(\Doctrine\Common\EventSubscriber::getSubscribedEvents(), array(argumentsSet('doctrine_events')));

	expectedReturnValues(\Doctrine\DBAL\Connection::getHost(), 'localhost', '127.0.0.1');

	registerArgumentsSet('doctrine_column_cases',
		\Doctrine\DBAL\ColumnCase::UPPER,
		\Doctrine\DBAL\ColumnCase::LOWER
	);
	expectedReturnValues(\Doctrine\DBAL\Portability\Connection::getFetchCase(), argumentsSet('doctrine_column_cases'));

	registerArgumentsSet('doctrine_portabilities',
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_NONE |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_ALL |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_RTRIM |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_EMPTY_TO_NULL |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_FIX_CASE |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_DB2 |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_ORACLE |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_POSTGRESQL |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_SQLITE |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_OTHERVENDORS |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_DRIZZLE |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_SQLANYWHERE |
		\Doctrine\DBAL\Portability\Connection::PORTABILITY_SQLSRV
	);
	expectedReturnValues(\Doctrine\DBAL\Portability\Connection::getPortability(), argumentsSet('doctrine_portabilities'));

	registerArgumentsSet('doctrine_driver_names',
		'pdo_mysql', 'pdo_sqlite', 'pdo_pgsql', 'pdo_oci', 'pdo_sqlsrv',
		'mysqli', 'sqlanywhere', 'sqlsrv', 'ibm_db2', 'drizzle_pdo_mysql'
	);
	expectedReturnValues(\Doctrine\DBAL\Driver::getName(), argumentsSet('doctrine_driver_names'));
//	expectedReturnValues(\Doctrine\DBAL\DriverManager::getAvailableDrivers(), array(argumentsSet('doctrine_driver_names')));

	registerArgumentsSet('doctrine_connection_params', array(
		'driver' => '',
		'user' => '',
		'password' => '',
		'host' => '',
		'port' => 0,
		'dbname' => '',
		'url' => 'driver://user:passwd@localhost/dbname',
		'driverOptions' => [],
		'pdo' => new \PDO(),
		'driverClass' => '',
		'wrapperClass' => \Doctrine\DBAL\Connection::class,
		'serverVersion' => '',
		'fetch_case' => 0,
		'portability' => 0,
		'platform' => new \Doctrine\DBAL\Platforms\AbstractPlatform(),
		'master' => '',
		'slaves' => '',
		'global' => '',
		'shards' => '',
		'default_dbname' => '', // pdo_pgsql
		'charset' => '', // pdo_mysql, mysqli, pdo_pgsql, pdo_oci, oci8
		'unix_socket' => '', // pdo_mysql, mysqli
		'path' => '', // pdo_sqlite
		'memory' => false, // pdo_sqlite
		'ssl_key' => '', // mysqli
		'ssl_cert' => '', // mysqli
		'ssl_ca' => '', // mysqli
		'ssl_capath' => '', // mysqli
		'ssl_cipher' => '', // mysqli
		'sslmode' => '', // pdo_pgsql
		'sslrootcert' => '', // pdo_pgsql
		'sslcert' => '', // pdo_pgsql
		'sslkey' => '', // pdo_pgsql
		'sslcrl' => '', // pdo_pgsql
		'application_name' => '', // pdo_pgsql
		'servicename' => '', // pdo_oci
		'service' => false, // pdo_oci
		'pooled' => false, // pdo_oci
		'instancename' => '', // pdo_oci
		'connectstring' => '', // pdo_oci
		'persistent' => false, // pdo_oci, sqlanywhere
	));
	expectedArguments(\Doctrine\DBAL\DriverManager::getConnection(), 0, argumentsSet('doctrine_connection_params'));
	expectedArguments(\Doctrine\DBAL\Connection::__construct(), 0, argumentsSet('doctrine_connection_params'));
	expectedReturnValues(\Doctrine\DBAL\Connection::getParams(), argumentsSet('doctrine_connection_params'));

	registerArgumentsSet('doctrine_schema_column_options', array(
		'length' => 0,
		'precision' => 10,
		'scale' => 0,
		'unsigned' => false,
		'fixed' => false,
		'notnull' => false,
		'default' => '',
		'autoincrement' => false, // MySQL
		'columnDefinition' => '',
		'comment' => '',
	));
	expectedArguments(\Doctrine\DBAL\Schema\Column::__construct(), 2, argumentsSet('doctrine_schema_column_options'));
	expectedArguments(\Doctrine\DBAL\Schema\Table::addColumn(), 2, argumentsSet('doctrine_schema_column_options'));

	registerArgumentsSet('doctrine_schema_column_options_with_type', array(
		'type' => \Doctrine\DBAL\Types\Type::getType(),
		'length' => 0,
		'precision' => 10,
		'scale' => 0,
		'unsigned' => false,
		'fixed' => false,
		'notnull' => false,
		'default' => '',
		'autoincrement' => false, // MySQL
		'columnDefinition' => '',
		'comment' => '',
	));
	expectedArguments(\Doctrine\DBAL\Schema\Column::setOptions(), 0, argumentsSet('doctrine_schema_column_options_with_type'));
	expectedArguments(\Doctrine\DBAL\Schema\Table::changeColumn(), 1, argumentsSet('doctrine_schema_column_options_with_type'));

	registerArgumentsSet('doctrine_schema_table_options', array(
		'engine' => '', // MySQL
		'collation' => '', // MySQL
		'autoincrement' => '', // MySQL
		'comment' => '', // MySQL
		'create_options' => '', // MySQL
		'alter' => false, // SQLite
		'azure.federatedOnDistributionName' => '', // Azure
		'azure.federatedOnColumnName' => '', // Azure
	));
	expectedArguments(\Doctrine\DBAL\Schema\Table::__construct(), 5, argumentsSet('doctrine_schema_table_options'));
	expectedReturnValues(\Doctrine\DBAL\Schema\Table::getOptions(), argumentsSet('doctrine_schema_table_options'));

	registerArgumentsSet('doctrine_schema_index_options', array(
		'where' => '',
		'lengths' => [],
	));
	expectedArguments(\Doctrine\DBAL\Schema\Index::__construct(), 5, argumentsSet('doctrine_schema_index_options'));
	expectedArguments(\Doctrine\DBAL\Schema\Table::_createIndex(), 5, argumentsSet('doctrine_schema_index_options'));
	expectedArguments(\Doctrine\DBAL\Schema\Table::addIndex(), 3, argumentsSet('doctrine_schema_index_options'));
	expectedArguments(\Doctrine\DBAL\Schema\Table::addUniqueIndex(), 2, argumentsSet('doctrine_schema_index_options'));
	expectedReturnValues(\Doctrine\DBAL\Schema\Index::getOptions(), argumentsSet('doctrine_schema_index_options'));

	registerArgumentsSet('doctrine_schema_fk_options', array(
		'onUpdate' => '',
		'onDelete' => '',
		'match' => '',
		'deferrable' => false, // PostgreSQL, SQLite
		'deferred' => false, // PostgreSQL, SQLite
		'feferred' => false, // PostgreSQL
		'check_on_commit' => false, // SQLAnywhere
		'clustered' => false, // SQLAnywhere
		'for_olap_workload' => false, // SQLAnywhere
	));
	expectedArguments(\Doctrine\DBAL\Schema\ForeignKeyConstraint::__construct(), 4, argumentsSet('doctrine_schema_fk_options'));
	expectedArguments(\Doctrine\DBAL\Schema\Table::addForeignKeyConstraint(), 3, argumentsSet('doctrine_schema_fk_options'));
	expectedArguments(\Doctrine\DBAL\Schema\Table::addUnnamedForeignKeyConstraint(), 3, argumentsSet('doctrine_schema_fk_options'));
	expectedArguments(\Doctrine\DBAL\Schema\Table::addNamedForeignKeyConstraint(), 4, argumentsSet('doctrine_schema_fk_options'));
	expectedReturnValues(\Doctrine\DBAL\Schema\ForeignKeyConstraint::getOptions(), argumentsSet('doctrine_schema_fk_options'));

}
