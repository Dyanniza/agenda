<?php

class ContactoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	$page = $this->_getParam('page', 1);

		$userDao = new App_Dao_ContactoDao();
		$paginator = new App_Util_Paginator($this->getRequest()->getBaseUrl() . '/contacto/index', $userDao->contarTodos(), $page);

		$this->view->dataList = $userDao->getAllLimitOffset($paginator->getLimit(), $paginator->getOffset());
		$this->view->htmlPaginator = $paginator->showHtmlPaginator();
    }

    public function agregarAction()
    {
		//$id = Zend_Auth::getInstance()->getIdentity()->getId();
		$jose = new App_Form_ContactoForm();
		if ($this->_request->getPost()) {
			$formData = $this->_request->getPost();

			if ($form->isValid($formData)) {
				$this->_helper->redirector('index');
				return;
			}
		}
		$this->view->form = $jose;
    }


}



