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

/* @PrestaShop/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig */
class __TwigTemplate_18aff1ce59cecd1f5dea85d9724fdf0cb9f2b441768b43ab8d4d406c2e134f3e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'customer_preferences_general' => [$this, 'block_customer_preferences_general'],
            'customer_general_preferences_form_rest' => [$this, 'block_customer_general_preferences_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig"));

        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('customer_preferences_general', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_customer_preferences_general($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customer_preferences_general"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customer_preferences_general"));

        // line 30
        echo "<div class=\"col-xl-10\">
    <div class=\"card\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">settings</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", [], "Admin.Global"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-block row\">
            <div class=\"card-text\">
                <div class=\"form-group row\">
                    ";
        // line 38
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Re-display cart at login", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("After a customer logs in, you can recall and display the content of his/her last shopping cart.", [], "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "redisplay_cart_at_login", []), 'errors');
        echo "
                      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "redisplay_cart_at_login", []), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 45
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send an email after registration", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send an email with summary of the account information (email, password) after registration.", [], "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "send_email_after_registration", []), 'errors');
        echo "
                      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "send_email_after_registration", []), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 52
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password reset delay", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Minimum time required between two requests for a password reset.", [], "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "password_reset_delay", []), 'errors');
        echo "
                      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "password_reset_delay", []), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 59
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable B2B mode", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate or deactivate B2B mode. When this option is enabled, B2B features will be made available.", [], "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_b2b_mode", []), 'errors');
        echo "
                      ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_b2b_mode", []), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 66
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ask for birth date", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display or not the birth date field.", [], "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "ask_for_birthday", []), 'errors');
        echo "
                      ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "ask_for_birthday", []), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 73
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable partner offers", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display or not the partner offers tick box, to receive offers from the store's partners.", [], "Admin.Shopparameters.Help"));
        echo "
                    <div class=\"col-sm\">
                      ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_offers", []), 'errors');
        echo "
                      ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_offers", []), 'widget');
        echo "
                    </div>
                </div>

                ";
        // line 80
        $this->displayBlock('customer_general_preferences_form_rest', $context, $blocks);
        // line 83
        echo "            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_customer_general_preferences_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customer_general_preferences_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customer_general_preferences_form_rest"));

        // line 81
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? $this->getContext($context, "generalForm")), 'rest');
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 81,  197 => 80,  181 => 87,  175 => 83,  173 => 80,  166 => 76,  162 => 75,  157 => 73,  150 => 69,  146 => 68,  141 => 66,  134 => 62,  130 => 61,  125 => 59,  118 => 55,  114 => 54,  109 => 52,  102 => 48,  98 => 47,  93 => 45,  86 => 41,  82 => 40,  77 => 38,  69 => 33,  64 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
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

{% trans_default_domain \"Admin.Shopparameters.Feature\" %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% block customer_preferences_general %}
<div class=\"col-xl-10\">
    <div class=\"card\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">settings</i> {{ 'General'|trans({}, 'Admin.Global') }}
        </h3>
        <div class=\"card-block row\">
            <div class=\"card-text\">
                <div class=\"form-group row\">
                    {{ ps.label_with_help(('Re-display cart at login'|trans), ('After a customer logs in, you can recall and display the content of his/her last shopping cart.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    <div class=\"col-sm\">
                      {{ form_errors(generalForm.redisplay_cart_at_login) }}
                      {{ form_widget(generalForm.redisplay_cart_at_login) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    {{ ps.label_with_help(('Send an email after registration'|trans), ('Send an email with summary of the account information (email, password) after registration.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    <div class=\"col-sm\">
                      {{ form_errors(generalForm.send_email_after_registration) }}
                      {{ form_widget(generalForm.send_email_after_registration) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    {{ ps.label_with_help(('Password reset delay'|trans), ('Minimum time required between two requests for a password reset.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    <div class=\"col-sm\">
                      {{ form_errors(generalForm.password_reset_delay) }}
                      {{ form_widget(generalForm.password_reset_delay) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    {{ ps.label_with_help(('Enable B2B mode'|trans), ('Activate or deactivate B2B mode. When this option is enabled, B2B features will be made available.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    <div class=\"col-sm\">
                      {{ form_errors(generalForm.enable_b2b_mode) }}
                      {{ form_widget(generalForm.enable_b2b_mode) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    {{ ps.label_with_help(('Ask for birth date'|trans), ('Display or not the birth date field.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    <div class=\"col-sm\">
                      {{ form_errors(generalForm.ask_for_birthday) }}
                      {{ form_widget(generalForm.ask_for_birthday) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    {{ ps.label_with_help(('Enable partner offers'|trans), ('Display or not the partner offers tick box, to receive offers from the store\\'s partners.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                    <div class=\"col-sm\">
                      {{ form_errors(generalForm.enable_offers) }}
                      {{ form_widget(generalForm.enable_offers) }}
                    </div>
                </div>

                {% block customer_general_preferences_form_rest %}
                  {{ form_rest(generalForm) }}
                {% endblock %}
            </div>
        </div>
        <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig", "/var/www/clients/client13/web15/web/presta/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/Blocks/customer_preferences_general.html.twig");
    }
}
