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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig */
class __TwigTemplate_0df7db15a4a06395ad3e1436fda993ed57fee9e750d8fdf25cc4b66454d8595f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'smtp_configuration' => [$this, 'block_smtp_configuration'],
            'smtp_configuration_form_rest' => [$this, 'block_smtp_configuration_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig"));

        // line 26
        echo "
";
        // line 27
        $this->displayBlock('smtp_configuration', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_smtp_configuration($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "smtp_configuration"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "smtp_configuration"));

        // line 28
        echo "  <div class=\"col-12\">
    <div class=\"card js-smtp-configuration ";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "email_config", []), "mail_method", []), "vars", []), "value", []) != ($context["smtpMailMethod"] ?? $this->getContext($context, "smtpMailMethod")))) {
            echo "d-none";
        }
        echo "\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "Admin.Global"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail domain name", [], "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fully qualified domain name (keep this field empty if you don't know).", [], "Admin.Advparameters.Help")], "method"), "html", null, true);
        echo "
            <div class=\"col-sm\">
              ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "domain", []), 'errors');
        echo "
              ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "domain", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP server", [], "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP address or server name (e.g. smtp.mydomain.com).", [], "Admin.Advparameters.Help")], "method"), "html", null, true);
        echo "
            <div class=\"col-sm\">
              ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "server", []), 'errors');
        echo "
              ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "server", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP username", [], "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave blank if not applicable.", [], "Admin.Advparameters.Help")], "method"), "html", null, true);
        echo "
            <div class=\"col-sm\">
              ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "username", []), 'errors');
        echo "
              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "username", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP password", [], "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave blank if not applicable.", [], "Admin.Advparameters.Help")], "method"), "html", null, true);
        echo "
            <div class=\"col-sm\">
              ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "password", []), 'errors');
        echo "
              ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "password", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Encryption", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "encryption", []), 'errors');
        echo "
              ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "encryption", []), 'widget');
        echo "
              ";
        // line 72
        if ( !($context["isOpenSslExtensionLoaded"] ?? $this->getContext($context, "isOpenSslExtensionLoaded"))) {
            // line 73
            echo "                <small class=\"form-text\">
                  ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SSL does not seem to be available on your server.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "
                </small>
              ";
        }
        // line 77
        echo "            </div>
          </div>

          <div class=\"form-group row\">
            ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Port", [], "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Port number to use.", [], "Admin.Advparameters.Feature")], "method"), "html", null, true);
        echo "
            <div class=\"col-sm\">
              ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "port", []), 'errors');
        echo "
              ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), "port", []), 'widget');
        echo "
            </div>
          </div>

          ";
        // line 88
        $this->displayBlock('smtp_configuration_form_rest', $context, $blocks);
        // line 91
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 95
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

    // line 88
    public function block_smtp_configuration_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "smtp_configuration_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "smtp_configuration_form_rest"));

        // line 89
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["emailConfigurationForm"] ?? $this->getContext($context, "emailConfigurationForm")), "smtp_config", []), 'rest');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  224 => 89,  215 => 88,  199 => 95,  193 => 91,  191 => 88,  184 => 84,  180 => 83,  175 => 81,  169 => 77,  163 => 74,  160 => 73,  158 => 72,  154 => 71,  150 => 70,  145 => 68,  137 => 63,  133 => 62,  128 => 60,  120 => 55,  116 => 54,  111 => 52,  103 => 47,  99 => 46,  94 => 44,  86 => 39,  82 => 38,  77 => 36,  69 => 31,  62 => 29,  59 => 28,  41 => 27,  38 => 26,);
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
{% trans_default_domain 'Admin.Advparameters.Feature' %}

{% block smtp_configuration %}
  <div class=\"col-12\">
    <div class=\"card js-smtp-configuration {% if emailConfigurationForm.email_config.mail_method.vars.value != smtpMailMethod %}d-none{% endif %}\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> {{ 'Email'|trans({}, 'Admin.Global') }}
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">
            {{ ps.label_with_help(('Mail domain name'|trans), ('Fully qualified domain name (keep this field empty if you don\\'t know).'|trans({}, 'Admin.Advparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(emailConfigurationForm.smtp_config.domain) }}
              {{ form_widget(emailConfigurationForm.smtp_config.domain) }}
            </div>
          </div>

          <div class=\"form-group row\">
            {{ ps.label_with_help(('SMTP server'|trans), ('IP address or server name (e.g. smtp.mydomain.com).'|trans({}, 'Admin.Advparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(emailConfigurationForm.smtp_config.server) }}
              {{ form_widget(emailConfigurationForm.smtp_config.server) }}
            </div>
          </div>

          <div class=\"form-group row\">
            {{ ps.label_with_help(('SMTP username'|trans), ('Leave blank if not applicable.'|trans({}, 'Admin.Advparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(emailConfigurationForm.smtp_config.username) }}
              {{ form_widget(emailConfigurationForm.smtp_config.username) }}
            </div>
          </div>

          <div class=\"form-group row\">
            {{ ps.label_with_help(('SMTP password'|trans), ('Leave blank if not applicable.'|trans({}, 'Admin.Advparameters.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(emailConfigurationForm.smtp_config.password) }}
              {{ form_widget(emailConfigurationForm.smtp_config.password) }}
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">{{ 'Encryption'|trans }}</label>
            <div class=\"col-sm\">
              {{ form_errors(emailConfigurationForm.smtp_config.encryption) }}
              {{ form_widget(emailConfigurationForm.smtp_config.encryption) }}
              {% if not isOpenSslExtensionLoaded %}
                <small class=\"form-text\">
                  {{ 'SSL does not seem to be available on your server.'|trans({}, 'Admin.Advparameters.Notification') }}
                </small>
              {% endif %}
            </div>
          </div>

          <div class=\"form-group row\">
            {{ ps.label_with_help(('Port'|trans), ('Port number to use.'|trans)) }}
            <div class=\"col-sm\">
              {{ form_errors(emailConfigurationForm.smtp_config.port) }}
              {{ form_widget(emailConfigurationForm.smtp_config.port) }}
            </div>
          </div>

          {% block smtp_configuration_form_rest %}
            {{ form_rest(emailConfigurationForm.smtp_config) }}
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
", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig", "/var/www/clients/client13/web15/web/presta/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig");
    }
}
