<?php

class App_Form_ContactoForm extends Zend_Form
{
    public function init()
	{
		//parent::__construct();
		
		$this->setMethod('POST');
		
		$nombres = new Zend_Form_Element_Text('_nombres');
		$nombres = $this->createElement('text', '_nombres');
		$nombres->setLabel('Nombres:*');
		$nombres->setRequired(true);
		
		$apellidos = new Zend_Form_Element_Text('_apellidos');
		$apellidos->setLabel('Apellidos:*');
		$apellidos->setRequired(true);
		
		$celular = new Zend_Form_Element_Text('_celular');
		$celular->setLabel('Telefono Celular:*');
		$celular->setRequired(TRUE);
		$celular->addValidator(new Zend_Validate_Digits());
		$celular->addErrorMessage('Por favor ingrese números de telefono válido');
		
		$fijo = new Zend_Form_Element_Text('_fijo');
		$fijo->setLabel('Telefono Fijo:');
		$fijo->setRequired(FALSE);
		$fijo->addValidator(new Zend_Validate_Digits());
		$fijo->addErrorMessage('Por favor ingrese números de telefono válido');
		
		$trabajo = new Zend_Form_Element_Text('_trabajo');
		$trabajo->setLabel('Telefono Trabajo:');
		$trabajo->setRequired(FALSE);
		$trabajo->addValidator(new Zend_Validate_Digits);
		$trabajo->addErrorMessage('Por favor ingrese números de telefono válido');
		
		$especialidad = new Zend_Form_Element_Text('_especialidad');
		$especialidad->setLabel('Especialidad:');
		$especialidad->setRequired(TRUE);
		
		$email = new Zend_Form_Element_Text('_email');
		$email->setLabel('Correo Electronico:');
		$email->setRequired(FALSE);
		$email->addValidator(new Zend_Validate_EmailAddress());
		$email->addErrorMessage('Ingrese una dirección de correo valido');
		
		$direccion = new Zend_Form_Element_Text('_direccion');
		$direccion->setLabel('Direccion:');
		$direccion->setRequired(FALSE);
		
		$foto = new Zend_Form_Element_File("_foto");
		$foto->setLabel("Ruta de la Foto")->setRequired(false);
		
		$submit = new Zend_Form_Element_Submit('submit', array('label' => 'Enviar'));
		
		$this->addElements(array($nombres, $apellidos, $celular, $fijo, $trabajo, $especialidad, $email, $direccion, $foto, $submit));
	}
}

