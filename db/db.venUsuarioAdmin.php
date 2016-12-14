<?php
/**
 * Table Definition for ven_usuario_admin
 */

class DataObject_VenUsuarioAdmin extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'ven_usuario_admin';               // table name
    public $idUsuarioAdmin;                  // int(11)  not_null primary_key auto_increment
    public $nombre;                          // string(45)  
    public $apellido;                        // string(45)  
    public $email;                           // string(45)  
    public $usuario;                         // string(45)  
    public $contrasena;                      // string(45)  
    public $fechaMod;                        // datetime(19)  binary
    public $fecha;                           // datetime(19)  binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObject_VenUsuarioAdmin',$k,$v); }

    function table()
    {
         return array(
             'idUsuarioAdmin' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'nombre' =>  DB_DATAOBJECT_STR,
             'apellido' =>  DB_DATAOBJECT_STR,
             'email' =>  DB_DATAOBJECT_STR,
             'usuario' =>  DB_DATAOBJECT_STR,
             'contrasena' =>  DB_DATAOBJECT_STR,
             'fechaMod' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
             'fecha' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
         );
    }

    function keys()
    {
         return array('idUsuarioAdmin');
    }

    function sequenceKey() // keyname, use native, native name
    {
         return array('idCategoria', true, false);
    }

    function defaults() // column default values 
    {
         return array(
             'nombre' => '',
             'apellido' => '',
             'email' => '',
             'usuario' => '',
             'contrasena' => '',
         );
    }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
