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

/* @PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig */
class __TwigTemplate_8dfa2e93bb3b2532c151928bc5074162a1145a27bbc224f28867fc009e9c4364 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'localization_local_units' => [$this, 'block_localization_local_units'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig"));

        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('localization_local_units', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_localization_local_units($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "localization_local_units"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "localization_local_units"));

        // line 30
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">language</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Local units", [], "Admin.International.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          ";
        // line 38
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight unit", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default weight unit for your shop (e.g. \"kg\" for kilograms, \"lbs\" for pound-mass, etc.).", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? $this->getContext($context, "localUnitsForm")), "weight_unit", []), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? $this->getContext($context, "localUnitsForm")), "weight_unit", []), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 46
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Distance unit", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default distance unit for your shop (e.g. \"km\" for kilometer, \"mi\" for mile, etc.).", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? $this->getContext($context, "localUnitsForm")), "distance_unit", []), 'errors');
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? $this->getContext($context, "localUnitsForm")), "distance_unit", []), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 54
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Volume unit", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default volume unit for your shop (e.g. \"L\" for liter, \"gal\" for gallon, etc.).", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? $this->getContext($context, "localUnitsForm")), "volume_unit", []), 'errors');
        echo "
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? $this->getContext($context, "localUnitsForm")), "volume_unit", []), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 62
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dimension unit", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default dimension unit for your shop (e.g. \"cm\" for centimeter, \"in\" for inch, etc.).", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? $this->getContext($context, "localUnitsForm")), "dimension_unit", []), 'errors');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? $this->getContext($context, "localUnitsForm")), "dimension_unit", []), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 73
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
        return "@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 73,  136 => 65,  132 => 64,  127 => 62,  119 => 57,  115 => 56,  110 => 54,  102 => 49,  98 => 48,  93 => 46,  85 => 41,  81 => 40,  76 => 38,  67 => 32,  63 => 30,  45 => 29,  42 => 28,  40 => 27,  37 => 25,);
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

{% block localization_local_units %}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">language</i> {{ 'Local units'|trans }}
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          {{ ps.label_with_help(('Weight unit'|trans), ('The default weight unit for your shop (e.g. \"kg\" for kilograms, \"lbs\" for pound-mass, etc.).'|trans({}, 'Admin.International.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(localUnitsForm.weight_unit) }}
            {{ form_widget(localUnitsForm.weight_unit) }}
          </div>
        </div>

        <div class=\"form-group row\">
          {{ ps.label_with_help(('Distance unit'|trans), ('The default distance unit for your shop (e.g. \"km\" for kilometer, \"mi\" for mile, etc.).'|trans({}, 'Admin.International.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(localUnitsForm.distance_unit) }}
            {{ form_widget(localUnitsForm.distance_unit) }}
          </div>
        </div>

        <div class=\"form-group row\">
          {{ ps.label_with_help(('Volume unit'|trans), ('The default volume unit for your shop (e.g. \"L\" for liter, \"gal\" for gallon, etc.).'|trans({}, 'Admin.International.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(localUnitsForm.volume_unit) }}
            {{ form_widget(localUnitsForm.volume_unit) }}
          </div>
        </div>

        <div class=\"form-group row\">
          {{ ps.label_with_help(('Dimension unit'|trans), ('The default dimension unit for your shop (e.g. \"cm\" for centimeter, \"in\" for inch, etc.).'|trans({}, 'Admin.International.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(localUnitsForm.dimension_unit) }}
            {{ form_widget(localUnitsForm.dimension_unit) }}
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
", "@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig", "/var/www/clients/client13/web15/web/presta/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Localization/Blocks/local_units.html.twig");
    }
}
