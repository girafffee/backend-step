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

/* @PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig */
class __TwigTemplate_5448251bbae9210ef2c2379aad6e302f70f02fdd7c08aa5d1a7675d79eec699b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig"));

        // line 25
        $context["ats"] = $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []);
        // line 26
        list($context["name"], $context["displayName"], $context["nbRates"], $context["starsRate"], $context["img"], $context["serviceUrl"], $context["version"], $context["cover"], $context["additionalDescription"], $context["fullDescription"], $context["changeLog"], $context["customerBenefits"], $context["demoVideo"], $context["author"], $context["notFoundImg"], $context["features"], $context["badges"]) =         [$this->getAttribute(        // line 29
($context["ats"] ?? $this->getContext($context, "ats")), "name", []), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "displayName", []), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "nbRates", []), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "starsRate", []), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "img", []), ((($this->getAttribute(        // line 30
($context["ats"] ?? null), "serviceUrl", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "serviceUrl", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "serviceUrl", [])) : (false)), $this->getAttribute(        // line 31
($context["ats"] ?? $this->getContext($context, "ats")), "version", []), $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "cover", []), ((($this->getAttribute(        // line 32
($context["ats"] ?? null), "additionalDescription", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "additionalDescription", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "additionalDescription", [])) : (false)), ((($this->getAttribute(        // line 33
($context["ats"] ?? null), "fullDescription", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "fullDescription", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "fullDescription", [])) : (false)), ((($this->getAttribute(        // line 34
($context["ats"] ?? null), "changeLog", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "changeLog", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "changeLog", [])) : (false)), ((($this->getAttribute(        // line 35
($context["ats"] ?? null), "customer_benefits", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "customer_benefits", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "customer_benefits", [])) : (false)), ((($this->getAttribute(        // line 36
($context["ats"] ?? null), "demo_video", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "demo_video", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "demo_video", [])) : (false)), $this->getAttribute(        // line 37
($context["ats"] ?? $this->getContext($context, "ats")), "author", []), "https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png", $this->getAttribute(        // line 38
($context["ats"] ?? $this->getContext($context, "ats")), "features", []), ((($this->getAttribute(        // line 39
($context["ats"] ?? null), "badges", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "badges", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? $this->getContext($context, "ats")), "badges", [])) : (false))];
        // line 41
        echo "<div class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      ";
        // line 45
        if ((($context["nbRates"] ?? $this->getContext($context, "nbRates")) > 0)) {
            // line 46
            echo "        <div class=\"read-more-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, ($context["starsRate"] ?? $this->getContext($context, "starsRate")), "html", null, true);
            echo "\">
          (
          ";
            // line 48
            echo twig_escape_filter($this->env, ($context["nbRates"] ?? $this->getContext($context, "nbRates")), "html", null, true);
            echo "
          )
        </div>
      ";
        }
        // line 52
        echo "      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["img"] ?? $this->getContext($context, "img")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? $this->getContext($context, "displayName")), "html", null, true);
        echo "\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>";
        // line 55
        echo twig_escape_filter($this->env, ($context["displayName"] ?? $this->getContext($context, "displayName")), "html", null, true);
        echo "<br>
            <small class=\"version small-text\">
              ";
        // line 57
        if (((isset($context["serviceUrl"]) || array_key_exists("serviceUrl", $context)) && (twig_length_filter($this->env, ($context["serviceUrl"] ?? $this->getContext($context, "serviceUrl"))) > 0))) {
            // line 58
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Service by %author%", ["%author%" => ($context["author"] ?? $this->getContext($context, "author"))], "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        } else {
            // line 60
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% by %author%", ["%version%" => ($context["version"] ?? $this->getContext($context, "version")), "%author%" => ($context["author"] ?? $this->getContext($context, "author"))], "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        }
        // line 62
        echo "            </small>
          </h1>

        </div>
      </div>
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>

    <div class=\"modal-body row module-modal-body\">
      <div class=\"col-md-12 module-big-cover\">
        <img src=\"";
        // line 74
        if ($this->getAttribute(($context["cover"] ?? null), "big", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cover"] ?? $this->getContext($context, "cover")), "big", []), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, ($context["notFoundImg"] ?? $this->getContext($context, "notFoundImg")), "html", null, true);
        }
        echo "\"/>
      </div>
      <div class=\"col-md-12 module-menu-readmore\">
        <nav class=\"navbar navbar-light\">
          ";
        // line 79
        echo "          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link module-readmore-tab active\" data-toggle=\"tab\" href=\"#overview-";
        // line 81
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Overview", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
            </li>
            ";
        // line 83
        if (($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"))) {
            // line 84
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-";
            // line 85
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional information", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 88
        echo "            ";
        if (($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"))) {
            // line 89
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-";
            // line 90
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Benefits", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 93
        echo "            ";
        if (($context["features"] ?? $this->getContext($context, "features"))) {
            // line 94
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-";
            // line 95
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 98
        echo "            ";
        if (($context["demoVideo"] ?? $this->getContext($context, "demoVideo"))) {
            // line 99
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-";
            // line 100
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Demo video", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 103
        echo "            ";
        if (($context["changeLog"] ?? $this->getContext($context, "changeLog"))) {
            // line 104
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-";
            // line 105
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changelog", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 108
        echo "            ";
        // line 109
        echo "          </ul>
        </nav>
        <div class=\"tab-content\">
          ";
        // line 113
        echo "          <div id=\"overview-";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade in active\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 115
        if (($context["fullDescription"] ?? $this->getContext($context, "fullDescription"))) {
            // line 116
            echo "                ";
            echo ($context["fullDescription"] ?? $this->getContext($context, "fullDescription"));
            echo "
              ";
        } else {
            // line 118
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No description found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 120
        echo "            </p>
          </div>

          <div id=\"additional-";
        // line 123
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 125
        if (($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"))) {
            // line 126
            echo "                ";
            echo ($context["additionalDescription"] ?? $this->getContext($context, "additionalDescription"));
            echo "
              ";
        } else {
            // line 128
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No additional description provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 130
        echo "            </p>
          </div>

          <div id=\"features-";
        // line 133
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 135
        if (($context["features"] ?? $this->getContext($context, "features"))) {
            // line 136
            echo "                ";
            echo ($context["features"] ?? $this->getContext($context, "features"));
            echo "
              ";
        } else {
            // line 138
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No feature list provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 140
        echo "            </p>
          </div>

          <div id=\"customer_benefits-";
        // line 143
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 145
        if (($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"))) {
            // line 146
            echo "                ";
            echo ($context["customerBenefits"] ?? $this->getContext($context, "customerBenefits"));
            echo "
              ";
        } else {
            // line 148
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No customer benefits notes found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 150
        echo "            </p>
          </div>

          <div id=\"demo_video-";
        // line 153
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 155
        if (($context["demoVideo"] ?? $this->getContext($context, "demoVideo"))) {
            // line 156
            echo "                ";
            echo $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getYoutubeLink(($context["demoVideo"] ?? $this->getContext($context, "demoVideo")));
            echo "
              ";
        } else {
            // line 158
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No demonstration video found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 160
        echo "            </p>
          </div>

          <div id=\"changelog-";
        // line 163
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            ";
        // line 164
        if (($context["changeLog"] ?? $this->getContext($context, "changeLog"))) {
            // line 165
            echo "              <ul class=\"module-readmore-tab-content\">
                ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayCast(($context["changeLog"] ?? $this->getContext($context, "changeLog")))));
            foreach ($context['_seq'] as $context["version"] => $context["lines"]) {
                // line 167
                echo "                  <li>
                    <b>";
                // line 168
                echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                echo ":</b>
                    ";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["lines"]);
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 170
                    echo "                      ";
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['lines'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "              </ul>
            ";
        } else {
            // line 176
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No changelog provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
            ";
        }
        // line 178
        echo "          </div>
          ";
        // line 180
        echo "        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      <div class=\"module-stars-price\">
        <div class=\"module-price text-sm-right\">
          ";
        // line 187
        if ((($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "url_active", []) == "buy") && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "price", []), "raw", []) != "0.00"))) {
            // line 188
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "price", []), "displayPrice", []), "html", null, true);
            echo "
          ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 189
($context["module"] ?? $this->getContext($context, "module")), "attributes", []), "url_active", []) != "buy")) {
            // line 190
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
          ";
        }
        // line 192
        echo "        </div>
      </div>
      <div class=\"module-badges-action\">
        <div class=\"float-left module-badges-display\">
          ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["badges"] ?? $this->getContext($context, "badges")));
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 197
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "img", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", []), "html", null, true);
            echo "\"/>
            ";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", []), "html", null, true);
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "        </div>
        <div class=\"float-right module-action\">
          ";
        // line 202
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", 202)->display(twig_array_merge($context, ["module" => ($context["module"] ?? $this->getContext($context, "module")), "level" => ($context["level"] ?? $this->getContext($context, "level"))]));
        // line 203
        echo "        </div>
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
        return "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 203,  440 => 202,  436 => 200,  428 => 198,  421 => 197,  417 => 196,  411 => 192,  405 => 190,  403 => 189,  398 => 188,  396 => 187,  387 => 180,  384 => 178,  378 => 176,  374 => 174,  367 => 172,  358 => 170,  354 => 169,  350 => 168,  347 => 167,  343 => 166,  340 => 165,  338 => 164,  334 => 163,  329 => 160,  323 => 158,  317 => 156,  315 => 155,  310 => 153,  305 => 150,  299 => 148,  293 => 146,  291 => 145,  286 => 143,  281 => 140,  275 => 138,  269 => 136,  267 => 135,  262 => 133,  257 => 130,  251 => 128,  245 => 126,  243 => 125,  238 => 123,  233 => 120,  227 => 118,  221 => 116,  219 => 115,  213 => 113,  208 => 109,  206 => 108,  198 => 105,  195 => 104,  192 => 103,  184 => 100,  181 => 99,  178 => 98,  170 => 95,  167 => 94,  164 => 93,  156 => 90,  153 => 89,  150 => 88,  142 => 85,  139 => 84,  137 => 83,  130 => 81,  126 => 79,  115 => 74,  101 => 62,  95 => 60,  89 => 58,  87 => 57,  82 => 55,  75 => 53,  72 => 52,  65 => 48,  59 => 46,  57 => 45,  51 => 41,  49 => 39,  48 => 38,  47 => 37,  46 => 36,  45 => 35,  44 => 34,  43 => 33,  42 => 32,  41 => 31,  40 => 30,  39 => 29,  38 => 26,  36 => 25,);
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
{% set ats = module.attributes %}
{% set name, displayName, nbRates,
  starsRate, img, serviceUrl, version, cover, additionalDescription,
  fullDescription, changeLog, customerBenefits, demoVideo, author, notFoundImg, features, badges =
  ats.name, ats.displayName, ats.nbRates, ats.starsRate, ats.img,
  ats.serviceUrl is defined and ats.serviceUrl|length > 0 ? ats.serviceUrl : false,
  ats.version, ats.cover,
  ats.additionalDescription is defined and ats.additionalDescription|length > 0 ? ats.additionalDescription : false,
  ats.fullDescription is defined and ats.fullDescription|length > 0 ? ats.fullDescription : false,
  ats.changeLog is defined and ats.changeLog|length > 0 ? ats.changeLog : false,
  ats.customer_benefits is defined and ats.customer_benefits|length > 0 ? ats.customer_benefits : false,
  ats.demo_video is defined and ats.demo_video|length > 0 ? ats.demo_video : false,
  ats.author, 'https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png',
  ats.features,
  ats.badges is defined and ats.badges|length > 0 ? ats.badges : false
%}
<div class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      {% if nbRates > 0 %}
        <div class=\"read-more-stars module-star-ranking-grid-{{ starsRate }}\">
          (
          {{ nbRates }}
          )
        </div>
      {% endif %}
      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"{{ img }}\" alt=\"{{ displayName }}\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>{{ displayName }}<br>
            <small class=\"version small-text\">
              {% if serviceUrl is defined and serviceUrl|length > 0 %}
                {{ 'Service by %author%'|trans({'%author%' : author}, 'Admin.Modules.Feature') }}
              {% else %}
                {{ 'v%version% by %author%'|trans({ '%version%' : version, '%author%' : author }, 'Admin.Modules.Feature') }}
              {% endif %}
            </small>
          </h1>

        </div>
      </div>
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>

    <div class=\"modal-body row module-modal-body\">
      <div class=\"col-md-12 module-big-cover\">
        <img src=\"{% if cover.big is defined %}{{ cover.big }}{% else %}{{ notFoundImg }}{% endif %}\"/>
      </div>
      <div class=\"col-md-12 module-menu-readmore\">
        <nav class=\"navbar navbar-light\">
          {# tab list #}
          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link module-readmore-tab active\" data-toggle=\"tab\" href=\"#overview-{{ name }}\">{{ 'Overview'|trans({}, 'Admin.Modules.Feature') }}</a>
            </li>
            {% if additionalDescription %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-{{ name }}\">{{ 'Additional information'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if customerBenefits %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-{{ name }}\">{{ 'Benefits'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if features %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-{{ name }}\">{{ 'Features'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if demoVideo %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-{{ name }}\">{{ 'Demo video'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if changeLog %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-{{ name }}\">{{ 'Changelog'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {# end tab list #}
          </ul>
        </nav>
        <div class=\"tab-content\">
          {# tab content list #}
          <div id=\"overview-{{ name }}\" class=\"tab-pane fade in active\">
            <p class=\"module-readmore-tab-content\">
              {% if fullDescription %}
                {{ fullDescription|raw }}
              {% else %}
                {{ 'No description found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"additional-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if additionalDescription %}
                {{ additionalDescription|raw }}
              {% else %}
                {{ 'No additional description provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"features-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if features %}
                {{ features|raw }}
              {% else %}
                {{ 'No feature list provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"customer_benefits-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if customerBenefits %}
                {{ customerBenefits|raw }}
              {% else %}
                {{ 'No customer benefits notes found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"demo_video-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if demoVideo %}
                {{ youtube_link(demoVideo)|raw }}
              {% else %}
                {{ 'No demonstration video found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"changelog-{{ name }}\" class=\"tab-pane fade\">
            {% if changeLog %}
              <ul class=\"module-readmore-tab-content\">
                {% for version, lines in changeLog|arrayCast|reverse %}
                  <li>
                    <b>{{version}}:</b>
                    {% for line in lines %}
                      {{line}}<br/>
                    {% endfor %}
                  </li>
                {% endfor %}
              </ul>
            {% else %}
              {{ 'No changelog provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
            {% endif %}
          </div>
          {# end tab content list #}
        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      <div class=\"module-stars-price\">
        <div class=\"module-price text-sm-right\">
          {% if module.attributes.url_active == 'buy' and module.attributes.price.raw != '0.00' %}
            {{ module.attributes.price.displayPrice }}
          {% elseif module.attributes.url_active != 'buy' %}
            {{ 'Free'|trans({}, 'Admin.Modules.Feature') }}
          {% endif %}
        </div>
      </div>
      <div class=\"module-badges-action\">
        <div class=\"float-left module-badges-display\">
          {% for badge in badges %}
            <img src=\"{{badge.img}}\" alt=\"{{badge.label}}\"/>
            {{badge.label}}
          {% endfor %}
        </div>
        <div class=\"float-right module-action\">
          {% include '@PrestaShop/Admin/Module/Includes/action_menu.html.twig' with { 'module': module, 'level' : level } %}
        </div>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", "/var/www/clients/client13/web15/web/presta/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_read_more_content.html.twig");
    }
}
