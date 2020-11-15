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

/* themes/custom/geishasushi/template/page--front.html.twig */
class __TwigTemplate_b113754faaf00b60af4f506ad398e27317937817fcf5f822f1e9e19c95eda88e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 51];
        $functions = ["active_theme_path" => 51];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['active_theme_path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 48
        echo "<div class=\"layout-container\">
  <div class=\"banner\">
    <div class=\"front-img\">
      <img class=\"img-line\" src=\"";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/Line.png\">
    </div>
    <div class=\"nav-home\">
      <div class=\"menu\">HOME</div>
      <div class=\"menu\">MENU</div>
      <img class=\"img-logo\" src=\"";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/Logo.png\">
      <div class=\"menu\">ONLINEBESTELLUNG</div>
      <div class=\"menu\">KONTAKT</div>
    </div>
";
        // line 63
        echo "    <div class=\"txt-online-bestellung\">
      <img class=\"img-button-online-bestellung\" src=\"";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/Button_Online_Bestellung.png\">
    </div>
    <button class=\"tb_text_wrap\">
      <span class=\"glf-button-default\"
            data-glf-cuid=\"\" data-glf-ruid=\"9dbe72d4-54ae-46a7-890c-2ff6126ab915\" id=\"glfButton0\">
        <img src=\"";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/Button_Online.png\">
      </span>
      <script src=\"https://www.fbgcdn.com/embedder/js/ewm2.js\" defer=\"\" async=\"\"></script>
    </button>
    <img class=\"img-background-banner\" src=\"";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/Food_Images.png\">
  </div>
  <div class=\"about-us\">
    <img class=\"img-about-us\" src=\"";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/about-us.png\">
  </div>
  <div class=\"menu-category\">
    <img class=\"img-about-us\" src=\"";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/Menu-Category.png\">
  </div>
  <div class=\"special\">
    <button class=\"tb_text_wrap\">
      <span class=\"glf-button-default\"
            data-glf-cuid=\"\" data-glf-ruid=\"9dbe72d4-54ae-46a7-890c-2ff6126ab915\" id=\"glfButton0\">
        <img class=\"img-button-online-bestellung-red\" src=\"";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/Button_Online_red.png\">
      </span>
      <script src=\"https://www.fbgcdn.com/embedder/js/ewm2.js\" defer=\"\" async=\"\"></script>
    </button>
    <img class=\"img-special\" src=\"";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/Special.png\">
  </div>
  <div class=\"lokal\">
    <img class=\"img-local\" src=\"";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/Local.png\">
  </div>
  <div class=\"footer\">
    <button class=\"tb_text_wrap\">
      <span class=\"glf-button-default\"
            data-glf-cuid=\"\" data-glf-ruid=\"9dbe72d4-54ae-46a7-890c-2ff6126ab915\" id=\"glfButton0\">
        <img class=\"img-button-online\" src=\"";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/button.png\">
      </span>
      <script src=\"https://www.fbgcdn.com/embedder/js/ewm2.js\" defer=\"\" async=\"\"></script>
    </button>
    <ul class=\"nav-home\">
      <li class=\"menu-footer\">HOME</li>
      <li class=\"menu-footer\">MENU</li>
      <li class=\"menu-footer\">ONLINEBESTELLUNG</li>
      <li class=\"menu-footer\">KONTAKT</li>
    </ul>
    <img class=\"img-background\" src=\"";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/Footer.png\">
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/geishasushi/template/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 108,  136 => 98,  127 => 92,  121 => 89,  114 => 85,  105 => 79,  99 => 76,  93 => 73,  86 => 69,  78 => 64,  75 => 63,  68 => 56,  60 => 51,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/geishasushi/template/page--front.html.twig", "C:\\xampp\\htdocs\\geishasushi\\web\\themes\\custom\\geishasushi\\template\\page--front.html.twig");
    }
}
