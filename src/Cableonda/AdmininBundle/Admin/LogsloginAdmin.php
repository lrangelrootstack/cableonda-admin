<?php
// src/Cableonda/AdmininBundle/Admin/LogsloginAdmin.php

namespace Cableonda\AdmininBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;



class LogsloginAdmin extends Admin
{
    /**
    * (+) -- LR  --  10/04/2014
    *
    * @param $formMapper 
    * 
    * -configureFormFields() Re-escribe el metodo original de
    * la clase "vendor/sonata-project/admin-bundle/Admin/Admin.php".
    * Representa los campos a ser mostrados en los formularios
    * crear/editar.
    */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('suscriptor', 'text', array('label' => 'Suscriptor'))
            ->add('servicio', 'entity', array('class' => 'Cableonda\AdmininBundle\Entity\Servicio'))
            ->add('hora', 'datetime', array('label' => 'Fecha y Hora'))
        ;
    }

    /**
    * (+) -- LR  --  10/04/2014
    *
    * @param $datagridMapper 
    * 
    * -configureDatagridFilters() Re-escribe el metodo original de
    * la clase "vendor/sonata-project/admin-bundle/Admin/Admin.php".
    * Representa los campos a ser mostrados en los filtros.
    */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('suscriptor')
            ->add('servicio')
            ->add('hora','doctrine_orm_datetime_range', 
                            array("label" => " "), 
                            null, 
                            array('widget' => 'single_text', 
                                'required' => false,
                                'attr' => array('class' => 'datepicker')))
        ;
    }

    /**
    * (+) -- LR  --  10/04/2014
    *
    * @param $listMapper 
    * 
    * -configureListFields() Re-escribe el metodo original de
    * la clase "vendor/sonata-project/admin-bundle/Admin/Admin.php".
    * Representa los campos a ser mostrados en la vista de listado,
    * aqui se definen tambien los formatos de los campos.
    */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('suscriptor')
            ->add('servicio')
            ->add('hora','datetime',array(
                                    'label' => 'Fecha - Hora',
                                    'format' => 'd/m/Y - h:m:s'))
        ;
    }

    /**
    * (+) -- LR  --  10/04/2014
    * 
    * -getExportFormats() Re-escribe el metodo original de
    * la clase "vendor/sonata-project/admin-bundle/Admin/Admin.php".
    * Representa los tipos de formatos admitidos para exportar.
    *
    * @return Un arreglo con los tipos de formatos admitidos para exportar.
    */
    public function getExportFormats()
    {
        return array('csv', 'xls');
    }

    /**
    * (+) -- LR  --  10/04/2014
    * 
    * -getExportFields() Re-escribe el metodo original de
    * la clase "vendor/sonata-project/admin-bundle/Admin/Admin.php".
    * Representa los campos que se renderizan en los archivos a 
    * exportar.
    *
    * @return Un arreglo con los campos que se renderizan en 
    * los archivos a exportar.
    */
    public function getExportFields()
    {
        //$result = $this->getModelManager()->getExportFields($this->getClass());
        return array('suscriptor', 'servicio', 'hora');
    }

    /**
    * (+) -- LR  --  10/04/2014
    * 
    * -getBatchActions() Re-escribe el metodo original de
    * la clase "vendor/sonata-project/admin-bundle/Admin/Admin.php".
    * Representa las acciones admitidas en la vista de lista, 
    * para este caso se deja vacio pues no necesitamos que se muestre
    * la opcion eliminar.
    */
    public function getBatchActions()
    {
        return array();
    }

    /**
    * (+) -- LR  --  10/04/2014
    * 
    * -getMenuFactory() Re-escribe el metodo original de
    * la clase "vendor/sonata-project/admin-bundle/Admin/Admin.php".
    * Representa las opciones de menu admitidas en la vista de lista, 
    * para este caso se deja vacio pues no necesitamos que se muestre
    * ninguna opcion.
    */
    public function getMenuFactory()
    {
        return array();
    }

   
}