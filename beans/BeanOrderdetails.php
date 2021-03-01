<?php
include_once("bean.config.php");

/**
 * Class BeanOrderdetails
 * Bean class for object oriented management of the MySQL table orderdetails
 *
 * Comment of the managed table orderdetails: Not specified.
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
 * @filesource BeanOrderdetails.php
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

class BeanOrderdetails extends MySqlRecord
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
     * Class attribute for mapping table field orderNumber
     *
     * Comment for field orderNumber: Not specified.<br>
     * Field information:
     *  - Data type: int
     *  - Null : NO
     *  - DB Index: PRI
     *  - Default: 
     *  - Extra:  
     * @var int $ordernumber
     */
    private $ordernumber;

    /**
     * Class attribute for mapping table field productCode
     *
     * Comment for field productCode: Not specified.<br>
     * Field information:
     *  - Data type: varchar(15)
     *  - Null : NO
     *  - DB Index: PRI
     *  - Default: 
     *  - Extra:  
     * @var string $productcode
     */
    private $productcode;

    /**
     * Class attribute for mapping table field quantityOrdered
     *
     * Comment for field quantityOrdered: Not specified.<br>
     * Field information:
     *  - Data type: int
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $quantityordered
     */
    private $quantityordered;

    /**
     * Class attribute for mapping table field priceEach
     *
     * Comment for field priceEach: Not specified.<br>
     * Field information:
     *  - Data type: decimal(10,2)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var float $priceeach
     */
    private $priceeach;

    /**
     * Class attribute for mapping table field orderLineNumber
     *
     * Comment for field orderLineNumber: Not specified.<br>
     * Field information:
     *  - Data type: smallint
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $orderlinenumber
     */
    private $orderlinenumber;

    /**
     * Class attribute for storing the SQL DDL of table orderdetails
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBvcmRlcmRldGFpbHNgICgKICBgb3JkZXJOdW1iZXJgIGludCBOT1QgTlVMTCwKICBgcHJvZHVjdENvZGVgIHZhcmNoYXIoMTUpIE5PVCBOVUxMLAogIGBxdWFudGl0eU9yZGVyZWRgIGludCBOT1QgTlVMTCwKICBgcHJpY2VFYWNoYCBkZWNpbWFsKDEwLDIpIE5PVCBOVUxMLAogIGBvcmRlckxpbmVOdW1iZXJgIHNtYWxsaW50IE5PVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgb3JkZXJOdW1iZXJgLGBwcm9kdWN0Q29kZWApLAogIEtFWSBgcHJvZHVjdENvZGVgIChgcHJvZHVjdENvZGVgKSwKICBDT05TVFJBSU5UIGBvcmRlcmRldGFpbHNfaWJma18xYCBGT1JFSUdOIEtFWSAoYG9yZGVyTnVtYmVyYCkgUkVGRVJFTkNFUyBgb3JkZXJzYCAoYG9yZGVyTnVtYmVyYCksCiAgQ09OU1RSQUlOVCBgb3JkZXJkZXRhaWxzX2liZmtfMmAgRk9SRUlHTiBLRVkgKGBwcm9kdWN0Q29kZWApIFJFRkVSRU5DRVMgYHByb2R1Y3RzYCAoYHByb2R1Y3RDb2RlYCkKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD1sYXRpbjE=";

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
     * setProductcode Sets the class attribute productcode with a given value
     *
     * The attribute productcode maps the field productCode defined as varchar(15).<br>
     * Comment for field productCode: Not specified.<br>
     * @param string $productcode
     * @category Modifier
     */
    public function setProductcode($productcode)
    {
        $this->productcode = (string)$productcode;
    }

    /**
     * setQuantityordered Sets the class attribute quantityordered with a given value
     *
     * The attribute quantityordered maps the field quantityOrdered defined as int.<br>
     * Comment for field quantityOrdered: Not specified.<br>
     * @param int $quantityordered
     * @category Modifier
     */
    public function setQuantityordered($quantityordered)
    {
        $this->quantityordered = (int)$quantityordered;
    }

    /**
     * setPriceeach Sets the class attribute priceeach with a given value
     *
     * The attribute priceeach maps the field priceEach defined as decimal(10,2).<br>
     * Comment for field priceEach: Not specified.<br>
     * @param float $priceeach
     * @category Modifier
     */
    public function setPriceeach($priceeach)
    {
        $this->priceeach = (float)$priceeach;
    }

    /**
     * setOrderlinenumber Sets the class attribute orderlinenumber with a given value
     *
     * The attribute orderlinenumber maps the field orderLineNumber defined as smallint.<br>
     * Comment for field orderLineNumber: Not specified.<br>
     * @param int $orderlinenumber
     * @category Modifier
     */
    public function setOrderlinenumber($orderlinenumber)
    {
        $this->orderlinenumber = (int)$orderlinenumber;
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
     * getProductcode gets the class attribute productcode value
     *
     * The attribute productcode maps the field productCode defined as varchar(15).<br>
     * Comment for field productCode: Not specified.
     * @return string $productcode
     * @category Accessor of $productcode
     */
    public function getProductcode()
    {
        return $this->productcode;
    }

    /**
     * getQuantityordered gets the class attribute quantityordered value
     *
     * The attribute quantityordered maps the field quantityOrdered defined as int.<br>
     * Comment for field quantityOrdered: Not specified.
     * @return int $quantityordered
     * @category Accessor of $quantityordered
     */
    public function getQuantityordered()
    {
        return $this->quantityordered;
    }

    /**
     * getPriceeach gets the class attribute priceeach value
     *
     * The attribute priceeach maps the field priceEach defined as decimal(10,2).<br>
     * Comment for field priceEach: Not specified.
     * @return float $priceeach
     * @category Accessor of $priceeach
     */
    public function getPriceeach()
    {
        return $this->priceeach;
    }

    /**
     * getOrderlinenumber gets the class attribute orderlinenumber value
     *
     * The attribute orderlinenumber maps the field orderLineNumber defined as smallint.<br>
     * Comment for field orderLineNumber: Not specified.
     * @return int $orderlinenumber
     * @category Accessor of $orderlinenumber
     */
    public function getOrderlinenumber()
    {
        return $this->orderlinenumber;
    }

    /**
     * Gets DDL SQL code of the table orderdetails
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
        return "orderdetails";
    }

    /**
    * The BeanOrderdetails constructor
    *
    * It creates and initializes an object in two way:
    *  - with null (not fetched) data if none ${ClassPkAttributeName} is given.
    *  - with a fetched data row from the table {TableName} having {TablePkName}=${ClassPkAttributeName}
	* @param int $ordernumber
	* @param string $productcode
    * @return BeanOrderdetails Object
    */
    public function __construct($ordernumber=NULL,$productcode=NULL)
    {
        parent::__construct();
        if (!empty($ordernumber) && !empty($productcode)) {
            $this->select($ordernumber,$productcode);
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
    * Fetchs a table row of orderdetails into the object.
    *
    * Fetched table fields values are assigned to class attributes and they can be managed by using
    * the accessors/modifiers methods of the class.
	* @param int $ordernumber
	* @param string $productcode
    * @return int affected selected row
    * @category DML
    */
    public function select($ordernumber,$productcode)
    {
        $sql =  "SELECT * FROM orderdetails WHERE orderNumber={$this->parseValue($ordernumber,'int')} AND productCode={$this->parseValue($productcode,'string')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->ordernumber = (integer)$rowObject->orderNumber;
            @$this->productcode = $this->replaceAposBackSlash($rowObject->productCode);
            @$this->quantityordered = (integer)$rowObject->quantityOrdered;
            @$this->priceeach = (float)$rowObject->priceEach;
            @$this->orderlinenumber = (integer)$rowObject->orderLineNumber;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
    return $this->affected_rows;
    }

    /**
    * Deletes a specific row from the table orderdetails
	* @param int $ordernumber
	* @param string $productcode
    * @return int affected deleted row
    * @category DML
    */
    public function delete($ordernumber,$productcode)
    {
        $sql = "DELETE FROM orderdetails WHERE orderNumber={$this->parseValue($ordernumber,'int')} AND productCode={$this->parseValue($productcode,'string')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
    * Insert the current object into a new table row of orderdetails
    *
    * All class attributes values defined for mapping all table fields are automatically used during inserting
    * @return mixed MySQL insert result
    * @category DML
    */
    public function insert()
    {
        // $constants = get_defined_constants();
        $sql = <<< SQL
        INSERT INTO orderdetails
        (orderNumber,productCode,quantityOrdered,priceEach,orderLineNumber)
        VALUES({$this->parseValue($this->ordernumber)},
			{$this->parseValue($this->productcode,'notNumber')},
			{$this->parseValue($this->quantityordered)},
			{$this->parseValue($this->priceeach)},
			{$this->parseValue($this->orderlinenumber)})
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
    * Updates a specific row from the table orderdetails with the values of the current object.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
    * Null values are used for all attributes not previously setted.
	* @param int $ordernumber
	* @param string $productcode
    * @return mixed MySQL update result
    * @category DML
    */
    public function update($ordernumber,$productcode)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                orderdetails
                SET 
				quantityOrdered={$this->parseValue($this->quantityordered)},
				priceEach={$this->parseValue($this->priceeach)},
				orderLineNumber={$this->parseValue($this->orderlinenumber)}
            WHERE
                orderNumber={$this->parseValue($ordernumber,'int')} AND productCode={$this->parseValue($productcode,'string')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($ordernumber,$productcode);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
    * Facility for updating a row of orderdetails previously loaded.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating.
    * @category DML Helper
    * @return mixed MySQLi update result
    */
    public function updateCurrent()
    {
        if (!empty($this->ordernumber) && !empty($this->productcode)) {
           return $this->update($this->ordernumber,$this->productcode);
        } else {
            return false;
        }
    }

}
?>
