<?php

namespace MediaItem\Map;

use MediaItem\Movie;
use MediaItem\MovieQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'movie' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class MovieTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;
    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'MediaItem.Map.MovieTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'fscatalog2';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'movie';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\MediaItem\\Movie';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'MediaItem.Movie';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the ID field
     */
    const ID = 'movie.ID';

    /**
     * the column name for the TITLE field
     */
    const TITLE = 'movie.TITLE';

    /**
     * the column name for the RATING field
     */
    const RATING = 'movie.RATING';

    /**
     * the column name for the SCORE field
     */
    const SCORE = 'movie.SCORE';

    /**
     * the column name for the SUMMARY field
     */
    const SUMMARY = 'movie.SUMMARY';

    /**
     * the column name for the RELEASE_DATE field
     */
    const RELEASE_DATE = 'movie.RELEASE_DATE';

    /**
     * the column name for the DIRECTOR_ID field
     */
    const DIRECTOR_ID = 'movie.DIRECTOR_ID';

    /**
     * the column name for the ACTOR_IDS field
     */
    const ACTOR_IDS = 'movie.ACTOR_IDS';

    /**
     * the column name for the POSTER field
     */
    const POSTER = 'movie.POSTER';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Title', 'Rating', 'Score', 'Summary', 'ReleaseDate', 'DirectorId', 'ActorIds', 'Poster', ),
        self::TYPE_STUDLYPHPNAME => array('id', 'title', 'rating', 'score', 'summary', 'releaseDate', 'directorId', 'actorIds', 'poster', ),
        self::TYPE_COLNAME       => array(MovieTableMap::ID, MovieTableMap::TITLE, MovieTableMap::RATING, MovieTableMap::SCORE, MovieTableMap::SUMMARY, MovieTableMap::RELEASE_DATE, MovieTableMap::DIRECTOR_ID, MovieTableMap::ACTOR_IDS, MovieTableMap::POSTER, ),
        self::TYPE_RAW_COLNAME   => array('ID', 'TITLE', 'RATING', 'SCORE', 'SUMMARY', 'RELEASE_DATE', 'DIRECTOR_ID', 'ACTOR_IDS', 'POSTER', ),
        self::TYPE_FIELDNAME     => array('id', 'title', 'rating', 'score', 'summary', 'release_date', 'director_id', 'actor_ids', 'poster', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Title' => 1, 'Rating' => 2, 'Score' => 3, 'Summary' => 4, 'ReleaseDate' => 5, 'DirectorId' => 6, 'ActorIds' => 7, 'Poster' => 8, ),
        self::TYPE_STUDLYPHPNAME => array('id' => 0, 'title' => 1, 'rating' => 2, 'score' => 3, 'summary' => 4, 'releaseDate' => 5, 'directorId' => 6, 'actorIds' => 7, 'poster' => 8, ),
        self::TYPE_COLNAME       => array(MovieTableMap::ID => 0, MovieTableMap::TITLE => 1, MovieTableMap::RATING => 2, MovieTableMap::SCORE => 3, MovieTableMap::SUMMARY => 4, MovieTableMap::RELEASE_DATE => 5, MovieTableMap::DIRECTOR_ID => 6, MovieTableMap::ACTOR_IDS => 7, MovieTableMap::POSTER => 8, ),
        self::TYPE_RAW_COLNAME   => array('ID' => 0, 'TITLE' => 1, 'RATING' => 2, 'SCORE' => 3, 'SUMMARY' => 4, 'RELEASE_DATE' => 5, 'DIRECTOR_ID' => 6, 'ACTOR_IDS' => 7, 'POSTER' => 8, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'title' => 1, 'rating' => 2, 'score' => 3, 'summary' => 4, 'release_date' => 5, 'director_id' => 6, 'actor_ids' => 7, 'poster' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('movie');
        $this->setPhpName('Movie');
        $this->setClassName('\\MediaItem\\Movie');
        $this->setPackage('MediaItem');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('TITLE', 'Title', 'VARCHAR', true, 128, null);
        $this->addColumn('RATING', 'Rating', 'VARCHAR', true, 24, null);
        $this->addColumn('SCORE', 'Score', 'FLOAT', true, 3, null);
        $this->addColumn('SUMMARY', 'Summary', 'VARCHAR', true, 2500, null);
        $this->addColumn('RELEASE_DATE', 'ReleaseDate', 'VARCHAR', true, 10, null);
        $this->addForeignKey('DIRECTOR_ID', 'DirectorId', 'INTEGER', 'director', 'ID', true, null, null);
        $this->addColumn('ACTOR_IDS', 'ActorIds', 'VARCHAR', true, 255, null);
        $this->addColumn('POSTER', 'Poster', 'VARCHAR', true, 255, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Director', '\\MediaProperty\\Director', RelationMap::MANY_TO_ONE, array('director_id' => 'id', ), null, null);
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {

            return (int) $row[
                            $indexType == TableMap::TYPE_NUM
                            ? 0 + $offset
                            : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
                        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? MovieTableMap::CLASS_DEFAULT : MovieTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     * @return array (Movie object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = MovieTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = MovieTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + MovieTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MovieTableMap::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            MovieTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = MovieTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = MovieTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MovieTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(MovieTableMap::ID);
            $criteria->addSelectColumn(MovieTableMap::TITLE);
            $criteria->addSelectColumn(MovieTableMap::RATING);
            $criteria->addSelectColumn(MovieTableMap::SCORE);
            $criteria->addSelectColumn(MovieTableMap::SUMMARY);
            $criteria->addSelectColumn(MovieTableMap::RELEASE_DATE);
            $criteria->addSelectColumn(MovieTableMap::DIRECTOR_ID);
            $criteria->addSelectColumn(MovieTableMap::ACTOR_IDS);
            $criteria->addSelectColumn(MovieTableMap::POSTER);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.TITLE');
            $criteria->addSelectColumn($alias . '.RATING');
            $criteria->addSelectColumn($alias . '.SCORE');
            $criteria->addSelectColumn($alias . '.SUMMARY');
            $criteria->addSelectColumn($alias . '.RELEASE_DATE');
            $criteria->addSelectColumn($alias . '.DIRECTOR_ID');
            $criteria->addSelectColumn($alias . '.ACTOR_IDS');
            $criteria->addSelectColumn($alias . '.POSTER');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(MovieTableMap::DATABASE_NAME)->getTable(MovieTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getServiceContainer()->getDatabaseMap(MovieTableMap::DATABASE_NAME);
      if (!$dbMap->hasTable(MovieTableMap::TABLE_NAME)) {
        $dbMap->addTableObject(new MovieTableMap());
      }
    }

    /**
     * Performs a DELETE on the database, given a Movie or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Movie object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MovieTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \MediaItem\Movie) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MovieTableMap::DATABASE_NAME);
            $criteria->add(MovieTableMap::ID, (array) $values, Criteria::IN);
        }

        $query = MovieQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) { MovieTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) { MovieTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the movie table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return MovieQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Movie or Criteria object.
     *
     * @param mixed               $criteria Criteria or Movie object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MovieTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Movie object
        }

        if ($criteria->containsKey(MovieTableMap::ID) && $criteria->keyContainsValue(MovieTableMap::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MovieTableMap::ID.')');
        }


        // Set the correct dbName
        $query = MovieQuery::create()->mergeWith($criteria);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = $query->doInsert($con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

} // MovieTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
MovieTableMap::buildTableMap();
