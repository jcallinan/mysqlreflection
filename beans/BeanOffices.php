<?php
include_once("bean.config.php");

/**
 * Class BeanOffices
 * Bean class for object oriented management of the MySQL table offices
 *
 * Comment of the managed table offices: Not specified.
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
 * @filesource BeanOffices.php
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

class BeanOffices extends MySqlRecord
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
     * Class attribute for mapping the primary key officeCode of table offices
     *
     * Comment for field officeCode: Not specified<br>
     * @var string $officecode
     */
    private $officecode;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = false;

    /**
     * Class attribute for mapping table field city
     *
     * Comment for field city: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $city
     */
    private $city;

    /**
     * Class attribute for mapping table field phone
     *
     * Comment for field phone: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $phone
     */
    private $phone;

    /**
     * Class attribute for mapping table field addressLine1
     *
     * Comment for field addressLine1: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $addressline1
     */
    private $addressline1;

    /**
     * Class attribute for mapping table field addressLine2
     *
     * Comment for field addressLine2: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $addressline2
     */
    private $addressline2;

    /**
     * Class attribute for mapping table field state
     *
     * Comment for field state: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $state
     */
    private $state;

    /**
     * Class attribute for mapping table field country
     *
     * Comment for field country: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $country
     */
    private $country;

    /**
     * Class attribute for mapping table field postalCode
     *
     * Comment for field postalCode: Not specified.<br>
     * Field information:
     *  - Data type: varchar(15)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $postalcode
     */
    private $postalcode;

    /**
     * Class attribute for mapping table field territory
     *
     * Comment for field territory: Not specified.<br>
     * Field information:
     *  - Data type: varchar(10)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $territory
     */
    private $territory;

    /**
     * Class attribute for storing the SQL DDL of table offices
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBvZmZpY2VzYCAoCiAgYG9mZmljZUNvZGVgIHZhcmNoYXIoMTApIE5PVCBOVUxMLAogIGBjaXR5YCB2YXJjaGFyKDUwKSBOT1QgTlVMTCwKICBgcGhvbmVgIHZhcmNoYXIoNTApIE5PVCBOVUxMLAogIGBhZGRyZXNzTGluZTFgIHZhcmNoYXIoNTApIE5PVCBOVUxMLAogIGBhZGRyZXNzTGluZTJgIHZhcmNoYXIoNTApIERFRkFVTFQgTlVMTCwKICBgc3RhdGVgIHZhcmNoYXIoNTApIERFRkFVTFQgTlVMTCwKICBgY291bnRyeWAgdmFyY2hhcig1MCkgTk9UIE5VTEwsCiAgYHBvc3RhbENvZGVgIHZhcmNoYXIoMTUpIE5PVCBOVUxMLAogIGB0ZXJyaXRvcnlgIHZhcmNoYXIoMTApIE5PVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgb2ZmaWNlQ29kZWApCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9bGF0aW4x";

    /**
     * setOfficecode Sets the class attribute officecode with a given value
     *
     * The attribute officecode maps the field officeCode defined as varchar(10).<br>
     * Comment for field officeCode: Not specified.<br>
     * @param string $officecode
     * @category Modifier
     */
    public function setOfficecode($officecode)
    {
        $this->officecode = (string)$officecode;
    }

    /**
     * setCity Sets the class attribute city with a given value
     *
     * The attribute city maps the field city defined as varchar(50).<br>
     * Comment for field city: Not specified.<br>
     * @param string $city
     * @category Modifier
     */
    public function setCity($city)
    {
        $this->city = (string)$city;
    }

    /**
     * setPhone Sets the class attribute phone with a given value
     *
     * The attribute phone maps the field phone defined as varchar(50).<br>
     * Comment for field phone: Not specified.<br>
     * @param string $phone
     * @category Modifier
     */
    public function setPhone($phone)
    {
        $this->phone = (string)$phone;
    }

    /**
     * setAddressline1 Sets the class attribute addressline1 with a given value
     *
     * The attribute addressline1 maps the field addressLine1 defined as varchar(50).<br>
     * Comment for field addressLine1: Not specified.<br>
     * @param string $addressline1
     * @category Modifier
     */
    public function setAddressline1($addressline1)
    {
        $this->addressline1 = (string)$addressline1;
    }

    /**
     * setAddressline2 Sets the class attribute addressline2 with a given value
     *
     * The attribute addressline2 maps the field addressLine2 defined as varchar(50).<br>
     * Comment for field addressLine2: Not specified.<br>
     * @param string $addressline2
     * @category Modifier
     */
    public function setAddressline2($addressline2)
    {
        $this->addressline2 = (string)$addressline2;
    }

    /**
     * setState Sets the class attribute state with a given value
     *
     * The attribute state maps the field state defined as varchar(50).<br>
     * Comment for field state: Not specified.<br>
     * @param string $state
     * @category Modifier
     */
    public function setState($state)
    {
        $this->state = (string)$state;
    }

    /**
     * setCountry Sets the class attribute country with a given value
     *
     * The attribute country maps the field country defined as varchar(50).<br>
     * Comment for field country: Not specified.<br>
     * @param string $country
     * @category Modifier
     */
    public function setCountry($country)
    {
        $this->country = (string)$country;
    }

    /**
     * setPostalcode Sets the class attribute postalcode with a given value
     *
     * The attribute postalcode maps the field postalCode defined as varchar(15).<br>
     * Comment for field postalCode: Not specified.<br>
     * @param string $postalcode
     * @category Modifier
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = (string)$postalcode;
    }

    /**
     * setTerritory Sets the class attribute territory with a given value
     *
     * The attribute territory maps the field territory defined as varchar(10).<br>
     * Comment for field territory: Not specified.<br>
     * @param string $territory
     * @category Modifier
     */
    public function setTerritory($territory)
    {
        $this->territory = (string)$territory;
    }

    /**
     * getOfficecode gets the class attribute officecode value
     *
     * The attribute officecode maps the field officeCode defined as varchar(10).<br>
     * Comment for field officeCode: Not specified.
     * @return string $officecode
     * @category Accessor of $officecode
     */
    public function getOfficecode()
    {
        return $this->officecode;
    }

    /**
     * getCity gets the class attribute city value
     *
     * The attribute city maps the field city defined as varchar(50).<br>
     * Comment for field city: Not specified.
     * @return string $city
     * @category Accessor of $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * getPhone gets the class attribute phone value
     *
     * The attribute phone maps the field phone defined as varchar(50).<br>
     * Comment for field phone: Not specified.
     * @return string $phone
     * @category Accessor of $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * getAddressline1 gets the class attribute addressline1 value
     *
     * The attribute addressline1 maps the field addressLine1 defined as varchar(50).<br>
     * Comment for field addressLine1: Not specified.
     * @return string $addressline1
     * @category Accessor of $addressline1
     */
    public function getAddressline1()
    {
        return $this->addressline1;
    }

    /**
     * getAddressline2 gets the class attribute addressline2 value
     *
     * The attribute addressline2 maps the field addressLine2 defined as varchar(50).<br>
     * Comment for field addressLine2: Not specified.
     * @return string $addressline2
     * @category Accessor of $addressline2
     */
    public function getAddressline2()
    {
        return $this->addressline2;
    }

    /**
     * getState gets the class attribute state value
     *
     * The attribute state maps the field state defined as varchar(50).<br>
     * Comment for field state: Not specified.
     * @return string $state
     * @category Accessor of $state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * getCountry gets the class attribute country value
     *
     * The attribute country maps the field country defined as varchar(50).<br>
     * Comment for field country: Not specified.
     * @return string $country
     * @category Accessor of $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * getPostalcode gets the class attribute postalcode value
     *
     * The attribute postalcode maps the field postalCode defined as varchar(15).<br>
     * Comment for field postalCode: Not specified.
     * @return string $postalcode
     * @category Accessor of $postalcode
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * getTerritory gets the class attribute territory value
     *
     * The attribute territory maps the field territory defined as varchar(10).<br>
     * Comment for field territory: Not specified.
     * @return string $territory
     * @category Accessor of $territory
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Gets DDL SQL code of the table offices
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
        return "offices";
    }

    /**
     * The BeanOffices constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $officecode is given.
     *  - with a fetched data row from the table offices having officeCode=$officecode
     * @param string $officecode. If omitted an empty (not fetched) instance is created.
     * @return BeanOffices Object
     */
    public function __construct($officecode = null)
    {
        parent::__construct();
        if (!empty($officecode)) {
            $this->select($officecode);
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
     * Fetchs a table row of offices into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param string $officecode the primary key officeCode value of table offices which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($officecode)
    {
        $sql =  "SELECT * FROM offices WHERE officeCode={$this->parseValue($officecode,'string')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->officecode = $this->replaceAposBackSlash($rowObject->officeCode);
            @$this->city = $this->replaceAposBackSlash($rowObject->city);
            @$this->phone = $this->replaceAposBackSlash($rowObject->phone);
            @$this->addressline1 = $this->replaceAposBackSlash($rowObject->addressLine1);
            @$this->addressline2 = $this->replaceAposBackSlash($rowObject->addressLine2);
            @$this->state = $this->replaceAposBackSlash($rowObject->state);
            @$this->country = $this->replaceAposBackSlash($rowObject->country);
            @$this->postalcode = $this->replaceAposBackSlash($rowObject->postalCode);
            @$this->territory = $this->replaceAposBackSlash($rowObject->territory);
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table offices
     * @param string $officecode the primary key officeCode value of table offices which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($officecode)
    {
        $sql = "DELETE FROM offices WHERE officeCode={$this->parseValue($officecode,'string')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of offices
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->officecode = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO offices
            (officeCode,city,phone,addressLine1,addressLine2,state,country,postalCode,territory)
            VALUES({$this->parseValue($this->officecode,'notNumber')},
			{$this->parseValue($this->city,'notNumber')},
			{$this->parseValue($this->phone,'notNumber')},
			{$this->parseValue($this->addressline1,'notNumber')},
			{$this->parseValue($this->addressline2,'notNumber')},
			{$this->parseValue($this->state,'notNumber')},
			{$this->parseValue($this->country,'notNumber')},
			{$this->parseValue($this->postalcode,'notNumber')},
			{$this->parseValue($this->territory,'notNumber')})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->officecode = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table offices with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param string $officecode the primary key officeCode value of table offices which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($officecode)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                offices
            SET 
				city={$this->parseValue($this->city,'notNumber')},
				phone={$this->parseValue($this->phone,'notNumber')},
				addressLine1={$this->parseValue($this->addressline1,'notNumber')},
				addressLine2={$this->parseValue($this->addressline2,'notNumber')},
				state={$this->parseValue($this->state,'notNumber')},
				country={$this->parseValue($this->country,'notNumber')},
				postalCode={$this->parseValue($this->postalcode,'notNumber')},
				territory={$this->parseValue($this->territory,'notNumber')}
            WHERE
                officeCode={$this->parseValue($officecode,'string')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($officecode);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of offices previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->officecode != "") {
            return $this->update($this->officecode);
        } else {
            return false;
        }
    }

}
?>
