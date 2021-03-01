<?php
include_once("bean.config.php");

/**
 * Class BeanOrders
 * Bean class for object oriented management of the MySQL table orders
 *
 * Comment of the managed table orders: Not specified.
 *
 * Responsibility:
 *
 *  - provides instance constructors for both managing of a fetched table or for a new row
 *  - provides destructor to automatically close database connection
 *  - defines a set of attributes corresponding to the table fields
 *  - provides setter and getter methods for each attribute
 *  - provides OO methods for simplify DML select, insert, update and delete operations.
 *  - provides a facility for quickly updating a previously fetched row
 *  - provides useful methods to obtain table DDL and the last executed SQL statement
 *  - provides error handling of SQL statement
 *  - uses Camel/Pascal case naming convention for Attributes/Class used for mapping of Fields/Table
 *  - provides useful PHPDOC information about the table, fields, class, attributes and methods.
 *
 * @extends MySqlRecord
 * @filesource BeanOrders.php
 * @category MySql Database Bean Class
 * @package beans
 * @author Rosario Carvello <rosario.carvello@gmail.com>
 * @version GIT:v1.0.0
 * @note  This is an auto generated PHP class builded with MVCMySqlReflection, a small code generation engine extracted from the author's personal MVC Framework.
 * @copyright (c) 2016 Rosario Carvello <rosario.carvello@gmail.com> - All rights reserved. See License.txt file
 * @license BSD
 * @license https://opensource.org/licenses/BSD-3-Clause This software is distributed under BSD Public License.
*/

// namespace beans;

class BeanOrders extends MySqlRecord
{
    /**
     * A control attribute for the update operation.
     * @note An instance fetched from db is allowed to run the update operation.
     *       A new instance (not fetched from db) is allowed only to run the insert operation but,
     *       after running insertion, the instance is automatically allowed to run update operation.
     * @var bool
     */
    private $allowUpdate = false;

    /**
     * Class attribute for mapping the primary key orderNumber of table orders
     *
     * Comment for field orderNumber: Not specified<br>
     * @var int $ordernumber
     */
    private $ordernumber;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = false;

    /**
     * Class attribute for mapping table field orderDate
     *
     * Comment for field orderDate: Not specified.<br>
     * Field information:
     *  - Data type: string|date
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $orderdate
     */
    private $orderdate;

    /**
     * Class attribute for mapping table field requiredDate
     *
     * Comment for field requiredDate: Not specified.<br>
     * Field information:
     *  - Data type: string|date
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $requireddate
     */
    private $requireddate;

    /**
     * Class attribute for mapping table field shippedDate
     *
     * Comment for field shippedDate: Not specified.<br>
     * Field information:
     *  - Data type: string|date
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $shippeddate
     */
    private $shippeddate;

    /**
     * Class attribute for mapping table field status
     *
     * Comment for field status: Not specified.<br>
     * Field information:
     *  - Data type: varchar(15)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $status
     */
    private $status;

    /**
     * Class attribute for mapping table field comments
     *
     * Comment for field comments: Not specified.<br>
     * Field information:
     *  - Data type: text
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $comments
     */
    private $comments;

    /**
     * Class attribute for mapping table field customerNumber
     *
     * Comment for field customerNumber: Not specified.<br>
     * Field information:
     *  - Data type: int
     *  - Null : NO
     *  - DB Index: MUL
     *  - Default: 
     *  - Extra:  
     * @var int $customernumber
     */
    private $customernumber;

