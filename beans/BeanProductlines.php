<?php
include_once("bean.config.php");

/**
 * Class BeanProductlines
 * Bean class for object oriented management of the MySQL table productlines
 *
 * Comment of the managed table productlines: Not specified.
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
 * @filesource BeanProductlines.php
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

class BeanProductlines extends MySqlRecord
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
     * Class attribute for mapping the primary key productLine of table productlines
     *
     * Comment for field productLine: Not specified<br>
     * @var string $productline
     */
    private $productline;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = false;

    /**
     * Class attribute for mapping table field textDescription
     *
     * Comment for field textDescription: Not specified.<br>
     * Field information:
     *  - Data type: varchar(4000)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $textdescription
     */
    private $textdescription;

    /**
     * Class attribute for mapping table field htmlDescription
     *
     * Comment for field htmlDescription: Not specified.<br>
     * Field information:
     *  - Data type: mediumtext
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $htmldescription
     */
    private $htmldescription;

    /**
     * Class attribute for mapping table field image
     *
     * Comment for field image: Not specified.<br>
     * Field information:
     *  - Data type: mediumblob
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var null $image
     */
    private $image;

    /**
     * Class attribute for storing the SQL DDL of table productlines
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBwcm9kdWN0bGluZXNgICgKICBgcHJvZHVjdExpbmVgIHZhcmNoYXIoNTApIE5PVCBOVUxMLAogIGB0ZXh0RGVzY3JpcHRpb25gIHZhcmNoYXIoNDAwMCkgREVGQVVMVCBOVUxMLAogIGBodG1sRGVzY3JpcHRpb25gIG1lZGl1bXRleHQsCiAgYGltYWdlYCBtZWRpdW1ibG9iLAogIFBSSU1BUlkgS0VZIChgcHJvZHVjdExpbmVgKQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPWxhdGluMQ==";

    /**
     * setProductline Sets the class attribute productline with a given value
     *
     * The attribute productline maps the field productLine defined as varchar(50).<br>
     * Comment for field productLine: Not specified.<br>
     * @param string $productline
     * @category Modifier
     */
    public function setProductline($productline)
    {
        $this->productline = (string)$productline;
    }

    /**
     * setTextdescription Sets the class attribute textdescription with a given value
     *
     * The attribute textdescription maps the field textDescription defined as varchar(4000).<br>
     * Comment for field textDescription: Not specified.<br>
     * @param string $textdescription
     * @category Modifier
     */
    public function setTextdescription($textdescription)
    {
        $this->textdescription = (string)$textdescription;
    }

    /**
     * setHtmldescription Sets the class attribute htmldescription with a given value
     *
     * The attribute htmldescription maps the field htmlDescription defined as mediumtext.<br>
     * Comment for field htmlDescription: Not specified.<br>
     * @param string $htmldescription
     * @category Modifier
     */
    public function setHtmldescription($htmldescription)
    {
        $this->htmldescription = (string)$htmldescription;
    }

    /**
     * setImage Sets the class attribute image with a given value
     *
     * The attribute image maps the field image defined as mediumblob.<br>
     * Comment for field image: Not specified.<br>
     * @param null $image
     * @category Modifier
     */
    public function setImage($image)
    {
        $this->image = (string)$image;
    }

    /**
     * getProductline gets the class attribute productline value
     *
     * The attribute productline maps the field productLine defined as varchar(50).<br>
     * Comment for field productLine: Not specified.
     * @return string $productline
     * @category Accessor of $productline
     */
    public function getProductline()
    {
        return $this->productline;
    }

    /**
     * getTextdescription gets the class attribute textdescription value
     *
     * The attribute textdescription maps the field textDescription defined as varchar(4000).<br>
     * Comment for field textDescription: Not specified.
     * @return string $textdescription
     * @category Accessor of $textdescription
     */
    public function getTextdescription()
    {
        return $this->textdescription;
    }

    /**
     * getHtmldescription gets the class attribute htmldescription value
     *
     * The attribute htmldescription maps the field htmlDescription defined as mediumtext.<br>
     * Comment for field htmlDescription: Not specified.
     * @return string $htmldescription
     * @category Accessor of $htmldescription
     */
    public function getHtmldescription()
    {
        return $this->htmldescription;
    }

    /**
     * getImage gets the class attribute image value
     *
     * The attribute image maps the field image defined as mediumblob.<br>
     * Comment for field image: Not specified.
     * @return null $image
     * @category Accessor of $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Gets DDL SQL code of the table productlines
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
        return "productlines";
    }

    /**
     * The BeanProductlines constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $productline is given.
     *  - with a fetched data row from the table productlines having productLine=$productline
     * @param string $productline. If omitted an empty (not fetched) instance is created.
     * @return BeanProductlines Object
     */
    public function __construct($productline = null)
    {
        parent::__construct();
        if (!empty($productline)) {
            $this->select($productline);
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
     * Fetchs a table row of productlines into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param string $productline the primary key productLine value of table productlines which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($productline)
    {
        $sql =  "SELECT * FROM productlines WHERE productLine={$this->parseValue($productline,'string')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->productline = $this->replaceAposBackSlash($rowObject->productLine);
            @$this->textdescription = $this->replaceAposBackSlash($rowObject->textDescription);
            @$this->htmldescription = $this->replaceAposBackSlash($rowObject->htmlDescription);
            @$this->image = $rowObject->image;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table productlines
     * @param string $productline the primary key productLine value of table productlines which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($productline)
    {
        $sql = "DELETE FROM productlines WHERE productLine={$this->parseValue($productline,'string')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of productlines
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->productline = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO productlines
            (productLine,textDescription,htmlDescription,image)
            VALUES({$this->parseValue($this->productline,'notNumber')},
			{$this->parseValue($this->textdescription,'notNumber')},
			{$this->parseValue($this->htmldescription,'notNumber')},
			{$this->parseValue($this->image,'notNumber')})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->productline = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table productlines with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param string $productline the primary key productLine value of table productlines which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($productline)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                productlines
            SET 
				textDescription={$this->parseValue($this->textdescription,'notNumber')},
				htmlDescription={$this->parseValue($this->htmldescription,'notNumber')},
				image={$this->parseValue($this->image,'notNumber')}
            WHERE
                productLine={$this->parseValue($productline,'string')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($productline);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of productlines previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->productline != "") {
            return $this->update($this->productline);
        } else {
            return false;
        }
    }

}
?>
