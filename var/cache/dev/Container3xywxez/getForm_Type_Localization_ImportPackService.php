<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.localization.import_pack' shared service.

return $this->services['form.type.localization.import_pack'] = new \PrestaShopBundle\Form\Admin\Improve\International\Localization\ImportLocalizationPackType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'}->getLanguages(), ${($_ = isset($this->services['prestashop.core.form.choice_provider.localization_pack_by_iso_code']) ? $this->services['prestashop.core.form.choice_provider.localization_pack_by_iso_code'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_LocalizationPackByIsoCodeService.php')) && false ?: '_'}->getChoices());
