<?php
include_once("bean.config.php");

/**
 * Class BeanEmployees
 * Bean class for object oriented management of the MySQL table employees
 *
 * Comment of the managed table employees: Not specified.
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
 * @filesource BeanEmployees.php
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

class BeanEmployees extends MySqlRecord
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
     * Class attribute for mapping the primary key employeeNumber of table employees
     *
     * Comment for field employeeNumber: Not specified<br>
     * @var int $employeenumber
     */
    private $employeenumber;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = false;

    /**
     * Class attribute for mapping table field lastName
     *
     * Comment for field lastName: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $lastname
     */
    private $lastname;

    /**
     * Class attribute for mapping table field firstName
     *
     * Comment for field firstName: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $firstname
     */
    private $firstname;

    /**
     * Class attribute for mapping table field extension
     *
     * Comment for field extension: Not specified.<br>
     * Field information:
     *  - Data type: varchar(10)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $extension
     */
    private $extension;

    /**
     * Class attribute for mapping table field email
     *
     * Comment for field email: Not specified.<br>
     * Field information:
     *  - Data type: varchar(100)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $email
     */
    private $email;

    /**
     * Class attribute for mapping table field officeCode
     *
     * Comment for field officeCode: Not specified.<br>
     * Field information:
     *  - Data type: varchar(10)
     *  - Null : NO
     *  - DB Index: MUL
     *  - Default: 
     *  - Extra:  
     * @var string $officecode
     */
    private $officecode;

    /**
     * Class attribute for mapping table field reportsTo
     *
     * Comment for field reportsTo: Not specified.<br>
     * Field information:
     *  - Data type: int
     *  - Null : YES
     *  - DB Index: MUL
     *  - Default: 
     *  - Extra:  
     * @var int $reportsto
     */
    private $reportsto;

    /**
     * Class attribute for mapping table field jobTitle
     *
     * Comment for field jobTitle: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $jobtitle
     */
    private $jobtitle;

    /**
     * Class attribute for storing the SQL DDL of table employees
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBlbXBsb3llZXNgICgKICBgZW1wbG95ZWVOdW1iZXJgIGludCBOT1QgTlVMTCwKICBgbGFzdE5hbWVgIHZhcmNoYXIoNTApIE5PVCBOVUxMLAogIGBmaXJzdE5hbWVgIHZhcmNoYXIoNTApIE5PVCBOVUxMLAogIGBleHRlbnNpb25gIHZhcmNoYXIoMTApIE5PVCBOVUxMLAogIGBlbWFpbGAgdmFyY2hhcigxMDApIE5PVCBOVUxMLAogIGBvZmZpY2VDb2RlYCB2YXJjaGFyKDEwKSBOT1QgTlVMTCwKICBgcmVwb3J0c1RvYCBpbnQgREVGQVVMVCBOVUxMLAogIGBqb2JUaXRsZWAgdmFyY2hhcig1MCkgTk9UIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBlbXBsb3llZU51bWJlcmApLAogIEtFWSBgcmVwb3J0c1RvYCAoYHJlcG9ydHNUb2ApLAogIEtFWSBgb2ZmaWNlQ29kZWAgKGBvZmZpY2VDb2RlYCksCiAgQ09OU1RSQUlOVCBgZW1wbG95ZWVzX2liZmtfMWAgRk9SRUlHTiBLRVkgKGByZXBvcnRzVG9gKSBSRUZFUkVOQ0VTIGBlbXBsb3llZXNgIChgZW1wbG95ZWVOdW1iZXJgKSwKICBDT05TVFJBSU5UIGBlbXBsb3llZXNfaWJma18yYCBGT1JFSUdOIEtFWSAoYG9mZmljZUNvZGVgKSBSRUZFUkVOQ0VTIGBvZmZpY2VzYCAoYG9mZmljZUNvZGVgKQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPWxhdGluMQ==";

    /**
     * setEmployeenumber Sets the class attribute employeenumber with a given value
     *
     * The attribute employeenumber maps the field employeeNumber defined as int.<br>
     * Comment for field employeeNumber: Not specified.<br>
     * @param int $employeenumber
     * @category Modifier
     */
    public function setEmployeenumber($employeenumber)
    {
        $this->employeenumber = (int)$employeenumber;
    }

    /**
     * setLastname Sets the class attribute lastname with a given value
     *
     * The attribute lastname maps the field lastName defined as varchar(50).<br>
     * Comment for field lastName: Not specified.<br>
     * @param string $lastname
     * @category Modifier
     */
    public function setLastname($lastname)
    {
        $this->lastname = (string)$lastname;
    }

    /**
     * setFirstname Sets the class attribute firstname with a given value
     *
     * The attribute firstname maps the field firstName defined as varchar(50).<br>
     * Comment for field firstName: Not specified.<br>
     * @param string $firstname
     * @category Modifier
     */
    public function setFirstname($firstname)
    {
        $this->firstname = (string)$firstname;
    }

    /**
     * setExtension Sets the class attribute extension with a given value
     *
     * The attribute extension maps the field extension defined as varchar(10).<br>
     * Comment for field extension: Not specified.<br>
     * @param string $extension
     * @category Modifier
     */
    public function setExtension($extension)
    {
        $this->extension = (string)$extension;
    }

    /**
     * setEmail Sets the class attribute email with a given value
     *
     * The attribute email maps the field email defined as varchar(100).<br>
     * Comment for field email: Not specified.<br>
     * @param string $email
     * @category Modifier
     */
    public function setEmail($email)
    {
        $this->email = (string)$email;
    }

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
     * setReportsto Sets the class attribute reportsto with a given value
     *
     * The attribute reportsto maps the field reportsTo defined as int.<br>
     * Comment for field reportsTo: Not specified.<br>
     * @param int $reportsto
     * @category Modifier
     */
    public function setReportsto($reportsto)
    {
        $this->reportsto = (int)$reportsto;
    }

    /**
     * setJobtitle Sets the class attribute jobtitle with a given value
     *
     * The attribute jobtitle maps the field jobTitle defined as varchar(50).<br>
     * Comment for field jobTitle: Not specified.<br>
     * @param string $jobtitle
     * @category Modifier
     */
    public function setJobtitle($jobtitle)
    {
        $this->jobtitle = (string)$jobtitle;
    }

    /**
     * getEmployeenumber gets the class attribute employeenumber value
     *
     * The attribute employeenumber maps the field employeeNumber defined as int.<br>
     * Comment for field employeeNumber: Not specified.
     * @return int $employeenumber
     * @category Accessor of $employeenumber
     */
    public function getEmployeenumber()
    {
        return $this->employeenumber;
    }

    /**
     * getLastname gets the class attribute lastname value
     *
     * The attribute lastname maps the field lastName defined as varchar(50).<br>
     * Comment for field lastName: Not specified.
     * @return string $lastname
     * @category Accessor of $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * getFirstname gets the class attribute firstname value
     *
     * The attribute firstname maps the field firstName defined as varchar(50).<br>
     * Comment for field firstName: Not specified.
     * @return string $firstname
     * @category Accessor of $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * getExtension gets the class attribute extension value
     *
     * The attribute extension maps the field extension defined as varchar(10).<br>
     * Comment for field extension: Not specified.
     * @return string $extension
     * @category Accessor of $extension
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * getEmail gets the class attribute email value
     *
     * The attribute email maps the field email defined as varchar(100).<br>
     * Comment for field email: Not specified.
     * @return string $email
     * @category Accessor of $email
     */
    public function getEmail()
    {
        return $this->email;
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
     * getReportsto gets the class attribute reportsto value
     *
     * The attribute reportsto maps the field reportsTo defined as int.<br>
     * Comment for field reportsTo: Not specified.
     * @return int $reportsto
     * @category Accessor of $reportsto
     */
    public function getReportsto()
    {
        return $this->reportsto;
    }

    /**
     * getJobtitle gets the class attribute jobtitle value
     *
     * The attribute jobtitle maps the field jobTitle defined as varchar(50).<br>
     * Comment for field jobTitle: Not specified.
     * @return string $jobtitle
     * @category Accessor of $jobtitle
     */
    public function getJobtitle()
    {
        return $this->jobtitle;
    }

    /**
     * Gets DDL SQL code of the table employees
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
        return "employees";
    }

    /**
     * The BeanEmployees constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $employeenumber is given.
     *  - with a fetched data row from the table employees having employeeNumber=$employeenumber
     * @param int $employeenumber. If omitted an empty (not fetched) instance is created.
     * @return BeanEmployees Object
     */
    public function __construct($employeenumber = null)
    {
        parent::__construct();
        if (!empty($employeenumber)) {
            $this->select($employeenumber);
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
     * Fetchs a table row of employees into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $employeenumber the primary key employeeNumber value of table employees which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($employeenumber)
    {
        $sql =  "SELECT * FROM employees WHERE employeeNumber={$this->parseValue($employeenumber,'int')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->employeenumber = (integer)$rowObject->employeeNumber;
            @$this->lastname = $this->replaceAposBackSlash($rowObject->lastName);
            @$this->firstname = $this->replaceAposBackSlash($rowObject->firstName);
            @$this->extension = $this->replaceAposBackSlash($rowObject->extension);
            @$this->email = $this->replaceAposBackSlash($rowObject->email);
            @$this->officecode = $this->replaceAposBackSlash($rowObject->officeCode);
            @$this->reportsto = (integer)$rowObject->reportsTo;
            @$this->jobtitle = $this->replaceAposBackSlash($rowObject->jobTitle);
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table employees
     * @param int $employeenumber the primary key employeeNumber value of table employees which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($employeenumber)
    {
        $sql = "DELETE FROM employees WHERE employeeNumber={$this->parseValue($employeenumber,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of employees
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->employeenumber = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO employees
            (employeeNumber,lastName,firstName,extension,email,officeCode,reportsTo,jobTitle)
            VALUES({$this->parseValue($this->employeenumber)},
			{$this->parseValue($this->lastname,'notNumber')},
			{$this->parseValue($this->firstname,'notNumber')},
			{$this->parseValue($this->extension,'notNumber')},
			{$this->parseValue($this->email,'notNumber')},
			{$this->parseValue($this->officecode,'notNumber')},
			{$this->parseValue($this->reportsto)},
			{$this->parseValue($this->jobtitle,'notNumber')})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->employeenumber = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table employees with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $employeenumber the primary key employeeNumber value of table employees which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($employeenumber)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                employees
            SET 
				lastName={$this->parseValue($this->lastname,'notNumber')},
				firstName={$this->parseValue($this->firstname,'notNumber')},
				extension={$this->parseValue($this->extension,'notNumber')},
				email={$this->parseValue($this->email,'notNumber')},
				officeCode={$this->parseValue($this->officecode,'notNumber')},
				reportsTo={$this->parseValue($this->reportsto)},
				jobTitle={$this->parseValue($this->jobtitle,'notNumber')}
            WHERE
                employeeNumber={$this->parseValue($employeenumber,'int')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($employeenumber);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of employees previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->employeenumber != "") {
            return $this->update($this->employeenumber);
        } else {
            return false;
        }
    }

}
?>
