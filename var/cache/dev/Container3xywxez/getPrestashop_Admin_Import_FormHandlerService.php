<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.import.form_handler' shared service.

return $this->services['prestashop.admin.import.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\ImportPageFormHandler(${($_ = isset($this->services['prestashop.admin.import.form_builder']) ? $this->services['prestashop.admin.import.form_builder'] : $this->load('getPrestashop_Admin_Import_FormBuilderService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.admin.import.form_data_provider']) ? $this->services['prestashop.admin.import.form_data_provider'] : $this->load('getPrestashop_Admin_Import_FormDataProviderService.php')) && false ?: '_'}, array(), 'ImportPage');