    /**
     * Class attribute for storing the SQL DDL of table orders
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBvcmRlcnNgICgKICBgb3JkZXJOdW1iZXJgIGludCBOT1QgTlVMTCwKICBgb3JkZXJEYXRlYCBkYXRlIE5PVCBOVUxMLAogIGByZXF1aXJlZERhdGVgIGRhdGUgTk9UIE5VTEwsCiAgYHNoaXBwZWREYXRlYCBkYXRlIERFRkFVTFQgTlVMTCwKICBgc3RhdHVzYCB2YXJjaGFyKDE1KSBOT1QgTlVMTCwKICBgY29tbWVudHNgIHRleHQsCiAgYGN1c3RvbWVyTnVtYmVyYCBpbnQgTk9UIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBvcmRlck51bWJlcmApLAogIEtFWSBgY3VzdG9tZXJOdW1iZXJgIChgY3VzdG9tZXJOdW1iZXJgKSwKICBDT05TVFJBSU5UIGBvcmRlcnNfaWJma18xYCBGT1JFSUdOIEtFWSAoYGN1c3RvbWVyTnVtYmVyYCkgUkVGRVJFTkNFUyBgY3VzdG9tZXJzYCAoYGN1c3RvbWVyTnVtYmVyYCkKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD1sYXRpbjE=";

    /**
     * setOrdernumber Sets the class attribute ordernumber with a given value
     *
     * The attribute ordernumber maps the field orderNumber defined as int.<br>
     * Comment for field orderNumber: Not specified.<br>
     * @param int $ordernumber
     * @category Modifier
     */
    public function setOrdernumber($ordernumber)
    {
        $this->ordernumber = (int)$ordernumber;
    }

    /**
     * setOrderdate Sets the class attribute orderdate with a given value
     *
     * The attribute orderdate maps the field orderDate defined as string|date.<br>
     * Comment for field orderDate: Not specified.<br>
     * @param string $orderdate
     * @category Modifier
     */
    public function setOrderdate($orderdate)
    {
        $this->orderdate = (string)$orderdate;
    }

    /**
     * setRequireddate Sets the class attribute requireddate with a given value
     *
     * The attribute requireddate maps the field requiredDate defined as string|date.<br>
     * Comment for field requiredDate: Not specified.<br>
     * @param string $requireddate
     * @category Modifier
     */
    public function setRequireddate($requireddate)
    {
        $this->requireddate = (string)$requireddate;
    }

    /**
     * setShippeddate Sets the class attribute shippeddate with a given value
     *
     * The attribute shippeddate maps the field shippedDate defined as string|date.<br>
     * Comment for field shippedDate: Not specified.<br>
     * @param string $shippeddate
     * @category Modifier
     */
    public function setShippeddate($shippeddate)
    {
        $this->shippeddate = (string)$shippeddate;
    }

    /**
     * setStatus Sets the class attribute status with a given value
     *
     * The attribute status maps the field status defined as varchar(15).<br>
     * Comment for field status: Not specified.<br>
     * @param string $status
     * @category Modifier
     */
    public function setStatus($status)
    {
        $this->status = (string)$status;
    }

    /**
     * setComments Sets the class attribute comments with a given value
     *
     * The attribute comments maps the field comments defined as text.<br>
     * Comment for field comments: Not specified.<br>
     * @param string $comments
     * @category Modifier
     */
    public function setComments($comments)
    {
        $this->comments = (string)$comments;
    }

    /**
     * setCustomernumber Sets the class attribute customernumber with a given value
     *
     * The attribute customernumber maps the field customerNumber defined as int.<br>
     * Comment for field customerNumber: Not specified.<br>
     * @param int $customernumber
     * @category Modifier
     */
    public function setCustomernumber($customernumber)
    {
        $this->customernumber = (int)$customernumber;
    }

    /**
     * getOrdernumber gets the class attribute ordernumber value
     *
     * The attribute ordernumber maps the field orderNumber defined as int.<br>
     * Comment for field orderNumber: Not specified.
     * @return int $ordernumber
     * @category Accessor of $ordernumber
     */
    public function getOrdernumber()
    {
        return $this->ordernumber;
    }

    /**
     * getOrderdate gets the class attribute orderdate value
     *
     * The attribute orderdate maps the field orderDate defined as string|date.<br>
     * Comment for field orderDate: Not specified.
     * @return string $orderdate
     * @category Accessor of $orderdate
     */
    public function getOrderdate()
    {
        return $this->orderdate;
    }

    /**
     * getRequireddate gets the class attribute requireddate value
     *
     * The attribute requireddate maps the field requiredDate defined as string|date.<br>
     * Comment for field requiredDate: Not specified.
     * @return string $requireddate
     * @category Accessor of $requireddate
     */
    public function getRequireddate()
    {
        return $this->requireddate;
    }

