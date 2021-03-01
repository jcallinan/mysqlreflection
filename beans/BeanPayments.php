<?php
include_once("bean.config.php");

/**
 * Class BeanPayments
 * Bean class for object oriented management of the MySQL table payments
 *
 * Comment of the managed table payments: Not specified.
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
 * @filesource BeanPayments.php
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

class BeanPayments extends MySqlRecord
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
     * Class attribute for mapping table field customerNumber
     *
     * Comment for field customerNumber: Not specified.<br>
     * Field information:
     *  - Data type: int
     *  - Null : NO
     *  - DB Index: PRI
     *  - Default: 
     *  - Extra:  
     * @var int $customernumber
     */
    private $customernumber;

    /**
     * Class attribute for mapping table field checkNumber
     *
     * Comment for field checkNumber: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: PRI
     *  - Default: 
     *  - Extra:  
     * @var string $checknumber
     */
    private $checknumber;

    /**
     * Class attribute for mapping table field paymentDate
     *
     * Comment for field paymentDate: Not specified.<br>
     * Field information:
     *  - Data type: string|date
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $paymentdate
     */
    private $paymentdate;

    /**
     * Class attribute for mapping table field amount
     *
     * Comment for field amount: Not specified.<br>
     * Field information:
     *  - Data type: decimal(10,2)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var float $amount
     */
    private $amount;

    /**
     * Class attribute for storing the SQL DDL of table payments
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBwYXltZW50c2AgKAogIGBjdXN0b21lck51bWJlcmAgaW50IE5PVCBOVUxMLAogIGBjaGVja051bWJlcmAgdmFyY2hhcig1MCkgTk9UIE5VTEwsCiAgYHBheW1lbnREYXRlYCBkYXRlIE5PVCBOVUxMLAogIGBhbW91bnRgIGRlY2ltYWwoMTAsMikgTk9UIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBjdXN0b21lck51bWJlcmAsYGNoZWNrTnVtYmVyYCksCiAgQ09OU1RSQUlOVCBgcGF5bWVudHNfaWJma18xYCBGT1JFSUdOIEtFWSAoYGN1c3RvbWVyTnVtYmVyYCkgUkVGRVJFTkNFUyBgY3VzdG9tZXJzYCAoYGN1c3RvbWVyTnVtYmVyYCkKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD1sYXRpbjE=";

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
     * setChecknumber Sets the class attribute checknumber with a given value
     *
     * The attribute checknumber maps the field checkNumber defined as varchar(50).<br>
     * Comment for field checkNumber: Not specified.<br>
     * @param string $checknumber
     * @category Modifier
     */
    public function setChecknumber($checknumber)
    {
        $this->checknumber = (string)$checknumber;
    }

    /**
     * setPaymentdate Sets the class attribute paymentdate with a given value
     *
     * The attribute paymentdate maps the field paymentDate defined as string|date.<br>
     * Comment for field paymentDate: Not specified.<br>
     * @param string $paymentdate
     * @category Modifier
     */
    public function setPaymentdate($paymentdate)
    {
        $this->paymentdate = (string)$paymentdate;
    }

    /**
     * setAmount Sets the class attribute amount with a given value
     *
     * The attribute amount maps the field amount defined as decimal(10,2).<br>
     * Comment for field amount: Not specified.<br>
     * @param float $amount
     * @category Modifier
     */
    public function setAmount($amount)
    {
        $this->amount = (float)$amount;
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
     * getChecknumber gets the class attribute checknumber value
     *
     * The attribute checknumber maps the field checkNumber defined as varchar(50).<br>
     * Comment for field checkNumber: Not specified.
     * @return string $checknumber
     * @category Accessor of $checknumber
     */
    public function getChecknumber()
    {
        return $this->checknumber;
    }

    /**
     * getPaymentdate gets the class attribute paymentdate value
     *
     * The attribute paymentdate maps the field paymentDate defined as string|date.<br>
     * Comment for field paymentDate: Not specified.
     * @return string $paymentdate
     * @category Accessor of $paymentdate
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }

    /**
     * getAmount gets the class attribute amount value
     *
     * The attribute amount maps the field amount defined as decimal(10,2).<br>
     * Comment for field amount: Not specified.
     * @return float $amount
     * @category Accessor of $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Gets DDL SQL code of the table payments
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
        return "payments";
    }

    /**
    * The BeanPayments constructor
    *
    * It creates and initializes an object in two way:
    *  - with null (not fetched) data if none ${ClassPkAttributeName} is given.
    *  - with a fetched data row from the table {TableName} having {TablePkName}=${ClassPkAttributeName}
	* @param int $customernumber
	* @param string $checknumber
    * @return BeanPayments Object
    */
    public function __construct($customernumber=NULL,$checknumber=NULL)
    {
        parent::__construct();
        if (!empty($customernumber) && !empty($checknumber)) {
            $this->select($customernumber,$checknumber);
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
    * Fetchs a table row of payments into the object.
    *
    * Fetched table fields values are assigned to class attributes and they can be managed by using
    * the accessors/modifiers methods of the class.
	* @param int $customernumber
	* @param string $checknumber
    * @return int affected selected row
    * @category DML
    */
    public function select($customernumber,$checknumber)
    {
        $sql =  "SELECT * FROM payments WHERE customerNumber={$this->parseValue($customernumber,'int')} AND checkNumber={$this->parseValue($checknumber,'string')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->customernumber = (integer)$rowObject->customerNumber;
            @$this->checknumber = $this->replaceAposBackSlash($rowObject->checkNumber);
            @$this->paymentdate = empty($rowObject->paymentDate) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->paymentDate));
            @$this->amount = (float)$rowObject->amount;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
    return $this->affected_rows;
    }

    /**
    * Deletes a specific row from the table payments
	* @param int $customernumber
	* @param string $checknumber
    * @return int affected deleted row
    * @category DML
    */
    public function delete($customernumber,$checknumber)
    {
        $sql = "DELETE FROM payments WHERE customerNumber={$this->parseValue($customernumber,'int')} AND checkNumber={$this->parseValue($checknumber,'string')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
    * Insert the current object into a new table row of payments
    *
    * All class attributes values defined for mapping all table fields are automatically used during inserting
    * @return mixed MySQL insert result
    * @category DML
    */
    public function insert()
    {
        // $constants = get_defined_constants();
        $sql = <<< SQL
        INSERT INTO payments
        (customerNumber,checkNumber,paymentDate,amount)
        VALUES({$this->parseValue($this->customernumber)},
			{$this->parseValue($this->checknumber,'notNumber')},
			{$this->parseValue($this->paymentdate,'date')},
			{$this->parseValue($this->amount)})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
        }
        return $result;
    }

    /**
    * Updates a specific row from the table payments with the values of the current object.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
    * Null values are used for all attributes not previously setted.
	* @param int $customernumber
	* @param string $checknumber
    * @return mixed MySQL update result
    * @category DML
    */
    public function update($customernumber,$checknumber)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                payments
                SET 
				paymentDate={$this->parseValue($this->paymentdate,'date')},
				amount={$this->parseValue($this->amount)}
            WHERE
                customerNumber={$this->parseValue($customernumber,'int')} AND checkNumber={$this->parseValue($checknumber,'string')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($customernumber,$checknumber);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
    * Facility for updating a row of payments previously loaded.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating.
    * @category DML Helper
    * @return mixed MySQLi update result
    */
    public function updateCurrent()
    {
        if (!empty($this->customernumber) && !empty($this->checknumber)) {
           return $this->update($this->customernumber,$this->checknumber);
        } else {
            return false;
        }
    }

}
?>
