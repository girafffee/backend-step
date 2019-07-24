<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig */
class __TwigTemplate_45a340844c2154f7528cf5e0b9641619bb9d52428acd1c923589fbcca0e71093 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'localization_configuration' => [$this, 'block_localization_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig"));

        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('localization_configuration', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_localization_configuration($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "localization_configuration"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "localization_configuration"));

        // line 30
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configuration", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          ";
        // line 38
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default language", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default language used in your shop.", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "default_language", []), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "default_language", []), 'widget', ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]]);
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set language from browser", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "detect_language_from_browser", []), 'errors');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "detect_language_from_browser", []), 'widget');
        echo "
            <small class=\"form-text\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set browser language as default language", [], "Admin.International.Help"), "html", null, true);
        echo "</small>
          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 57
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default country", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default country used in your shop.", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "default_country", []), 'errors');
        echo "
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "default_country", []), 'widget', ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]]);
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set default country from browser language", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "detect_country_from_browser", []), 'errors');
        echo "
            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "detect_country_from_browser", []), 'widget');
        echo "
            <small class=\"form-text\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set country corresponding to browser language", [], "Admin.International.Help"), "html", null, true);
        echo "</small>
          </div>
        </div>

        <div class=\"form-group row js-default-currency-block\">
          ";
        // line 76
        $context["currencyChangeWarningMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.", [], "Admin.International.Notification");
        // line 77
        echo "
          ";
        // line 78
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default currency", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default currency used in your shop.", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "default_currency", []), 'errors');
        echo "
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "default_currency", []), 'widget', ["attr" => ["data-warning-message" => ($context["currencyChangeWarningMessage"] ?? $this->getContext($context, "currencyChangeWarningMessage")), "data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]]);
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "timezone", []), 'errors');
        echo "
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? $this->getContext($context, "configurationForm")), "timezone", []), 'widget', ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]]);
        echo "
          </div>
        </div>
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 99,  189 => 91,  185 => 90,  179 => 87,  170 => 81,  166 => 80,  161 => 78,  158 => 77,  156 => 76,  148 => 71,  144 => 70,  140 => 69,  134 => 66,  125 => 60,  121 => 59,  116 => 57,  108 => 52,  104 => 51,  100 => 50,  94 => 47,  85 => 41,  81 => 40,  76 => 38,  67 => 32,  63 => 30,  45 => 29,  42 => 28,  40 => 27,  37 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * 2007-2019 PrestaShop and Contributors
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% trans_default_domain 'Admin.International.Feature' %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% block localization_configuration %}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> {{ 'Configuration'|trans({}, 'Admin.Global') }}
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          {{ ps.label_with_help(('Default language'|trans), ('The default language used in your shop.'|trans({}, 'Admin.International.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(configurationForm.default_language) }}
            {{ form_widget(configurationForm.default_language, {'attr': {'data-minimumResultsForSearch': '7', 'data-toggle': 'select2'}}) }}
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Set language from browser'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(configurationForm.detect_language_from_browser) }}
            {{ form_widget(configurationForm.detect_language_from_browser) }}
            <small class=\"form-text\">{{ 'Set browser language as default language'|trans({}, 'Admin.International.Help') }}</small>
          </div>
        </div>

        <div class=\"form-group row\">
          {{ ps.label_with_help(('Default country'|trans), ('The default country used in your shop.'|trans({}, 'Admin.International.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(configurationForm.default_country) }}
            {{ form_widget(configurationForm.default_country, {'attr': {'data-minimumResultsForSearch': '7', 'data-toggle': 'select2'}}) }}
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Set default country from browser language'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(configurationForm.detect_country_from_browser) }}
            {{ form_widget(configurationForm.detect_country_from_browser) }}
            <small class=\"form-text\">{{ 'Set country corresponding to browser language'|trans({}, 'Admin.International.Help') }}</small>
          </div>
        </div>

        <div class=\"form-group row js-default-currency-block\">
          {% set currencyChangeWarningMessage = 'Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.'|trans({}, 'Admin.International.Notification') %}

          {{ ps.label_with_help(('Default currency'|trans), ('The default currency used in your shop.'|trans({}, 'Admin.International.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(configurationForm.default_currency) }}
            {{ form_widget(configurationForm.default_currency, {'attr': {'data-warning-message': currencyChangeWarningMessage, 'data-minimumResultsForSearch': '7', 'data-toggle': 'select2'}}) }}
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Time zone'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(configurationForm.timezone) }}
            {{ form_widget(configurationForm.timezone, {'attr': {'data-minimumResultsForSearch': '7', 'data-toggle': 'select2'}}) }}
          </div>
        </div>
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig", "/var/www/clients/client13/web15/web/presta/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Localization/Blocks/configuration.html.twig");
    }
}
