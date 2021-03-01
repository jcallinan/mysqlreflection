<?php
include_once("bean.config.php");

/**
 * Class BeanProducts
 * Bean class for object oriented management of the MySQL table products
 *
 * Comment of the managed table products: Not specified.
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
 * @filesource BeanProducts.php
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

class BeanProducts extends MySqlRecord
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
     * Class attribute for mapping the primary key productCode of table products
     *
     * Comment for field productCode: Not specified<br>
     * @var string $productcode
     */
    private $productcode;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = false;

    /**
     * Class attribute for mapping table field productName
     *
     * Comment for field productName: Not specified.<br>
     * Field information:
     *  - Data type: varchar(70)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $productname
     */
    private $productname;

    /**
     * Class attribute for mapping table field productLine
     *
     * Comment for field productLine: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: MUL
     *  - Default: 
     *  - Extra:  
     * @var string $productline
     */
    private $productline;

    /**
     * Class attribute for mapping table field productScale
     *
     * Comment for field productScale: Not specified.<br>
     * Field information:
     *  - Data type: varchar(10)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $productscale
     */
    private $productscale;

    /**
     * Class attribute for mapping table field productVendor
     *
     * Comment for field productVendor: Not specified.<br>
     * Field information:
     *  - Data type: varchar(50)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $productvendor
     */
    private $productvendor;

    /**
     * Class attribute for mapping table field productDescription
     *
     * Comment for field productDescription: Not specified.<br>
     * Field information:
     *  - Data type: text
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $productdescription
     */
    private $productdescription;

    /**
     * Class attribute for mapping table field quantityInStock
     *
     * Comment for field quantityInStock: Not specified.<br>
     * Field information:
     *  - Data type: smallint
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $quantityinstock
     */
    private $quantityinstock;

    /**
     * Class attribute for mapping table field buyPrice
     *
     * Comment for field buyPrice: Not specified.<br>
     * Field information:
     *  - Data type: decimal(10,2)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var float $buyprice
     */
    private $buyprice;

    /**
     * Class attribute for mapping table field MSRP
     *
     * Comment for field MSRP: Not specified.<br>
     * Field information:
     *  - Data type: decimal(10,2)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var float $msrp
     */
    private $msrp;

    /**
     * Class attribute for storing the SQL DDL of table products
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBwcm9kdWN0c2AgKAogIGBwcm9kdWN0Q29kZWAgdmFyY2hhcigxNSkgTk9UIE5VTEwsCiAgYHByb2R1Y3ROYW1lYCB2YXJjaGFyKDcwKSBOT1QgTlVMTCwKICBgcHJvZHVjdExpbmVgIHZhcmNoYXIoNTApIE5PVCBOVUxMLAogIGBwcm9kdWN0U2NhbGVgIHZhcmNoYXIoMTApIE5PVCBOVUxMLAogIGBwcm9kdWN0VmVuZG9yYCB2YXJjaGFyKDUwKSBOT1QgTlVMTCwKICBgcHJvZHVjdERlc2NyaXB0aW9uYCB0ZXh0IE5PVCBOVUxMLAogIGBxdWFudGl0eUluU3RvY2tgIHNtYWxsaW50IE5PVCBOVUxMLAogIGBidXlQcmljZWAgZGVjaW1hbCgxMCwyKSBOT1QgTlVMTCwKICBgTVNSUGAgZGVjaW1hbCgxMCwyKSBOT1QgTlVMTCwKICBQUklNQVJZIEtFWSAoYHByb2R1Y3RDb2RlYCksCiAgS0VZIGBwcm9kdWN0TGluZWAgKGBwcm9kdWN0TGluZWApLAogIENPTlNUUkFJTlQgYHByb2R1Y3RzX2liZmtfMWAgRk9SRUlHTiBLRVkgKGBwcm9kdWN0TGluZWApIFJFRkVSRU5DRVMgYHByb2R1Y3RsaW5lc2AgKGBwcm9kdWN0TGluZWApCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9bGF0aW4x";

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
     * setProductname Sets the class attribute productname with a given value
     *
     * The attribute productname maps the field productName defined as varchar(70).<br>
     * Comment for field productName: Not specified.<br>
     * @param string $productname
     * @category Modifier
     */
    public function setProductname($productname)
    {
        $this->productname = (string)$productname;
    }

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
     * setProductscale Sets the class attribute productscale with a given value
     *
     * The attribute productscale maps the field productScale defined as varchar(10).<br>
     * Comment for field productScale: Not specified.<br>
     * @param string $productscale
     * @category Modifier
     */
    public function setProductscale($productscale)
    {
        $this->productscale = (string)$productscale;
    }

    /**
     * setProductvendor Sets the class attribute productvendor with a given value
     *
     * The attribute productvendor maps the field productVendor defined as varchar(50).<br>
     * Comment for field productVendor: Not specified.<br>
     * @param string $productvendor
     * @category Modifier
     */
    public function setProductvendor($productvendor)
    {
        $this->productvendor = (string)$productvendor;
    }

    /**
     * setProductdescription Sets the class attribute productdescription with a given value
     *
     * The attribute productdescription maps the field productDescription defined as text.<br>
     * Comment for field productDescription: Not specified.<br>
     * @param string $productdescription
     * @category Modifier
     */
    public function setProductdescription($productdescription)
    {
        $this->productdescription = (string)$productdescription;
    }

    /**
     * setQuantityinstock Sets the class attribute quantityinstock with a given value
     *
     * The attribute quantityinstock maps the field quantityInStock defined as smallint.<br>
     * Comment for field quantityInStock: Not specified.<br>
     * @param int $quantityinstock
     * @category Modifier
     */
    public function setQuantityinstock($quantityinstock)
    {
        $this->quantityinstock = (int)$quantityinstock;
    }

    /**
     * setBuyprice Sets the class attribute buyprice with a given value
     *
     * The attribute buyprice maps the field buyPrice defined as decimal(10,2).<br>
     * Comment for field buyPrice: Not specified.<br>
     * @param float $buyprice
     * @category Modifier
     */
    public function setBuyprice($buyprice)
    {
        $this->buyprice = (float)$buyprice;
    }

    /**
     * setMsrp Sets the class attribute msrp with a given value
     *
     * The attribute msrp maps the field MSRP defined as decimal(10,2).<br>
     * Comment for field MSRP: Not specified.<br>
     * @param float $msrp
     * @category Modifier
     */
    public function setMsrp($msrp)
    {
        $this->msrp = (float)$msrp;
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
     * getProductname gets the class attribute productname value
     *
     * The attribute productname maps the field productName defined as varchar(70).<br>
     * Comment for field productName: Not specified.
     * @return string $productname
     * @category Accessor of $productname
     */
    public function getProductname()
    {
        return $this->productname;
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
     * getProductscale gets the class attribute productscale value
     *
     * The attribute productscale maps the field productScale defined as varchar(10).<br>
     * Comment for field productScale: Not specified.
     * @return string $productscale
     * @category Accessor of $productscale
     */
    public function getProductscale()
    {
        return $this->productscale;
    }

    /**
     * getProductvendor gets the class attribute productvendor value
     *
     * The attribute productvendor maps the field productVendor defined as varchar(50).<br>
     * Comment for field productVendor: Not specified.
     * @return string $productvendor
     * @category Accessor of $productvendor
     */
    public function getProductvendor()
    {
        return $this->productvendor;
    }

    /**
     * getProductdescription gets the class attribute productdescription value
     *
     * The attribute productdescription maps the field productDescription defined as text.<br>
     * Comment for field productDescription: Not specified.
     * @return string $productdescription
     * @category Accessor of $productdescription
     */
    public function getProductdescription()
    {
        return $this->productdescription;
    }

    /**
     * getQuantityinstock gets the class attribute quantityinstock value
     *
     * The attribute quantityinstock maps the field quantityInStock defined as smallint.<br>
     * Comment for field quantityInStock: Not specified.
     * @return int $quantityinstock
     * @category Accessor of $quantityinstock
     */
    public function getQuantityinstock()
    {
        return $this->quantityinstock;
    }

    /**
     * getBuyprice gets the class attribute buyprice value
     *
     * The attribute buyprice maps the field buyPrice defined as decimal(10,2).<br>
     * Comment for field buyPrice: Not specified.
     * @return float $buyprice
     * @category Accessor of $buyprice
     */
    public function getBuyprice()
    {
        return $this->buyprice;
    }

    /**
     * getMsrp gets the class attribute msrp value
     *
     * The attribute msrp maps the field MSRP defined as decimal(10,2).<br>
     * Comment for field MSRP: Not specified.
     * @return float $msrp
     * @category Accessor of $msrp
     */
    public function getMsrp()
    {
        return $this->msrp;
    }

    /**
     * Gets DDL SQL code of the table products
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
        return "products";
    }

    /**
     * The BeanProducts constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $productcode is given.
     *  - with a fetched data row from the table products having productCode=$productcode
     * @param string $productcode. If omitted an empty (not fetched) instance is created.
     * @return BeanProducts Object
     */
    public function __construct($productcode = null)
    {
        parent::__construct();
        if (!empty($productcode)) {
            $this->select($productcode);
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
     * Fetchs a table row of products into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param string $productcode the primary key productCode value of table products which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($productcode)
    {
        $sql =  "SELECT * FROM products WHERE productCode={$this->parseValue($productcode,'string')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->productcode = $this->replaceAposBackSlash($rowObject->productCode);
            @$this->productname = $this->replaceAposBackSlash($rowObject->productName);
            @$this->productline = $this->replaceAposBackSlash($rowObject->productLine);
            @$this->productscale = $this->replaceAposBackSlash($rowObject->productScale);
            @$this->productvendor = $this->replaceAposBackSlash($rowObject->productVendor);
            @$this->productdescription = $this->replaceAposBackSlash($rowObject->productDescription);
            @$this->quantityinstock = (integer)$rowObject->quantityInStock;
            @$this->buyprice = (float)$rowObject->buyPrice;
            @$this->msrp = (float)$rowObject->MSRP;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table products
     * @param string $productcode the primary key productCode value of table products which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($productcode)
    {
        $sql = "DELETE FROM products WHERE productCode={$this->parseValue($productcode,'string')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of products
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->productcode = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO products
            (productCode,productName,productLine,productScale,productVendor,productDescription,quantityInStock,buyPrice,MSRP)
            VALUES({$this->parseValue($this->productcode,'notNumber')},
			{$this->parseValue($this->productname,'notNumber')},
			{$this->parseValue($this->productline,'notNumber')},
			{$this->parseValue($this->productscale,'notNumber')},
			{$this->parseValue($this->productvendor,'notNumber')},
			{$this->parseValue($this->productdescription,'notNumber')},
			{$this->parseValue($this->quantityinstock)},
			{$this->parseValue($this->buyprice)},
			{$this->parseValue($this->msrp)})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->productcode = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table products with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param string $productcode the primary key productCode value of table products which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($productcode)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                products
            SET 
				productName={$this->parseValue($this->productname,'notNumber')},
				productLine={$this->parseValue($this->productline,'notNumber')},
				productScale={$this->parseValue($this->productscale,'notNumber')},
				productVendor={$this->parseValue($this->productvendor,'notNumber')},
				productDescription={$this->parseValue($this->productdescription,'notNumber')},
				quantityInStock={$this->parseValue($this->quantityinstock)},
				buyPrice={$this->parseValue($this->buyprice)},
				MSRP={$this->parseValue($this->msrp)}
            WHERE
                productCode={$this->parseValue($productcode,'string')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($productcode);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of products previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->productcode != "") {
            return $this->update($this->productcode);
        } else {
            return false;
        }
    }

}
?>