    /**
     * getShippeddate gets the class attribute shippeddate value
     *
     * The attribute shippeddate maps the field shippedDate defined as string|date.<br>
     * Comment for field shippedDate: Not specified.
     * @return string $shippeddate
     * @category Accessor of $shippeddate
     */
    public function getShippeddate()
    {
        return $this->shippeddate;
    }

    /**
     * getStatus gets the class attribute status value
     *
     * The attribute status maps the field status defined as varchar(15).<br>
     * Comment for field status: Not specified.
     * @return string $status
     * @category Accessor of $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * getComments gets the class attribute comments value
     *
     * The attribute comments maps the field comments defined as text.<br>
     * Comment for field comments: Not specified.
     * @return string $comments
     * @category Accessor of $comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * getCustomernumber gets the class attribute customernumber value
     *
     * The attribute customernumber maps the field customerNumber defined as int.<br>
     * Comment for field customerNumber: Not specified.
     * @return int $customernumber
     * @category Accessor of $customernumber
     */
    public function getCustomernumber()
    {
        return $this->customernumber;
    }

    /**
     * Gets DDL SQL code of the table orders
     * @return string
     * @category Accessor
     */
    public function getDdl()
    {
        return base64_decode($this->ddl);
    }

    /**
    * Gets the name of the managed table
    * @return string
    * @category Accessor
    */
    public function getTableName()
    {
        return "orders";
    }

    /**
     * The BeanOrders constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $ordernumber is given.
     *  - with a fetched data row from the table orders having orderNumber=$ordernumber
     * @param int $ordernumber. If omitted an empty (not fetched) instance is created.
     * @return BeanOrders Object
     */
    public function __construct($ordernumber = null)
    {
        parent::__construct();
        if (!empty($ordernumber)) {
            $this->select($ordernumber);
        }
    }

    /**
     * The implicit destructor
     */
    public function __destruct()
    {
        $this->close();
    }

    /**
     * Explicit destructor. It calls the implicit destructor automatically.
     */
    public function close()
    {
        unset($this);
    }

    /**
     * Fetchs a table row of orders into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $ordernumber the primary key orderNumber value of table orders which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($ordernumber)
    {
        $sql =  "SELECT * FROM orders WHERE orderNumber={$this->parseValue($ordernumber,'int')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->ordernumber = (integer)$rowObject->orderNumber;
            @$this->orderdate = empty($rowObject->orderDate) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->orderDate));
            @$this->requireddate = empty($rowObject->requiredDate) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->requiredDate));
            @$this->shippeddate = empty($rowObject->shippedDate) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->shippedDate));
            @$this->status = $this->replaceAposBackSlash($rowObject->status);
            @$this->comments = $this->replaceAposBackSlash($rowObject->comments);
            @$this->customernumber = (integer)$rowObject->customerNumber;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table orders
     * @param int $ordernumber the primary key orderNumber value of table orders which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($ordernumber)
    {
        $sql = "DELETE FROM orders WHERE orderNumber={$this->parseValue($ordernumber,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of orders
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->ordernumber = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO orders
            (orderNumber,orderDate,requiredDate,shippedDate,status,comments,customerNumber)
            VALUES({$this->parseValue($this->ordernumber)},
			{$this->parseValue($this->orderdate,'date')},
			{$this->parseValue($this->requireddate,'date')},
			{$this->parseValue($this->shippeddate,'date')},
			{$this->parseValue($this->status,'notNumber')},
			{$this->parseValue($this->comments,'notNumber')},
			{$this->parseValue($this->customernumber)})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->ordernumber = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table orders with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $ordernumber the primary key orderNumber value of table orders which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($ordernumber)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                orders
            SET 
				orderDate={$this->parseValue($this->orderdate,'date')},
				requiredDate={$this->parseValue($this->requireddate,'date')},
				shippedDate={$this->parseValue($this->shippeddate,'date')},
				status={$this->parseValue($this->status,'notNumber')},
				comments={$this->parseValue($this->comments,'notNumber')},
				customerNumber={$this->parseValue($this->customernumber)}
            WHERE
                orderNumber={$this->parseValue($ordernumber,'int')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($ordernumber);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of orders previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->ordernumber != "") {
            return $this->update($this->ordernumber);
        } else {
            return false;
        }
    }

}
?>
