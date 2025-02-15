abstract class CI_DB_driver_base extends CI_DB_driver {

/**
* Set client character set
*
* @param string $charset
* @return bool
*/
abstract protected function _db_set_charset($charset);

/**
* Execute the query
*
* @param string $sql
* @return mixed
*/
abstract protected function _execute($sql);

/**
* Begin Transaction
*
* @return bool
*/
abstract protected function _trans_begin();

/**
* Commit Transaction
*
* @return bool
*/
abstract protected function _trans_commit();

/**
* Rollback Transaction
*
* @return bool
*/
abstract protected function _trans_rollback();

/**
* List table query
*
* @param bool $prefix_limit
* @return string
*/
abstract protected function _list_tables($prefix_limit = FALSE);

/**
* Show column query
*
* @param string $table
* @return string
*/
abstract protected function _list_columns($table = '');

/**
* Field data query
*
* @param string $table
* @return string
*/
abstract protected function _field_data($table);
}