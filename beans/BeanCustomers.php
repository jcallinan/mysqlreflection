<?php
include_once("bean.config.php");

/**
 * Class BeanCustomers
 * Bean class for object oriented management of the MySQL table customers
 *
 * Comment of the managed table customers: Not specified.
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
 * @filesource BeanCustomers.php
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

class BeanCustomers extends MySqlRecord
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
     * Class attribute for mapping the primary key customerNumber of table customers
     *
     * Comment for field customerNumber: Not specified<br>
     * @var int $customernumber
     */
    private $customernumber;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = false;

    /**
     * Class attribute for mapping table field customerName
     *
     * Comment for field customerName: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $customername
     */
    private $customername;

    /**
     * Class attribute for mapping table field contactLastName
     *
     * Comment for field contactLastName: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $contactlastname
     */
    private $contactlastname;

    /**
     * Class attribute for mapping table field contactFirstName
     *
     * Comment for field contactFirstName: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $contactfirstname
     */
    private $contactfirstname;

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
     * Class attribute for mapping table field postalCode
     *
     * Comment for field postalCode: Not specified.<br>
     * Field information:
     *  - Data type: varchar(15)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $postalcode
     */
    private $postalcode;

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
     * Class attribute for mapping table field salesRepEmployeeNumber
     *
     * Comment for field salesRepEmployeeNumber: Not specified.<br>
     * Field information:
     *  - Data type: int
     *  - Null : YES
     *  - DB Index: MUL
     *  - Default: 
     *  - Extra:  
     * @var int $salesrepemployeenumber
     */
    private $salesrepemployeenumber;

    /**
     * Class attribute for mapping table field creditLimit
     *
     * Comment for field creditLimit: Not specified.<br>
     * Field information:
     *  - Data type: decimal(10,2)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var float $creditlimit
     */
    private $creditlimit;

    /**
     * Class attribute for storing the SQL DDL of table customers
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBjdXN0b21lcnNgICgKICBgY3VzdG9tZXJOdW1iZXJgIGludCBOT1QgTlVMTCwKICBgY3VzdG9tZXJOYW1lYCB2YXJjaGFyKDUwKSBOT1QgTlVMTCwKICBgY29udGFjdExhc3ROYW1lYCB2YXJjaGFyKDUwKSBOT1QgTlVMTCwKICBgY29udGFjdEZpcnN0TmFtZWAgdmFyY2hhcig1MCkgTk9UIE5VTEwsCiAgYHBob25lYCB2YXJjaGFyKDUwKSBOT1QgTlVMTCwKICBgYWRkcmVzc0xpbmUxYCB2YXJjaGFyKDUwKSBOT1QgTlVMTCwKICBgYWRkcmVzc0xpbmUyYCB2YXJjaGFyKDUwKSBERUZBVUxUIE5VTEwsCiAgYGNpdHlgIHZhcmNoYXIoNTApIE5PVCBOVUxMLAogIGBzdGF0ZWAgdmFyY2hhcig1MCkgREVGQVVMVCBOVUxMLAogIGBwb3N0YWxDb2RlYCB2YXJjaGFyKDE1KSBERUZBVUxUIE5VTEwsCiAgYGNvdW50cnlgIHZhcmNoYXIoNTApIE5PVCBOVUxMLAogIGBzYWxlc1JlcEVtcGxveWVlTnVtYmVyYCBpbnQgREVGQVVMVCBOVUxMLAogIGBjcmVkaXRMaW1pdGAgZGVjaW1hbCgxMCwyKSBERUZBVUxUIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBjdXN0b21lck51bWJlcmApLAogIEtFWSBgc2FsZXNSZXBFbXBsb3llZU51bWJlcmAgKGBzYWxlc1JlcEVtcGxveWVlTnVtYmVyYCksCiAgQ09OU1RSQUlOVCBgY3VzdG9tZXJzX2liZmtfMWAgRk9SRUlHTiBLRVkgKGBzYWxlc1JlcEVtcGxveWVlTnVtYmVyYCkgUkVGRVJFTkNFUyBgZW1wbG95ZWVzYCAoYGVtcGxveWVlTnVtYmVyYCkKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD1sYXRpbjE=";

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
     * setCustomername Sets the class attribute customername with a given value
     *
     * The attribute customername maps the field customerName defined as varchar(50).<br>
     * Comment for field customerName: Not specified.<br>
     * @param string $customername
     * @category Modifier
     */
    public function setCustomername($customername)
    {
        $this->customername = (string)$customername;
    }

    /**
     * setContactlastname Sets the class attribute contactlastname with a given value
     *
     * The attribute contactlastname maps the field contactLastName defined as varchar(50).<br>
     * Comment for field contactLastName: Not specified.<br>
     * @param string $contactlastname
     * @category Modifier
     */
    public function setContactlastname($contactlastname)
    {
        $this->contactlastname = (string)$contactlastname;
    }

    /**
     * setContactfirstname Sets the class attribute contactfirstname with a given value
     *
     * The attribute contactfirstname maps the field contactFirstName defined as varchar(50).<br>
     * Comment for field contactFirstName: Not specified.<br>
     * @param string $contactfirstname
     * @category Modifier
     */
    public function setContactfirstname($contactfirstname)
    {
        $this->contactfirstname = (string)$contactfirstname;
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
     * setSalesrepemployeenumber Sets the class attribute salesrepemployeenumber with a given value
     *
     * The attribute salesrepemployeenumber maps the field salesRepEmployeeNumber defined as int.<br>
     * Comment for field salesRepEmployeeNumber: Not specified.<br>
     * @param int $salesrepemployeenumber
     * @category Modifier
     */
    public function setSalesrepemployeenumber($salesrepemployeenumber)
    {
        $this->salesrepemployeenumber = (int)$salesrepemployeenumber;
    }

    /**
     * setCreditlimit Sets the class attribute creditlimit with a given value
     *
     * The attribute creditlimit maps the field creditLimit defined as decimal(10,2).<br>
     * Comment for field creditLimit: Not specified.<br>
     * @param float $creditlimit
     * @category Modifier
     */
    public function setCreditlimit($creditlimit)
    {
        $this->creditlimit = (float)$creditlimit;
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
     * getCustomername gets the class attribute customername value
     *
     * The attribute customername maps the field customerName defined as varchar(50).<br>
     * Comment for field customerName: Not specified.
     * @return string $customername
     * @category Accessor of $customername
     */
    public function getCustomername()
    {
        return $this->customername;
    }

    /**
     * getContactlastname gets the class attribute contactlastname value
     *
     * The attribute contactlastname maps the field contactLastName defined as varchar(50).<br>
     * Comment for field contactLastName: Not specified.
     * @return string $contactlastname
     * @category Accessor of $contactlastname
     */
    public function getContactlastname()
    {
        return $this->contactlastname;
    }

    /**
     * getContactfirstname gets the class attribute contactfirstname value
     *
     * The attribute contactfirstname maps the field contactFirstName defined as varchar(50).<br>
     * Comment for field contactFirstName: Not specified.
     * @return string $contactfirstname
     * @category Accessor of $contactfirstname
     */
    public function getContactfirstname()
    {
        return $this->contactfirstname;
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
     * getSalesrepemployeenumber gets the class attribute salesrepemployeenumber value
     *
     * The attribute salesrepemployeenumber maps the field salesRepEmployeeNumber defined as int.<br>
     * Comment for field salesRepEmployeeNumber: Not specified.
     * @return int $salesrepemployeenumber
     * @category Accessor of $salesrepemployeenumber
     */
    public function getSalesrepemployeenumber()
    {
        return $this->salesrepemployeenumber;
    }

    /**
     * getCreditlimit gets the class attribute creditlimit value
     *
     * The attribute creditlimit maps the field creditLimit defined as decimal(10,2).<br>
     * Comment for field creditLimit: Not specified.
     * @return float $creditlimit
     * @category Accessor of $creditlimit
     */
    public function getCreditlimit()
    {
        return $this->creditlimit;
    }

    /**
     * Gets DDL SQL code of the table customers
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
        return "customers";
    }

    /**
     * The BeanCustomers constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $customernumber is given.
     *  - with a fetched data row from the table customers having customerNumber=$customernumber
     * @param int $customernumber. If omitted an empty (not fetched) instance is created.
     * @return BeanCustomers Object
     */
    public function __construct($customernumber = null)
    {
        parent::__construct();
        if (!empty($customernumber)) {
            $this->select($customernumber);
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
     * Fetchs a table row of customers into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $customernumber the primary key customerNumber value of table customers which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($customernumber)
    {
        $sql =  "SELECT * FROM customers WHERE customerNumber={$this->parseValue($customernumber,'int')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->customernumber = (integer)$rowObject->customerNumber;
            @$this->customername = $this->replaceAposBackSlash($rowObject->customerName);
            @$this->contactlastname = $this->replaceAposBackSlash($rowObject->contactLastName);
            @$this->contactfirstname = $this->replaceAposBackSlash($rowObject->contactFirstName);
            @$this->phone = $this->replaceAposBackSlash($rowObject->phone);
            @$this->addressline1 = $this->replaceAposBackSlash($rowObject->addressLine1);
            @$this->addressline2 = $this->replaceAposBackSlash($rowObject->addressLine2);
            @$this->city = $this->replaceAposBackSlash($rowObject->city);
            @$this->state = $this->replaceAposBackSlash($rowObject->state);
            @$this->postalcode = $this->replaceAposBackSlash($rowObject->postalCode);
            @$this->country = $this->replaceAposBackSlash($rowObject->country);
            @$this->salesrepemployeenumber = (integer)$rowObject->salesRepEmployeeNumber;
            @$this->creditlimit = (float)$rowObject->creditLimit;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table customers
     * @param int $customernumber the primary key customerNumber value of table customers which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($customernumber)
    {
        $sql = "DELETE FROM customers WHERE customerNumber={$this->parseValue($customernumber,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of customers
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->customernumber = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO customers
            (customerNumber,customerName,contactLastName,contactFirstName,phone,addressLine1,addressLine2,city,state,postalCode,country,salesRepEmployeeNumber,creditLimit)
            VALUES({$this->parseValue($this->customernumber)},
			{$this->parseValue($this->customername,'notNumber')},
			{$this->parseValue($this->contactlastname,'notNumber')},
			{$this->parseValue($this->contactfirstname,'notNumber')},
			{$this->parseValue($this->phone,'notNumber')},
			{$this->parseValue($this->addressline1,'notNumber')},
			{$this->parseValue($this->addressline2,'notNumber')},
			{$this->parseValue($this->city,'notNumber')},
			{$this->parseValue($this->state,'notNumber')},
			{$this->parseValue($this->postalcode,'notNumber')},
			{$this->parseValue($this->country,'notNumber')},
			{$this->parseValue($this->salesrepemployeenumber)},
			{$this->parseValue($this->creditlimit)})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->customernumber = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table customers with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $customernumber the primary key customerNumber value of table customers which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($customernumber)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                customers
            SET 
				customerName={$this->parseValue($this->customername,'notNumber')},
				contactLastName={$this->parseValue($this->contactlastname,'notNumber')},
				contactFirstName={$this->parseValue($this->contactfirstname,'notNumber')},
				phone={$this->parseValue($this->phone,'notNumber')},
				addressLine1={$this->parseValue($this->addressline1,'notNumber')},
				addressLine2={$this->parseValue($this->addressline2,'notNumber')},
				city={$this->parseValue($this->city,'notNumber')},
				state={$this->parseValue($this->state,'notNumber')},
				postalCode={$this->parseValue($this->postalcode,'notNumber')},
				country={$this->parseValue($this->country,'notNumber')},
				salesRepEmployeeNumber={$this->parseValue($this->salesrepemployeenumber)},
				creditLimit={$this->parseValue($this->creditlimit)}
            WHERE
                customerNumber={$this->parseValue($customernumber,'int')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($customernumber);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of customers previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->customernumber != "") {
            return $this->update($this->customernumber);
        } else {
            return false;
        }
    }

}
?>
