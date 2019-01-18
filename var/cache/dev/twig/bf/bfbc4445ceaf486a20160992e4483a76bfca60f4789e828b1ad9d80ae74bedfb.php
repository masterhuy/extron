<?php

/* @Product/ProductPage/Forms/form_edit_specific_price_modal.html.twig */
class __TwigTemplate_ad73e4b462b144372070cdaea5836fa8859007ec4e6e42d9e6d624e4881761f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_edit_specific_price_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_edit_specific_price_modal.html.twig"));

        // line 25
        echo "<div class=\"modal fade\" id=\"edit-specific-price-modal\" tabindex=\"1\" role=\"dialog\" aria-hidden=\"true\">

  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">

      <div class=\"modal-header\">
        <h5 class=\"modal-title\">
          ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit a specific price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </h5>
        <button type=\"button\" class=\"close\" id=\"form_modal_close\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>

      <div id=\"edit-specific-price-modal-form\" class=\"modal-body\" data-action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_specific_price_update");
        echo "\" data-specific-price-id=\"0\">
      </div>
    </div>
  </div>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_edit_specific_price_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 39,  34 => 32,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
<div class=\"modal fade\" id=\"edit-specific-price-modal\" tabindex=\"1\" role=\"dialog\" aria-hidden=\"true\">

  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">

      <div class=\"modal-header\">
        <h5 class=\"modal-title\">
          {{ \"Edit a specific price\"|trans({}, 'Admin.Catalog.Feature') }}
        </h5>
        <button type=\"button\" class=\"close\" id=\"form_modal_close\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>

      <div id=\"edit-specific-price-modal-form\" class=\"modal-body\" data-action=\"{{ path('admin_specific_price_update') }}\" data-specific-price-id=\"0\">
      </div>
    </div>
  </div>

</div>
", "@Product/ProductPage/Forms/form_edit_specific_price_modal.html.twig", "D:\\xamppp\\htdocs\\jms_extron\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\ProductPage\\Forms\\form_edit_specific_price_modal.html.twig");
    }
}
